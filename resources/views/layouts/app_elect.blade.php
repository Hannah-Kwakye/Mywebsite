
<!doctype html>
<html class="no-js" lang="en">
  
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title') - {{ config('app.name') }}</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   @include('site.electroniclayout.style')
</head>

<body> 
   @include('site.electroniclayout.header')
   <!-- header end -->
   @include('site.electroniclayout.navbar')
  @yield("content")
   
   @include('site.electroniclayout.footer')
  <!-- modal -->
    @include('site.electroniclayout.modal')
    @include('site.electroniclayout.script') 
</body>

</html>