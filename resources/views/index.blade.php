<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artur Alcoverro</title>
    <link rel="stylesheet" href="/ArturAlcoverro/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/ArturAlcoverro/css/menu-animation.css">
    <link rel="stylesheet" href="/ArturAlcoverro/css/master.css">
    <link rel="stylesheet" href="/ArturAlcoverro/css/index.css">
    <link rel="stylesheet" href="/ArturAlcoverro/css/projects.css">
    <link rel="stylesheet" href="/ArturAlcoverro/css/project-animations.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:700|Major+Mono+Display|Bree+Serif|Roboto"
        rel="stylesheet">
    <script src="/ArturAlcoverro/js/libraries/jquery-3.3.1.min.js"></script>
    <script src="/ArturAlcoverro/js/index.js"></script>
    <script src="/ArturAlcoverro/js/libraries/popper.min.js"></script>
    <script src="/ArturAlcoverro/js/libraries/bootstrap.min.js"></script>
    <script src="/ArturAlcoverro/js/scroll.js"></script>
    <script src="/ArturAlcoverro/js/project.js"></script>
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
                <img src="/ArturAlcoverro/assets/imgs/logo.svg" class="logo">
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
        <section id="main" class="scale-30">
            <p><span class="name">Artur</span><br><span class="surname">Alcoverro</span></p>
            <p>Software & Web Developer</p>
        </section>
        <section id="about">
        </section>
        <section id="work">
            <h1>My work</h1>
            <div class="animations">
                <div class="animation animation-cleanotes">
                    <img src="assets/imgs/mockupCleanotes3.png" alt="">
                    <img src="assets/imgs/mockupCleanotes4.png" alt="">
                </div>
                <div class="animation animation-cleanotes"></div>
                <div class="animation animation-cleanotes"></div>
                <div class="animation animation-cleanotes"></div>
            </div>
            <div id="projects">
                <div class="project cleanotes" data-color="#FFA000" data-name="cleanotes">
                    <img src="assets/imgs/cleanotesLogo.svg" width="50%" alt="CleaNotes">
                </div>
                <div class="project riddle" data-color="#40bfa1" data-name="riddle">
                    <img src="assets/imgs/riddleLogo.svg" width="45%" alt="Riddle">
                </div>
                <div class="project barenys" data-color="#CCCCCC" data-name="barenys">
                    <img src="assets/imgs/barenysLogo.png" width="45%" alt="Jordi Barenys">
                </div>
                <div class="project spam" data-color="#79b61e" data-name="artio">
                    <img src="assets/imgs/artioLogo.svg" width="30%" alt="Artio">
                </div>
            </div>
        </section>
        <!-- <section id="work">
            <div data-aos="zoom-in" class="project cleanotes">
                <p class="title">CleaNotes</p>
                <p class="text">The notes manager for smartphone with a deep and intuitive organization system</p>
                <img width="50%" class="project-img" src="/ArturAlcoverro/assets/imgs/oneplusCN.png" alt="">
                <img width="50%" class="project-img" src="/ArturAlcoverro/assets/imgs/oneplusCN2.png" alt="">
                <p class="info"></p>
            </div>
            <div data-aos="zoom-in" class="project riddle">
                <img width="50%" class="title" src="/ArturAlcoverro/assets/imgs/riddleLogo.png" alt="">
                <img width="80%" class="project-img" src="/ArturAlcoverro/assets/imgs/riddlewp.png" alt="">
            </div>
            <div data-aos="zoom-in" class="project barenys">
                <img width="80%" class="project-img" src="/ArturAlcoverro/assets/imgs/barenyswp.png" alt="">
            </div>
            <div data-aos="zoom-in" class="project spam"></div>
        </section> -->
        <section id="contact"></section>
    </div>
</body>


</html>