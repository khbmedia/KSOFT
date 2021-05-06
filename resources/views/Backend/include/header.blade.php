<div class="content-wrapper">
  <div class="content-header" style="background:#20082a">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 float-sm-left" style="color:#07ac78;"><i class="@yield('icon-title')"></i>@yield('title')</h1>
          <a href="{{route('logouts')}}"><button class="btn float-sm-right" style="background:#07ac78;border-color:#07ac78;color:#fff;"><i
                class="fas fa-sign-out-alt"></i></button></a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-left ">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </div><!-- /.col -->
    </div>
  </div>