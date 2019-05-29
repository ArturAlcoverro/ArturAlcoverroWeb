@extends('template.project')

@section('webTitle')
    Riddle
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('/css/riddle.css')}}">
@endsection

@section('md-col')5
@endsection

@section('title')
    <img class="title si-contrast" src="{{asset('/assets/imgs/riddleLogo.svg')}}" alt="">
    {{-- {{asset('/assets/imgs/cleanotesLogo.svg')}} --}}
@endsection

@section('eslogan')
   <br>Discover the attack on Pearl Harbor enjoying incredible games.
@endsection

@section('subtitle')
@endsection

@section('main-img')
    <div class="col-md-7 col-12 main-img fade-top hide">
        <img src="{{asset('/assets/imgs/Riddle/1.jpg')}}" alt="">
    </div>
@endsection

@section('about-title')
    About Riddle
@endsection

@section('about-img')
    <img class="about-img mx-auto hide fade-top" src="{{asset('/assets/imgs/Riddle/4.jpg')}}" alt="">
    <img class="about-img my-4 mx-auto hide fade-top" src="{{asset('/assets/imgs/Riddle/3.jpg')}}" alt="">
@endsection

@section('about-text')
    <p class="hide fade-left delay">With Riddle, you will learn about the Attack on Pearl Harbor while you play amazing and challenging games.
        <br>This website was the first project in a higher degree of web development and it was only possible thanks to the help of my two companions Toni Altamirano and Marc González.
        <br>Riddle is composed of three games that you can play completely free!</p>
        <br>
        <ul class="hide fade-left delay">
            <li><a target="_blank" href="http://daw2a01.abp-politecnics.com/riddle_abp/php/body/enigma1.php">First game (Toni).</a></li>
            <li><a target="_blank" href="http://daw2a01.abp-politecnics.com/riddle_abp/php/body/enigma3.php">Second game (Me)</a></li>
            <li><a target="_blank" href="http://daw2a01.abp-politecnics.com/riddle_abp/php/body/enigma4.php">Third game (Marc).</a></li>
            <li><a target="_blank" href="http://daw2a01.abp-politecnics.com/riddle_abp/php/body/enigma5.php">Final (Toni and me).</a></li>
        </ul>
@endsection
