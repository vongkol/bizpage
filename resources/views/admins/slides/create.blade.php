@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Create Slide 
        <a href="{{url('myadmin/slide')}}" class="btn btn-success btn-sm">
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
                <form action="{{url('myadmin/slide/create')}}"
                        method="POST" class="form-horizontal"
                        enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="title" class="col-sm-2">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" 
                                name="title" id="title" required 
                                value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2">Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="description" class="form-control" 
                                name="description" id="description" required 
                                value="{{old('description')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="url" class="col-sm-2">Url <span class="text-danger">*</span></label>
                        
                        <div class="col-sm-9">
                            <input type="text" class="form-control" 
                                name="url" id="url"  
                                value="{{old('url')}}">
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
            $("li#menu_slide").addClass('active');   
        });
    </script>
@endsection