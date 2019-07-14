@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-key"></i> Back
        <a href="{{url('myadmin/page')}}" class=btn btn-sucess btn-sm>
        <i class="fa fa-plus-circle"></i> Back
        </a>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-sm-12">
        <form action="{{url('myadmin/page/save')}}" 
                        method="POST">
                        
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"
                        class='form-control'></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                    </form>
                 </div>
             </div>
        
    </section>
@endsection
@section ('js')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script> 

        var roxyFileman = "{{asset('fileman/index.html?integration=ckeditor')}}"; 
        CKEDITOR.replace( 'description',{filebrowserBrowseUrl:roxyFileman,
                                        filebrowserImageBrowseUrl:roxyFileman+'?type=image',
                                        removeDialogTabs: 'link:upload;image:upload'}); 
    </script>
@endsection