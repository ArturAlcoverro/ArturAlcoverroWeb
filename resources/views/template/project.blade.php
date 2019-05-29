<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('webTitle')</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/imgs/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('/css/project.css')}}">
    <link rel="stylesheet" href="{{asset('/css/hide.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:700|Major+Mono+Display|Bree+Serif|Roboto"
        rel="stylesheet">
    <script src="{{asset('/js/libraries/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/libraries/popper.min.js')}}"></script>
    <script src="{{asset('/js/libraries/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/hide.js')}}"></script>
    <script src="{{asset('/js/master.js')}}"></script>

    @yield('head')

</head>
<body>
    <section id="main">
        <button id='acces' class="acces-bg"></button>
        <div class="container">
            <div class="row main">
                <div class="col-md-@yield('md-col') col-12">
                    <div class="logo hide fade-right delay">
                        @yield('title')
                        <p class="eslogan">@yield('eslogan')</p>
                        @yield('subtitle')
                    </div>
                </div>
                @yield('main-img')
            </div>
        </div>

    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 px-5">
                    @yield('about-img')
                </div>
                <div class="col-md-6 col-12 hide fade-left delay about-text">
                    <h2 class="about-title hide fade">@yield('about-title')</h2>
                    @yield('about-text')
                </div>
            </div>
        </div>
        @yield('demo')
    </section>
    <section class="back">
        <a class="@yield('contrast')" href="{{url('/#work')}}"><img src="{{asset('/assets/imgs/back.svg')}}" alt="back-btn"></a>
    </section>
</body>
</html>
