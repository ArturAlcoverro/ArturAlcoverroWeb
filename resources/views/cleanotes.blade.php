@extends('template.project')

@section('webTitle')
    CleaNotes
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/cleanotes.css')}}">
@endsection

@section('title')
    {{asset('/assets/imgs/cleanotesLogo.svg')}}
@endsection

@section('eslogan')
    Keep your notes, organize your life
@endsection

@section('subtitle')
    <p class="subtitle">The notes manager for smartphone with a deep and intuitive organization system</p>
    <a href="https://play.google.com/store/apps/details?id=com.cleanapps.cep.cleanotes2&gl=ES" target="_blank">
        <img class="google-play mt-3" src="{{asset('/assets/imgs/googleplay.png')}}" alt="">
    </a>
@endsection

@section('main-img')
    {{asset('/assets/imgs/CleanotesMockup.png')}}
@endsection
