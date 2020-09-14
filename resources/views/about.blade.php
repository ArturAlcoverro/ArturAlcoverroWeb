<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('about.title')</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/imgs/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/master.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/about-page.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="{{asset('/js/libraries/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/index.min.js')}}"></script>
    <script src="{{asset('/js/libraries/popper.min.js')}}"></script>
    <script src="{{asset('/js/libraries/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</head>
<body>
    <div class="container">
        <div class="row" data-aos="fade">
            <h1>@lang('about.personal-title')</h1>
            <div class="col-12 col-md-3 mb-3">
                    <img class="profile" src="{{asset('/assets/imgs/profile.JPG')}}" alt="profile-img">
                </div>
            <div class="col-12 col-lg-6">
                <p>@lang('about.full-name')</p>
                <p>@lang('about.born-date')</p>
                <p>@lang('about.city')</p>
                <p>@lang('about.mail')</p>
            </div>

        </div>
        <div class="row mt-5" data-aos="fade">
            <h1>@lang('about.education-title')</h1>
            <div class="col-12 ul">
                <ul>
                    <li>
                        <b>@lang('about.education-1-1')</b>@lang('about.education-1-2')
                    </li>
                    <li>
                        <b>@lang('about.education-2-1')</b>@lang('about.education-2-2')
                    </li>
                    <li>
                        <b>@lang('about.education-3-1')</b>@lang('about.education-3-2')
                    </li>
                    <li>
                        <b>@lang('about.education-4-1')</b>@lang('about.education-4-2')
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-5" data-aos="fade">
                <h1>@lang('about.experience-title')</h1>
                <div class="col-12 ul">
                    <ul>
                        <li>
                            <b>@lang('about.experience-1-1')</b> @lang('about.experience-1-2')
                        </li>
                    </ul>
                </div>
        </div>
        <div class="row mt-5" data-aos="fade">
                <h1>@lang('about.skills-title')</h1>
                <div class="col-12 ul">
                    <div data-aos="fade">
                        <ul>
                            <li>
                                <b>@lang('about.skills-1-1')</b>@lang('about.skills-1-2')
                            </li>
                            <li>
                                <b>@lang('about.skills-2-1')</b>@lang('about.skills-2-2')
                            </li>
                            <li>
                                <b>@lang('about.skills-3-1')</b>@lang('about.skills-3-2')
                            </li>
                            <li>
                                <b>@lang('about.skills-4-1')</b>@lang('about.skills-4-2')
                            </li>
                            <li>
                                <b>@lang('about.skills-5-1')</b>@lang('about.skills-5-2')
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <section class="back">
        <a class="no-contrast" href="{{url('/#about')}}"><img src="{{asset('/assets/imgs/back.svg')}}" alt="back-btn"></a>
    </section>
</body>
<script>
    AOS.init({
        once: true,
        duration: 1000,
    });
</script>
</html>
