@extends('frontend.layout.app')

@section('title',$team->name)

@section('content')
<div class="main-content">
    
    @include('frontend.include.banner_rotator')
    <!-- Team Section Start -->
    <div class="rs-team grid2 pt-100 pb-70 md-pt-80 md-pb-50" style="padding: 100px">
        <div class="container">
            {{-- <div class="row">
                <div class="col col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <img src='{{asset("storage/$team->profile")}}' width="100%" alt="$team->name" style="padding-bottom:30px;">
                        <div class="col col-md-12">
        
                            <div class="section-title">
        
                            <h2>{{$team->position}}</h2>
        
                            </div>
        
                        </div>
                        <div class="col-md-12">
                            {!!$team->description!!}
                        </div>
                    </div>
            </div>
             --}}
            <div class="row d-flex">
                <div class="col-md-6 img">
                  <img src="{{asset("storage/$team->profile")}}"  alt="$team->name" class="img-rounded">
                </div>
                <div class="col-md-6 details" style="display: flex; align-items: center;">
                  <blockquote>
                    <h5>Name: {{$team->name}}</h5>
                    <h5>Position: {{$team->position}}</h5>
                    <small><cite title="Source Title">{!!$team->description!!}</cite></small>
                  </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->
</div> 
<!-- Main content End -->



@endsection
    