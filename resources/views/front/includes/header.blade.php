<header id="header" class="header-area">
    <div class="elkevent-mobile-nav">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{asset('front/img/logo2.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="language">

        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        @if($localeCode != App::getLocale())
        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            <img src="{{asset('front/img/'.$localeCode.'.png')}}">
        </a>
        @endif
        @endforeach

    </div>
    <div class="elkevent-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front/img/logo2.png')}}" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link active">{{__('pages.home')}}</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">{{__('pages.about')}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">{{__('pages.about-us')}}</a></li>
                                <li class="nav-item"><a href="{{url('/about-appex')}}" class="nav-link">{{__('pages.about-appex')}}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{url('/exhibit')}}" class="nav-link">{{__('pages.exhibit')}}</a></li>
                        <li class="nav-item"><a href="{{url('/sponsors')}}" class="nav-link">{{__('pages.sponsors')}}</a></li>
                        <li class="nav-item"><a href="{{url('/posts')}}" class="nav-link">{{__('pages.news')}}</a></li>
                        <li class="nav-item"><a href="{{url('/award')}}" class="nav-link">{{__('pages.award')}}</a></li>

                        <li class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link">{{__('pages.contact-us')}}</a></li>
                    </ul>

                    <div class="others-option">
                        <ul>
                            <li>
                                <a href="{{url('/sponsors')}}" class="btn btn-primary">{{__('pages.be-sponsor')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</header>