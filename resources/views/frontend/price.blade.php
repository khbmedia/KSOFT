@extends('frontend.layout.app')

@section('content')
@section('title','Price')
<div class="top-head" style="background-image:url('/images/pricing.jpg');background-size:cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="dark-head1  wow   slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
               <h1 style="color:white;">Pricing</h1>

            </div>
         </div>
      </div>
   </div>
</div>

<section class="pricing-list">
   <div class="container">
      <!-- row starts -->
      <div class="row">
         @foreach ($price as $item)
         @if($loop->iteration==1)
         <!-- column 1 starts -->
         <div class="col-12 col-md-4 dtr-pr-0 dtr-md-pr-15">

            <!-- pricing 1 starts -->
            <div class="dtr-pricing bg-blue">
               <div class="dtr-pricing-img"><img src="assets/images/ptable-icon1.png" alt="image"></div>
               <h3 class="color-white">{{$item->title}}</h3>
               <p class="dtr-price color-white"><sup>$</sup>{{$item->price}}</p>
               <p class="dtr-m-0 color-white">per user /mo</p>
               <a href="{{url("$item->url")}}" target="_blank" class="dtr-btn btn-dark-blue dtr-my-30">Signup for free</a>
               <ul class="dtr-list-block color-white">
                  {!!$item->description!!}
               </ul>
            </div>
            <!-- pricing 1 ends -->

         </div>
         @elseif($loop->iteration==2)
         <!-- column 2 starts -->
         <div class="col-12 col-md-4 dtr-px-0 dtr-md-px-15">

            <!-- pricing 2 starts -->
            <div class="dtr-pricing pricing-focused bg-dark-blue">
               <div class="dtr-pricing-tagline-wrapper">
                  <div class="dtr-pricing-tagline color-blue">Most Popular</div>
               </div>
               <div class="dtr-pricing-img"><img src="assets/images/ptable-icon2.png" alt="image"></div>
               <h3 class="color-white">{{$item->title}}</h3>
               <p class="dtr-price color-white"><sup>$</sup>{{$item->price}}</p>
               <p class="dtr-m-0 color-white">per user /mo</p>
               <a href="{{url("$item->url")}}" class="dtr-btn btn-white dtr-my-30">Signup for free</a>
               <ul class="dtr-list-block color-white">
                  {!!$item->description!!}
               </ul>
            </div>
            <!-- pricing 2 ends -->

         </div>
         <!-- column 2 ends -->
         @else
         <!-- column 3 starts -->
         <div class="col-12 col-md-4 dtr-pl-0 dtr-md-pl-15">

            <!-- pricing 3 starts -->
            <div class="dtr-pricing bg-blue">
               <div class="dtr-pricing-img"><img src="assets/images/ptable-icon3.png" alt="image"></div>
               <h3 class="color-white">{{$item->title}}</h3>
               <p class="dtr-price color-white"><sup>$</sup>{{$item->price}}</p>
               <p class="dtr-m-0 color-white">per user /mo</p>
               <a href="{{url("$item->url")}}" class="dtr-btn btn-dark-blue dtr-my-30">Signup for free</a>
               <ul class="dtr-list-block color-white">
                  {!!$item->description!!}
               </ul>
            </div>
            <!-- pricing 3 ends -->

         </div>
         <!-- column 3 ends -->
         @endif
         @endforeach

      </div>
</section>
@endsection