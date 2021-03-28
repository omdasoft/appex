@extends('layouts.front')
@section('title')
{{__('pages.site-title')}}
@endsection
@section('content')
<!--Start Banner Area-->
<div class="main-banner video-banner">
    <video loop muted autoplay poster="#" class="video-background">
        <source src="{{asset('front/video/promo-video.mp4')}}" type="video/mp4">
    </video>

    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="main-banner-content">
                    <p>{{__('pages.are-you')}} <span>{{__('pages.ready')}}</span>{{__('pages.to-attend')}}</p>
                    <h1> {{__('pages.appex-intro')}} <br> {{__('pages.appex')}}
                        <b>2</b><b>0</b><b>2</b><b>1</b>
                    </h1>
                    <ul>
                        <li>{{__('pages.place')}} <i class="icofont-calendar"></i></li>
                        <li>{{__('pages.time')}} <i class="icofont-compass"></i></li>
                    </ul>
                    <div class="button-box">
                        <a href="{{url('/exhibit')}}" class="btn btn-primary">{{__('pages.exhibit')}}</a>

                        <!--a href="#" class="video-btn popup-youtube"><i
                                    class="icofont-ui-play"></i> شاهد الفيديو</a -->
                        <a href="#" class="btn btn-primary" data-toggle="modal"
                            data-target="#registrationModal">{{__('pages.register')}}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--div class="event-countdown">
        <div id="timer">
            <div id="days"></div>
            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
        </div>
    </div -->

    <div class="shape1"><img src="{{asset('front/img/shapes/1.png')}}" alt="shape1"></div>
    <div class="shape2 rotateme"><img src="{{asset('front/img/shapes/2.png')}}" alt="shape2"></div>
    <div class="shape3 rotateme"><img src="{{asset('front/img/shapes/3.png')}}" alt="shape3"></div>
    <div class="shape4"><img src="{{asset('front/img/shapes/4.png')}}" alt="shape4"></div>
</div>
<!--End Banner Area-->
<section class="blog-area ptb-120 bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <img src="{{asset('front/img/sponsor.png')}}" class="image image-responsive">
            </div>
        </div>
    </div>
</section>
<!-- Start About Area -->
<section class="about-area ptb-120 bg-image">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-lg-7">
                <div class="about-content">
                    <span>{{__('pages.join-event')}}</span>
                    <h2><b>{{__('pages.moto')}}</b></h2>
                    <p>{{__('pages.appex-prev')}}</p>

                    <div class="signature">
                        <img src="{{asset('front/img/signature.png')}}" alt="image">
                    </div>

                    <a href="{{url('/about-appex')}}" class="btn btn-primary">{{__('pages.read-more')}}<i
                            class="icofont-double-right"></i></a>

                    <a href="{{url('/exhibit')}}" class="btn btn-secondary">{{__('pages.exhibit')}}</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-image">
                    <img src="{{asset('front/img/about1.jpg')}}" class="about-img1" alt="image">

                    <img src="{{asset('front/img/about2.png')}}" class="about-img2" alt="image">

                    <img src="{{asset('front/img/shapes/5.png')}}" class="shape-img" alt="image">

                    <a href="#" class="btn btn-primary" data-toggle="modal"
                        data-target="#registrationModal">{{__('pages.register')}}</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<!-- Start Schedule Area -->
