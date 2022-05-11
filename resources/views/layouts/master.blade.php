<!DOCTYPE html>
<html
class="loaded"
lang="en"
data-layout="bordered-layout"
data-textdirection="rtl"
>

<head>
  
    @include('layouts.head')
    @yield('head')
</head>

<body   class="vertical-layout vertical-menu-modern navbar-floating footer-static"
data-open="click"
data-menu="vertical-menu-modern"
data-col="">

@include('layouts.header')

@include('layouts.Mune')

   @yield('content')
   <x:notify-messages />

@include('layouts.Customizer')

  @include('layouts.footer')
    @include('layouts.footer-scripts')
      @yield('js')
</body>

</html>
