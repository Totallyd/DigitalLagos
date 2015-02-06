@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <div class="container-fluid">
    <div class="container content">
      <div class="row-fluid">
        <div class="span12">
          <h1>My Profile</h1>
        </div>
      </div>
     
      <div class="row-fluid spader_2">
        <div class="span3 profilearea">
          <div>{{{ ($userProfile->first_name. ' '. $userProfile->last_name) }}}</div>
          <img src="{{{ URL::to ('public/img/avatar-member.png') }}}" alt="avatar" />
          <a href="#" class="orrange">Change Photo</a>
          <a href="{{{ URL::to ('edit-profile/'.Auth::user()->id) }}}" class="link_btn btn btn-lg btn-success" >Edit Profile</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Create a Gallery</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Manage Listing</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Visit Gallery</a>
        </div>
        <div class="span9">
          <div class="about">
            <h2>About Me </h2>
            <div id="about_content">
              <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia.</p>
            </div>
          </div>
          
          <div class="about user">
            <h2>User Information</h2>
            
              <h3>Personal Details</h3>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="name">First Name</label> : 
                  <label> <?php echo $userProfile->first_name;?></label> 
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="last_name">Last Name</label> : 
                  <label><?php echo $userProfile->last_name;?></label>
                </div>
                
              </div>

              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="email">Email Address </label> : 
                  <label><?php echo $user->email;?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="roles">Roles</label> :
                  <label> <?php echo $roles[$userProfile->role]; ?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="job_title">Job Title</label> : 
                  <label> <?php echo $userProfile->job_title;?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="mobile">  Mobile  </label> : 
                  <label> <?php echo $userProfile->mobile;?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="telephone">Telephone</label> :
                  <label><?php echo $userProfile->phone;?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="address">Address</label> : 
                  <label> <?php echo $userProfile->address;?></label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="city">City</label> :
                  <label><?php echo $userProfile->city;?> </label>
                </div>
                
              </div>
              
              <div class="row-fluid formrow">
                <div class="span9">
                  <label for="state">State</label> :
                  <label> <?php echo $userProfile->state;?></label>
                </div>
                
              </div>              
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  @stop