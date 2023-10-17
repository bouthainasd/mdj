@extends('admin.employees.layouts')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">employees Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Address : {{ $employees->address }}</p>
        <p class="card-text">Mobile : {{ $employees->mobile }}</p>
        <p class="card-text">specialty : {{ $employees->specialty }}</p>
  </div>
    </hr>
  </div>
</div>