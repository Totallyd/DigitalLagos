<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>@section('title')
            Get Started : Digital Lagos
            @show
    </title>
    <meta name="description" content="">
    <link rel="icon" type="image/gif" href="liabilities/images/favicon.gif">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    {{ HTML::style(asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700')) }}
    {{ HTML::style(asset('liabilities/css/styles.css')) }}
    {{ HTML::script(asset('liabilities/scripts/vendors/modernizr-2.7.2.min.js')) }}
    {{ HTML::script(asset('liabilities/scripts/vendors/jquery-2.1.0.min.js')) }}
</head>

<body>
    @include('includes.login')
    <header id="header" role="banner" class="header-box header-mem">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                @if(Auth::check())
                    <!-- Login In User -->
                    <div role="navigation" class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{{ URL::to('/') }}}" class="navbar-brand">
                                    <img src="{{{ URL::to('liabilities/images/logo.png') }}}" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 header-login"><span class="salutation">Hi {{ucfirst($userProfile->first_name. ' '. $userProfile->last_name)}},</span> 
                                <a href="{{{ URL::to('/logout') }}}"<button class="login-popup">Logout</button></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <nav id="header-in" class="navbar navbar-default" role="navigation">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{{ URL::to('member-home') }}}" title="Dashboard">Dashboard</a>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="My Listing">My Listing <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" title="My Listing (a)">My Listing (a)</a>
                                                    </li>
                                                    <li><a href="#" title="My Listing (b)">My Listing (b)</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="My Account">My Account <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" title="My Account (a)">My Account (a)</a>
                                                    </li>
                                                    <li><a href="#" title="My Account (b)">My Account (b)</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#" title="Get Help">Get Help</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    
                @else
                    <!-- Guest User -->
                    <div role="navigation" class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="{{{ URL::to('/') }}}" class="navbar-brand">
                                    <img src="{{{ URL::to('liabilities/images/logo.png') }}}" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 header-login">
                                <button class="login-popup" data-target="#login-popup" data-toggle="modal">Login</button>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <nav id="header-in" class="navbar navbar-default" role="navigation">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="row">
                                    <div class="col-md-3 col-md-push-9">
                                        <form class="navbar-form" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control search-box" placeholder="Search" name="q">
                                                <div class="input-group-btn">
                                                    <button class="btn search-btn" type="submit"><i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-9 col-md-pull-3">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{{ URL::to('/') }}}">Home</a>
                                            </li>
                                            <li><a href="{{{ URL::to('membership') }}}">Membership</a>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Agencies &amp; Suppliers <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{{ URL::to('agencies-support') }}}">Agencies Listing</a>
                                                    </li>
                                                    <li><a href="{{{ URL::to('agencies-support') }}}">Agencies Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Add Events</a>
                                                    </li>
                                                    <li><a href="#">Calendar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{{ URL::to('get-in-touch') }}}">Get in Touch</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>

                @endif

                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    @yield('content')

    <footer id="footer" role="contentinfo" class="footer-box footer-mem">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <header>
                        <h2>Company</h2>
                    </header>
                    <article>
                        <ul>
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">News</a>
                            </li>
                            <li><a href="#">Career</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Sitemap</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <header>
                        <h2>Product</h2>
                    </header>
                    <article>
                        <ul>
                            <li><a href="#">Media Production</a>
                            </li>
                            <li><a href="#">Showcase</a>
                            </li>
                            <li><a href="#">Agencies Listing</a>
                            </li>
                            <li><a href="#">Agency Details</a>
                            </li>
                            <li><a href="#">Get Listed</a>
                            </li>
                            <li><a href="#">Upload your work</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <header>
                        <h2>Support</h2>
                    </header>
                    <article>
                        <ul>
                            <li><a href="#">Help Center</a>
                            </li>
                            <li><a href="#">FAQs</a>
                            </li>
                            <li><a href="#">Cookie Policy</a>
                            </li>
                            <li><a href="#">Accessibiliy</a>
                            </li>
                            <li><a href="{{{ URL::to('terms-conditions') }}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6">
                    <header>
                        <h2>Newsletter</h2>
                    </header>
                    <form method="" action="" class="subscribe-form form" id="dl-subscribe">
                        <label for="newsletter">Signup For Our Weekly Newsletter</label>
                        <input type="text" id="newsletter" required>
                        <button type="submit" class="btn dl-btn">Signup</button>
                    </form>
                </div>
            </div>
            <div class="footer-mem-btm">
                <div class="row">
                    <div class="col-md-6 copyright">Copyright &copy; 2014, digitallagos.tv. All Rights Reserved</div>
                    <div class="col-md-6 social-icons">
                        <ul>
                            <li>
                                <a href="#">
                                    <img alt="Facebook" src="liabilities/images/fb.png">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Twitter" src="liabilities/images/tw.png">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="LinkedIn" src="liabilities/images/li.png">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Google Plus" src="liabilities/images/gp.png">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img alt="Youtube" src="liabilities/images/yt.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="liabilities/scripts/vendors/angular.min.js"></script>
    <script src="liabilities/scripts/vendors/bootstrap.min.js"></script>
    <script src="liabilities/scripts/vendors/accordion.js"></script>
    <script src="liabilities/scripts/vendors/retina.min.js"></script>
    <script src="liabilities/scripts/vendors/lightbox.min.js"></script>
    <script src="liabilities/scripts/vendors/timepicker.min.js"></script>
    <script src="liabilities/scripts/vendors/validate.js"></script>
    <script src="liabilities/scripts/scripts.min.js"></script>
</body>

</html>
