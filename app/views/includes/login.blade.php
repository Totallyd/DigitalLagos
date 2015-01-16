<!-- Login Blade Include -->

<div class="modal fade" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        {{ Form::open(array('url' => '/login', 'id'=>'lg-form', 'class'=>'form')) }}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title">Login into Website</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::text('email',Input::old('email'), array('class'=>'form-control', 'id'=>'dl-email', 'placeholder'=>'Enter your Email', 'required'=>"")) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::password('password', array('class'=>'form-control', 'id'=>'dl-pwd', 'placeholder'=>'Enter your Password', 'required'=>"")) }}
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label for="remember-me">
                                                <input type="checkbox" name="rememberme" id="remember-me">Remember me</label>
                                        </div>
                                        <button type="submit" class="btn dl-btn">Login</button>
                                    </div>
                                    <div class="col-md-6 mem-yet">
                                        <p>Not a Member yet?</p><a href="membership">Register Here</a>  <a href="forgotpassword">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="login-opt">
                            <h6>Login with :</h6>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{{ URL::to('liabilities/images/fb.png') }}}" alt="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{{ URL::to('liabilities/images/tw.png') }}}" alt="Twitter">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{{ URL::to('liabilities/images/li.png') }}}" alt="LinkedIn">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{{ URL::to('liabilities/images/gp.png') }}}" alt="Google Plus">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{{ URL::to('liabilities/images/yt.png') }}}" alt="Youtube">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>

<script type="text/javascript">
// $(document).ready(function() {

// $("#lg-form").validate({
//       rules: {
//         email: {
//           required: true,
//           email: true
//         },
//         password: {
//           required: true,
//           //minlength: 6
//         }
//       },
//       messages: {
//         email: {
//           required: "Please enter email address",
//           email: "Please enter a valid email address",
//         },
//         password: {
//           required: "Please provide a password",
//           //minlength: "Your password must be at least 6 characters long"
//         }
//       }
//     });
// });

// Login form Submit

$("#lg-form").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR)
        {
            if(data.status=='1'){
              window.location.href = "member-home";
            }
            if(data.status=='0'){
              $("#error-msg").css('display', 'block');
              e.preventDefault();
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
               alert(errorThrown);  
        }
    });
    e.preventDefault(); //STOP default action
    //e.unbind(); //unbind. to stop multiple form submit.
});

</script>