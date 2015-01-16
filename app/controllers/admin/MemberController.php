<?php
namespace admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models;

use Input, Notification, Redirect, Sentry, Str, Auth, Session, Hash, Password, Lang;

class MemberController extends \BaseController
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    
    public function manageSubAdmin()
    {
        
        
        $users = \DB::table('user')->where('type', 'SubAdmin')->paginate(10);
        
        $allUsers = array();
        
        foreach ($users as $key => $val) {
            $profile    = \DB::table('user_profile')->where('user_id', $val->id)->first();
            $allUsers[] = (object) array_merge((array) $val, (array) $profile);
            
        }
        return View::make('admin.member.manage_subadmin', array(
            'allUsers' => $allUsers,
            'users' => $users
        ));
    }
    
    public function addSubAdmin()
    {
        
        if ($this->isPostRequest()) {
            $validator = $this->getSubAdminValidator();
            
            if ($validator->passes()) {
                $user            = new \User;
				$user->username     = Input::get('username');
                $user->email     = Input::get('email');
                $user->password  = Hash::make(Input::get('password'));
                $user->type      = 'SubAdmin';
                $user->status    = '0';
                $user->activated = '1';
                $user->save();
                
                // create new product and save it
                $userProfile             = new \UserProfile;
                $userProfile->first_name = Input::get('first_name');
                $userProfile->last_name  = Input::get('last_name');
                $userProfile->role       = 10;
                $userProfile->mobile     = Input::get('mobile');
                $userProfile->phone      = Input::get('phone');
                $userProfile->address    = Input::get('address');
                $userProfile->city       = Input::get('city');
                $userProfile->state      = Input::get('state');
                $userProfile->user()->associate($user);
                $userProfile->save();
                
                if ($user->id > 0) {
                    $userRole = new \UserRoll;
                        $rolls = Input::get('rolls');
                    if (is_array($rolls)) {
                    	$this->insertUserRole($user->id);
					}
                    return Redirect::to('admin/managesubadmin')->withInput()->with('success', 'SubAdmin Created Successfully.');
                    
                }
                
                
            } else {
                return Redirect::back()->withInput()->withErrors($validator)->withInput(Input::except('password'));
            }
        }
        
        
        
        
        $countries = array( 'Malaysia'      );
        $states    = array(  'WP-KL E'       );
        $cities    = array(           'Kuala Lumpur E'        );
        
        $rolls = \Roll::all();
        
        //echo "<pre>";print_r($rolls);echo "</pre>";exit;
        
        return View::make('admin.member.add_subadmin', array(
            'rolls' => $rolls,
            'countries' => $countries,
            'states' => $states,
            'cities' => $cities
        ));
    }
    
    public function editSubAdmin($id)
    {
       
        if ($this->isPostRequest()) {
            $validator = $this->getSubAdminValidator();
            
            if ($validator->passes()) {
                $user = \User::find($id);
                $user->username     = Input::get('username');
                $user->email    = Input::get('email');
				if($user->password!=Input::get('password')){
					
                	$user->password = Hash::make(Input::get('password'));
				}
                $user->save();
                
                $userProfile             = \UserProfile::whereUserId($id)->first();
                $userProfile->first_name = Input::get('first_name');
                $userProfile->last_name  = Input::get('last_name');
                $userProfile->mobile     = Input::get('mobile');
                $userProfile->phone      = Input::get('phone');
                $userProfile->address    = Input::get('address');
                $userProfile->city       = Input::get('city');
                $userProfile->state      = Input::get('state');
                $userProfile->save();
                
                if ($id > 0) {
                    $userRole = new \UserRoll;
                    
                    $rolls = Input::get('rolls');
                    if (is_array($rolls)) {
                        \DB::table('user_roles')->where('user_id', '=', $user->id)->delete();
                       $this->insertUserRole($user->id);
                    }
                    return Redirect::to('admin/edit-subadmin/' . $id)->withInput()->with('success', 'SubAdmin Updated Successfully.');
                    
                }
                
                
            } else {
                return Redirect::back()->withInput()->withErrors($validator)->withInput();
            }
            
            
            
        }
        
        $user        = \DB::table('user')->where('id', $id)->first();
        $userProfile = \DB::table('user_profile')->where('user_id', $user->id)->first();
        $userRoles   = \DB::table('user_roles')->where('user_id', $user->id)->get();
        
        $roleIds = array();
        
        foreach ($userRoles as $roleId) {
            array_push($roleIds, $roleId->role_id);
        }
        
        $countries = array(        'Malaysia'        );
        $states    = array(   'WP-KL E'        );
        $cities    = array(       'Kuala Lumpur E'       );
        
        $rolls = \Roll::all();
        
        //echo "<pre>";print_r($rolls);echo "</pre>";exit;
        
        return View::make('admin.member.edit_subadmin', array(
            'user' => $user,
            'userProfile' => $userProfile,
            'roleIds' => $roleIds,
            'rolls' => $rolls,
            'countries' => $countries,
            'states' => $states,
            'cities' => $cities
        ));
    }
	
	 public function deleteSubAdmin($subadminId)
    {
		$id= $subadminId;
		\DB::table('user')->where('id', '=', $id)->delete();
		\DB::table('user_profile')->where('user_id', '=', $id)->delete();
		\DB::table('user_roles')->where('user_id', '=', $id)->delete();
		
		return Redirect::to('admin/managesubadmin')->withInput()->with('success', 'SubAdmin Deleted Successfully.');
	}
    
    protected function getSubAdminValidator()
    {
        return Validator::make(Input::all(), array(
			"username" => "required",
            "first_name" => "required",
            "email" => "required|email",
            "password" => "required",
            "address" => "required",
            "country" => "required",
            "city" => "required",
            "state" => "required"
        ));
    }
    
    
    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }
	
	private function insertUserRole($userId){
		$rolls = Input::get('rolls');
		 $rollArr = array();
                        
                        foreach ($rolls as $role) {
                            
                            $rowArr = array(
                                'role_id' => $role,
                                'user_id' => $userId
                            );
                            
                            array_push($rollArr, $rowArr);
                            
                        }
                        
                        \DB::table('user_roles')->insert($rollArr);
	}
    
}
