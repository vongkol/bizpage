@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Users
        <a href="{{url('myadmin/user/create')}}" class="btn btn-success btn-sm">
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
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{$u->id}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->role_name}}</td>
                            <td>
                                <img src="{{$u->photo==null?asset('uploads/users/default.png'):asset($u->photo)}}" 
                                    alt="Photo" width="32">
                            </td>
                            <td>
                                <a href="{{url('myadmin/user/delete/'.$u->id)}}" 
                                 class='text-danger' title="Delete"
                                 onclick="return confirm('You want to delete?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                                &nbsp;&nbsp;
                                <a href="{{url('myadmin/user/edit/'.$u->id)}}" 
                                 class='text-success' title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("ul#menu li").removeClass('active'); 
            $("li#menu_user").addClass('active');   
        });
    </script>
@endsection