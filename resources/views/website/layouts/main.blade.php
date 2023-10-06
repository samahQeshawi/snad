<!DOCTYPE html>
<html dir="{{app()->getLocale() == 'ar'? 'rtl' : 'ltr'}}">
<head>
    <!-- Meta Files -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="tag" content="">
    <meta name="keywords" content="">

    <!-- Meta Files -->

    <!-- Title Files -->
    <title> @yield('title') </title>
    <link rel="icon" href="">
    <!-- Title Files -->
    <!-- Css Files -->

    @if(app()->getLocale() === 'en')

        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/splide.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/fontweb.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/styleEn.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css/mediaEn.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/bootstrap.rtl.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/owl.theme.default.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/splide.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/fontweb.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('website/assets/css-rtl/media.css')}}">
    @endif
</head>
<body>

<div class="Top-Section">
    <div class="ContactData">
        <div class="container">
            <div class="d-flex align-items-center justify-content-end">
                <div class="ms-md-4 ms-2">
                    <a href="tell:+966582072591"
                       class="CairoSemiBold text-decoration-none">966582072591+</a>
                </div>
                <div class="ms-md-4 ms-2">
                    <a href="mailto:Info@kashierapp.com"
                       class="CairoSemiBold text-decoration-none">Info@kashierapp.com</a>
                </div>
                <div class="ms-md-4 ms-2">
                    <a href="#"
                       class="CairoSemiBold text-decoration-none">@lang('website.Support')</a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav" id="navbg">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('website/assets/img/Public/Logo.svg')}}">
                </a>
                <div class="d-block d-lg-none">
                    <a href="#"
                       class="btn  d-lg-none d-inline-block text-decoration-none LinkLang pingBold me-3">
                        En
                    </a>
                    <button class="navbar-toggler delShadow" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav CairoSemiBold me-auto margin-Start mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link pingReg active" href="{{route('index')}}">@lang('website.Home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pingReg" href="{{route('index')}}#Department">@lang('website.Sectors')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pingReg" href="{{route('index')}}#Khaher">@lang('website.Kashyrk')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pingReg" href="{{route('index')}}#Clients">@lang('website.Our clients')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pingReg" href="{{route('contact')}}">@lang('website.Contact us')</a>
                        </li>
                    </ul>
                    <div class="btnNav">
                        <a href="#"
                           class="btn text-decoration-none LinkWhats pingBold CariaBold">
                            <span class="ms-2">@lang('website.Subscribe now')</span>
                        </a>
                        <a href="{{ app()->getLocale() == 'ar' ? route('changeLanguage', ['locale' => 'en']) : route('changeLanguage', ['locale' => 'ar']) }}"
                           class=" btn d-lg-inline-block d-none text-center text-decoration-none CariaRegular LinkLang pingBold ms-0 ms-lg-4">
                            @if(app()->getLocale() == 'ar')
                                EN
                            @else
                                AR
                            @endif
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container">
        <div class="Nav-Footer pb-4">
            <div class="row">
                <div class="col-md-3 d-flex flex-column justify-content-between mb-md-0">
                    <div class="mb-4">
                        <a href="{{route('index')}}">
                            <img class="Img-footer" src="{{asset('website/assets/img/Public/LogoFooter.svg')}}">
                        </a>
                        <div class="socialMedia d-flex mt-3">
                            <a href="#" class="text-white text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.413" height="32.413" viewBox="0 0 42.413 42.413">
                                    <path id="Path_45058" data-name="Path 45058" d="M21.206,0A21.206,21.206,0,1,0,42.413,21.206,21.209,21.209,0,0,0,21.206,0Zm9.683,16.534q.014.313.014.629A13.755,13.755,0,0,1,17.054,31.013h0a13.778,13.778,0,0,1-7.461-2.186,9.9,9.9,0,0,0,1.161.067A9.767,9.767,0,0,0,16.8,26.81a4.873,4.873,0,0,1-4.547-3.381,4.851,4.851,0,0,0,2.2-.083,4.869,4.869,0,0,1-3.9-4.771c0-.022,0-.042,0-.062a4.834,4.834,0,0,0,2.2.609,4.872,4.872,0,0,1-1.507-6.5,13.819,13.819,0,0,0,10.033,5.086,4.87,4.87,0,0,1,8.294-4.439,9.763,9.763,0,0,0,3.091-1.181,4.886,4.886,0,0,1-2.14,2.692,9.708,9.708,0,0,0,2.8-.767,9.892,9.892,0,0,1-2.428,2.521Zm0,0" fill="#fff"/>
                                </svg>

                            </a>
                            <a href="#" class="text-white text-decoration-none">
                                <svg id="svgexport-6_31_" data-name="svgexport-6 (31)" xmlns="http://www.w3.org/2000/svg" width="32.413" height="32.413" viewBox="0 0 42.413 42.413">
                                    <path id="Path_45055" data-name="Path 45055" d="M215.118,211.059A4.059,4.059,0,1,1,211.059,207,4.059,4.059,0,0,1,215.118,211.059Zm0,0" transform="translate(-189.853 -189.853)" fill="#fff"/>
                                    <path id="Path_45056" data-name="Path 45056" d="M154.96,138.29a4.032,4.032,0,0,0-2.311-2.311,6.737,6.737,0,0,0-2.261-.419c-1.284-.059-1.669-.071-4.921-.071s-3.637.012-4.921.071a6.741,6.741,0,0,0-2.261.419,4.034,4.034,0,0,0-2.311,2.311,6.74,6.74,0,0,0-.419,2.261c-.059,1.284-.071,1.669-.071,4.921s.013,3.636.071,4.921a6.737,6.737,0,0,0,.419,2.261,4.033,4.033,0,0,0,2.311,2.311,6.729,6.729,0,0,0,2.261.419c1.284.059,1.669.071,4.92.071s3.637-.012,4.921-.071a6.729,6.729,0,0,0,2.261-.419,4.032,4.032,0,0,0,2.311-2.311,6.743,6.743,0,0,0,.419-2.261c.059-1.284.071-1.669.071-4.921s-.012-3.637-.071-4.921A6.729,6.729,0,0,0,154.96,138.29Zm-9.493,13.435a6.253,6.253,0,1,1,6.253-6.253A6.253,6.253,0,0,1,145.468,151.724Zm6.5-11.292a1.461,1.461,0,1,1,1.461-1.461A1.461,1.461,0,0,1,151.968,140.433Zm0,0" transform="translate(-124.262 -124.265)" fill="#fff"/>
                                    <path id="Path_45057" data-name="Path 45057" d="M21.206,0A21.206,21.206,0,1,0,42.413,21.206,21.209,21.209,0,0,0,21.206,0Zm12.1,26.227a8.934,8.934,0,0,1-.566,2.956,6.226,6.226,0,0,1-3.561,3.561,8.94,8.94,0,0,1-2.956.566c-1.3.059-1.713.073-5.02.073s-3.722-.014-5.021-.073a8.94,8.94,0,0,1-2.956-.566,6.226,6.226,0,0,1-3.561-3.561A8.932,8.932,0,0,1,9.1,26.227c-.06-1.3-.074-1.714-.074-5.021s.014-3.722.073-5.02a8.935,8.935,0,0,1,.566-2.956A6.231,6.231,0,0,1,13.23,9.669,8.942,8.942,0,0,1,16.186,9.1c1.3-.059,1.713-.073,5.02-.073s3.722.014,5.02.074a8.944,8.944,0,0,1,2.956.565,6.228,6.228,0,0,1,3.561,3.562,8.933,8.933,0,0,1,.566,2.956c.059,1.3.073,1.713.073,5.02S33.369,24.928,33.31,26.227Zm0,0" fill="#fff"/>
                                </svg>

                            </a>
                            <a href="#" class="text-white text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.413" height="32.413" viewBox="0 0 42.413 42.413">
                                    <path id="Path_45054" data-name="Path 45054" d="M21.206,0A21.206,21.206,0,1,0,42.413,21.206,21.209,21.209,0,0,0,21.206,0ZM15.044,32.058H9.879V16.52h5.165ZM12.462,14.4h-.034A2.692,2.692,0,1,1,12.5,9.029a2.693,2.693,0,1,1-.034,5.369Zm21.2,17.66H28.5V23.745c0-2.089-.748-3.514-2.616-3.514a2.827,2.827,0,0,0-2.65,1.889,3.537,3.537,0,0,0-.17,1.26v8.677H17.9s.068-14.08,0-15.538h5.164v2.2a5.127,5.127,0,0,1,4.654-2.565c3.4,0,5.946,2.221,5.946,6.993Zm0,0" fill="#fff"/>
                                </svg>

                            </a>
                            <a href="#" class="text-white text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.413" height="32.413" viewBox="0 0 42.413 42.413">
                                    <path id="Path_45053" data-name="Path 45053" d="M42.413,21.206A21.206,21.206,0,1,0,21.206,42.413c.124,0,.249,0,.373-.008V25.9H17.023v-5.31h4.556v-3.91c0-4.531,2.767-7,6.809-7a37.009,37.009,0,0,1,4.084.207v4.738H29.689c-2.2,0-2.626,1.044-2.626,2.576v3.38h5.26l-.688,5.31H27.063v15.7A21.213,21.213,0,0,0,42.413,21.206Z" fill="#fff"/>
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="CopyRights pt-2 pb-2 CariaRegular d-lg-block d-none">
                        <p class="m-0 pingLight  text-white">
                           @lang('website.All-rights')
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-6  link-footer">
                    <h6 class="mb-4 CariaBold">@lang('website.Quick links')</h6>
                    <div class="Links CariaRegular">
                        <a class="text-decoration-none d-block" href="{{route('index')}}">
                            @lang('website.home')
                        </a>
                        <a class="text-decoration-none d-block" href="{{route('index')}}#Clients">
                            @lang('website.Our clients')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('index')}}#Department">
                            @lang('website.Sectors')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('index')}}#Products">
                            @lang('website.Products')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('contact')}}">
                            @lang('website.Contact us')
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 link-footer">
                    <h6 class="mb-4 CariaBold"> @lang('website.Sectors')</h6>
                    <div class="Links CariaRegular">
                        <a class="text-decoration-none d-block" href="{{route('index')}}#Department">
                            @lang('website.Cafes-restaurants')
                        </a>
                        <a class="text-decoration-none d-block" href="{{route('index')}}#Department">
                            @lang('website.Commercial-shops')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('index')}}#Department">
                            @lang('website.The-catering-sector')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('index')}}#Department">
                            @lang('website.Companies-institutions')
                        </a>

                    </div>
                </div>
                <div class="col-md-3 link-footer">
                    <h6 class="mb-4 CariaBold">@lang('website.Our policy')</h6>
                    <div class="Links CariaRegular">
                        <a class="text-decoration-none d-block" href="{{route('privacyPolicy')}}">
                            @lang('website.Privacy Policy')
                        </a>
                        <a class="text-decoration-none d-block" href="#">
                            @lang('website.Terms and conditions')
                        </a>
                        <a class="text-decoration-none d-block " href="{{route('faq')}}">
                            @lang('website.FAQs')
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="CopyRights pt-2 pb-2 d-lg-none d-block">
        <div class="container">
            <p class="m-0 CariaRegular text-center text-white">
                @lang('website.All-rights')
            </p>
        </div>
    </div>
</div>
<!-- JS Files -->


    <script rel="script" type="text/javascript" src="{{asset('website/assets/js/jquery-3.5.1.min.js')}}"></script>
    @stack('js')
    <script rel="script" type="text/javascript" src="{{asset('website/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/assets/js/main.js')}}"></script>



@stack('script')
</body>
</html>
