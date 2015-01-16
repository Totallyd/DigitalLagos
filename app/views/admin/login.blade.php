@extends('layouts.master')

@section('title') Login @stop

@section('content')

<div class='col-lg-4 center-block login-box'>

    <div class="row">
        <div class="col-lg-11 col-vertical-align">
            <h3> Admin Login </h3>
        </div>
        <div class="col-lg-1 col-vertical-align">
            <img height="34px" src="{{{ URL::to('img/lock-transperant.png') }}}">
        </div>
    </div>

    <div class="line-separator"></div>

    {{ Form::open(['role' => 'form']) }}

    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('username', 'Username') }}
            </div>
            <div class="col-lg-10">
                {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}<br />
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
             <div class="col-lg-2">
                {{ Form::label('password', 'Password') }}
            </div>
            <div class="col-lg-10">
                {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}<br />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
          <div class="col-lg-2">
          </div>
            <div class="col-lg-5">
              <div class="pull-left">
                {{ Form::submit('Login', ['class' => 'btn btn-primary btn-lg']) }}
              </div>
          </div>
            <div class="col-lg-5">
              <div class="pull-right">
                <a href="{{{URL::to('admin/forgotpassword')}}}" style="color:#fff;text-decoration: underline;">Forgot Password?</a>
              </div>
            </div>
        </div>
    </div>

    <br/>

  {{ Form::close() }}

</div>

@stop
