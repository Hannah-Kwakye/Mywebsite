<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title') - {{ config('app.name') }}</title>
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  @include('partials.sidebar')
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  @include('partials.header')
  <!-- //header-ends -->
  <!-- main content start -->
  <main class="app-content" id="app">
  @yield('content')
  </main>
<!-- main conent end-->
</section>
  <!--footer section start-->
  @include('partials.footer')
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
@jquery
		@toastr_js
		@toastr_render

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="{{asset('js/starter/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/starter/jquery-1.10.2.min.js')}}"></script>

<!-- chart js -->
<script src="{{asset('js/starter/Chart.min.js')}}"></script>
<script src="{{asset('js/starter/utils.js')}}"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="{{asset('js/starter/bar.js')}}"></script>
<script src="{{asset('js/starter/linechart.js')}}"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="{{asset('js/starter/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/starter/scripts.js')}}"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="{{asset('js/starter/modernizr.js')}}"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/starter/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>

</html>
  




		<!-- end:: Page -->

		{{-- <div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div> --}}

		<!-- end::Scrolltop -->
		
		