@if(App::getLocale() == 'ar')
<section class="schedule-area bg-image ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab">
                    <ul class="tabs">
                        <li><a href="#">
                                اليوم الأول

                                <span>24 مارس 2021</span>
                            </a></li>

                        <li><a href="#">
                                اليوم الثاني

                                <span>25 مارس 2021</span>
                            </a></li>

                        <li><a href="#">
                                اليوم الثالث

                                <span>26 مارس 2021</span>
                            </a></li>

                        <li><a href="#">
                                اليوم الرابع

                                <span>27 مارس 2021</span>
                            </a></li>
							<li><a href="#">
                                اليوم الخامس

                                <span>28 مارس 2021</span>
                            </a></li>
                    </ul>

                    <div class="tab_content">
                        <div class="tabs_item">
                            <ul class="accordion">
                            
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التسجيل</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>8:30 ص</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - التسجيل</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
                                            <i class="icofont-user-suited"></i> المتحدث : أ. إبراهيم عبدالرحمن باخت

                                        </div>

                                        <div class="schedule-info">
                                            <h3>قطاع تكنولوجيا المعلومات الواقع والتحديات</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i> 9:20 ص </li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - الجلسة الإفتتاحية</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
                                            <i class="icofont-user-suited"></i> المتحدث : د. ياسر ميرغني
                                        </div>

                                        <div class="schedule-info">
                                            <h3>تكنولوجيا المعلومات وخدمات المواطنين</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i> 10:00 ص</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - الجلسة الإفتتاحية</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>استراحة</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>10:40 ص</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - استراحة</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
                                            المتحدثون <br>
                                            <i class="icofont-user-suited"></i>
                                            أ. عارف عبدالقادر مدير الحلقة الحوارية
                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            د.حامد االمين
                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            م. محمد الحاج
                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            م. أيمن المدني
                                        </div>

                                        <div class="schedule-info">
                                            <h3>جلسة حوارية فرص الإستثمار في تكنولوجيا المعلومات بالسودان</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>11:10 ص</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - الجلسة الأولي</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>استراحة</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>12:20 ظ</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - استراحة</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
                                            المتحدثون <br>
                                            <i class="icofont-user-suited"></i>
                                            د. عمر المبارك مدير الحلقة الحوارية
                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            أ.د.محمد حسين أبوصالح

                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            د. شيماء الأصم

                                            <br>
                                            <i class="icofont-user-suited"></i>
                                            م. سالي العطا
                                        </div>

                                        <div class="schedule-info">
                                            <h3>جلسة حوارية أثر التحول الرقمي في تحسين بيئة الأعمال</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>1:00 ظ</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - الجلسة الثانية</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التوصيات</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>2:00 ظ</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ملتقي التحول الرقمي في السودان - الجلسة الختامية</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة اتحاد الغرف التجارية شمال مول الواحة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                            <a href="#" data-toggle="modal"
                        data-target="#digitalTransformationRegistrationModal"  class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tabs_item">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التسجيل</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>5:30 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - التسجيل</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>الإفتتاح الرسمي لمعرض السودان الأول لتطبيقات الموبايل والخدمات
                                                الإلكترونية</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>6:30 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - الإفتتاح</p>


                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>إفادات صحفية</h3>

                                            <ul>

                                                <li><i class="icofont-wall-clock"></i>7:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية -إفادات صحفية </p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>ختام اليوم</h3>

                                            <ul>

                                                <li><i class="icofont-wall-clock"></i>9:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - ختام اليوم </p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tabs_item">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التسجيل</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - التسجيل</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>استمرار فعاليات المعرض</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>9:00 - 3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>استمرار فعاليات المعرض</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

								<li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التنافس في جائزة الإبداع التقني</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>6:00 - 4:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>التنافس في جائزة الإبداع التقني</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>ختام اليوم</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>9:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ختام اليوم</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tabs_item">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التسجيل</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - التسجيل</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>استمرار فعاليات المعرض</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>9:00 - 3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>استمرار فعاليات المعرض</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

								<li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التنافس في جائزة الإبداع التقني</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>6:00 - 4:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>التنافس في جائزة الإبداع التقني</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>ختام اليوم</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>9:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ختام اليوم</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
						</div>
						<div class="tabs_item">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>التسجيل</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>معرض السودان الأول لتطبيقات الموبايل والخدمات الإلكترونية - التسجيل</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>استمرار فعاليات المعرض</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>10:00 - 3:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>استمرار فعاليات المعرض</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

								<li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
                                        </div>

                                        <div class="schedule-info">
                                            <h3>الجولة الختامية للمعرض</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>6:15 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>الجولة الختامية للمعرض - مدير عام المركز القومي للمعلومات</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

								<li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">
										المتحدثون <br>
										<i class="icofont-user-suited"></i>
											أ. إبراهيم عبدالرحمن محمد باخت
											<br>
                                            <i class="icofont-user-suited"></i>
                                            أ. علي عبدالقادر
                                            <br>
                                        </div>

                                        <div class="schedule-info">
                                            <h3>الجلسة الختامية للمعرض</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>7:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>القرآن الكريم - النشيد الوطني - فقرات ترفيهية مختلفة :(شعر – غناء - كوميديا) - كلمة شركة بهارج - أ. علي عبد القادر - كلمة مدير عام المركز القومي للمعلومات - أ. إبراهيم عبدالرحمن محمد باخت - التكريم وتوزيع الجوائز</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <div class="author author-multi">

                                        </div>

                                        <div class="schedule-info">
                                            <h3>ختام اليوم</h3>

                                            <ul>
                                                <li><i class="icofont-wall-clock"></i>10:00 م</li>
                                            </ul>
                                        </div>
                                    </a>

                                    <div class="accordion-content">
                                        <p>ختام اليوم</p>

                                        <div class="row h-100 align-items-center">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="location">
                                                    <b>السودان - الخرطوم - قاعة الصداقة</b>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-5 text-right">
                                                <a href="#" class="btn btn-primary">التسجيل الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="btn-box">
                    <a href="{{asset('front/docs/program.pdf')}}" download class="btn btn-primary">تحميل الجدول (PDF)</a>
                </div>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="{{asset('front/img/shapes/1.png')}}" alt="shape1"></div>
    <div class="shape2 rotateme"><img src="{{asset('front/img/shapes/2.png')}}" alt="shape2"></div>
    <div class="shape3 rotateme"><img src="{{asset('front/img/shapes/3.png')}}" alt="shape3"></div>
    <div class="shape4"><img src="{{asset('front/img/shapes/4.png')}}" alt="shape4"></div>
