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
    <title>Home : Digital Lagos</title>
    <meta name="description" content="">
    <link rel="icon" type="image/gif" href="liabilities/images/favicon.gif">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="liabilities/css/styles.css">
    <script src="liabilities/scripts/vendors/modernizr-2.7.2.min.js"></script>
    <script src="liabilities/scripts/vendors/jquery-2.1.0.min.js"></script>
    </script>
</head>

<body class="landing">
    @include('includes.login')
    <div class="modal fade" id="upload-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Upload your work</h4>
                </div>
                <div class="modal-body">
                    <div class="upload-box">
                        <div class="upload-info">
                            <p>Drag and drop image here</p>
                            <button type="button" class="btn dl-btn">or select image file(s)</button>
                        </div>
                    </div>
                    <div class="upload-box--sub">
                        <h2>Thumb</h2>
                        <p><span class="upload-lists">Thumb</span>  <span class="upload-lists">Thumb</span> 
                            <button type="button" class="btn dl-btn">Choose file</button>
                        </p>
                    </div>
                    <div class="upload-box--sub">
                        <h2>Project Details</h2>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="project-title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="project-title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project-tags" class="col-sm-2 control-label">Tags</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="project-tags" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project-content" class="col-sm-2 control-label">Contents</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="project-content" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project-content" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date form_date col-md-5" data-date="31-10-2014" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" size="16" type="text" value=""> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dl-btn-s">Preview</button>
                    <button type="button" class="btn dl-btn">Publish</button>
                </div>
            </div>
        </div>
    </div>
    <header id="header" role="banner" class="header-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div role="navigation" class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="./index.html" class="navbar-brand">
                                    <img src="liabilities/images/logo.png" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 header-login">
                                <button class="login-popup" data-target="#login-popup" data-toggle="modal">Login</button>
                            </div>
                        </div>
                        <nav id="header-in" class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>  <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand hidden-lg hidden-md hidden-sm">
                                    <img src="liabilities/images/logo.png" alt="logo">
                                </a>
                            </div>
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
                                            <li><a href="./index.html">Home</a>
                                            </li>
                                            <li><a href="./member.html">Membership</a>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Community <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Events &amp; Training <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agencies &amp; Support</a>
                                            </li>
                                            <li><a href="#">Get in Touch</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1 class="slug">Providing opportunity to showcase the profiles of our member organizations and individuals to key local, regional and national audiences</h1>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="//www.youtube.com/embed/yWphRL3HLEk" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{{ URL::to('membership') }}}"><button data-toggle="modal" data-target="#upload-popup" class="cta-start">Get Started Here!</button></a>
                </div>
            </div>
        </div>
    </header>
    <section id="content" role="main">
        <div class="container">
            <div class="row tiles">
                <div class="col-md-12">
                    <h2 class="sec-title">Featured <span>Work</span></h2>
                    <h3>Your work, projects and team in relevant context</h3>
                    <div class="row">
                        <div class="col-md-6 tiles-ms">
                            <div class="row mar-b-30">
                                <a href="liabilities/images/portfolio.jpg" data-title="Image title 1" data-toggle="lightbox" data-gallery="mixedgallery" class="col-xs-5 col-xs-6">
                                    <img src="liabilities/images/tiles1.jpg" class="img-responsive" alt="">
                                </a>
                                <a href="liabilities/images/portfolio.jpg" data-title="Image title 2" data-toggle="lightbox" data-gallery="mixedgallery" class="col-md-6 col-xs-6">
                                    <img src="liabilities/images/tiles2.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="liabilities/images/portfolio.jpg" data-title="Video 1" data-toggle="lightbox" data-gallery="mixedgallery">
                                        <img src="liabilities/images/tiles5.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mar-b-30">
                                <div class="col-md-12">
                                    <a href="liabilities/images/portfolio.jpg" data-title="Video 2" data-toggle="lightbox" data-gallery="mixedgallery">
                                        <img src="liabilities/images/tiles5.jpg" class="img-responsive" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <a href="liabilities/images/portfolio.jpg" data-title="Image title 3" data-toggle="lightbox" data-gallery="mixedgallery" class="col-md-6 col-xs-6">
                                    <img src="liabilities/images/tiles3.jpg" class="img-responsive" alt="">
                                </a>
                                <a href="liabilities/images/portfolio.jpg" data-title="Image title 4" data-toggle="lightbox" data-gallery="mixedgallery" class="col-md-6 col-xs-6">
                                    <img src="liabilities/images/tiles4.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" role="contentinfo" class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="sec-title">Who's using <span>Digital Lagos</span></h2>
                    <div class="row dl-users">
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/users/jumia.png" alt="logo Jumia">
                                <figcaption>Jumia</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/users/konga.png" alt="Logo konga">
                                <figcaption>Konga</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles1.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles2.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles3.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles4.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles1.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles2.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles3.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <figure>
                                <img src="liabilities/images/tiles4.jpg" alt="Tiles">
                                <figcaption>Lorem ipsum</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 twitter-feed">
                    <h2 class="sec-title">Twitter's <span>Feeds</span></h2>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="twitter-timeline" width="100%" height="50" data-chrome="nofooter noheader noborders noscrollbar transparent" data-tweet-limit="3" data-show-replies="false" href="https://twitter.com/shresthasans" data-show-replies="false"
                            data-widget-id="519567017334939648"></a>
                            <script>
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.jQuery || document.write('<script src="liabilities/scripts/vendors/jquery-2.1.0.min.js"><\/script>')
    </script>
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
