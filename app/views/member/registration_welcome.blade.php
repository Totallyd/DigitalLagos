@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
   <div class="container-fluid">
    <div class="container content">
      <div class="row-fluid">
        <div class="span12">
          <h1>Member Home</h1>
        </div>
      </div>
     
      <div class="row-fluid spader_2">
        <div class="span2 profilearea">
          <div>Alex Radrigo</div>
          <img src="assets/images/avatar.png" alt="avatar" />
          
          <a href="profile.html" class="link_btn btn btn-lg btn-success">View Profile</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Create Gallery</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Upload/Change Photo</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Upload/Change Video</a>
          <a href="#" class="link_btn btn btn-lg btn-success">Help</a>
        </div>
        <div class="span7">          
          <div class="about user">
            <form action="" method="post" id="userdata">
            <h2>Welcome Back!</h2>
              <p>Update your activity feed with a short message.</p>
              <div class="row-fluid formrow">
                <div class="span9">
                  <textarea id="name" name="name"></textarea>
                </div>
              </div>
              <p>Right now everyone can see your updates, change your <span class="organe_font">privacy settings.</span></p>
              <div class="row-fluid formrow">
                <div class="span12 required_fields">
                  <button type="submit" class="btn btn-lg btn-success">Update</button>
                </div>
              </div>

              <p>Update your activity feed with a short message.</p>
              <div class="row-fluid formrow">
                <div class="span9">
                  <textarea id="name" name="name"></textarea>
                </div>
              </div>
              <p>Right now everyone can see your updates, change your <span class="organe_font">privacy settings.</span></p>
              <div class="row-fluid formrow">
                <div class="span12 required_fields">
                  <button type="submit" class="btn btn-lg btn-success">Update</button>
                </div>
              </div>
                
            </form>
          </div>
          
        </div>

        <div class="span3 profilearea">
          <div class="follow_us">
          <div class="advertise"> <span>Advertise Here</span> </div>
        </div>

      </div>
    </div>
  </div>
  
  @stop