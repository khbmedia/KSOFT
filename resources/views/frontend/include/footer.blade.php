<footer id="dtr-footer" class="dtr-section-with-bg" style="background-image: url(assets/images/footer-bg.png);">
   <div class="container">
       <div class="row"> 
           
           <!-- column 1 starts -->
           <div class="col-12 col-sm-6 col-lg-4 dtr-mb-30"> <a href="/" class="d-block dtr-mb-15"><img style="height:50px;" src="{{asset("frontend/image/logo.svg")}}" alt="logo"></a>
               
               <p class="color-white">© {{Date('Y')}} KSOFT. All rights reserved.</p>
           </div>
           <!-- column 1 ends --> 

           <!-- column 4 starts -->
           <div class="col-12 col-sm-6 col-lg-4 dtr-mb-30 offset-md-3">
               <h4 class="color-white text-center">Connect With Us</h4>
               <div class="dtr-social-large">
                   <ul class="dtr-social dtr-social-list color-white-muted-alt accent-color-hover text-center">
                     @foreach ($social as $item)
                        @if($item->key=='twitter')
                           <li class="twitter-icon"><a href="{{$item->value}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        @endif   
                        @endforeach
                        @foreach ($social as $item)
                        @if($item->key=='facebook') 
                        <li class="facebook-icon"><a href="{{$item->value}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           @endif   
                        @endforeach
                        @foreach ($social as $item)
                        @if($item->key=='youtube') 
                        <li class="youtube-icon"><a href="{{$item->value}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                           @endif   
                        @endforeach
                        @foreach ($social as $item)
                        @if($item->key=='gmail')  
                        <li class="gmail-icon"><a href="{{$item->value}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        @endif   
                        @endforeach
                   </ul>
               </div>
           </div>
           <!-- column 4 ends --> 
           
       </div>
   </div>
</footer>
 <!--jQuery-->
 <script src="{{asset("frontend/js/jquery.js")}}"></script>
 <!--Bootstrap-->
 <script src="{{asset("frontend/js/bootstrap.js")}}"></script>
 <!--wow js-->
 <script src="{{asset("frontend/js/wow.js")}}"></script>
 <!--Slick-->
 <script src="{{asset("frontend/js/slick.js")}}"></script>
 <!--Custom js-->
 <script src="{{asset("frontend/js/custom.js")}}"></script>
 <script src="{{asset('assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/plugins.js')}}"></script> 
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('cusScript')
 <script>
    'use strict';
    $(".tab_content").hide();
    $(".tab_content:first").show();
    /* if in tab mode */
    $("ul.banner-tabs li").on('click', function () {
       $(".tab_content").hide();
       var activeTab = $(this).attr("rel");
       $("#" + activeTab).fadeIn();
       $("ul.banner-tabs li").removeClass("active");
       $(this).addClass("active");
       $(".tab_drawer_heading").removeClass("d_active");
       $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").on('click', function () {
       $(".tab_content").hide();
       var d_activeTab = $(this).attr("rel");
       $("#" + d_activeTab).fadeIn();
       $(".tab_drawer_heading").removeClass("d_active");
       $(this).addClass("d_active");
       $("ul.banner-tabs li").removeClass("active");
       $("ul.banner-tabs li[rel^='" + d_activeTab + "']").addClass("active");
    });
    /* Extra class "tab_last"
      to add border to right side
      of last tab */
    $('ul.banner-tabs li').last().addClass("tab_last");
 </script>