</section>
@endif
<!-- End Schedule Area -->


<!-- Start Events Area -->
<section class="blog-area ptb-120">
    <div class="container">
        <div class="section-title">
            <h2>{{__('pages.related-activities')}}</h2>

            <div class="bg-title lax" data-lax-preset="driftLeft">
                {{__('pages.related-activities')}}
            </div>
            <div class="bar"></div>
        </div>

        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset('front/img/session.png')}}" alt="image"></a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="#">{{__('pages.session')}}</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset('front/img/idea.png')}}" alt="image"></a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="#">{{__('pages.story')}}</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset('front/img/clinic.png')}}" alt="image"></a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="#">{{__('pages.clink')}}</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset('front/img/fun.png')}}" alt="image"></a>
                        </div>
                        <div class="blog-post-content">
                            <h3><a href="#">{{__('pages.entertainment')}}</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{asset('front/img/music.png')}}" alt="image"></a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="#">{{__('pages.musical')}}</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="{{route('front.award')}}"><img src="{{asset('front/img/prize.png')}}"
                                    alt="image"></a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="{{route('front.award')}}">{{__('pages.award')}}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Events Area -->
@if(count($active_exhibitors) > 0)
<section class="funfacts-area ptb-120">
    <div class="container">
        <div class="section-title">
            <h2 style="color:#fff">{{__('pages.exhibitors')}}</h2>
            <div class="bar"></div>
        </div>
        <div class="row align-items-center">
            @foreach($active_exhibitors as $ex)
            <div class="col-md-3 col-xs-6 mb-2">
                <div class="partner-box">
                    <div class="content">
                        <img src="/uploads/exhibitors/logos/<?= $ex->logo ?>" class="d-block" alt="sponsor logo">
                        <h4 style="font-size: 14px">{{App::getLocale() == 'ar'? $ex->company:$ex->company_en}}</h4>
                        <p><i class="icofont-location-pin text-center"></i>
                            <b>{{getWingName($ex->wing)}}</b>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $active_exhibitors->links() }}

    </div>

