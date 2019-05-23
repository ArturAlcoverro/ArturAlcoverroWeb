<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('webTitle')</title>
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

    @yield('head')

</head>
<body>
    <section id="main">
        <div class="container">
            <div class="row main">
                <div class="col-md-6 col-12">
                    <div class="logo hide fade-right delay">
                        @yield('title')
                        <p class="eslogan">@yield('eslogan')</p>
                        @yield('subtitle')
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="main-img hide fade-top" src="@yield('main-img')" alt="">
                </div>
            </div>
        </div>

    </section>

    <section id="about">
        <h2 class="about-title hide fade">@yield('about-title')</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    @yield('about-img')
                </div>
                <div class="col-md-6 col-12 hide fade-left delay">
                    @yield('about-text')
                </div>
            </div>
        </div>
    </section>
    <section></section>
</body>
</html>
