<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  @yield('css')
  @yield('js')

</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>HEADER</h1>
  <p>Resize this responsive page to see the effect!</p> 
  @yield('header')
</div>
  
<div class="container mt-5">
  <div class="row">
    @section('sidebar')
    <div style="background-color:green" class="col-sm-3 col-lg-5">
      <h3>Sidebar</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    @show
    @section('content')
      <div style="background-color:brown" class="col-sm-9">
      <div style="background-color:pink">
        <h1>Slider</h1>
        <br>
        <hr>
        <br>
  
      </div>
        <h3>Content</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    @show
  </div>
</div>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My Footer</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

</body>
</html>