</section>
@endif
<!-- End FunFacts Area -->
<!-- Start Pricing Area -->
<section class="pricing-area ptb-120">
    <div class="container">
        <div class="section-title">
            <span>{{__('pages.pricing-plan')}}</span>
            <h2>{{__('pages.sponsorships')}}</h2>

            <div class="bg-title lax" data-lax-preset="driftLeft">
                {{__('pages.sponsorships')}}
            </div>

            <div class="bar"></div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="pricing-table-box">
                    <div class="pricingTable-header">
                        <h3 class="title">{{__('pages.main-sponsor')}}</h3>
                        <h6>{{__('pages.be-one')}}</h6>
                    </div>

                    <ul class="pricing-content">
                        <li>{{__('pages.one-side')}}</li>
                        <li>{{__('pages.rights')}}</li>
                        <li>{{__('pages.48-m')}}</li>
                        <li>{{__('pages.distinctive-area')}}</li>
                    </ul>

                    <a href="{{url('/sponsors')}}" class="btn btn-primary">{{__('pages.register-now')}}</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="pricing-table-box">
                    <div class="pricingTable-header">
                        <h3 class="title">{{__('pages.diamond-sponsor')}}</h3>
                        <h6>{{__('pages.be-one')}}</h6>
                    </div>

                    <ul class="pricing-content">
                        <li>{{__('pages.four-sides')}}</li>
                        <li>{{__('pages.rights')}}</li>
                        <li>{{__('pages.24-m')}}</li>
                    </ul>

                    <a href="{{url('/sponsors')}}" class="btn btn-primary">{{__('pages.register-now')}}</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                <div class="pricing-table-box">
                    <div class="pricingTable-header">
                        <h3 class="title">{{__('pages.golden-sponsor')}}</h3>
                        <h6>{{__('pages.be-one')}}</h6>
                    </div>
                    <ul class="pricing-content">
                        <li>{{__('pages.multidirectional')}}</li>
                        <li>{{__('pages.rights')}}</li>
                        <li>{{__('pages.12-m')}}</li>
                    </ul>

                    <a href="{{url('/sponsors')}}" class="btn btn-primary">{{__('pages.register-now')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                <div class="pricing-table-box">
                    <div class="pricingTable-header">
                        <h3 class="title">{{__('pages.specialized-sponsorships')}}</h3>
                        <h6>{{__('pages.be-one')}}</h6>
                    </div>

                    <ul class="pricing-content">
                        <li>{{__('pages.award-sponsorship')}}</li>
                        <li>{{__('pages.mass-ceremony-sponsor')}}</li>
                        <li>{{__('pages.media-sponsor')}}</li>
                        <li>{{__('pages.carrier-sponsor')}}</li>
                    </ul>

                    <a href="{{url('/sponsors')}}" class="btn btn-primary">{{__('pages.register-now')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->

<!-- Start Blog Area -->
@if(count($posts) > 2)
<section class="blog-area ptb-120 bg-image">
    <div class="container">
        <div class="section-title">
            <h2>{{__('pages.last-news')}}</h2>

            <div class="bg-title lax" data-lax-preset="driftLeft">
                {{__('pages.last-news')}}
            </div>

            <a href="{{route('posts')}}" class="btn btn-primary">{{__('pages.all-news')}}</a>

            <div class="bar"></div>
        </div>

        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">

                @foreach($posts as $post)
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="{{route('single-post',$post->id)}}"><img src="/uploads/posts/<?= $post->image ?>"
                                    alt="image"></a>
                        </div>
                        <div class="blog-post-content">
                            <span class="date" style="color:skyblue;">{{$post->date}}</span>
                            <h6 class="mt-2 mb-2"><a href="{{route('single-post',$post->id)}}">
                                    {{App::getLocale() == 'ar'? \Illuminate\Support\Str::limit($post->title_ar, 70, $end='') : \Illuminate\Support\Str::limit($post->title_en, 70, $end='')}}</a>
                            </h6>
                            <a href="{{route('single-post',$post->id)}}" class="read-more-btn">
                                {{__('pages.read-more')}}
                                <i class="icofont-double-right"></i></a>


                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@endif
<!--it award partners-->
<section class="partner-area ptb-120">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="partner-title platinum-sponsor">
                    <h3 class="lax" data-lax-preset="driftRight">{{__('pages.award-partners')}}</h3>
                </div>
            </div>
            <div class="platinum-partner-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/nic.png')}}" title="{{__('pages.partner-nic')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/nic.png')}}" title="{{__('pages.partner-nic')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/nafeer.png')}}" title="{{__('pages.partner-nafeer')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/nafeer.png')}}" title="{{__('pages.partner-nafeer')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/ciec.png')}}" title="{{__('pages.partner-comboni')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/ciec.png')}}" title="{{__('pages.partner-comboni')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/kh.png')}}" title="{{__('pages.partner-khfm')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/kh.png')}}" title="{{__('pages.partner-khfm')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/ztc.png')}}" title="{{__('pages.partner-zafar')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/ztc.png')}}" title="{{__('pages.partner-zafar')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/savannah.png')}}" title="{{__('pages.partner-savana')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/savannah.png')}}" title="{{__('pages.partner-savana')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/21.png')}}" title="{{__('pages.partner-21')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/21.png')}}" title="{{__('pages.partner-21')}}" alt="image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{asset('front/img/award_partiners/carisma.png')}}" title="{{__('pages.prtner-charisma')}}" alt="image">
                            <img src="{{asset('front/img/award_partiners/carisma.png')}}" title="{{__('pages.prtner-charisma')}}" alt="image">
                        </a>
                    </div>
                </div>

                


            </div>
          
        </div>
    </div>
</section>

<!--end it award partners-->
<!-- End Blog Area -->
<!-- Start Sponsors Area -->
@if(count($diamond_sponsors) > 0 or count($golden_sponsors) > 0)

<section class="partner-area ptb-120">

    <div class="container">
        <div class="section-title">
            <span>{{__('pages.check-who')}}</span>
            <h2>{{__('pages.event-sponsors')}}</h2>
            <div class="bar"></div>
        </div>

        <div class="row">
            @if(count($diamond_sponsors) > 0)
            <div class="col-lg-12">
                <div class="partner-title platinum-sponsor">
                    <h3 class="lax" data-lax-preset="driftRight">{{__('pages.diamond-sponsor')}}</h3>
                </div>
            </div>
            <div class="platinum-partner-slides owl-carousel owl-theme">
                @foreach($diamond_sponsors as $d)
                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="/uploads/sponsors/logos/<?= $d->logo ?>" alt="image"
                                style="width: 150px!important;height: 70px!important;">
                            <img src="/uploads/sponsors/logos/<?= $d->logo ?>" alt="image"
                                style="width: 150px!important;height: 70px!important;">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            <div class="col-lg-12">
                <div class="border"></div>
            </div>
            @if(count($golden_sponsors) > 0)
            <div class="col-lg-12">
                <div class="partner-title platinum-sponsor">
                    <h3 class="lax" data-lax-preset="driftRight">{{__('pages.golden-sponsor')}}</h3>
                </div>
            </div>
            <div class="platinum-partner-slides owl-carousel owl-theme">
                @foreach($golden_sponsors as $g)
                <div class="col-lg-12 col-md-12">
                    <div class="partner-item">
                        <a href="#">
                            <img src="/uploads/sponsors/logos/<?= $d->logo ?>" alt="image"
                                style="width: 150px!important;height: 70px!important;">
                            <img src="/uploads/sponsors/logos/<?= $d->logo ?>" alt="image"
                                style="width: 150px!important;height: 70px!important;">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

@endif
<!-- End Sponsors Area -->
@endsection