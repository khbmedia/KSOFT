@extends('frontend.layout.app')
@section('content')
@section('title','Home')
<div id="dtr-main-content">
<section id="home" class="dtr-section dtr-section-with-bg" style="background-image: url(assets/images/hero-bg1.jpg);">
   <div class="container hero-section-top-padding dtr-full-stretch"> 
       <!-- row starts -->
       <div class="row dtr-py-100"> 
           
           <!-- column 1 starts -->
           <div class="col-12 col-lg-6 dtr-py-100 hero-text-fixed-width">
               <h1 class="color-white">KSOFT Accounting System (KS)</h1>
               <p class="text-size-md dtr-mt-30 color-white">Solution for your accounting problems based on your daily practices</p>
               <a href="http://cams.com.kh/wp-content/uploads/2016/10/QSInventory_V2.0.0.1.zip" target="_blank" class="dtr-btn btn-dark-blue dtr-scroll-link dtr-px-70 dtr-mt-20">Free Trial</a>
               <p class="color-white dtr-mt-5">(No credit card required)</p>
           </div>
           <!-- column 1 ends --> 
           
           <!-- column 2 starts -->
           <div class="col-12 col-lg-6 dtr-section-with-bg dtr-bg-position-center-left bg-pc"> </div>
           <!-- column 2 ends --> 
           
       </div>
       <!-- row ends --> 
   </div>
</section>
        <!-- section starts
================================================== -->
<section id="features" class="dtr-section dtr-py-80">
   <div class="container"> 
       
       <!-- row 1 starts -->
       <div class="row"> 
           
           <!-- column 1 starts -->
           <div class="col-12 col-md-5 dtr-mt-20">
               <div class="dtr-mb-50">
                    <h2 class="color-dark-blue text-center">Introduction</h2>
                    <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
               </div>
               
               @foreach ($about as $item)
                  @if($item->key=='About Us')
                  {!!$item->value!!}
                  @endif 
               @endforeach
            </div>
           <!-- column 1 ends --> 
           
           <!-- column 2 starts -->
           <div class="col-12 col-md-6 offset-md-1 dtr-sm-mt-30 wow fadeInRight"> <img src="{{asset("assets/images/screen-1.png")}}" alt="image"> </div>
           <!-- column 2 ends --> 
           
       </div>
       <!-- row 1 ends --> 
      
       
   </div>
</section>
<!-- section ends
================================================== --> 
        <!-- video section starts
================================================== -->
<section class="dtr-section dtr-py-100 bg-blue">
   <div class="container"> 
       
       <!-- section intro row starts -->
       <div class="row dtr-mb-50">
           <div class="col-12 text-center">
               <h2 class="color-white">Why is KSOFT different?</h2>
               <div class="dtr-styled-divider divider-center bg-light-blue"></div>
           </div>
       </div>
       <!-- section intro row ends --> 
       
       <!-- row starts -->
       <div class="row d-flex align-items-center"> 
           
           <!-- column 1 starts -->
           <div class="col-12 col-md-5">
               <div class="dtr-pr-40 dtr-sm-pr-0"> 
                  @foreach ($chooseUs as $item)
                   <!-- feature 1 starts -->
                   @if($loop->iteration<3)
                   <div class="dtr-line-feature dtr-mb-10">
                       <div class="dtr-line-feature-img-wrapper">
                           <div class="dtr-line-feature-img bg-dark-blue border-light-blue color-white">{!!$item->icon!!}</div>
                       </div>
                       <div class="dtr-vert-border border-light-blue"></div>
                       <h4 class="dtr-line-feature-heading font-weight-600 color-white">{{$item->title}}</h4>
                       <p class="color-white">{{$item->description}}</p>
                   </div>
                   @endif
                   <!-- feature 1 ends --> 
                   @endforeach
                  
                   
               </div>
               <p class="text-center dtr-mt-5"><a href="{{route('feature')}}" class="dtr-btn btn-dark-blue dtr-px-50">Learn More</a> </p>
           </div>
           <!-- column 1 starts --> 
           
           <!-- column 2 starts -->
           <div class="col-12 col-md-7 dtr-md-mt-30"> 
               
               <!-- video box starts -->
               <div class="dtr-video-box"> 
                   
                   <!-- image --> 
                   <img src="{{asset("assets/images/video-bg.webp")}}" alt="image"> 
                   
                   <!-- video button starts --> 
                   <a class="dtr-video-popup dtr-video-button bg-blue color-white" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=XnijrjOtPKc"></a> 
                   <!-- video button ends --> 
                   
               </div>
               <!-- video box ends --> 
               
           </div>
           <!-- column 2 ends --> 
           
       </div>
       <!-- row ends --> 
       
   </div>
