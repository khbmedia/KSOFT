<!DOCTYPE html>
<html lang="en">

<head>
   <title>KSOFT | @yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- favicon-->
   <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/fave-icon.png')}}">
   <link rel="stylesheet" href="{{asset("frontend/css/bootstrap.css")}}">
   <link href="{{asset('frontend/css/style.css?v=2.11')}}" rel="stylesheet">
   <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
   <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick-theme.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/iconfonts.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color.css?v=1')}}">
</head>

<body>
   @include('frontend.include.header')
@yield('content')
   @include('frontend.include.footer')
</body>

</html>