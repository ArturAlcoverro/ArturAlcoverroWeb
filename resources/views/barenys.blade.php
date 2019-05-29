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
    <img class="title m-auto" src="{{asset('/assets/imgs/barenysLogo.svg')}}" alt="logo barenys">
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
@endsection

@section('subtitle')
{{-- <p class="subtitle">Meet the ilustrator Jordi Barenys</p> --}}

@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/barenyswp.png')}}" alt="screenshot barenys">
    </div>
@endsection

@section('about-title')
    About Jordi
@endsection

@section('about-img')
    <img class="about-img m-auto hide fade-top" src="{{asset('/assets/imgs/Barenys/1.jpg')}}" alt="screenshot barenys">
@endsection

@section('about-text')
    <p class="hide fade-left delay">Jordi Barenys is an illustrator graduated in Escola Massana.

        <br><br>He is very creative and passionate and was a pride for me create his personal web page.
        <br><br>If you want to know more about Jordi visit <a href="http://www.jordibarenyshaya.com" target="_blank">his portfolio</a>.</p>
@endsection

@section('contrast')
    no-contrast
@endsection
