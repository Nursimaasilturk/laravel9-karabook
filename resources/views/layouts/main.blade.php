<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Sima">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/owl-carousel.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">
    @yield('css')
    @yield('headjs')

    </head>
    <body>
      @include('home._header')
      
      @include('home._home')
      @section('content')
      içerik alanı
      @show
      @include('home._sub_content')
      @include('home._sub_content')
      @include('home._sub_content')
      @include('home._description')
      @include('home._social')
      @include('home._subscribe')

      @include('home._footer')
      @yield('footerjs')
    </body>
</html>
