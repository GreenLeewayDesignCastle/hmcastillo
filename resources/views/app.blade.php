<!DOCTYPE html>
<html lang="en">
@include('partials._head')
@include('partials._header')

  <body id="#app">
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
      </div>
    </div>
    <!--/.PRELOADER END-->


    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        @yield('content')
        @include('partials._footer')

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>

<script src="{{asset('js/app.js')}}"type="text/javascript"></script>
  </body>

</html>
