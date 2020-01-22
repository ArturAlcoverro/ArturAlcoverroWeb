@extends('template.project')

@section('webTitle')
    ARTIO
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/artio.css')}}">
    <script src="{{asset('/js/video.js')}}"></script>
@endsection

@section('md-col')5
@endsection

@section('title')
    <img class="title si-contrast" src="{{asset('/assets/imgs/artioLogoFull.svg')}}" alt="logo Artio">
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
   @lang('artio.eslogan')
@endsection

@section('subtitle')
@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/Artio/1.png')}}" alt="screenshot artio">
    </div>
@endsection

@section('about-title')
    @lang('artio.about-title')
@endsection

@section('about-img')
    <img class="about-img mx-auto hide fade-top" src="{{asset('/assets/imgs/Artio/2.png')}}" alt="screenshot riddle">
    <img class="about-img my-4 mx-auto hide fade-top" src="{{asset('/assets/imgs/Artio/3.png')}}" alt="screenshot riddle">

@endsection

@section('about-text')
    <p class="hide fade-left delay">
        @lang('artio.about-text1')
            <br>
            <br>
        @lang('artio.about-text2')
    </p>
    <a class="hide fade-left delay" target="_blank" href="http://www.abp-politecnics.com/2019/daw/projecte02/dw01/public/">@lang('artio.about-tip1')</a>
    <a class="hide fade-left delay" target="_blank" href="http://www.abp-politecnics.com/2019/daw/projecte02/dw01/public/login">@lang('artio.about-tip2')</a>
    <p class="hide fade-left delay tip">@lang('artio.about-tip3')</p>

@endsection

@section('demo')
<div class="container demo">
    <div class="row hide fade-top">
        <h2 class="about-title text-center w-100">@lang('artio.video-title')</h2>
        <div class="col-12">
            <video id="video-artio" controls>
                <source src="{{asset('/assets/videos/demo.mp4')}}" type="video/mp4">
                Your browser does not support video.
              </video>
        </div>
        <div class="col-12 video-buttons">
            <button data-time="6" data-end="74">@lang('artio.video-button1')</button>
            <button data-time="74" data-end="177">@lang('artio.video-button2')</button>
            <button data-time="177" data-end="236">@lang('artio.video-button3')</button>
            <button data-time="236" data-end="307">@lang('artio.video-button4')</button>
            <button data-time="307" data-end="433">@lang('artio.video-button5')</button>
            <p class="mt-3 font-weight-bold">@lang('artio.video-tip')</p>
        </div>
    </div>
</div>
@endsection
