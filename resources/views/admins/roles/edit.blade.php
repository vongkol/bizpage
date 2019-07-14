@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-key"></i> Edit Role 
        <a href="{{url('myadmin/role')}}" class="btn btn-success btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-sm-9">
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
                    <form action="{{url('myadmin/role/update')}}"
                         method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$role->id}}">
                        <div class="form-group">
                            <label for="name" class="col-sm-3">Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" 
                                    name="name" id="name" required 
                                    value="{{$role->name}}">
                            </div>
                        </div>
                        <div class="form-grou">
                            <label for="" class="col-sm-3">&nbsp;</label>
                            <div class="col-sm-9">
                                <button class="btn btn-primary">Save</button>
                                <p></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
@endsection