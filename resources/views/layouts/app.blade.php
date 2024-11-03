<!DOCTYPE html>
<html lang="en">
<head>
  <title>Snapgram</title>
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
  <ul>
    <li><a href="{{ route('barang.index') }}">Barang</a></li>
  </ul>
    @yield('content')
</body>
</html>