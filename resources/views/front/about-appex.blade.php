@extends('layouts.front')
@section('title')
{{__('pages.about-appex')}}
@endsection
@section('content')

 <!-- Start Page Title Area -->
 <div class="page-title-area item-bg2">
            <div class="container">
                <h1>{{__('pages.about-appex')}}</h1>
                <ul>
                    <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                    <li>{{__('pages.about')}}</li>
                    <li>{{__('pages.about-appex')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
		<section class="about-area-two ptb-120 bg-image">
			<div class="container">
                <div class="section-title">
                    <h2>{{__('pages.about-appex')}}</h2>
                    <div class="bar"></div>
                </div>
				<div class="row h-100 align-items-center">
					<div class="col-lg-6">
						<div class="about-content">
							<h2>{{__('pages.moto')}}</h2>
							<p>{{__('pages.about-appex-content')}}</p>
                            <b><i class="icofont-focus"></i> {{__('pages.goals')}}</b>
                                <ul>
                                    <li>{{__('pages.g-1')}}</li>
                                    <li>{{__('pages.g-2')}}</li>
                                    <li>{{__('pages.g-3')}}</li>
                                    <li>{{__('pages.g-4')}}</li>
                                    <li>{{__('pages.g-5')}}</li>
                                    <li>{{__('pages.g-6')}}</li>
                                    <li>{{__('pages.g-7')}}</li>
                                    <li>{{__('pages.g-8')}}</li>
                                    <li>{{__('pages.g-9')}}</li>
                                </ul>

							<div class="signature mb-0">
								<img src="{{asset('front/img/signature.png')}}" alt="image">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="about-image">
							<img src="{{asset('front/img/about-appex.png')}}" class="about-img1" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start Why Choose Us Area -->
		<section class="why-choose-us-two">
			<div class="row mt-5 mb-5 h-100 align-items-center">


                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-unique-idea"></i> {{__('pages.idea')}} </h3>
                        <p>{{__('pages.idea-content')}}</p>
                        <span>01</span>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-gears"></i> {{__('pages.official-supervision')}} </h3>
                        <p>{{__('pages.official-supervision-content')}}</p>

                        <span>02</span>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-focus"></i>{{__('pages.our-moto')}}</h3>
                        <p>{{__('pages.our-moto-content')}}</p>

                        <span>03</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0">
                    <div class="why-choose-content">
                        <h3><i class="icofont-checked"></i> {{__('pages.implementing-agency')}}</h3>
                        <p>{{__('pages.implementing-agency-content')}}</p>

                        <span>04</span>
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
                        <span>{{__('pages.do-not-hesitate')}}</span>
                        <h3>{{__('pages.global')}}</h3>
                    </div>

                    <div class="col-lg-4 text-right">
                        <a href="{{url('/exhibit')}}" class="btn btn-secondary">{{__('pages.exhibit')}} </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA Area -->
         <!-- Start partner Area -->
         <?php  $active_exhibitors = \App\Models\Exhibitor::with('wing')->where('status',1)->paginate(12); ?>
    @if(count($active_exhibitors) > 0)
        <section class="partner-area ptb-120 bg-image">
            <div class="container">
                <div class="section-title">
                    <h2>{{__('pages.exhibitors')}}</h2>
                    <div class="bar"></div>
                </div>

                <div class="row align-items-center partner-slides owl-carousel owl-theme">
                    @foreach($active_exhibitors as $ex)
                        <div class="col-lg-12">
                            <div class="partner-box ">
                                <div class="content">
                                    <img src="/uploads/exhibitors/logos/<?= $ex->logo ?>" alt="image">
                                    <h4>{{App::getLocale() == 'ar'? $ex->company:$ex->company_en}}</h4>
                                    <p><i class="icofont-location-pin text-center"></i> <b>{{getWingName($ex->wing)}}</b></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- End partner Area -->
@endsection