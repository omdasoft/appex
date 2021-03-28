@extends('layouts.front')
@section('title')
{{__('pages.contact-us')}}
@endsection
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <h1>{{__('pages.contact-us')}}</h1>
        <ul>
            <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
            <li>{{__('pages.contact-us')}}</li>
        </ul>
    </div>
</div>
<!-- End Page Title Area -->
<!-- End Contact Area -->
<section class="contact-area ptb-120">
    <div class="container">
            @if(Session::has('success'))
                <div class="row mt-1 mb-1">
                    <div class="col-md-12 alert alert-success text-center">{{Session::get('success')}}</div>
                </div>
            @endif
        <div class="section-title">
            <h2>{{__('pages.contact-us')}}</h2>
            <div class="bar"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>

                    <div class="content">
                        <h4>{{__('pages.phone-label')}}</h4>
                        <p><a href="#">918135361 (249+)</a></p>
                        <p><a href="#">123823672 (249+)</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-email"></i>
                    </div>

                    <div class="content">
                        <h4>{{__('pages.email-label')}}</h4>
                        <p><a href="#">info@appex.com </a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-world"></i>
                    </div>

                    <div class="content">
                        <h4>{{__('pages.contact-location')}}</h4>
                        <p>{{__('pages.place')}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row h-100 align-items-center contact-form">
            <div class="col-lg-4 col-md-12">
                <div class="leave-your-message">
                    <h3>{{__('pages.leave-msg')}}</h3>
                    <p>{{__('pages.any-questions')}}</p>

                    <div class="stay-connected">
                        <h3>{{__('pages.stay-in-touch')}}</h3>
                        <ul>
                            <li>
                                <a
                                    href="https://m.facebook.com/story.php?story_fbid=102199861894334&substory_index=0&id=102196081894712">
                                    <i class="icofont-facebook"></i>

                                    <span>{{__('pages.contact-facebook')}}</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/appex_sud?s=09">
                                    <i class="icofont-twitter"></i>

                                    <span>{{__('pages.contact-twitter')}}</span>
                                </a>
                            </li>

                            <!--li>
                                <a href="#">
                                    <i class="icofont-instagram"></i>

                                    <span>إينستاجرام</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-linkedin"></i>

                                    <span>تابعني على</span>
                                </a>
                            </li -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <form action="{{route('send-message')}}" method="post" class="mt-5">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">{{__('pages.name-label')}} *</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" required>
                                @error('name')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="email">{{__('pages.email-label')}} *</label>
                                <input type="email" class="form-control" v-model="form.email" name="email" id="email" value="{{old('email')}}" required>
                                @error('email')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="subject">{{__('pages.contact-form-subject')}} *</label>
                                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}" required>
                                @error('subject')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="phone">{{__('pages.phone-label')}} *</label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}" required>
                                @error('phone')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="msg">{{__('pages.contact-form-message')}} *</label>
                                <textarea name="msg" class="form-control" id="msg" cols="30" rows="4" required>{{old('msg')}}</textarea>
                                @error('msg')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <button type="submit" class="btn btn-primary">{{__('pages.contact-form-send')}}</button>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map>
    <div id="map"></div>
    <End Map -->
@endsection