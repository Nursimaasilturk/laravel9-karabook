<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Sima">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/mycss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>@yield('title')</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/owl-carousel.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">


    </style>
    @yield('css')
    @yield('headjs')

    </head>
    <body>
     
      @section('content')
      
      @show
      @include('home._footer')
      @yield('footerjs')
    </body>
</html>
