<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <title>{{config('app.name')}} </title>
    <meta name="description" content="If you’re passionate about caring, we want to hear from you. As the nation’s leading home care specialist, we’re growing fast and are looking for naturally compassionate people to join our team!." />
    <link rel='stylesheet' href="{{URL::asset('/asset/content/css/careers1b26.css?v2')}}">
    <link href="{{URL::asset('/asset/fonts.googleapis.com/css1087.css?family=Raleway:300,400,500,600,700')}}" rel="stylesheet">
    <script src="{{URL::asset('/asset/kit.fontawesome.com/ce5c76f281.js')}}" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{URL::asset('/asset/content/scripts/polyfill.js')}}"></script>
    <link href="{{URL::asset('asset/content/icons/favicon.png')}}" type="image/x-icon" rel="shortcut icon" />
    <link href="{{URL::asset('asset/content/icons/favicon.png')}}" type="image/x-icon" rel="icon" />
    <link rel="preload" href="{{URL::asset('/asset/content/scripts/careers.bundle.js')}}" as="script">

</head>

<body class='careers-site  careers-site--franchise'>
    
    <!-- Header -->
    @includeIf('layouts.header')
    <!-- End Header -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- End Page-Content -->

    <!-- Feader -->
    @includeIf('layouts.footer')
    <!-- End Footer -->

    <script src="{{URL::asset('/asset/content/scripts/js.js')}}"></script>
    <script>
        //this is executed once entire page loaded, as otherwise the default scroll may happen after the JS has run and 'undo' the scroll
        //Is included here to ensure the script is loaded before the rest of the DOM
        window.onload = function() {
            if (window.location.href.split('#').length > 1) {
                let hashedEl = document.getElementById(window.location.href.split('#')[1]);
                if (hashedEl !== undefined && hashedEl !== null) {
                    window.scroll({
                        top: document.getElementById(window.location.href.split('#')[1]).offsetTop - 200,
                        left: 0,
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>
    <script src="{{URL::asset('/asset/Kentico/Scripts/jquery-3.3.1.js')}}"></script>
    <script src="{{URL::asset('/asset/Kentico/Scripts/jquery.unobtrusive-ajax.js')}}"></script>


</body>

</html>