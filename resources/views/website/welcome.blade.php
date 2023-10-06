@extends('website.layouts.main')
@section('title', __('website.Cashier') .'-'. __('website.home') )
@section('content')
    <div class="content">
        <div class="TopBar mt-4 mb-5">
            <div class="container">
                <div class="DataBar text-white position-relative">
                    <div class="supportPhone text-end position-absolute
                        d-flex align-items-center justify-content-end">
                        <i class="fal fa-phone me-3"></i>
                        <div class="text-start">
                            <p class="CariaRegular mb-1 def">@lang('website.Direct support')</p>
                            <p class="CairoSemiBold m-0">966582072591</p>
                        </div>
                    </div>
                    <div class="describeSanad">
                        <div class="row">
                            <div class="col-lg-7 mb-md-0 mb-0 order-lg-0 order-1">
                                <h4 class="CairoSemiBold title">
                                    @lang('website.Welcome to')
                                    <span class="golf">@lang('website.Sanad')</span>
                                    - @lang('website.we-provide')
                                </h4>

                                <h4 class="CairoSemiBold desctitle mb-3">
                                    @lang('website.with-provision')
                                </h4>
                                <div class="itemLink">
                                    <a href="#" class="btn tryBtn text-decoration-none CariaBold ">
                                        @lang('website.Try now')
                                    </a>
                                </div>
                                <div class=" mb-md-5 mb-2 text-center mt-2 PlayVid itemLink">
                                    <a href="#" class="btn text-decoration-none CairoSemiBold d-flex align-items-center justify-content-center">
                                            <span class="Img d-flex align-items-center justify-content-center me-2">
                                                <img src="{{asset('website/assets/img/Public/PlayVid.svg')}}">
                                            </span>
                                        <span class="txt text-decoration-underline">@lang('website.Watch video')</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-md-0 mb-3 order-lg-1 order-0 ImgTopBar">
                                <img class="w-100" src="{{asset('website/assets/img/Public/TopImg.svg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="SocialLink d-flex flex-md-column flex-row end-0">
                        <a href="#" class="text-decoration-none d-flex justify-content-center align-items-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-decoration-none d-flex justify-content-center align-items-center">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-decoration-none d-flex justify-content-center align-items-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-decoration-none d-flex justify-content-center align-items-center">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="GoBottom text-center m-auto" id="ScrollBtn">
                        <div class="position-relative">
                            <div class="Line">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="SanadClient" id="Clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 order-md-0 order-1">
                        <div class="owl-carousel owl-client owl-theme" id="ClientSlide">
                            <div class="item h-100">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client1.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client5.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client2.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client6.png')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client3.png')}}">
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client7.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img4">
                                    <img src="{{asset('website/assets/img/client/Client4.png')}}">
                                </div>

                            </div>

                            <div class="item h-100">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client1.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client5.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client2.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client6.png')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client3.png')}}">
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client7.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img4">
                                    <img src="{{asset('website/assets/img/client/Client4.png')}}">
                                </div>

                            </div>

                            <div class="item h-100">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client1.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client5.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client2.png')}}" >
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client6.png')}}">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img1">
                                    <img src="{{asset('website/assets/img/client/Client3.png')}}">
                                </div>
                                <div class="img2">
                                    <img src="{{asset('website/assets/img/client/Client7.png')}}" >
                                </div>
                            </div>
                            <div class="item">
                                <div class="img4">
                                    <img src="{{asset('website/assets/img/client/Client4.png')}}">
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 col-12 order-md-1 order-0 mb-md-0 mb-3 clientTxt
                        text-center d-flex flex-column align-items-center justify-content-center">
                        <h2 class="CariaBold">@lang('website.partners-success')</h2>
                        <p class="CariaRegular">
                            @lang('website.Some stores')
                        </p>
                        <div id="someDots">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Sectors" id="Department">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 SectorsDesc
                        d-flex flex-column justify-content-center align-items-md-start align-items-center">
                        <h3 class="CariaBold">
                            @lang('website.Sectors')
                        </h3>
                        <p class="CairoSemiBold">
                            @lang('website.Whatever-your')
                        </p>
                        <a href="#" class="CariaBold btn ">
                            @lang('website.Order now')
                        </a>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="datasector m-auto d-lg-flex flex-column d-block">
                            <div class="CairoSemiBold d-lg-flex d-block">
                                <div class="dataItem BigItem">
                                    <p class="m-0">
                                        @lang('website.Cafes and restaurants')
                                    </p>
                                    <p class="mb-0">
                                        @lang('website.package-cloud')
                                    </p>
                                </div>
                                <div class="dataItem BigItem">
                                    <p class="m-0">
                                        @lang('website.Commercial shops')
                                    </p>
                                    <p class="mb-0">
                                        @lang('website.package-cloud')
                                    </p>
                                </div>
                            </div>
                            <div class="CairoSemiBold d-lg-flex d-block">
                                <div class="dataItem smallItem">
                                    <p class="m-0">
                                        @lang('website.The catering sector')
                                    </p>
                                    <p class="mb-0">
                                        @lang('website.package-cloud')
                                    </p>
                                </div>
                                <div class="dataItem smallItem">
                                    <p class="m-0">
                                        @lang('website.Companies and institutions')
                                    </p>
                                    <p class="mb-0">
                                        @lang('website.package-cloud')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ExampleProducts" id="Khaher">
            <div class="container">
                <div class="DataExample text-white position-relative">
                    <div class="row">
                        <div class="col-lg-8 order-lg-0 order-1">
                            <div class="data">
                                <h4 class="CariaBold title mb-md-5 mb-3">
                                    @lang('website.range-integrated')
                                </h4>
                                <div class="owl-carousel owl-theme ExampleSlider" id="ExampleSlider">
                                    <div class="item">
                                        <h4 class="CariaBold desctitle mb-4">
                                            @lang('website.Retail-cashier-system')
                                            Retail POS
                                        </h4>
                                        <p class="m-0 CairoSemiBold">
                                            @lang('website.Cashier-system-offers')
                                        </p>
                                    </div>

                                    <div class="item">
                                        <h4 class="CariaBold desctitle mb-4">
                                            @lang('website.Retail-cashier-system')
                                            Retail POS
                                        </h4>
                                        <p class="m-0 CairoSemiBold">
                                            @lang('website.Cashier-system-offers')
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-1 order-0 mb-3 text-center ImgBar">
                            <img src="{{asset('website/assets/img/Public/Example.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Products">
            <div class="container">
                <div class="TopDiv ">
                    <div class="top d-flex justify-content-between align-items-center">
                        <h3 class="CairoSemiBold m-0">
                            @lang('website.Products')
                        </h3>
                        <div class="NavSlider" id="NavSlider">

                        </div>
                    </div>
                    <div class="TypeProduct CairoSemiBold d-flex m-auto">
                        <div class="typeItem me-4 active" data-type="Ared">
                            <span class="">@lang('website.Presentations')</span>
                        </div>
                        <div class="typeItem me-4" data-type="feat">
                            <span class="">@lang('website.Features')</span>
                        </div>
                        <div class="typeItem me-4" data-type="news">
                            <span class="">@lang('website.latest')</span>
                        </div>
                    </div>
                </div>
                <div class="ProductSlider" id="ProductSlider">
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="Item-Box  position-relative">
                            <div class="price CairoSemiBold position-absolute" data-type="Ared">
                                $456.00
                            </div>
                            <div class="ImgPro mb-2">
                                <img src="{{asset('website/assets/img/Products/pro1.png')}}" >
                            </div>
                            <h5 class="Titlepro CariaBold">
                                @lang('website.Point of sale system POS')
                            </h5>
                            <div class="Descpro CairoSemiBold">
                                @lang('website.Cashier-system-offers')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('website.layouts.contactUs')
        @include('website.layouts.address')
    </div>
