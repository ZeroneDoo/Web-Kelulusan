<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/result.css') }}">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>




    <title>Starbhak Kelulusan</title>
</head>

<body>
  
      @yield('content')
      <div class="loader">
        <div class="justify-content-center jimu-primary-loading"></div>
      </div>   


    <script src="{{ asset('assets/js/home.js') }}" defer></script>
    <script src="{{ asset('assets/js/loader.js') }}" defer></script>
</body>


</html>