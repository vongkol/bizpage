@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Create User 
        <a href="{{url('myadmin/user')}}" class="btn btn-success btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content" style="padding: 4px 9px;">
        <div class="box box-primary">
            <p>&nbsp;</p>
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" 
                            data-dismiss="alert" aria-hidden="true">×</button>
                        <p>
                            {{session('success')}}
                        </p>
                        
                    </div>
                    
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" 
                            data-dismiss="alert" aria-hidden="true">×</button>
                        <p>
                            {{session('error')}}
                        </p>
                        
                    </div>
                @endif
                <form action="{{url('myadmin/user/save')}}"
                        method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-2">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" 
                                name="name" id="name" required 
                                value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" 
                                name="email" id="email" required 
                                value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" 
                                name="phone" id="phone"  
                                value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2">Role</label>
                        <div class="col-sm-9">
                            <select name="role_id" id="role" class="form-control">
                                @foreach($roles as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" 
                                name="password" id="password" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpass" class="col-sm-2">Confirm Password <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" 
                                name="cpass" id="cpass" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-sm-2">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" 
                            accept="image/x-png,image/gif,image/jpeg"
                             name='photo'>
                        </div>
                    </div>
                    <div class="form-grou row">
                        <label for="" class="col-sm-2">&nbsp;</label>
                        <div class="col-sm-9">
                            <button class="btn btn-primary">Save</button>
                            <p></p>
                        </div>
                    </div>
                </form>
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