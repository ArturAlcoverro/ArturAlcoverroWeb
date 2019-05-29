@extends('template.project')

@section('webTitle')
    Jordi Barenys Haya
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/barenys.css')}}">
@endsection

@section('md-col')5
@endsection

@section('title')
    <img class="title si-contrast m-auto" src="{{asset('/assets/imgs/barenysLogo.svg')}}" alt="">
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
@endsection

@section('subtitle')
{{-- <p class="subtitle">Meet the ilustrator Jordi Barenys</p> --}}

@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/barenyswp.png')}}" alt="">
    </div>
@endsection

@section('about-title')
    About Jordi's portfolio
@endsection

@section('about-img')
    <img class="about-img m-auto hide fade-top" src="{{asset('/assets/imgs/Barenys/1.jpg')}}" alt="">
@endsection

@section('about-text')
    <p class="hide fade-left delay">Cleanotes is a note manager for android that I presented for the final project in HNC of multiplatform development. It was my first big project, and I'm so proud of it. It was also my first contact with Android Studio and Java.
        <br><br>Previously this project also had an on-line service and a web page, but actually the server is off. <br><br>You can find the app on <a href="https://play.google.com/store/apps/details?id=com.cleanapps.cep.cleanotes2&gl=ES" target="_blank">Google Play</a>.</p>
@endsection