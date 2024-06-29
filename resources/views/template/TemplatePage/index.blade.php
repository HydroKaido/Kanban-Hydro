<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <style>
  .rightbar{
    margin-left: 250px;
  }
  body {
    background-color: #f2f4fb;
}
  @media only screen and (max-width: 992px) {
        .rightbar {
            margin-left: 0px;
        }
    }
</style>
</head>
<body>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>