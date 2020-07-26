
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
    @include('site.main.mainheader')
    <!-- header end -->
   @yield("content")
    <!-- banner3 area end -->
    <!-- insta feed start -->
    @include('site.main.instafeed')
    
    <!-- insta feed end -->
    {{-- footer starts from here --}}
    @include('site.main.mainfooter')
   
    <!-- modal -->
    @include('site.main.modal')

<!-- begin::Global Config(global config for global JS sciprts) -->
@include('site.electroniclayout.script')
</body>

</html>