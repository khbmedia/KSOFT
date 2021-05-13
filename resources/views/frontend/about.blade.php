@extends('frontend.layout.app')
@section('content')
@section('title','About Us')
<div class="top-head" style="background-image:url('/images/about.jpg');background-size:cover;">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="dark-head1  wow   slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
                <h1 style="color:white;">About</h1>
             </div>
          </div>
       </div>
    </div>
 </div>
@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-success') }}" style="margin:0">
        <span class="closebtn" onclick="this.parentElement.style.display='none';" style="float:right;">&times;</span> 
        {{ Session::get('message') }}
      </div>
@endif
<section class="about">
    <div class="container">
       <div class="row">
          <div class="col-md-4 col-sm-4">
             <div class="about-box wow animated fadeInLeft">
                <div class="about-overlay">
                   <img src="/frontend/image/working.jpg" class="img-responsive" alt="about">
                   <div class="news-overlay">
                      <div class="overlay-text"></div>
                   </div>
                </div>
                <h4 class="h4-about color-dark-blue">Start working with us</h4>
                @foreach ($about as $item)
                @if($item->key=="Start working with us")
                <p class="p-about">
                   {!!$item->value!!}
                </p>
                @endif
                @endforeach
             </div>
          </div>
          <div class="col-md-4 col-sm-4">
             <div class="about-box wow animated bounce">
                <div class="about-overlay">
                   <img src="/frontend/image/Benefits.jpg" class="img-responsive" alt="about">
                   <div class="news-overlay">
                      <div class="overlay-text"></div>
                   </div>
                </div>
                <h4 class="h4-about color-dark-blue">Benefits of our KSOFT</h4>
                @foreach ($about as $item)
                @if($item->key=="Benefits of our KSOFT")
                <p class="p-about">
                   {!!$item->value!!}
                </p>
                @endif
                @endforeach
             </div>
          </div>
          <div class="col-md-4 col-sm-4">
             <div class="about-box wow animated fadeInRight">
                <div class="about-overlay">
                   <img src="/frontend/image/reached.jpg" class="img-responsive" alt="about">
                   <div class="news-overlay">
                      <div class="overlay-text"></div>
                   </div>
                </div>
                <h4 class="h4-about color-dark-blue">How we reached here</h4>
                @foreach ($about as $item)
                @if($item->key=="How we reached here")
                <p class="p-about">
                   {!!$item->value!!}
                </p>
                @endif
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="history">
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp dtr-mb-50">
             <h3 style="color:#fff;">We have came a long way</h3>
             <div class="dtr-styled-divider divider-center bg-light-blue"></div>
          </div>
          <div class="col-md-6 col-sm-6">
             <div class="image-text-about wow  zoomIn animated">
                <img src="/frontend/image/history.jpg" class="img-responsive" alt="about">
             </div>
          </div>
          <div class="col-md-6 col-sm-6">
             <div class=" example-basic wow  fadeInRight animated">
                <ul class="timeline">
                   @foreach ($history as $item)
                   <li class="timeline-item">
                      <div class="timeline-info">
                         <span>{{$item->year}}</span>
                      </div>
                      <div class="timeline-marker"></div>
                      <div class="timeline-content">
                         <h4 class="timeline-title">{{$item->title}}</h4>
                         {!!$item->description!!}
                      </div>
                   </li>
                   @endforeach
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp dtr-mb-50">
               <h3 class="color-dark-blue">People behind the KSOFT App</h3>
               <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
            </div>
         </div>
         <div class="row d-flex justify-content-center">
            @foreach ($teams as $item)
            <div class="col-md-3 col-sm-3 team-border">
               <div class="team-member text-center ">
                  <img src="{{asset("storage/$item->profile")}}" class="img-responsive img-circle" alt="team">
                  <h4>{{$item->name}}</h4>
                  <p>{{$item->position}}</p>
                  <div class="main-3-section">
                     <ul>
                        <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
 </section>
@endsection