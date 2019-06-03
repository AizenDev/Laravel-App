<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        
        <div class="content">
            @yield('content')
            @include('inc.messages')
           
        </div>
        
        
    </div>
    <div class="footer">
        <div class="container">
            <h1>Contacts</h1>
            <hr>
            <div class="grid">
                <div class="item"><i class="fas fa-phone fa-2x"></i> <p> 8-800-555-35-35</p> </div>
                <div class="item"><i class="fas fa-envelope fa-2x"></i> <p> mail@foot.com</p>  </div>
                <div class="item"><i class="fas fa-hourglass-start fa-2x"></i> <p> Mon/Sun: 9am-8pm</p>  </div>
                <div class="item"><i class="fas fa-map-marker-alt fa-2x"></i> <p> St.Ramzan,97</p>  </div>
            </div>
            <hr>
            <h1>Social</h1>
            <div class="grid gride">
                    <div class="item"><i class="fab fa-vk fa-4x"></i>  </div>
                    <div class="item"><i class="fab fa-facebook-square fa-4x"></i>   </div>
                    <div class="item"><i class="fab fa-instagram  fa-4x"></i>   </div>
                    <div class="item"><i class="fab fa-twitter-square fa-4x"></i>  </div>
            </div>
            <hr>
        </div>
    </div>



    <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/update_profile.js') }}"></script>
    <script src="{{ asset('js/prod.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/filter.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script type="text/javascript">
        var token = '{{ csrf_token() }}';
    </script>

    
</body>
</html>