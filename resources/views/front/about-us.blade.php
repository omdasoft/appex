@extends('layouts.front')
@section('title')
{{__('pages.about-us')}}
@endsection
@section('content')

 <!-- Start Page Title Area -->
 <div class="page-title-area item-bg2">
            <div class="container">
                <h1>{{__('pages.about-us')}}</h1>
                <ul>
                    <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                    <li>{{__('pages.about')}}</li>
                    <li>{{__('pages.about-us')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
		<section class="about-area-three ptb-120 bg-image">
			<div class="container">
				<div class="row h-100 align-items-center">
					<div class="col-lg-4">
                        <div class="about-image">
                            <img src="{{asset('front/img/about-us.png')}}" class="about-img1" alt="image">
                        </div>
					</div>

					<div class="col-lg-8">
						<div class="about-content">
                            <div class="section-title">
                                <h2>{{__('pages.about-us')}}</h2>
                                <div class="bar"></div>
                            </div>
                            <h6>{{__('pages.about-baharej-title')}}</h6>
                            <p>
                                {{__('pages.about-baharej-content')}}
                            </p>

                            <h4 class="mt-2">{{__('pages.our-works')}}</h4>
                            <ul>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.kasala-bluenile')}}</li>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.maintenance')}}</li>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.mother')}}</li>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.red-sea')}}</li>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.dates')}}</li>
                                <li><i class="icofont-long-arrow-right"></i>{{__('pages.our-customers')}} </li>
                            </ul>

							<div class="signature">
								<img src="{{asset('front/img/signature.png')}}" alt="image">
							</div>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start Why Choose Us Area -->
		<section class="why-choose-us-two">
			<div class="row mt-5 mb-5 h-100">
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-unique-idea"></i> {{__('pages.our-vision')}} </h3>
                        <p>{{__('pages.our-vision-content')}}</p>
                        <span>01</span>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-cube"></i>{{__('pages.our-values')}}</h3>
                        <p>

                        {{__('pages.our-values-content')}}
                        </p>

                        <span>02</span>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-users"></i> {{__('pages.work-team')}} </h3>
                        <p>{{__('pages.work-team-content')}}</p>

                        <span>03</span>
                    </div>
                </div>
			</div>
		</section>
        <!-- End Why Choose Us Area -->

        <!-- Start CTA Area -->
        <section class="cta-area">
            <div class="container">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-8">
                        <span>{{__('pages.call-us')}}</span>
                        <h4 class="mt-2" style="color:#fff;line-height:2em;font-weight:200px;">{{__('pages.call-us-content')}}</h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        <a href="#" class="btn btn-secondary">{{__('pages.call-us')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA Area -->
@endsection
