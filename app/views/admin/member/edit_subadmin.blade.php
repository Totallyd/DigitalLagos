@extends('layouts.master')

@section('title') Edit Sub Admin @stop

@section('pagetitle') Edit Sub Admin @stop

@section('content')
   

<div class="about user">
  <!-- <h2>Edit Sub-Admin</h2> -->

  @if(Session::has('success'))
      <div class="bg-success alert">
        {{ Session::get('success') }}
      </div>
  @endif

  <form action="" method="post" id="userdata">
    <br/>
    
    <input type="hidden" id="user_id" name="user_id" value="<?php echo $userProfile->user_id;?>" />

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('first_name', 'First Name*') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('first_name', $userProfile->first_name, ['placeholder' => 'First Name', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('first_name'))
                  {{ $errors->first('first_name', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>


    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('last_name', 'Last Name') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('last_name', $userProfile->last_name, ['placeholder' => 'Last Name', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('last_name'))
                  {{ $errors->first('last_name', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('username', 'UserName*') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('username', $user->username, ['placeholder' => 'UserName', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('username'))
                  {{ $errors->first('username', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('email', 'Email*') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('email', $user->email, ['placeholder' => 'Email', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('email'))
                  {{ $errors->first('email', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('password', 'Password*') }}
            </div>
            <div class="col-lg-5">
                {{ Form::password('password', ['class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('password'))
                  {{ $errors->first('password', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('phone', 'Phone') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('phone', $userProfile->phone, ['placeholder' => 'Phone', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('mobile', 'Mobile') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('mobile', $userProfile->mobile, ['placeholder' => 'Mobile', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('address', 'Address*') }}
            </div>
            <div class="col-lg-5">
                {{ Form::text('address', $userProfile->address, ['placeholder' => 'Address', 'class' => 'form-control']) }}<br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('address'))
                  {{ $errors->first('address', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('country', 'Country*') }}
            </div>
            <div class="col-lg-5">
                <select name="country" class="form-control">
                  <option value="" selected="">Select Country</option>
                  <?php if($countries){ foreach($countries as $country){ ?>
                  <option value="<?php echo $country;?>" selected="selected"><?php echo $country;?></option>
                  <?php } } ?>
                </select>
                <br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('country'))
                  {{ $errors->first('country', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('state', 'State*') }}
            </div>
            <div class="col-lg-5">
                <select name="state" class="form-control">
                  <option value="" >Select State</option>
                      <?php if($states){ foreach($states as $state){ ?>
                      <option value="<?php echo $state;?>" <?php if($userProfile->state==$state){?> selected="selected" <?php }?>><?php echo $state;?></option>
                      <?php } } ?>
                </select>
                <br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('state'))
                  {{ $errors->first('state', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('city', 'City*') }}
            </div>
            <div class="col-lg-5">
                <select name="city" class="form-control">
                  <option value="" >Select City</option>
                      <?php if($cities){ foreach($cities as $city){ ?>
                      <option value="<?php echo $city;?>" <?php if($userProfile->city==$city){?> selected="selected" <?php }?>><?php echo $city;?></option>
                      <?php } } ?>
                </select>
                <br />
            </div>
            <div class="col-lg-5">
                @if ($errors->has('city'))
                  {{ $errors->first('city', '<div class=bg-danger alert>:message</div>') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                {{ Form::label('roles', 'Roles') }}
            </div>
            <div class="col-lg-10">
                <?php if($roles){foreach ($roles as $role):  ?>
                  <div style="width:25%; float:left;">
                    <input type="checkbox" name="roles[]" value="<?php echo $role->id;?>" <?php if(is_array($roleIds)){ 
                    if(in_array($role->id,$roleIds)){?> checked="checked" <?php }}?> />
                    &nbsp;<?php echo $role->title; ?>
                  </div>
                <?php endforeach; } ?>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="row">
        <div class='form-group'>
            <div class="col-lg-2">
                
            </div>
            <div class="col-lg-5">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) }} {{ Form::button('Cancel', ['class' => 'btn btn-primary btn-sm cancel-button']) }}
            </div>
            <div class="col-lg-5">
                
            </div>
        </div>
    </div>

  </form>
</div>
@stop 