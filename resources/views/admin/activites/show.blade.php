@extends('admin.activites.layouts')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">activites Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">name-act : {{ $activites->name-act }}</h5>
        <p class="card-text">employees_id : {{ $activites->employees_id }}</p>
        <p class="card-text">teyp of activity : {{ $activites->type_actvs }}</p>
        <p class="card-text">participants : {{ $activites->participants }}</p>
  </div>
    </hr>
  </div>
</div>