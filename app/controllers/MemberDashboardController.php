<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models;
//use Input, Notification, Redirect, Sentry, Str, Auth, Session, Hash, Password, Lang;
class MemberDashboardController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  | Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function index()
  { 
    $userProfile = UserProfile::whereUserId(Auth::user()->id)->first();
    return View::make('member-home', array('userProfile' => $userProfile));
  }

  protected function isPostRequest()
  {
      return Input::server("REQUEST_METHOD") == "POST";
  }

  public function viewProfile($id){
    $user = User::find($id);
    $userProfile = UserProfile::whereUserId($id)->first();
    
    $roles[2] = 'Digital Entertainment';
    $roles[3] = 'Broadcast Media';
    $roles[4] = 'Content production';
    $roles[5] = '3D Game Animation';
    $roles[6] = 'Motion graphics';
    $roles[7] = 'Music, Video production/report';
    $roles[8] = 'Publishing';
    $roles[9] = 'Communications';
    $roles[10] = 'Graphic Design';
    $roles[11] = 'Web Design';
    $roles[12] = 'Web Development';
    $roles[13] = 'Multimedia Producer Creative';
    $roles[14] = 'Advertising'; 
    $roles[15] = 'Marketing PR';
    $roles[16] = 'Sales/Marketing';
    $roles[17] = 'Production co-ordinator';
    $roles[18] = 'Artist management';
    $roles[19] = 'Artist';
    $roles[20] = 'Performing artist';
    $roles[21] = 'Photography';
    $roles[22] = 'Producer';
    $roles[23] = 'Club /artist promotion';
    $roles[24] = 'Film/video production';
    $roles[25] = 'Music production';
    $roles[26] = 'Student';
    $roles[27] = 'Other';

    // show the edit form and pass the nerd
    return View::make('view_profile')
      ->with(array('user'=> $user, 'userProfile' => $userProfile,'roles'=>$roles));
  }

  public function editProfile($id)
  { 
    if ($this->isPostRequest()) {

      // validate
      $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'role' => 'required',
        'email' => 'required|email'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
           $messages = $validator->messages();
            //  get email validation message 
            if ( $messages->first('email') !="")
            {
              return Redirect::to('edit-profile/'.$id)->with('error', $messages->first('email'));
            }else 
            {
              return Redirect::to('edit-profile/'.$id)->with('error', 'Please enter the required fields marked as *.');
            }
      } else {
        // store
        $user = User::find($id);
        $user->email = Input::get('email');
        // if Password entered
        if(Input::get('old_password') && Input::get('password') && Input::get('password_confirmation') !=""){
            // case  : olde password mismatch
           if(Hash::check(Input::get('old_password'), $user->password)){
                $user->password = Hash::make(Input::get('password'));
           }else 
           {
             return Redirect::to('edit-profile/'.$id)->with('error', 'Your old password is wrong, please enter correct password');
           }
          // case : new password mismatch
          if (Input::get('password') != Input::get('password_confirmation'))
            {
               return Redirect::to('edit-profile/'.$id)->with('error', 'Mismatch New Password Fields');
            }
        }else if (Input::get('old_password') =="" ) {
              // password not mandatory 
              return Redirect::to('edit-profile/'.$id)->with('error', 'Please enter your password');
        }else if (Input::get('old_password') !="")
        {
          if (Input::get('password') != Input::get('password_confirmation'))
           {
             return Redirect::to('edit-profile/'.$id)->with('error', 'Mismatch New Password Fields');
           }
        }
        

        $user->save();

        $userProfile = UserProfile::whereUserId($id)->first();
        $userProfile->first_name = Input::get('first_name');
        $userProfile->last_name = Input::get('last_name');
        $userProfile->role = Input::get('role');
        $userProfile->job_title = Input::get('job_title');
        $userProfile->mobile = Input::get('mobile');
        $userProfile->phone = Input::get('phone');
        $userProfile->address = Input::get('address');
        $userProfile->city = Input::get('city');
        $userProfile->state = Input::get('state');
        $userProfile->save();

        // redirect
        return Redirect::to('edit-profile/'.$id)->with('success', 'Your profile has been updated successfully!');
      }


    }

    $user = User::find($id);
    $userProfile = UserProfile::whereUserId($id)->first();

    // show the edit form and pass the nerd
    return View::make('edit_profile')
      ->with(array('user'=> $user, 'userProfile' => $userProfile));

  }




}