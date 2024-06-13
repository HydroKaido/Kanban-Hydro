<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
  .rightbar{
    margin-left: 250px;
  }
  @media only screen and (max-width: 992px) {
        .rightbar {
            margin-left: 0px;
        }
    }
</style>
<body>
    @include('components.sidebar.index')
    <div class="rightbar">
      
    @yield('content')
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>