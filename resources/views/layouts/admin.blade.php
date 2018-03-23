<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') - IPMA Admin</title>
  <link href="{{ versioned_asset('css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('partials.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      @yield('content')
    </div>
    @include('partials.footer')

    <script src="{{ versioned_asset('js/libs.js') }}"></script>
    @yield('scripts')
  </div>
</body>

</html>
