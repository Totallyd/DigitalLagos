@extends('layouts.front-master')

@section('title') Digital Lagos.Tv:: Get Listed @stop

@section('content')
  
  <section id="content" role="main" class="content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <article class="col-md-12 intro">
                        <div class="box">
                            <header>
                                <h1>Get Listed</h1>
                            </header>
                            <section class="cont-wrap">
                                <p>Get listed in Digital Lagos and showcase your business to key local, regional and national audiences. Choose one of our listings packages and build your profile.</p>
                            </section>
                        </div>
                    </article>
                </div>
                <div class="row plan">
                    <div class="col-md-4">
                        <div class="box">
                            <header>
                                <h2>Basic</h2>
                                <h3>Free</h3>
                            </header>
                            <article class="column">
                                <ul class="plan-list">
                                    <li>List basic profile.</li>
                                    <li>Appear in search result</li>
                                    <li>Feature basic details</li>
                                    <li>Display your web address</li>
                                </ul><a href="{{{ URL::to('registration') }}}" class="btn dl-btn cta-btn">Select</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <header>
                                <h2>Introductory</h2>
                                <h3>&pound; 280 &frasl; year</h3>
                            </header>
                            <article class="column">
                                <ul class="plan-list">
                                    <li>Build an introductory profile.</li>
                                    <li>List basic company information</li>
                                    <li>Company Logo</li>
                                    <li>Appear in 2 category search</li>
                                    <li>Contact details</li>
                                    <li>Website &amp; Key contacts</li>
                                    <li>Searchable text and unlimited credit</li>
                                    <li>When visitors click on the company logo, they are diverted to your product/service</li>
                                </ul><a href="#" class="btn dl-btn cta-btn">Select</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <header>
                                <h2>Enhanced</h2>
                                <h3>&pound; 750 &frasl; year</h3>
                            </header>
                            <article class="column">
                                <ul class="plan-list">
                                    <li>List a comprehensive profile</li>
                                    <li>Include name, address</li>
                                    <li>Phone number</li>
                                    <li>Link to company URL or Product details</li>
                                    <li>Case studies</li>
                                    <li>Add your latest news</li>
                                    <li>Company logo &amp; message</li>
                                    <li>Appear in highest search results</li>
                                    <li>Features in 3 category search</li>
                                    <li>Features 300 words of searchable text</li>
                                    <li>When visitors click on the company logo, they are diverted to your product/service</li>
                                    <li>Add up to 20 showreel</li>
                                </ul><a href="#" class="btn dl-btn cta-btn">Select</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
</section>
  
  @stop