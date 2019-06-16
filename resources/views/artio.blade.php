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
   Donations Manager for SPAM.
@endsection

@section('subtitle')
@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/Artio/1.png')}}" alt="screenshot artio">
    </div>
@endsection

@section('about-title')
    About Artio
@endsection

@section('about-img')
    <img class="about-img mx-auto hide fade-top" src="{{asset('/assets/imgs/Artio/2.png')}}" alt="screenshot riddle">
    <img class="about-img my-4 mx-auto hide fade-top" src="{{asset('/assets/imgs/Artio/3.png')}}" alt="screenshot riddle">

@endsection

@section('about-text')
    <p class="hide fade-left delay">Artio is a donation manager developed for the NGO SPAM (Protective society of Mataró).
        This web application is formed by a public and a private part. The public part is accessible to everyone and allows you to see the donations received by the NGO.
        The private part is the manager, which only SPAM workers can access
        <br>
        <br>
        This is my biggest project and it was only possible thanks to the help of my teammates David Corredera, Xavi Liceran and Samuel Martín.
    </p>
    <a class="hide fade-left delay2" target="_blank" href="http://www.abp-politecnics.com/2019/daw/projecte02/dw01/public/">Public part.</a>
    <a class="hide fade-left delay2" target="_blank" href="http://www.abp-politecnics.com/2019/daw/projecte02/dw01/public/login">Private part (Demo).</a>
    <p class="hide fade-left delay2 tip"> *Email: demo@artio.com // Password: demo123 </p>

@endsection

@section('demo')
<div class="container demo">
    <div class="row hide fade-top">
        <h2 class="about-title text-center w-100">Guide private part</h2>
        <div class="col-12">
            <video id="video-artio" controls>
                <source src="{{asset('/assets/videos/demo.mp4')}}" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
        </div>
        <div class="col-12 video-buttons">
            <button data-time="6" data-end="74">Basic functions</button>
            <button data-time="74" data-end="177">Create donation</button>
            <button data-time="177" data-end="236">Edit donation</button>
            <button data-time="236" data-end="307">Filter donation</button>
            <button data-time="307" data-end="433">Create chart</button>
            <p class="mt-3"><b>*Click the buttons to whatch the funcionality you want.</b></p>
        </div>
    </div>
</div>
@endsection
