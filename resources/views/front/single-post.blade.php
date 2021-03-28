@extends('layouts.front')
@section('title')
    {{__('pages.view-news')}}
@endsection
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>{{__('pages.view-news')}}</h1>
            <ul>
                <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                <li><a href="{{route('posts')}}">{{__('pages.all-news')}}</a> </li>
                <li>{{__('pages.view-news')}}</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="post-image">
                            <img src="/uploads/posts/<?= $post->image ?>" alt="image">
                        </div>

                        <h3>{{App::getLocale() == 'ar'?$post->title_ar:$post->title_en}}</h3>

                        <div class="blog-meta">
                            <ul>
                                <li><i class="icofont-ui-user"></i> <a href="#">{{__('pages.admin')}}</a></li>
                                <li><i class="icofont-clock-time"></i> {{$post->date}}</li>
                            </ul>
                        </div>

                        <p style="text-aligin:justify !important">{{App::getLocale() == 'ar'?$post->post_ar:$post->post_en}}</p>

                    </div>

                    <div class="post-tag-media">
                        <div class="row h-100 align-items-center">
                            <ul class="social-share">
                                <li><span> {{__('pages.share-news')}} </span></li>
                            </ul>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-602a92538b8b2ff1"></script>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">

                        <?php
                        $other_posts = \App\Models\Post::where('id','!=',$post->id)->orderBy('created_at','desc')->get();
                        ?>
                        @if(count($other_posts) > 0)
                            <div class="widget widget_recent_entries">
                                <h3 class="widget-title">
                                   {{__('pages.related-news')}}
                                </h3>

                                <ul>
                                    @foreach($other_posts as $p)
                                        <li>
                                            <a href="{{route('single-post',$p->id)}}">
                                                <img src="/uploads/posts/<?= $p->image ?>" alt="image">
                                            </a>

                                            <h5><a href="{{route('single-post',$p->id)}}">{{App::getLocale() == 'ar'?$p->title_ar:$p->title_en}}</a></h5>
                                            <h5><a href="#">{{$p->date}}</a></h5>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
@section('og')
    <meta property="og:title" content="{{App::getLocale() == 'ar'?$post->title_ar:$post->title_en}}" />
    <meta property="og:image" content="/appex/public/uploads/posts/<?= $post->image ?>" />
    <meta property="og:type" content="website" />
@endsection