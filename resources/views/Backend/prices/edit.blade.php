@extends('Backend.layouts.app')
@section('content')
@section('title','Edit Price')
@section('icon-title','fab fa-pricestack')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('updatePrice',$prices->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">
                @csrf
                <div class="form-group">
                    <label>Price</label>
                <input type="text" name="price" class="form-control" value="{{$prices->price}}">
                </div>
                <div class="form-group">
                    <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$prices->title}}">
                </div>
                <div class="form-group">
                    <label>URL</label>
                <input type="text" name="url" class="form-control" value="{{old('url') ?? $prices->url}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="description" name="description" class="form-control">{{$prices->description}}</textarea>
                </div>
                <input type="submit" value="Update" class="btn btn-success float-right">
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