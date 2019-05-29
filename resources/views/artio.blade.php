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
    <img class="title si-contrast" src="{{asset('/assets/imgs/artioLogo.svg')}}" alt="">
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
   <br>Donations Manager for SPAM.
@endsection

@section('subtitle')
@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/Artio/1.png')}}" alt="">
    </div>
@endsection

@section('about-title')
    About Artio
@endsection

@section('about-img')
    <img class="about-img m-auto hide fade-top" src="{{asset('/assets/imgs/Artio/2.png')}}" alt="">
@endsection

@section('about-text')
    <p class="hide fade-left delay">Artio is a donation manager developed for the NGO SPAM (Protective society of Mataró).
        This web application is formed by a public and a private part. The public part is accessible to everyone and allows you to see the donations received by the NGO.
The private part is the manager, which only SPAM workers can access
    </p>
    <a tarjet="_blank" href="http://www.abp-politecnics.com/2019/daw/projecte02/dw01/public/">Public part.</a>

@endsection

@section('demo')
<div class="container demo">
    <div class="row">
        <h2 class="about-title text-center w-100">Demo private part</h2>
        <div class="col-12">
            <video id="video-artio" controls>
                <source src="{{asset('/assets/videos/demo.mp4')}}" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
        </div>
        <div class="col-12 video-buttons">
            <button data-time="5">Basic functions</button>
            <button data-time="74">Create donation</button>
            <button data-time="177">Edit donation</button>
            <button data-time="236">Filter donation</button>
            <button data-time="307">Create chart</button>
        </div>
    </div>
</div>
@endsection