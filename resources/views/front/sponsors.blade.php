@extends('layouts.front')
@section('title')
   {{__('pages.sponsors')}}
@endsection
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
       
            <h1>{{__('pages.sponsors')}}</h1>
            <ul>
                <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                <li>{{__('pages.sponsors')}}</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Sponsors Area -->
   
    @if(count($diamond_sponsors) > 0 or count($golden_sponsors) > 0)
        <section class="partner-area ptb-120">
            <div class="container">
         
                <div class="section-title">
                    <span>{{__('pages.check-who')}}</span>
                    <h2>{{__('pages.sponsors')}}</h2>
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
                                            <img src="/appex/public/uploads/sponsors/logos/<?= $d->logo ?>" alt="image" style="width: 150px!important;height: 70px!important;">
                                            <img src="/appex/public/uploads/sponsors/logos/<?= $d->logo ?>" alt="image" style="width: 150px!important;height: 70px!important;">
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
                                            <img src="/appex/public/uploads/sponsors/logos/<?= $g->logo ?>" alt="image" style="width: 150px!important;height: 70px!important;">
                                            <img src="/appex/public/uploads/sponsors/logos/<?= $g->logo ?>" alt="image" style="width: 150px!important;height: 70px!important;">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- End Sponsors Area -->
    @endif
    <!-- Start Pricing Area -->
    <section class="pricing-area ptb-120">
        <div class="container">
        @if(Session::has('success'))
                <div class="row mt-1 mb-1">
                    <div class="col-md-12 alert alert-success text-center">{{Session::get('success')}}</div>
                </div>
            @endif
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
    <!--Start Sponsors form area-->

    <section class="sponsors-form ptb-120">
        <div class="container">
            <div class="section-title">
                <h2>{{__('pages.be-sponsor')}}</h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card text-center">
                    <div class="card-header text-center">
			<h5 class="text-center"> <i class="icofont-id-card"></i> {{__('pages.sub-form')}} </h5>
	           </div>
	           <div class="card-body">
                    <form action = "{{route('sponsor.post')}}" method="post" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('sponsorship_type') ? ' has-error' : '' }}">
                                <label for="sponsorship_type"> {{__('pages.choose-sponsorship')}}  <span class="req">*</span></label>
                                <select id="sponsorship_type" name="sponsorship_type"  class="form-control" value="{{old('sponsorship_type')}}">
                                    <option value=""> {{__('pages.choose-sponsorship')}}</option>
                                    <option value="{{__('pages.main-sponsor')}}">{{__('pages.main-sponsor')}}</option>
                                    <option value="{{__('pages.diamond-sponsor')}}">{{__('pages.diamond-sponsor')}}</option>
                                    <option value="{{__('pages.golden-sponsor')}}">{{__('pages.golden-sponsor')}}</option>
                                    <option value="{{__('pages.specialized-sponsorships')}}">{{__('pages.specialized-sponsorships')}}</option>
                                </select>
                                @error('sponsorship_type')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('company') ? ' has-error' : '' }}">
                                <label for="company"> {{__('pages.agency-label')}} <span class="req">*</span> </label>
                                <input type="text" class="form-control" value="{{old('company')}}" name="company" id="company" placeholder="{{__('pages.agency-label')}}">
                                @error('company')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('work_nature') ? ' has-error' : '' }}">
                                <label for="work_nature"> {{__('pages.work-nature-label')}} <span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('work_nature')}}" name="work_nature" id="work_nature" placeholder="{{__('pages.work-nature-label')}}">
                                @error('work_nature')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('logo') ? ' has-error' : '' }}">
                                <label for="file">{{__('pages.logo-label')}}<span class="req">*</span></label>

                                <input type="file" class="form-control" id="file" value="{{old('logo')}}" name="logo" placeholder="{{__('pages.logo-label')}}">

                                @error('logo')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address"> {{__('pages.address-label')}} <span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address" placeholder="{{__('pages.address-label')}}">
                                @error('address')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">{{__('pages.name-label')}}<span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="{{__('pages.name-label')}}">
                                @error('name')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone"> {{__('pages.phone-label')}} <span class="req">*</span> </label>
                                <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" placeholder="{{__('pages.phone-label')}}">
                                @error('phone')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">{{__('pages.email-label')}}<span class="req">*</span></label>
                                <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="{{__('pages.email-label')}}">
                                @error('email')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-primary">{{__('pages.subscribe')}}</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Sponsors form area-->
@endsection