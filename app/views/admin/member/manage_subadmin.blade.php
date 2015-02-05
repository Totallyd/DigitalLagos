@extends('layouts.master')

@section('title') Manage Sub Admin @stop

@section('pagetitle') 
Manage Sub Admin <div class="pull-right"><a href="{{{ URL::to('admin/addsubadmin') }}}"><img src="{{{ URL::to('img/u172.png') }}}" height="36"></a></div>
@stop
@if(Session::has('success'))
<div class="bg-success alert">
    {{ Session::get('success') }}
</div>
@endif
@section('content')
<?php if(count($users)>0):?>
<?php //echo $users->links(); ?>
  <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <th><input type="checkbox" name="id[]" value="<?php echo $user->id; ?>"></th>
                <td><?php echo $user->profile->first_name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->profile->phone; ?></td>
                <td><a href="{{{ URL::to('admin/edit-subadmin/'.$user->id) }}}">Edit</a> | <a href="{{{ URL::to('admin/edit-subadmin/'.$user->user_id) }}}">View</a> |
                
                <a href="{{{ URL::to('admin/delete-subadmin/'.$user->id) }}}" onclick="return confirm('Are you sure?');">Delete</a></td>
            </tr>
            <?php endforeach; ?>
          
        </tbody>
    </table>
<?php else: ?>
    <div class="no_record">No record Found</div>
	<?php  endif;?>
<script>
$(document).ready(function(){
    $(".pagination").css("float", "right");
});
</script>


@stop
