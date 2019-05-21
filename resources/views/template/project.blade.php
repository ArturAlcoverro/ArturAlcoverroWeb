<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('webTitle')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/project.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:700|Major+Mono+Display|Bree+Serif|Roboto"
        rel="stylesheet">
    <script src="{{asset('/js/libraries/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/libraries/popper.min.js')}}"></script>
    <script src="{{asset('/js/libraries/bootstrap.min.js')}}"></script>
    @yield('head')

</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="@yield('title')" alt="CleaNotes" class="title">
                </div>
            </div>
            <div class="row main">
                <div class="col-md-6 col-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
                <div class="col-md-6 col-12">
                    <img src="@yield('main-img')" alt="">
                </div>
            </div>
        </div>

    </section>

    <section>2</section>
    <section>3</section>
</body>
</html>
