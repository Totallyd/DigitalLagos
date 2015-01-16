@extends('layouts.master')

@section('title') Forgot Password @stop

@section('content')

<div class='col-lg-4 center-block login-box'>

    <div class="row">
        <div class="col-lg-12 col-vertical-align">
            <h3> Forgot Password </h3>
        </div>
    </div>

    <div class="line-separator"></div>

    <div style="font-size:12pt">Please enter your email address to reset your password.</div>

    <br/>

    {{ Form::open(['role' => 'form']) }}

    @if (Session::get("error"))
      <div class='bg-danger alert'>{{ Session::get("error") }}</div>
    @endif
    @if (Session::get("status"))
      <div class='alert alert-success'>{{ Session::get("status") }}</div>
    @endif


    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('email', 'Email') }}
            </div>
            <div class="col-lg-10">
                {{ Form::text('email',  Input::old("email"), ['class' => 'form-control']) }}
                {{ $errors->first("email") }}<br />
            </div>
        </div>
    </div>


    <div class="row">
        <div class="form-group">
          <div class="col-lg-2">
          </div>
            <div class="col-lg-10">
              <div class="pull-left">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) }}
              </div>
          </div>
        </div>
    </div>

    <br/>

  {{ Form::close() }}

</div>

@stop
