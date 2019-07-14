@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-key"></i> Page Management
        <a href="{{url('myadmin/page/create')}}" class="btn btn-success btn-sm">
            <i class="fa fa-plus-circle"></i> Create
        </a>
      </h1>

    <section class="content">
    <div class="row">
    <table class="col-sm-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $p)
            <tr>
                <td>
                    <a href="{{url('myadmin/page/detail/'.$p->id)}}">{{$p->title}}</a>
                </td>
                <td>{{$p->url}}</td>
                <a href="#" class="btn btn-danger"btn-sm>Delete</a>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>






@endsection

{{--SET ACTIVE LEFT MENU=======================================================================================================================================================================================================================================--}}
@section('js')
    <script>
        $(document).ready(function(){
            $("ul#menu li").removeClass('active'); 
            $("li#menu_role").addClass('active');   
        });
    </script>
@endsection