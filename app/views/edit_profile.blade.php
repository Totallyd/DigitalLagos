@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <div class="container-fluid">
    <div class="container content">
      <div class="row-fluid">
        <div class="span12">
          <h1>Edit Profile</h1>
        </div>
      </div>
     
      <div class="row-fluid spader_2">
        <div class="span3 profilearea">
          <div>{{{ ($userProfile->first_name. ' '. $userProfile->last_name) }}}</div>
          <img src="{{{ URL::to ('public/img/avatar-member.png') }}}" alt="avatar" />
          <a href="#" class="orrange">Change Photo</a>
          <a href="{{{ URL::to ('view-profile/'.Auth::user()->id) }}}" class="link_btn btn btn-lg btn-success">View Profile</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Create a Gallery</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Manage Listing</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Visit Gallery</a>
        </div>
        <div class="span9">
          
          <div class="about user">
            <form action="" method="post" id="userdata">
              <h3>General</h3>
              @if (Session::has('error'))
                <div class="flash bg-danger alert">
                  <p>{{ Session::get('error') }}</p>
                </div>
              @endif
              @if (Session::has('success'))
                <div class="flash alert alert-success">
                  <p>{{ Session::get('success') }}</p>
                </div>
              @endif
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="name">First Name*</label>
                </div>
                <div class="span9">
                  <input type="text" id="first_name" name="first_name" value="<?php echo $userProfile->first_name;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="last_name">Last Name*</label>
                </div>
                <div class="span9">
                  <input type="text" id="last_name" name="last_name" value="<?php echo $userProfile->last_name;?>" />
                </div>
              </div>

              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="email">Email Address*</label>
                </div>
                <div class="span9">
                  <input type="text" id="email" name="email" value="<?php echo $user->email;?>" />
                  <div id="email-check"></div>
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="roles">Select Roles*</label>
                </div>
                <div class="span9">
                  
                  <select name="role" id="role">
                    <option value="">Please Chose Role*</option>
                    <option value="2" @if ($userProfile->role=='2') selected @endif >Digital Entertainment</option>
                    <option value="3" @if ($userProfile->role=='3') selected @endif >Broadcast Media</option>
                    <option value="4" @if ($userProfile->role=='4') selected @endif >Content production</option>
                    <option value="5" @if ($userProfile->role=='5') selected @endif >3D Game Animation</option>
                    <option value="6" @if ($userProfile->role=='6') selected @endif >Motion graphics</option>
                    <option value="7" @if ($userProfile->role=='7') selected @endif >Music, Video production/report</option>
                    <option value="8" @if ($userProfile->role=='8') selected @endif >Publishing</option>
                    <option value="9" @if ($userProfile->role=='9') selected @endif >Communications</option>
                    <option value="10" @if ($userProfile->role=='10') selected @endif >Graphic Design</option>
                    <option value="11" @if ($userProfile->role=='11') selected @endif >Web Design</option>
                    <option value="12" @if ($userProfile->role=='12') selected @endif >Web Development</option>
                    <option value="13" @if ($userProfile->role=='13') selected @endif >Multimedia Producer Creative</option>
                    <option value="14" @if ($userProfile->role=='14') selected @endif >Advertising</option>
                    <option value="15" @if ($userProfile->role=='15') selected @endif >Marketing PR</option>
                    <option value="16" @if ($userProfile->role=='16') selected @endif >Sales/Marketing</option>
                    <option value="17" @if ($userProfile->role=='17') selected @endif >Production co-ordinator</option>
                    <option value="18" @if ($userProfile->role=='18') selected @endif >Artist management</option>
                    <option value="19" @if ($userProfile->role=='19') selected @endif >Artist</option>
                    <option value="20" @if ($userProfile->role=='20') selected @endif >Performing artist</option>
                    <option value="21" @if ($userProfile->role=='21') selected @endif>Photography</option>
                    <option value="22" @if ($userProfile->role=='22') selected @endif>Producer</option>
                    <option value="23" @if ($userProfile->role=='23') selected @endif>Club /artist promotion</option>
                    <option value="24" @if ($userProfile->role=='24') selected @endif>Film/video production</option>
                    <option value="25" @if ($userProfile->role=='25') selected @endif>Music production</option>
                    <option value="26" @if ($userProfile->role=='26') selected @endif>Student</option>
                    <option value="27" @if ($userProfile->role=='27') selected @endif>Other</option>
                  </select>
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="job_title">Job Title</label>
                </div>
                <div class="span9">
                  <input type="text" id="job_title" name="job_title" value="<?php echo $userProfile->job_title;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="mobile">Mobile</label>
                </div>
                <div class="span9">
                  <input type="text" id="mobile" name="mobile" value="<?php echo $userProfile->mobile;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="telephone">Telephone</label>
                </div>
                <div class="span9">
                  <input type="text" id="phone" name="phone" value="<?php echo $userProfile->phone;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="address">Address</label>
                </div>
                <div class="span9">
                  <input type="text" id="address" name="address" value="<?php echo $userProfile->address;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="city">City</label>
                </div>
                <div class="span9">
                  <input type="text" id="city" name="city" value="<?php echo $userProfile->city;?>" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="state">State</label>
                </div>
                <div class="span9">
                  <input type="text" id="state" name="state" value="<?php echo $userProfile->state;?>" />
                </div>
              </div>              
              
                            
              <h3>Change Password</h3> 
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="password"> Old Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="old_password" name="old_password" value="" />
                </div>
              </div>

              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="password"> New Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="password" name="password" value="" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="repassword">Confirm Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="password_confirmation" name="password_confirmation" value="" />
                </div>
              </div>  
              
              <div class="row-fluid formrow">
                <div class="span3 required_fields">
                  * Required Fields
                </div>
              </div>  
              
              <div class="row-fluid formrow">
                <div class="span12 required_fields">
                  <button type="submit" class="btn btn-lg btn-success">Save</button> 
                  <button type="button" class="btn btn-lg btn-success">Cancel</button>
                </div>
              </div>
                
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function() {

    $("#userdata").validate({
      rules: {
        first_name: "required",
        last_name: "required",
        role: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        },
        password_confirmation: {
          required: true,
          minlength: 6,
          equalTo: "#password"
        },
        old_password: {
          required: true,
          minlength: 6
        }
      },
      messages: {
        first_name: "Please enter first name",
        last_name: "Please enter last name",
        role: "Please select role",
        email: {
          required: 'Please enter email address',
          email: 'Please enter a valid email address',
        },
        password: {
          required: "Please enter a password",
          minlength: "Your password must be at least 6 characters long"
        },
        password_confirmation: {
          required: "Please re-enter password",
          minlength: "Password must be at least 6 characters long",
          equalTo: "Password doesn't match"
        },
        old_password: {
          required: "Please enter old password",
          minlength: "Old password must be at least 6 characters long"
        }        
      },
      tooltip_options: {
        email: {trigger:'focus', placement:'right'},
        password: {trigger:'focus', placement:'right'},
        first_name: {placement:'right'},
        last_name: {placement:'right'},
        role: {placement:'right'},
        password_confirmation: {placement:'right'},
        old_password: {placement:'right'}
      },
    });

    // Email Check

    $("#email").focusout(function(e)
    {
        var postData = $("#email").val();
        if(postData !=""){
          var URL = "{{{ URL::to('email-check') }}}";
          $.ajax(
          {
              url : URL,
              type: "POST",
              data : { email: postData },
              success:function(data, textStatus, jqXHR)
              {
                  if(data=='1'){
                    $( "#email-check" ).css( "color", "red" );
                    $( "#email-check" ).html( "Email already exists" );
                    e.preventDefault();
                  }
                  if(data=='0'){
                    $( "#email-check" ).css( "color", "green" );
                    $( "#email-check" ).html( "Email available to change" );
                  }
              },
              error: function(jqXHR, textStatus, errorThrown)
              {
                     alert(errorThrown);  
              }
          });
          e.preventDefault(); //STOP default action
          //e.unbind(); //unbind. to stop multiple form submit.
      }else{
        $( "#email-check" ).css( "display", "none" );
      }
    });
  });
  </script>
  
  @stop