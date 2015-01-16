@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <section id="content" role="main" class="content-wrap">
        <div class="container">
            <div class="row">
                <article class="col-md-12 intro">
                    <div class="box">
                        <header>
                            <h1>Get in Touch</h1>
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
                                        <h2>Get in Touch</h2>
                                    </header>
                                    <article>
                                        <div class="form-group">
                                            <label for="name">Name <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address <span class="required">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="subject" name="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message <span class="required">*</span></label>
                                            <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="help-block"><span class="required">*</span> Required fields.</p>
                                    <div class="form-btns">
                                        <button type="submit" class="dl-btn">Submit</button>
                                        <button type="button" class="dl-btn-s">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  @stop