@endsection

@push('js')
    <script rel="script" type="text/javascript" src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
    <script rel="javascript" type="text/javascript" src="{{asset('website/assets/js/owlcarousel2-filter.min.js')}}"></script>
    <script rel="javascript" type="text/javascript" src="{{asset('website/assets/js/slick.min.js')}}"></script>
@endpush
@push('script')
    <script>

        // Scroll To Service When Click On ScrollBtn
        $("#ScrollBtn").click(function() {
            $('html,body').animate({
                    scrollTop: $(".SanadClient").offset().top},
                'slow');
        });

        $(document).ready(function(){
            if($("#ClientSlide .owl-dots")) {
                $("#ClientSlide .owl-dots").appendTo("#someDots");
            }

            if($("#ProductSlider .btnSlide")) {
                console.log($("#ProductSlider .btnSlide").length);
                $("#ProductSlider .btnSlide").appendTo("#NavSlider");
            }

            window.onresize = function() {
                if($("#ClientSlide .owl-dots")) {
                    $("#ClientSlide .owl-dots").appendTo("#someDots");
                }

                if($("#ProductSlider .btnSlide")) {
                    console.log($("#ProductSlider .btnSlide").length);
                    $("#ProductSlider .btnSlide").appendTo("#NavSlider");
                }
            }

            $('.TypeProduct .typeItem ').on('click', function(ev) {

                ev.preventDefault();
                $('.TypeProduct .typeItem').removeClass('active');
                $(this).addClass('active');

            });
        })




        let DirectionCarousal = document.getElementsByTagName("html")[0].getAttribute("dir");
        let IsDirection;
        if(DirectionCarousal == "rtl") {
            IsDirection = true;
        }else {
            IsDirection = false;
        }
        $("#sliderType").owlCarousel({
            nav:false,
            dots:false,
            rtl:IsDirection,
            responsiveClass:true,
            responsive: {
                0 : {
                    items: 2
                },
                375 : {
                    items: 2
                },
                425: {
                    items: 3
                },
                768 : {
                    items: 3
                },
                992: {
                    items: 4,
                },
                1200 : {
                    items: 5,
                }
            }

        });
        $('#ClientSlide').owlCarousel({
            rtl:IsDirection,
            dots:true,
            nav:false,
            loop:false,
            responsive: {
                0 : {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                600 : {
                    items: 3,
                },
                768: {
                    items: 2,
                },992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                    margin:20
                }
            }

        });
        $('#ExampleSlider').owlCarousel({
            rtl:IsDirection,
            dots:false,
            nav:true,
            navText:['<i class="far fa-angle-right"></i>','<i class="far fa-angle-left"></i>'],
            loop:false,
            items: 1
        });


        const numSlides = $('#ProductSlider .item').length;
        $('#ProductSlider').slick({
            rows: 2,
            dots: false,
            arrows: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            rtl:IsDirection,
            infinite:false,
            prevArrow:'<i class="far fa-angle-right btnSlide"></i>',
            nextArrow:'<i class="far fa-angle-left btnSlide"></i>',
            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }
            ]

        })
    </script>
@endpush
