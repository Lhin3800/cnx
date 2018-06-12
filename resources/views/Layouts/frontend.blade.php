<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="icon" href="/image/frontend/@yield('favicon')" type="image/x-icon"/>
    {{ Html::style('/lib/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/lib/animate/animate.min.css') }}
    {{ Html::style('/lib/owlcarousel/assets/owl.carousel.css') }}
    {{-- {{ Html::style('/lib/imagehover/css/imagehover.min.css') }} --}}
    {{ Html::style('/css/frontend/hover-min.css') }}
    {{ Html::style('/css/frontend/bootstrap.min.css') }}
    {{ Html::style('/css/frontend/responsive.css') }}
    {{ Html::style('/css/frontend/style.css') }}
    {{ Html::style('/css/theme.css') }}
  </head>
  @yield('style')
  <body>
      
  </body>
  {{ Html::script('js/jquery-3.3.1.min.js') }}
  {{ Html::script('js/frontend/bootstrap.min.js') }}
   <!-- JavaScript Libraries -->
  {{ Html::script('/lib/bootstrap/js/bootstrap.bundle.min.js') }}
  {{ Html::script('/lib/owlcarousel/owl.carousel.min.js') }}
  {{ Html::script('/lib/easing/easing.min.js') }}
  {{ Html::script('/lib/wow/wow.min.js') }}
 
  <!-- Template Main Javascript File -->
  {{ Html::script('/js/main.js') }}

  @stack('scripts')
 
</html>