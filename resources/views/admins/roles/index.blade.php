@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-key"></i> User Role
        <a href="{{url('myadmin/role/create')}}" class=btn btn-sucess btn-sm>
        <i class="fa fa-plus-circle"></i> Create
        </a>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>
                        <a href="{{url('myadmin/role/delete/'.$r->id)}}" 
                                 class='text-danger' title="Delete"
                                 onclick="return confirm('You want to delete?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                                &nbsp;&nbsp;
                                <a href="{{url('myadmin/role/edit/'.$r->id)}}" 
                                 class='text-success' title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection