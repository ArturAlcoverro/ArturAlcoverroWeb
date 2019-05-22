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

@section('subtitle')
    The notes manager for smartphone with a deep and intuitive organization system
@endsection

@section('main-img')
    {{asset('/assets/imgs/CleanotesMockup.png')}}
@endsection
