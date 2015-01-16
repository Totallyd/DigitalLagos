<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Digitall.tv
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        <!-- {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}
        {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }} -->
        {{ HTML::style(asset('css/bootstrap.css')) }}
        <!-- {{ HTML::style(asset('css/bootstrap.min.css')) }} -->
        {{ HTML::style(asset('css/jquery-ui-1.10.4.custom.min.css')) }}

        {{ HTML::style(asset('css/style.css')) }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-fixed-top bg-color">
            <div class="navbar-inner">
                <div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    
                    

                    <img src="{{{ URL::to('img/logo.png') }}}"/>

                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        </ul> 
                    </div>

                    @if(Auth::check())
                        <div class="float-right"><img height="50" src="{{{ URL::to('img/avatar.png') }}}"></div>
                        <div class="float-right">
                            <div class="float-left"><span style="color:#FFFFFF">You logged in as</span> <span style="color:#3DB0FC"> {{ucfirst(Auth::user()->username)}} </span></div><br>
                            <div class="float-right"><img height="20" src="{{{ URL::to('img/lock.png') }}}">
                                <a class="logout" href="{{{ URL::to('admin/logout') }}}">Logout</a>
                            </div>
                                                
                        </div>

                    @endif

                </div>
            </div>
        </div> 
<br/>
        <!-- Container -->
        <div class="container">
        @if(Auth::check())
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2 col_border_right">         

                        <div>
                            <div id="main-search">
                            <div id="search-arrow" style="float:left;margin-top:10px"><img src="{{{ URL::to('img/down-arrow.png') }}}"></div>
                            <div id="search-menu" style="position:absolute;border:1px black;height:270px; width:150px; background-color:black; display:none;padding:15px;margin-top:35px">
                                <span><img height="30" src="{{{ URL::to('img/all.png') }}}"> All</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/avatar.png') }}}"> Members</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/sub-admin.png') }}}"> Sub-Admin</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/listing.png') }}}"> Listing</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/blog.png') }}}"> Blog</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/gallery.png') }}}"> Gallery</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/content.png') }}}"> Content</span><br/>
                                <span><img height="30" src="{{{ URL::to('img/message.png') }}}"> Message</span><br/>
                            </div>
                            </div>
                            <div style="float:left; padding-right:2px;"><input type="text" name="search" value="" class="form-control searchbox" placeholder="Enter Keywords to Search"></div>
                            <div style="float:left; margin-top:5px"><img width="30" height="30" src="{{{ URL::to('img/search.png') }}}"></div>
                        </div>

                    </div>
                    <div class="col-sm-10 col_border_left">
                        <h3 class="h3_bold">@yield('pagetitle')</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2 col_border_line">
                        
                        <ul id="nav">
                            <li> <a href="{{{ URL::to('admin/managesubadmin') }}}">Manage Sub-Admin</a>
                                <ul>
                                    <li><a href="{{{ URL::to('admin/addsubadmin') }}}">Add Sub-Admin</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Members</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Member</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Member</a>
                                    <li><a href="{{{ URL::to('#') }}}">Change Password</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Listings</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">View Listing</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Listing</a>
                                    <li><a href="{{{ URL::to('#') }}}">Search Listing</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Listing</a>
                                    <li><a href="{{{ URL::to('#') }}}">Publish Listing</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage News</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add News</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit News</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete News</a>
                                    <li><a href="{{{ URL::to('#') }}}">Publish News</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Events</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Event</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Event</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Event</a>
                                    <li><a href="{{{ URL::to('#') }}}">Publish Event</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage FAQ</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add FAQ</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit FAQ</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete FAQ</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Email Templates</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Email Template</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Email Template</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Email Template</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Category</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Category</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Sub-Category</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Sub-Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Sub-Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Sub-Category</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Media Gallery</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Media</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Media</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Media</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Media</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Banner</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Banner</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Banner</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Banner</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Banner</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Setting</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Change Password</a>
                                    <li><a href="{{{ URL::to('#') }}}">Change Email</a>
                                    <li><a href="{{{ URL::to('#') }}}">Social Media</a>
                                    <li><a href="{{{ URL::to('#') }}}">Payment Setting</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Jobs</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Job</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Job</a>
                                    <li><a href="{{{ URL::to('#') }}}">Search/Browse Job</a>
                                    <li><a href="{{{ URL::to('#') }}}">Delete Job</a>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-10">
                        <!-- Content -->
                        @yield('content')

                    </div>
                </div>
            </div>
            @else
                    <!-- Content -->
                    @yield('content')
            @endif




        </div>

        <div class="footer">
            <span>&copy; 2013 digitallagos.tv. All Rights Reserved</span>    
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script(asset('js/jquery-1.10.2.js')) }}
        {{ HTML::script(asset('js/jquery-ui-1.10.4.custom.min.js')) }}
        {{ HTML::script(asset('js/bootstrap.min.js')) }}


        <script>
            $(document).ready(function() {
            $( "#accordion" ).accordion();
            });


             function initMenu() {
                 $('#nav ul').hide();
                 $('#nav li a').click(

                 function () {
                    
                     var checkElement = $(this).next();
                     if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                         $('#nav ul:visible').slideToggle('normal');
                          //$(this).addClass("line-strait");
                         //alert('1');
                     }
                     if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                        //alert('2');
                         removeActiveClassFromAll();
                         $(this).addClass("active");
                         //$(this).addClass("line-style");
                         $('#nav ul:visible').slideToggle('normal');
                         checkElement.slideToggle('normal');
                         return false;
                     }
                     
                     if($(this).siblings('ul').length==0 && $(this).parent().parent().attr('id')=='nav')
                     { //alert('3');
                         removeActiveClassFromAll();
                         $(this).addClass("active");
                         $('#nav ul:visible').slideToggle('normal');
                         
                         return false;
                     }
                 });
            }

 function removeActiveClassFromAll() {
     $('#nav li a').each(function (index) {
         $(this).removeClass("active");
     });
 }


 $(document).ready(function () {
    /*if($(this).siblings('ul').length==0 && $(this).parent().parent().attr('id')=='nav')
     {
         //$(this).addClass("remov-line-style");         
         return false;
     }else{
        $(this).addClass("line-strait");
     }*/
     initMenu();
    $("#main-search").mouseover(function(){
        $("#search-menu").css('display', 'block');
    });
    $("#main-search").mouseout(function(){
        $("#search-menu").css('display', 'none');
    });
 });

 $('#nav').click(function (e)

 {
     e.stopPropagation();


 })




 $(document).click(function () {
     $('#nav').children('li').each(function () {
         if ($(this).children('ul').css('display') == 'block') {
             $(this).children('ul').slideToggle('normal')
             $(this).children('a').removeClass('active')
         }
     })
 })

        </script>

    </body>
</html>
