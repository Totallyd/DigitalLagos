@extends('layouts.front-master')

@section('title') Digital Lagos.Tv:: Get Started @stop

@section('content')

<section id="content" role="main" class="content-wrap">
        <div class="container">
            <div class="row">
                <article class="col-md-12 page-intro">
                    <h1>Welcome to Digital Lagos.Tv!</h1>
                    <h2>Create your profile and became a part of creative network!</h2>
                </article>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ac-banner">
                        <ul id="dl-accordion">
                            <li>
                                <h3>Collaborating</h3>
                                <div>
                                    <div class="ac-cont">
                                        <div class="ac-cont-l">
                                            <img src="{{{ URL::to('liabilities/images/banner/collaborating.jpg') }}}">
                                        </div>
                                        <div class="ac-cont-r">
                                            <h2>Collaborating</h2>
                                            <p>Supporting business growth, through the strength of our collaboration, partnerships, mentoring and enterprise initiatives.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h3>Connecting</h3>
                                <div>
                                    <div class="ac-cont">
                                        <div class="ac-cont-l">
                                            <img src="{{{ URL::to('liabilities/images/banner/connecting.jpg') }}}">
                                        </div>
                                        <div class="ac-cont-r">
                                            <h2>Connecting</h2>
                                            <ul>
                                                <li>What’s next in digital &amp; technology? Exploring social technology changes disrupting the digital landscape</li>
                                                <li>Helping entrepreneur explore how to grow your business</li>
                                                <li>Helping to facilitate employment &amp; skills sharing within our membership and within our creative region and community.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h3>Development &amp; Growth</h3>
                                <div>
                                    <div class="ac-cont">
                                        <div class="ac-cont-l">
                                            <img src="{{{ URL::to('liabilities/images/banner/developmentandgrowth.jpg') }}}">
                                        </div>
                                        <div class="ac-cont-r">
                                            <h2>Development &amp; Growth</h2>
                                            <ul>
                                                <li>Build the profile of our members organisations and individuals engaging them within our local market at a national level, representing our sector and industry interest</li>
                                                <li>Entrepreneurs explore how to fund and grow your business</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h3>Skills Development</h3>
                                <div>
                                    <div class="ac-cont">
                                        <div class="ac-cont-l">
                                            <img src="{{{ URL::to('liabilities/images/banner/skillsdevelopment.jpg') }}}">
                                        </div>
                                        <div class="ac-cont-r">
                                            <h2>Skills Development</h2>
                                            <p>Develop the skills of our membership to help attract and retain talent, develop enterprise opportunities and strengthen the region talent base.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="row clearfix">
                        <article class="col-md-12 intro">
                            <div class="box">
                                <header>
                                    <h1>Why Join Digital Lagos</h1>
                                </header>
                                <section class="cont-wrap">
                                    <p>There are many benifits to join Digital Lagos.tv:</p>
                                </section>
                            </div>
                        </article>
                    </div>
                    <div class="member-wrap">
                        <div class="row">
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">A showcase of your work</h2>
                                    </header>
                                    <p>Images Of your work and details Of your practice avai ab e on ine anmhere and anytime enabling poten ial clients to find you easily Our website has thousand Of visitor each year and this number is growing all the time.
                                        We also register our website w th all the major search engine.</p>
                                </div>
                            </article>
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">Your own web page</h2>
                                    </header>
                                    <p>You w Il have you own un que web ad- dress With your image and details and it can i dude Ii k to your own website if you have one All members are given excl Sive entry into the Digital LagoMv on ine directory search
                                        engine</p>
                                </div>
                            </article>
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">Cost effective</h2>
                                    </header>
                                    <p>It is free to join our website. All members are g ven exclusive entry nto the Digital Lagos_tv online directory search engine For a small fee you can submit details Of your organization to be ncluded as a featured directory
                                        search engine listing This is much cheaper than developing you own website and carrying out your</p>
                                </div>
                            </article>
                        </div>
                        <div class="row">
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">Online registration</h2>
                                    </header>
                                    <p>Online registration and updating give you control Of your information present- ed on our website. In addition, we Will provide you With information on the number Of times you have been select- ed i search, how many
                                        times your pro- file have been viewed by web visitors and how many opportnities you have</p>
                                </div>
                            </article>
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">Contact service</h2>
                                    </header>
                                    <p>Visitors to our website tell us about the opportunities / projects and if you are selected by their creat search, we pass the details onto you. We do not charge any additional fee you may be interested. In</p>
                                </div>
                            </article>
                            <article class="col-md-4">
                                <div class="box column">
                                    <header>
                                        <h2 class="text">Continuous, national promotion to a wide audience</h2>
                                    </header>
                                    <p>We continue to secure press coverage in a Wide range Of consumer, business and creative media publications, _ We also take space at many major arts fairs and trade conferences throughout the year to promote creatives
                                        and the ser- vices we Offer</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                @include('includes.sidebar')
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{{ URL::to('package') }}}"><button type="button" class="btn dl-btn cta-btn mar-t-1h">Join Now</button></a>
                </div>
            </div>
        </div>
    </section>
  
  
  @stop