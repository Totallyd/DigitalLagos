@extends('layouts.front-master')

@section('title') Digital Lagos.Tv::Reset Password @stop

@section('content')
  
  <section id="content" role="main" class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dl-form">
                        {{ Form::open(array('url' => '', 'id'=>'dl-form', 'class'=>'form')) }}
                        <!-- <form class="form" id="dl-form" method="" action=""> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <header>
                                        <h2>Reset Password</h2>
                                    </header>
                                    <article>
                                        <div class="form-group">
                                            <label for="email">Email Address <span class="required">*</span>
                                            </label>
                                            {{ Form::text('email',Input::old('email'), array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Enter your Email', 'required'=>"")) }}
                                            <!-- <input type="email" class="form-control" id="email" name="email" required> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password <span class="required">*</span>
                                            </label>
                                            {{ Form::password('password', array('class'=>'form-control', 'id'=>'pwd', 'placeholder'=>'Enter your Password', 'required'=>"")) }}
                                            <!-- <input type="password" class="form-control" id="pwd" name="pwd" required> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="c-pwd">Confirm Password <span class="required">*</span>
                                            </label>
                                            {{ Form::password('password_confirmation', array('class'=>'form-control', 'id'=>'c-pwd', 'placeholder'=>'Re-enter your Password', 'required'=>"")) }}
                                            <!-- <input type="password" class="form-control" id="c-pwd" name="c-pwd" required> -->
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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