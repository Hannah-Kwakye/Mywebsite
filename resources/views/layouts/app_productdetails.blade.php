
<!doctype html>
<html class="no-js" lang="en">
  
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title') - {{ config('app.name') }}</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   @include('site.electroniclayout.style')

   <!-- Favicon -->
</head>

<body>
   @include('site.electroniclayout.header')
   <!-- header end -->
   @include('site.electroniclayout.navbar')
   @yield("content")
   <!-- banner3 area end -->
   <!-- insta feed start -->
   {{-- @include('electroniclayout.main') --}}
   
   <!-- insta feed end -->
   {{-- footer starts from here --}}
   @include('site.shoplayouts.footer')
  
   <!-- modal -->
   @include('site.productlayouts.modal')

<!-- begin::Global Config(global config for global JS sciprts) -->
@include('site.electroniclayout.script')
</body>

</html>