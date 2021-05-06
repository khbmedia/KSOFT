@extends('frontend.layout.app')

@section('content')
@section('title','Feature')
<div class="top-head" style="background-image:url('/images/feature.jpg');background-size:cover;">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="dark-head1  wow   slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
                <h1 style="color:white;">@yield('title')</h1>
                
             </div>
          </div>
       </div>
    </div>
 </div>
<section id="features" class="feature-tab">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <ul class="banner-tabs color-tabs  wow animated  slideInUp">
               @foreach ($chooseUs as $item)
               @php
                  $id=implode('_',explode(" ",$item->main_title))
               @endphp
               <li class="{{$loop->index==0?'active':''}}" rel="{{$id}}">
                  {!!$item->icon!!}
                  {{$item->main_title}}
               </li>
               @endforeach
            </ul>
            <div class="tab_container">
               @foreach ($chooseUs as $item) 
               @php
                  $id=implode('_',explode(" ",$item->main_title))
               @endphp
               <div id="{{$id}}" class="tab_content banner-tab-content content{{$loop->iteration}}">
                  <div class="row">
                     <div class="col-md-6 vcenter">
                        <div class="wow animated slideInLeft">
                           <div class="tascolor">
                              <h2>{{$item->title}}</h2>
                           </div>
                           <p>
                              {{$item->description}}
                           </p>
                           
                        </div>
                     </div><!--
                     --><div class="col-md-6 vcenter">
                        <div class="wow animated zoomIn">
                           <img src="{{asset("storage/$item->thumbnail")}}" class="img-responsive" alt="image">
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<section class="feature new-feature">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="heading text-center wow animated slideInUp dtr-mb-50">
               <h3>Product Module Features</h3>
               <div class="dtr-styled-divider divider-center bg-dark-blue"></div>
            </div>
            
            @foreach ($feature as $item)
            <div class="col-md-4 col-sm-6">
               <div class="feature-text text-center wow animated slideInLeft">
                  <div class="img-hover1" style="background-image:url({{asset("storage/$item->thumbnail")}})"></div>
                  <h4>{{$item->service_name}}</h4>
                  {!!$item->description!!}
               </div>
            </div>
            @endforeach
            
         </div>
      </div>
   </div>
</section>
@endsection