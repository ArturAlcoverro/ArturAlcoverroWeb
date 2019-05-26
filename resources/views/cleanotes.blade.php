@extends('template.project')

@section('webTitle')
    CleaNotes
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/cleanotes.css')}}">
@endsection

@section('md-col')6
@endsection

@section('title')
    <h1 class="title">CLEANOTES</h1>
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
    Keep your notes, organize your life
@endsection

@section('subtitle')
    <p class="subtitle">The notes manager for smartphone with a deep and intuitive organization system</p>
    <a href="https://play.google.com/store/apps/details?id=com.cleanapps.cep.cleanotes2&gl=ES" target="_blank">
        <img class="google-play mt-3" src="{{asset('/assets/imgs/googleplay.png')}}" alt="Get it on Google Play">
    </a>
@endsection

@section('main-img')
    {{-- <div class="col-md-6 col-12 main-img fade" style="background-image: url({{asset('assets/imgs/CleanotesMockup.png')}})"></div> --}}
    <div class="col-md-6 col-12 main-img">
            <img class="hide fade-top" src="{{asset('/assets/imgs/CleanotesMockup.png')}}" alt="">
    </div>
@endsection

@section('about-title')
    About CleaNotes
@endsection

@section('about-img')
    <img class="about-img m-auto hide fade-top" src="{{asset('/assets/imgs/mockupCleanotes2.png')}}" alt="">
@endsection

@section('about-text')
    <p class="hide fade-left delay">Cleanotes is a note manager for android that I presented for the final project in HNC of multiplatform development. It was my first big project, and I'm so proud of it. It was also my first contact with Android Studio and Java.
        <br><br>Previously this project also had an on-line service and a web page, but actually the server is off. <br><br>You can find the app on <a href="https://play.google.com/store/apps/details?id=com.cleanapps.cep.cleanotes2&gl=ES" target="_blank">Google Play</a>.</p>
@endsection
