@extends('frontend.layout.app')

@section('content')
@section('title','Contact')
<div class="top-head" style="background-image:url('/images/contact.jpg');background-size:cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="dark-head1  wow   slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
               <h1 style="color:white;">Contact</h1>

            </div>
         </div>
      </div>
   </div>
</div>

<!-- contact section starts
================================================== -->
<section id="contact" class="dtr-section dtr-py-100">
   <div class="container">

      

      <!-- row starts -->
      <div class="row" style="border:1px solid #0d64a6;padding:5px;">

         <!-- column 1 starts -->
         <div class="col-12 col-md-5 dtr-md-mb-30" style="background:#0d64a6;padding:5px;">
            <img src="assets/images/contact-img.png" alt="image">
            <div class="row">
               <div class="col-md-12">
<div class="main-3-section">
               <h5 class="text-center"><b>Address</b></h5>
               @foreach ($contact as $item)

               @if($item->key=='Address')
               <p class="text-center">{{$item->value}}</p>
               @endif

               @endforeach
            </div>
               </div>
               <div class="col-md-6">
                   <div class="main-3-section">
               <h5 class="text-center"><b>Phone</b></h5>
               @foreach ($contact as $item)

               @if($item->key=='Phone')
               <p class="text-center">{{$item->value}}</p>
               @endif

               @endforeach

            </div>
               </div>
               <div class="col-md-6">
                  <div class="main-3-section">
               <h5 class="text-center"><b>Email:</b></h5>
               @foreach ($contact as $item)

               @if($item->key=='Email')
               <p class="text-center">{{$item->value}}</p>
               @endif

               @endforeach
            </div>
               </div>
            </div>
            
           
            
         </div>
         <!-- column 1 ends -->

         <!-- column 2 starts -->
         <div class="col-12 col-md-7" style="padding-right: 0;padding-left: 5px;">
            @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class', 'alert-success') }}" style="margin:0">
               <span class="closebtn" onclick="this.parentElement.style.display='none';" style="float:right;">&times;</span>
               {{ Session::get('message') }}
            </div>
            @endif
            @if ($errors->any())
               <div class="alert alert-danger" style="margin:0">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';" style="float:right;">&times;</span>
                  <ul>
                        @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                  </ul>
               </div>
            @endif
            <!-- form starts -->
            <div class="dtr-form dtr-form-has-icon">
               <form method="post" action="{{route("storeContact")}}">
                  @csrf
                  
                     <p class="dtr-input"> <i class="icon-gift color-dark-blue"></i>
                        <select name="package" class="required" style="padding-left:44px;">
                           <option value="Silver">Silver</option>
                           <option value="Platimun">Platimun</option>
                           <option value="Gold">Gold</option>
                           <option value="Other">Other</option>
                        </select>
                     </p>
                     <p class="dtr-input"> <i class="icon-users color-dark-blue"></i>
                        <input name="name" class="required" type="text" placeholder="john doe">
                     </p>
                     <p class="dtr-input"> <i class="icon-envelope1 color-dark-blue"></i>
                        <input name="mail" class="required email" type="email" placeholder="john.doe@example.com">
                     </p>
                     <p class="dtr-input"> <i class="icon-phone color-dark-blue"></i>
                        <input name="phone" class="required" type="text" placeholder="+855 12 012 012">
                     </p>
                     <p class="dtr-input"> <i class="icon-user-edit color-dark-blue"></i>
                        <textarea rows="4" name="content" id="message" class="required"
                           placeholder="Write Message"></textarea>
                     </p>
                     <p class="dtr-m-0">
                        <button class="dtr-btn btn-blue float-right" type="submit">Submit</button>
                     </p>
                     <div id="result"></div>
                  
               </form>
            </div>
            <!-- form ends -->

         </div>
         <!-- column 2 ends -->

      </div>
      <!-- row ends -->

   </div>
</section>


@endsection