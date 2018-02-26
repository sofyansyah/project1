<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dkvdaily</title>
  
    <!-- Resource style -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    

    @yield('css_styles')


</head>
<body>
    @include('includes.header')

    @yield('content')
    @include('includes.footer')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    {{-- <script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script> --}}
    @yield('js')
    
</body>

</html>