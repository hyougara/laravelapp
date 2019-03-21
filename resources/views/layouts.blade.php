
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <!-- <link rel="stylesheet" href="{{ asset('css/form.css') }}"> -->
  
  <!-- bootstrap flat ui -->
  <link href="dist/css/flat-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
  <script src="main.js"></script>
  <script src="/js/app.js" defer></script>
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>