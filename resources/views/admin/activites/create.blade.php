@extends('admin.activites.layouts')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('admin/activites') }}" method="post">
        {!! csrf_field() !!}
        <label>name-act</label></br>
        <input type="text" name="name-act" id="name-act" class="form-control"></br>
        <label>employees_id</label></br>
        <input type="text" name="employees_id" id="employees_id" class="form-control"></br>
        <label>type_actvs</label></br>
        <input type="text" name="type_actvs" id="type_actvs" class="form-control"></br>
        <label>participants</label></br>
        <input type="text" name="participants" id="participants" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop