@extends('admin.activites.layouts')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit activites</div>
  <div class="card-body">
       
      <form action="{{ url('admin/activites/' .$activites->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$activites->id}}" id="id" />
        <label>name-act</label></br>
        <input type="text" name="name-act" id="name-act" value="{{$activites->name-act}}" class="form-control"></br>
        <label>employees_id</label></br>
        <input type="text" name="employees_id" id="employees_id" value="{{$activites->employees_id}}" class="form-control"></br>
        <label>teyp of activity</label></br>
        <input type="text" name="type_actvs" id="type_actvs" value="{{$activites->type_actvs}}" class="form-control"></br>
        <label>participants</label></br>
        <input type="text" name="participants" id="participants" value="{{$activites->participants}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop