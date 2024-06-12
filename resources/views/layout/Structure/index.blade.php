<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
  .rightbar{
    margin-left: 300px;
  }
</style>
<body>
    @include('components.sidebar.index')
    <div class="p-4 rightbar">
      
    @yield('content')
    </div>
</body>
</html>