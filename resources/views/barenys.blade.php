@extends('template.project')

@section('webTitle')
    Jordi Barenys Haya
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/barenys.min.css')}}">
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
        <img src="{{asset('/assets/imgs/barenyswp.jpg')}}" alt="screenshot barenys">
    </div>
@endsection

@section('about-title')
    @lang('barenys.about-title')
@endsection

@section('about-img')
    <img class="about-img m-auto hide fade-top" src="{{asset('/assets/imgs/Barenys/1.jpg')}}" alt="screenshot-barenys-1">
    <img class="about-img my-4   mx-auto hide fade-top" src="{{asset('/assets/imgs/Barenys/2.jpg')}}" alt="screenshot-barenys-2">
@endsection

@section('about-text')
    <p class="hide fade-left delay">@lang('barenys.about-text1')

        <br><br>@lang('barenys.about-text2')
        <br><br>@lang('barenys.about-text3')<a href="http://www.jordibarenyshaya.com" target="_blank">@lang('barenys.about-link')</a>.</p>
@endsection

@section('contrast')
    no-contrast
@endsection
