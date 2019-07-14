@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Slide Management
        <a href="{{url('myadmin/slide/create')}}" class="btn btn-success btn-sm">
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Url</th>
                        <th>Photo</th>
                        <th>OrderNumber</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($slides as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->title}}</td>
                            <td>{{$s->description}}</td>
                            <td>{{$s->url}}</td>
                            <td>{{$s->photo}}</td>
                            <td>{{$s->order_number}}</td>
                            <td>
                                <img src="{{$s->photo==null?asset('uploads/users/default.png'):asset($s->photo)}}" 
                                    alt="Photo" width="32">
                            </td>
                            <td>
                                <a href="{{url('myadmin/user/delete/'.$s->id)}}" 
                                 class='text-danger' title="Delete"
                                 onclick="return confirm('You want to delete?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                                &nbsp;&nbsp;
                                <a href="{{url('myadmin/user/edit/'.$s->id)}}" 
                                 class='text-success' title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$slides->links()}}
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("ul#menu li").removeClass('active'); 
            $("li#menu_slide").addClass('active');   
        });
    </script>
@endsection