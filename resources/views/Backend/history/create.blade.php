@extends('Backend.layouts.app')

@section('content')

@section('title','Create History')

@section('icon-title','fa fa-history')
<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('storeHistory')}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf

                    <div class="form-group">

                        <label>Year</label>

                    <input type="text" name="year" class="form-control" value="{{old('year')}}">

                    </div>
                    <div class="form-group">

                        <label>Title</label>

                    <input type="text" name="title" class="form-control" value="{{old('title')}}">

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea id="description" name="description" class="form-control">{{old('description')}}</textarea>

                    </div>
                    <div class="form-group">

                        <label>Sort Order</label>

                    <input type="text" name="sort_order" class="form-control" value="{{old('sort_order')}}">

                    </div>
                    
                    <input type="submit" value="Save" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection
@section('customScript')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('description', options);
</script>
@endsection

