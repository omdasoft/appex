@extends('layouts.front')
@section('title')
    {{__('pages.exhibit')}}
@endsection
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>{{__('pages.exhibit')}}</h1>
            <span>{{__('pages.participation-excellence')}}</span>
            <ul>
                <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
                <li>{{__('pages.exhibit')}}</li>
            </ul>
        </div>
    </div>
    @include('front.includes.alerts.errors')
    <!-- End Page Title Area -->
    <!--Start exhibit area-->
    <section class="exhibit-area ptb-120">

        <div class="container">
            @if(Session::has('success'))
                <div class="row mt-1 mb-1">
                    <div class="col-md-12 alert alert-success text-center">{{Session::get('success')}}</div>
                </div>
            @endif
            <div class="section-title">
                <h2>{{__('pages.exhibit')}}</h2>
                <div class="bar"></div>
            </div>
            <blockquote class="blockquote mt-2">
                <p>{{__('pages.starting-point')}}</p>
            </blockquote>
            <div class="row">
                <h5 class="text-right mt-3 mb-5"> <i class="icofont-location-pin"></i> {{__('pages.choose-the-suite')}} : </h5>
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#h1" role="tab"
                               aria-controls="home"
                               aria-selected="true">{{__('pages.h1')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#h2" role="tab"
                               aria-controls="profile"
                               aria-selected="false">{{__('pages.h2')}}</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#h3" role="tab"
                               aria-controls="profile"
                               aria-selected="false">{{__('pages.h3')}}</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="h1" role="tabpanel" aria-labelledby="home-tab">
                            <img src="{{asset('front/img/hall1.png')}}">
                        </div>
                        <div class="tab-pane fade" id="h2" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="{{asset('front/img/hall2.png')}}">
                        </div>
                         <div class="tab-pane fade" id="h3" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="{{asset('front/img/hall3.png')}}">
                        </div>
                    </div>
           
                </div>
                <div class="col-lg-12">
                    <h5 class="mt-3 mb-2"> <i class="icofont-dollar"></i>{{__('pages.suite-price')}} : </h5>
                    <p class="mt-2">{{__('pages.constructed')}} - {{__('pages.not-constructed')}}</p>
                    <p class="mt-2 mb-2 ">
                    {{__('pages.con-includes')}}
                    </p>
                    <h6 style="color:darkred" class="mt-4">{{__('pages.payment-method')}}</h6>
                </div>
                <div class="col-lg-12">
                   <div class="card text-center">
                    <div class="card-header text-center">
			<h5 class="text-center"> <i class="icofont-id-card"></i> {{__('pages.sub-form')}}  : </h5>
	           </div>
	           <div class="card-body">

                    <form action = "{{route('exhibit.post')}}" method="post" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('hall') ? ' has-error' : '' }}">
                                <label for="hall"> {{__('pages.choose-hall')}}   <span class="req">*</span></label>
                                <select id="hall" name="hall"  class="form-control" value="{{old('hall')}}" required>
                                    <option value="">{{__('pages.choose-hall')}} .. </option>
                                    @foreach($halls as $hall)
                                        <option value="{{$hall->id}}">{{App::getLocale() == 'ar'? $hall->name:$hall->name_en}}</option>
                                    @endforeach
                                </select>
                                @error('hall')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('wing') ? ' has-error' : '' }}">
                                <label> {{__('pages.choose-suite')}} <span class="req">*</span> </label>
                                <select id="wing"  name="wing" class="form-control" value="{{old('wing')}}" required>
                                    <option value="none" selected>{{__('pages.choose-suite')}} ...</option>
                                </select>
                                @error('wing')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>{{__('pages.suite-type')}} <span class="req">*</span></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input wing_type" type="radio" name="wing_type" id="wing_type1" value="1" checked>&nbsp;&nbsp;
                                    <label class="form-check-label" for="wing_type1">{{__('pages.constructed-label')}}</label>

                                </div>
                                <div class="form-check form-check-inline">

                                    <input class="form-check-input wing_type" type="radio" name="wing_type" id="wing_type2" value="0"> &nbsp;&nbsp;
                                    <label class="form-check-label" for="wing_type2">{{__('pages.not-constructed-label')}}</label>

                                </div>
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('area') ? ' has-error' : '' }}">
                                <label for="area">{{__('pages.space-label')}}<span class="req">*</span></label>
                                <input type="text" class="form-control" name="area" value="{{old('area')}}" id="area"  size="4" required>
                                @error('area')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ammount">{{__('pages.amount-label')}}</label>
                                <input type="text" class="form-control" value="{{old('ammount')}}"  name="ammount" id="ammount" readonly >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('company') ? ' has-error' : '' }}">
                                <label for="company"> {{__('pages.agency-label')}} <span class="req">*</span> </label>
                                <input type="text" class="form-control" value="{{old('company')}}" name="company" id="company" placeholder="{{__('pages.agency-label')}}" required>
                                @error('company')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('work_nature') ? ' has-error' : '' }}">
                                <label for="work_nature">{{__('pages.work-nature-label')}} <span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('work_nature')}}" name="work_nature" id="work_nature" placeholder="{{__('pages.work-nature-label')}}" required>
                                @error('work_nature')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('logo') ? ' has-error' : '' }}">
                                <label for="file">{{__('pages.logo-label')}}<span class="req">*</span></label>

                                <input type="file" class="form-control" id="file" value="{{old('logo')}}" name="logo" placeholder="{{__('pages.logo-label')}}" required>

                                @error('logo')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address"> {{__('pages.address-label')}} <span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address" placeholder="{{__('pages.address-label')}} " required>
                                @error('address')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">{{__('pages.name-label')}} <span class="req">*</span></label>
                                <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="{{__('pages.name-label')}}" required>
                                @error('name')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone">{{__('pages.phone-label')}}  <span class="req">*</span> </label>
                                <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" placeholder="{{__('pages.phone-label')}} " required>
                                @error('phone')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">{{__('pages.email-label')}}  <span class="req">*</span></label>
                                <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="{{__('pages.email-label')}} " required>
                                @error('email')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-primary">{{__('pages.subscribe')}} </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--End exhibit section-->
    <!-- Start partner Area -->
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){

            let total_ammount = 0;
            let price = 6500;

            $('#ammount').val(total_ammount);
            $('.wing_type').on('change',function () {
                if($(this).val() == 1){
                    price = 6500;
                }else{
                    price = 6000;
                }
            });
            $('#area').on('keyup',function(){

                total_ammount = $(this).val()*price;

                $('#ammount').val(total_ammount);
            });

            $('#hall').on('change',function(){

                $id = $(this).val();
                $.ajax({
                    type : 'get',
                    url  : '{{ URL::to('get_wings') }}',
                    data :  {'hall_id':$id},
                    success:function(data){
                        $('#wing').html(data);
                    }
                });

            });

        });

    </script>

@endsection