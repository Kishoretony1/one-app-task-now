@extends('layouts.layout')
@extends('layouts.app')

@section('content')


<div class="card">




    </div>
  <div class="card-header">Create Roles</div>
  <div class="card-body">

      <form action="{{route('role_store')}}" method="post">
        {!! csrf_field() !!}
        <label>Role</label></br>
        <input type="text" name="role_name" id="role_name" class="form-control" required></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success" required></br>
    </form>


  </div>
</div>

@stop
