<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>Creative Media</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{ asset('user_assets/images/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('user_assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/LineIcons.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

@include('users.layout.navbar')

@yield('content')

@include('users.layout.footer')

</body>
</html>
