@extends('layouts.front-master')

@section('title') Digital Lagos.Tv::Forgotpassword @stop

@section('content')

<section id="content" role="main" class="content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dl-form">
                    {{ Form::open(array('url' => '/forgotpassword', 'id'=>'dl-form', 'class'=>'form')) }}
                        <div class="row">
                            <div class="col-md-6">
                                <header>
                                    <h2>Forgot Password</h2>
                                </header>
                                @if (Session::has('error'))
                                    <div class="flash bg-danger alert">
                                      <p>{{ Session::get('error') }}</p>
                                    </div>
                                  @endif
                                  @if (Session::has('success'))
                                    <div class="flash alert alert-success">
                                      <p>{{ Session::get('success') }}</p>
                                    </div>
                                  @endif
                                <article>
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="required">*</span>
                                        </label>
                                        {{ Form::text('email',Input::old('email'), array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Enter your Email', 'required'=>"")) }}
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