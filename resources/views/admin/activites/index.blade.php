@extends('admin.activites.layouts')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>activites</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/activites/create') }}" class="btn btn-success btn-sm" title="Add New activites">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>name-act</th>
                                        <th>employees_id</th>
                                        <th>type_actvs</th>
                                        <th>participants</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($activites as $item)
                                    <tr>
                                        
                                        <td>{{ $item->name-act }}</td>
                                        <td>{{ $item->employees_id }}</td>
                                        <td>{{ $item->type_actvs }}</td>
                                        <td>{{ $item->participants }}</td>
  
                                        <td>
                                            <a href="{{ url('/admin/activites/' . $item->id) }}" title="View activites"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/activites/' . $item->id . '/edit') }}" title="Edit activites"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/admin/activites' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete activites" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection