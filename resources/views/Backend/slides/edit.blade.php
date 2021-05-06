@extends('Backend.layouts.app')

@section('content')

@section('title','Edit Slide')

@section('icon-title','fab fa-slideshare')

<div class="container">

    <div class="row">

        <div class="col-md-8 offset-md-2 card">

            <form action="{{route('updateSlide',$slides->id)}}" method="post" enctype="multipart/form-data" class="m-md-5">

                @csrf
                
                <div class="form-group">

                    <label>Image</label>

                    <input type="file" name="image" class="form-control">
                </div>
                
                    

                    <input type="hidden" name="old_image" value="{{$slides->image}}">
                    
                    

                   
                    <input type="submit" value="Update" class="btn btn-success float-right">

                </form>

        </div>

    </div>



</div>

   

@endsection

