
    <div class="dtr-responsive-header fixed-top">
        <div class="container"> 
            
            <!-- small devices logo --> 
            <a href="{{route("home")}}"><img style="height:35px;" src="{{asset("frontend/image/logo-color.svg")}}" alt="logo"></a> 
            <!-- small devices logo ends --> 
            
            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
   
 <header id="dtr-header-global" class="fixed-top">
   <div class="container">
       <div class="d-flex align-items-center justify-content-between"> 
           
           <!-- header left starts -->
           <div class="dtr-header-left"> 
               
               <!-- logo --> 
               <a class="logo-default dtr-scroll-link" href="{{route("home")}}"><img style="height:35px;margin-top:-25px;" src="{{asset("frontend/image/logo.svg")}}" alt="logo"></a> 
               
               <!-- logo on scroll --> 
               <a class="logo-alt dtr-scroll-link" href="{{route("home")}}"><img style="height:30px;margin-top:-15px;" src="{{asset("frontend/image/logo-color.svg")}}" alt="logo"></a> 
               <!-- logo on scroll ends --> 
               
           </div>
           <!-- header left ends --> 
           
           <!-- menu starts-->
           <div class="main-navigation navbar navbar-expand-lg ml-auto">
               <ul class="dtr-scrollspy navbar-nav dtr-nav light-nav-on-load dark-nav-on-scroll dtr-menu-light">
                  <li class="nav-item active"><a  class="nav-link" href="/">Home</a></li>
                  <li class="nav-item"><a  class="nav-link" href="{{route('feature')}}">Features</a></li>
                  <li class="nav-item"><a  class="nav-link" href="{{route('about')}}">About</a></li>
                  <li class="nav-item"><a  class="nav-link" href="{{route('document')}}">Document</a></li>
                  <li class="nav-item"><a  class="nav-link" href="{{route('price')}}">Pricing</a></li>
                  <li class="nav-item"><a  class="nav-link" href="{{route('contact')}}">Contact</a></li>
               </ul>
           </div>
           <!-- menu ends--> 
           
           <!-- header right starts -->
           <div class="dtr-header-right"> <a href="http://cams.com.kh/wp-content/uploads/2016/10/QSInventory_V2.0.0.1.zip" target="_blank" class="dtr-btn btn-white btn-accent-on-scroll dtr-scroll-link dtr-px-50">Free Trial</a> </div>
           <!-- header right ends --> 
           
       </div>
   </div>
</header>