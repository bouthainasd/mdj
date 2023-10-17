@extends('admin.employees.layouts')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('admin/employees/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$employees->mobile}}" class="form-control"></br>
        <label>specialty</label></br>
        <input type="text" name="specialty" id="specialty" value="{{$employees->specialty}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop