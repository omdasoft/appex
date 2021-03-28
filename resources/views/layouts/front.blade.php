<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/elkevent/rtl/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 06:01:52 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description"
        content=" ابيكس معرض السودان الاول لتطبيقات الموبايل والخدمات الإلكترونية يهدف الي تسليط الضوء علي اهمية التحول الرقمي وفوائده من توفير للجهد والمال والزمن وحماية الاقتصاد وتوفير بيئة ايجابية ومتميزه تسهم في نشر ثقافة التعامل الإلكتروني ">
    <meta name="keywords"
        content="معرض السودان الاول ، تطبيقات الموبايل ، الخدمات الإلكترونية ، معرض السودان ، تكنولوجيا المعلومات ، appex ، mobile applications ، sudan exhibitor">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{asset('front/css/meanmenu.css')}}">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/icofont.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <!-- Magnific Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/odometer.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/validation/screen.css')}}">

    <!-- RTL CSS -->
    @if(App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('front/css/rtl.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('front/css/ltr.css')}}">
    @endif
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('front/img/favicon.png')}}" />
    <script>
window.default_locale = "{{ config('app.locale') }}";
window.fallback_locale = "{{ config('app.fallback_locale') }}";
</script>
    @yield('og')
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    <!-- Preloader 
		<div class="preloader">
			<div class="loader"></div>
		</div>
		< End Preloader -->

    <!-- Start Navbar Area -->
    @include('front.includes.header')
    <!-- End Navbar Area -->

    @yield('content')

    <!-- Start Footer Area -->
    @include('front.includes.footer')
    <!-- End Footer Area -->
    <div id="app">
        <digital-registiration-component></digital-registiration-component>
        <registiration-component></registiration-component>
    </div>
   
    <!-- Back Top top -->
    <div class="back-to-top">{{__('pages.top')}}</div>
    <!-- End Back Top top -->
    <script src="{{mix('js/app.js')}}"></script>
    <!-- JQuery Min JS -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <!-- Popper Min JS -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.validate.min.js')}}"></script>

    <!-- Bootstrap Min JS -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- MeanMenu JS -->
    <script src="{{asset('front/js/jquery.meanmenu.js')}}"></script>
    <!-- WoW Min JS -->
    <script src="{{asset('front/js/wow.min.js')}}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Appear Min JS -->
    <script src="{{asset('front/js/jquery.appear.min.js')}}"></script>
    <!-- Lax JS -->
    <script src="{{asset('front/js/lax.js')}}"></script>
    <!-- Odometer Min JS -->
    <script src="{{asset('front/js/odometer.min.js')}}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!-- AjaxChimp JS -->
    <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>

    
    <!-- Elkevent Map JS -->
    <script src="{{asset('front/js/elkevent-map.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('front/js/lang.'.App::getLocale().'.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    @yield('script')

</body>

</html>