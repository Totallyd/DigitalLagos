@extends('layouts.front-master')

@section('title') Digital Lagos.Tv:: Registration @stop

@section('content')

<section id="content" role="main" class="content-wrap">
        <div class="container">
            <div class="row">
                <article class="col-md-12 intro">
                    <div class="box">
                        <header>
                            <h1>Register</h1>
                        </header>
                    </div>
                </article>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dl-form reg-form">
                        <form id="dl-form" class="form" method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <header>
                                        <h2>Personal Details</h2>
                                    </header>
                                    <article>
                                        <div class="form-group">
                                            <label for="f-name">First Name <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="f-name" name="first_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="l-name">Last Name <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="l-name" name="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sl-roles">Select Roles <span class="required">*</span>
                                            </label>
                                            <select class="form-control" id="sl-roles" name="role" required>
                                                <option value="">Please Chose Role*</option>
                                                <option value="2">Digital Entertainment</option>
                                                <option value="3">Broadcast Media</option>
                                                <option value="4">Content production</option>
                                                <option value="5">3D Game Animation</option>
                                                <option value="6">Motion graphics</option>
                                                <option value="7">Music, Video production/report</option>
                                                <option value="8">Publishing</option>
                                                <option value="9">Communications</option>
                                                <option value="10">Graphic Design</option>
                                                <option value="11">Web Design</option>
                                                <option value="12">Web Development</option>
                                                <option value="13">Multimedia Producer Creative</option>
                                                <option value="14">Advertising</option>
                                                <option value="15">Marketing PR</option>
                                                <option value="16">Sales/Marketing</option>
                                                <option value="17">Production co-ordinator</option>
                                                <option value="18">Artist management</option>
                                                <option value="19">Artist</option>
                                                <option value="20">Performing artist</option>
                                                <option value="21">Photography</option>
                                                <option value="22">Producer</option>
                                                <option value="23">Club /artist promotion</option>
                                                <option value="24">Film/video production</option>
                                                <option value="25">Music production</option>
                                                <option value="26">Student</option>
                                                <option value="27">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="job-t">Job Title</label>
                                            <input type="text" class="form-control" id="job-t" name="job_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="mob">Mobile</label>
                                            <input type="tel" class="form-control" id="mob" name="mobile">
                                        </div>
                                        <div class="form-group">
                                            <label for="tel">Telephone</label>
                                            <input type="tel" class="form-control" id="tel" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state">
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <header>
                                        <h2>Account Details</h2>
                                    </header>
                                    <article class="column">
                                        <div class="form-group">
                                            <label for="email">Email Address <span class="required">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <div id="email-check"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password <span class="required">*</span>
                                            </label>
                                            <input type="password" class="form-control" id="pwd" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="c-pwd">Confirm Password <span class="required">*</span>
                                            </label>
                                            <input type="password" class="form-control" id="c-pwd" name="password_confirmation" required>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="help-block"><span class="required">*</span> Required fields.</p>
                                    <div class="checkbox">
                                        <label for="terms">
                                            <input type="checkbox" id="terms" name="agreement">By clicking checkbox, you have to read and accept <a href="{{{ URL::to('terms-conditions') }}}">user agreement and privacy policy</a> and consent to the <a href="#">Terms and User Agreement Policy</a>.</label>
                                    </div>
                                    <div class="form-btns">
                                        <button type="submit" class="dl-btn">Register</button>
                                        <button type="submit" class="dl-btn-s">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




  

  <script type="text/javascript">
$(document).ready(function() {


// $('#userdata').bootstrapValidator({
//         feedbackIcons: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             email: {
//                 validators: {
//                     notEmpty: {
//                         message: '<div style="display: block;" class="bg-danger alert" id="error-msg">Please enter email address</div>'
//                     },
//                     emailAddress: {
//                         message: '<div style="display: block;" class="bg-danger alert" id="error-msg">Please enter a valid email address</div>'
//                     }
//                 }
//             },
//             password: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The password is required'
//                     }
//                 }
//             }
//         }
//     });

    // $("#userdata").validate({
    //   rules: {
    //     first_name: "required",
    //     last_name: "required",
    //     role: "required",
    //     email: {
    //       required: true,
    //       email: true
    //     },
    //     password: {
    //       required: true,
    //       minlength: 6
    //     },
    //     password_confirmation: {
    //       required: true,
    //       minlength: 6,
    //       equalTo: "#password"
    //     },
    //     agreement: {
    //       required: true
    //     }
    //   },
    //   messages: {
    //     first_name: "Please enter first name",
    //     last_name: "Please enter last name",
    //     role: "Please select role",
    //     email: {
    //       required: 'Please enter email address',
    //       email: 'Please enter a valid email address',
    //     },
    //     password: {
    //       required: "Please enter a password",
    //       minlength: "Your password must be at least 6 characters long"
    //     },
    //     password_confirmation: {
    //       required: "Please re-enter password",
    //       minlength: "Password must be at least 6 characters long",
    //       equalTo: "Password doesn't match"
    //     },
    //     agreement: 'Please read terms and conditions before proceeding',        
    //   },
    //   tooltip_options: {
    //     email: {trigger:'focus', placement:'right'},
    //     password: {trigger:'focus', placement:'right'},
    //     first_name: {placement:'right'},
    //     last_name: {placement:'right'},
    //     role: {placement:'right'},
    //     password_confirmation: {placement:'right'},
    //     agreement: {placement:'right',html:true}
    //   },
    // });

    // Login form Submit

    $("#email").focusout(function(e)
    {
        var postData = $("#email").val();
        if(postData !=""){
          var URL = "email-check";
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
                    $( "#email-check" ).html( "Email available for registration" );
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