@extends('layouts.front')
@section('title')
    {{__('pages.all-news')}}
@endsection
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>{{__('pages.all-news')}}</h1>
            <ul>
                <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                <li>{{__('pages.all-news')}}</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Blog Area -->

    <section class="blog-area ptb-120 bg-image">
        @if(count($posts) > 0)
        <div class="container">
            <div class="section-title">
                <h2>{{__('pages.all-news')}}</h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog-post">
                                <div class="blog-image">
                                    <a href="{{route('single-post',$post->id)}}"><img src="/uploads/posts/<?= $post->image ?>" alt="image"></a>
                                </div>

                                <div class="blog-post-content">
                                    <span class="date">{{$post->date}}</span>
                                    <h6><a href="{{route('single-post',$post->id)}}">
                                    {{App::getLocale() == 'ar'? \Illuminate\Support\Str::limit($post->title_ar, 70, $end='') : \Illuminate\Support\Str::limit($post->title_en, 70, $end='')}}</a></h6>
                                    </a></h6>
                                    <a href="{{route('single-post',$post->id)}}" class="read-more-btn">{{__('pages.read-more')}} @if(App::getLocale() == 'ar')<i class="icofont-double-left"></i>@else <i class="icofont-double-right"></i>@endif</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
            @else
            <h4 align="center">{{__('pages.no-news')}}</h4>
        @endif
    </section>


    <!-- End Blog Area -->
@endsection