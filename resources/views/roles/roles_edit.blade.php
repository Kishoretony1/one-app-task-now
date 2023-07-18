


@extends('layouts.layout')
@extends('layouts.app')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{route('role_update',$role_edit->role_id)}}" method="post">
        {!! csrf_field() !!}

        <label>Role Name</label></br>
        <input type="text" name="role_name" id="role_name" value="{{$role_edit->role_name}}" class="form-control" required></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$role_edit->status}}" class="form-control" required></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
