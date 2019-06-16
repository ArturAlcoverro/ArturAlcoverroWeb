<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/imgs/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.css')}}">
    <link rel="stylesheet" href="{{asset('/css/about-page.css')}}">
    <link rel="stylesheet" href="{{asset('/css/hide.css')}}">

    <script src="{{asset('/js/libraries/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/index.js')}}"></script>
    <script src="{{asset('/js/libraries/popper.min.js')}}"></script>
    <script src="{{asset('/js/libraries/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/hide.js')}}"></script>


</head>
<body>
    <div class="container">
        <div class="row hide fade-top">
            <h1>PERSONAL DATA</h1>
            <div class="col-12 col-md-3 mb-3">
                    <img class="profile" src="{{asset('/assets/imgs/profile.jpg')}}" alt="profile-img">
                </div>
            <div class="col-12 col-lg-6">
                <p>Artur Alcoverro Pastó</p>
                <p>From December 21, 1998</p>
                <p>Barcelona</p>
                <p>606684412</p>
                <p>artur.bcn1998@gmail.com</p>
            </div>

        </div>
        <div class="row hide fade-top mt-5">
            <h1>EDUCATION</h1>
            <div class="col-12 ul">
                <ul>
                    <li>
                        <b>Batxillerat tecnològic:</b> Col·legi Sta. Caterina de Siena - Dominiques d'Horta
                    </li>
                    <li>
                        <b>Higher degree of multiplatform development:</b> Centre d'Estudis Politècnics
                    </li>
                    <li>
                        <b>Higher degree of web development:</b> Centre d'Estudis Politècnics
                    </li>
                </ul>
            </div>
        </div>
        <div class="row hide fade-top mt-5">
                <h1>EXPERIENCE</h1>
                <div class="col-12 ul">
                    <ul>
                        <li>
                            <b>1 year junior developer:</b> Telematel (Currently working)
                        </li>
                    </ul>
                </div>
        </div>
        <div class="row hide fade-top mt-5">
                <h1>SKILLS</h1>
                <div class="col-12 ul">
                    <h2>Hard Skills</h2>
                    <ul>
                        <li>
                            <b>Programming language:</b> C, C#, Java, Bash, JavaScript, PHP, Progress ABL.
                        </li>
                        <li>
                            <b>Frameworks:</b> Laravel, Android Studio.
                        </li>
                        <li>
                            <b>Web libraries:</b> Bootstrap, Jquery, Datatables.
                        </li>
                        <li>
                            <b>Datatables:</b> SQL.
                        </li>
                        <li>
                            <b>Markup Language:</b> JSON, XML, HTML, CSS, XSLT.
                        </li>
                    </ul>

                    <h2>Soft Skills</h2>
                    <ul>
                        <li>
                            <b>Teamwork.</b>
                        </li>
                        <li>
                            <b>Flexibility.</b>
                        </li>
                        <li>
                            <b>Responsibility.</b>
                        </li>
                        <li>
                            <b>Lidership</b>
                        </li>
                        <li>
                            <b>Hardworking</b>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
    <section class="back">
        <a class="no-contrast" href="{{url('/#work')}}"><img src="{{asset('/assets/imgs/back.svg')}}" alt="back-btn"></a>
    </section>
</body>
</html>
