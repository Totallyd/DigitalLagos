@extends('layouts.master')

@section('title') Login @stop

@section('content')

<div class='col-lg-4 center-block login-box'>

    <div class="row">
        <div class="col-lg-12 col-vertical-align">
            <h3> Reset Password </h3>
        </div>
    </div>

    <div class="line-separator"></div>

    {{ Form::open() }}

    @if (Session::get("error"))
      <div class='bg-danger alert'>{{ Session::get("error") }}</div>
    @endif

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('email', 'Email') }}
            </div>
            <div class="col-lg-10">
                {{ Form::text('email',  null, ['placeholder' => 'Enter your Email', 'class' => 'form-control']) }}
                {{ $errors->first("email") }}<br />
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('password', 'Password') }}
            </div>
            <div class="col-lg-10">
                {{ Form::password('password', ['placeholder' => 'Enter new Password', 'class' => 'form-control']) }}
                {{ $errors->first("password") }}<br />
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('password_confirmation', 'Confirm') }}
            </div>
            <div class="col-lg-10">
                {{ Form::password('password_confirmation',['placeholder' => 'Re-Enter new Password', 'class' => 'form-control']) }}
                {{ $errors->first("password_confirmation") }}<br />
            </div>
        </div>
    </div>
    {{ Form::hidden('token', $token) }}
    

    <div class="row">
        <div class="form-group">
          <div class="col-lg-2">
          </div>
            <div class="col-lg-10">
              <div class="pull-left">
                {{ Form::submit('Reset', ['class' => 'btn btn-primary btn-lg']) }}
              </div>
          </div>
        </div>
    </div>

    <br/>

  {{ Form::close() }}

</div>

@stop
