@extends('frontend.layout.app')

@section('content')
@section('title','Document')
<div class="top-head" style="background-image:url('/images/document.jpg');background-size:cover;">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="dark-head1  wow   slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
                <h1 style="color:white;">{{$document->title}}</h1>
                
             </div>
          </div>
       </div>
    </div>
 </div>
<section class="about">
    <div class="container">
       <div class="row">
          <div class="col-md-3 col-sm-3">
            
                @foreach ($documents as $item)
                <div class="panel panel-default" style="margin-bottom:2px;">
                    <div class="panel-heading">
                       <h4 class="panel-title">
                          <a href="{{route('document',$item->id)}}">
                            {{$item->title}}
                          </a>
                       </h4>
                    </div>
                   
                 </div>
                    
                @endforeach
                
              
          </div>
          <div class="col-md-9 col-sm-9">
             
             {!!$document->description!!}
          </div>
          
       </div>
    </div>
 </section>

@endsection