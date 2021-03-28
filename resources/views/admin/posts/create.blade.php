@extends('layouts.admin')
@section('title')
اضافة خبر جديد
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاخبار </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الاخبار
                                </li>
                                <li class="breadcrumb-item active">اضافة خبر جديد
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اضاقة خبر جديد</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <form action="{{route('admin.posts.post')}}" method="post" class="mt-5 text-right" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6 {{ $errors->has('title_ar') ? ' has-error' : '' }}">
                                                    <label for="title_ar" class="text-right">العنوان (عربي)</label>
                                                    <input type="text" class="form-control" value="{{old('title_ar')}}" name="title_ar" id="title_ar"
                                                           placeholder="ادخل العنوان">
                                                    @error('title_ar')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 {{ $errors->has('title_en') ? ' has-error' : '' }}">
                                                    <label for="title_en" class="text-right">العنوان (english)</label>
                                                    <input type="text" class="form-control" value="{{old('title_en')}}"  name="title_en" id="title_en"
                                                           placeholder="input the title">
                                                    @error('title_en')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 {{ $errors->has('post_ar') ? ' has-error' : '' }}">
                                                    <label for="post_ar" class="text-right">الخبر (عربي)</label>
                                                    <textarea class="form-control" id="post_ar" value="{{old('post_ar')}}" name="post_ar"  rows="15"
                                                              placeholder="اكتب الخبر بالعربي"
                                                              ></textarea>
                                                    @error('post_ar')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 {{ $errors->has('post_en') ? ' has-error' : '' }}">
                                                    <label for="post_en" class="text-right">الخبر (english)</label>
                                                    <textarea class="form-control" id="post_en" value="{{old('post_en')}}" name="post_en"  rows="15"
                                                              placeholder="post in english"
                                                              ></textarea>
                                                    @error('post_en')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 {{ $errors->has('image') ? ' has-error' : '' }}">
                                                    <label for="image">ارفق الصورة </label>
                                                    <input type="file" class="form-control"  name="image" id="imag">
                                                    @error('image')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-md-6">
                                                    <button  type="submit" class="btn btn-primary">اضافة</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

