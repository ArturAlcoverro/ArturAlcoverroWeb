<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artur Alcoverro</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/imgs/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/menu-animation.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/projects.css')}}">
    <link rel="stylesheet" href="{{asset('/css/project-animations.css')}}">
    <link rel="stylesheet" href="{{asset('/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('/css/hide.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:700|Major+Mono+Display|Bree+Serif|Roboto"
        rel="stylesheet">
    <script src="{{asset('/js/libraries/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/index.js')}}"></script>
    <script src="{{asset('/js/libraries/popper.min.js')}}"></script>
    <script src="{{asset('/js/libraries/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/scroll.js')}}"></script>
    <script src="{{asset('/js/project.js')}}"></script>
    <script src="{{asset('/js/hide.js')}}"></script>
    <script src="{{asset('/js/master.js')}}"></script>

</head>

<body>
    <div class="menu-btn">
        <div class="menu-btn-animation"></div>
        <div class="menu-btn-animation"></div>
        <div class="menu-btn-animation"></div>
    </div>
    <div class="menu">
        <div class="menu-list">
            <ul>
                <li>
                    <a href="#main">
                        <p>Main</p>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <p>About</p>
                    </a>
                </li>
                <li>
                    <a href="#work">
                        <p>Work</p>
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <p>Contact</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu-close-space">

        </div>
    </div>
    <div class="content">
        <ul id="navbar" class="navbar-hide">
            <a href="/" id="logoLink" class="logo logo-hide">
                <img src="{{asset('assets/imgs/logo.svg')}}" class="logo">
            </a>
            <li>
                <a href="#main">
                    <p>Main</p>
                </a>
            </li>
            <li>
                <a href="#about">
                    <p>About</p>
                </a>
            </li>
            <li>
                <a href="#work">
                    <p>Work</p>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <p>Contact</p>
                </a>
            </li>
        </ul>
        <button id='acces'></button>
        <section id="main" class="scale-30">
            <p class="no-contrast"><span class="name">Artur</span><br><span class="surname">Alcoverro</span></p>
            <p class="no-contrast">Software & Web Developer</p>
            <a href="#about" class="arrow arrow-animation">
                <img src="{{asset('assets/imgs/arrow.svg')}}" class="arrow-hide arrow">
            </a>
        </section>
        <section id="about">
            <h1>ABOUT ME</h1>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img class="hide fade-top profile-img" src="{{asset('assets/imgs/profile.jpg')}}" alt="">
                    </div>
                    <div class="col-6">
                        <p class="hide fade delay profile-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi a perspiciatis ut animi nulla fugit sit quis aliquid, saepe eius velit voluptates facere delectus ipsam tempore harum. Minima, delectus. </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="work">
            <h1>My work</h1>
            <div class="animations">
                <div class="position-relative h-100">
                    <div class="animation animation-cleanotes">
                        <img src="{{asset('assets/imgs/CleanotesMockup2.png')}}" alt="">
                        <img src="{{asset('assets/imgs/CleanotesMockup.png')}}" alt="">
                    </div>
                    <div class="animation animation-riddle">
                        <img src="{{asset('assets/imgs/Riddle/IMG4.png')}}" alt="">
                        {{-- <img src="{{asset('assets/imgs/RiddleMockup.png')}}" alt=""> --}}
                    </div>
                    <div class="animation animation-barenys">
                        <img src="{{asset('assets/imgs/Barenys/mockupJordi2.png')}}" alt="">
                        <img src="{{asset('assets/imgs/Barenys/mockupJordi.png')}}" alt="">
                    </div>
                    <div class="animation animation-artio">
                        <img src="{{asset('assets/imgs/Artio/mockupArtio.png')}}" alt="">
                        <img src="{{asset('assets/imgs/Artio/mockupArtio2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div id="projects">
                <div class="project cleanotes" data-color="#FFA000" data-name="cleanotes">
                    <a href="{{url('/cleanotes')}}">
                        <img src="{{asset('assets/imgs/cleanotesLogo.svg')}}" width="60%" alt="CleaNotes">
                    </a>
                </div>
                <div class="project riddle" data-color="#40bfa1" data-name="riddle">
                    <a href="{{url('/riddle')}}">
                        <img src="{{asset('assets/imgs/riddleLogo.svg')}}" width="50%" alt="Riddle">
                    </a>
                </div>
                <div class="project barenys" data-color="#CCCCCC" data-name="barenys">
                    <a href="{{url('/barenys')}}">
                        <img src="{{asset('assets/imgs/barenysLogo.svg')}}" width="45%" alt="Jordi Barenys">
                    </a>
                </div>
                <div class="project spam" data-color="#79b61e" data-name="artio">
                    <a href="{{url('/artio')}}">
                        <img src="{{asset('assets/imgs/artioLogo.svg')}}" width="30%" alt="Artio">
                    </a>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1>CONTACT</h1>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-lg-6 rrss">
                        <a href="https://www.instagram.com/artur_alcoverro/" target="_blank" class="rs instagram"></a>
                        <a href="https://twitter.com/ArturAlcoverro" target="_blank" class="rs twitter"></a>
                        <a href="https://www.linkedin.com/in/artur-alcoverro-9b5823179/" target="_blank" class="rs linkedin"></a>
                        <a href="mailto:artur.bcn1998@gmail.com" target="_blank" class="rs gmail"></a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                        <label for="name">NAME*</label>
                          <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                        </div>
                        <div class="form-group">
                        <label for="email">EMAIL*</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                        </div>
                        <div class="form-group">
                        <label for="subject">SUBJECT*</label>
                            <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subject">
                        </div>
                        <div class="form-group">
                          <label for="message">MESSAGE*</label>
                          <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                        </div>
                        <button class="send-btn">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>


</html>