</section>

<section id="plans" class="dtr-section dtr-py-100 bg-light-blue-alt parallax" style="background-image: url({{asset("assets/images/section-bg2.png")}});">
   <div class="container"> 
       
       <!-- section intro row starts -->
       <div class="row dtr-mb-80">
           <div class="col-12 text-center">
               <h2 class="color-dark-blue">Plans and pricing</h2>
               <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
           </div>
       </div>
       <!-- section intro row ends --> 
       
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
              <p class="dtr-m-0">per user /mo</p>
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
              <a href="{{route("contact")}}" class="dtr-btn btn-white dtr-my-30">Signup for free</a>
              <ul class="dtr-list-block color-white color-white">
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
              <p class="dtr-m-0">per user /mo</p>
              <a href="{{route("contact")}}" class="dtr-btn btn-dark-blue dtr-my-30">Signup for free</a>
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
       
   </div>
</section>
<section id="faq" class="dtr-section dtr-py-100">
    <div class="container">
        <div class="dtr-mb-50">
            <h2 class="color-dark-blue dtr-mb-40 text-center">Frequently asked questions</h2>
             <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
        </div>
        
        <!-- row 1 starts -->
        <div class="row"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-6"> 
             @foreach ($frequently as $item)
               @if($loop->iteration%2!=0&&!$loop->last)
                <div class="faq-item">
                    <h4 class="faq-heading color-dark-blue">{{$item->question}}</h4>
                    <div class="faq-content color-blue">{!!$item->description!!}</div>
                </div>
                @endif
                <!-- faq item ends --> 
             @endforeach
               
                
            </div>
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-6"> 
                
             @foreach ($frequently as $item)
             @if($loop->iteration%2==0)
              <div class="faq-item">
                  <h4 class="faq-heading color-dark-blue">{{$item->question}}</h4>
                  <div class="faq-content color-blue">{!!$item->description!!}</div>
              </div>
              @endif
              <!-- faq item ends --> 
           @endforeach
                
            </div>
            <!-- column 1 ends --> 
            <div class="col-12 col-md-12">
                @foreach ($frequently as $item)
                @if($loop->last)
                 <div class="faq-item">
                     <h4 class="faq-heading color-dark-blue">{{$item->question}}</h4>
                     <div class="faq-content color-blue">{!!$item->description!!}</div>
                 </div>
                 @endif
                 <!-- faq item ends --> 
              @endforeach
            </div>
            <!-- column 2 ends --> 
            
        </div>
        
        
    </div>
 </section>

<section class="dtr-md-mx-20 dtr-border-y border-grey dtr-py-50"> 
    <div class="row">
        <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp dtr-mb-50">
           <h3 class="color-dark-blue">Our Partners</h3>
           <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
        </div>
       
     </div>
            
   <!-- row starts -->
   <div class="row">
       <div class="col-12">
           <div class="dtr-slick-slider dtr-logo-carousel"> 
               @foreach ($clients as $item)
                   
               
               <div> <img src="{{asset("storage/$item->logo")}}" alt="{{$item->company_name}}"> </div>
              @endforeach
           </div>
       </div>
   </div>
   <!-- row ends --> 
   
</section>
<!-- logo slider section ends
================================================== --> 
</div>
@endsection
