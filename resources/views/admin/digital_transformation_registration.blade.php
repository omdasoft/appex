@extends('layouts.admin')
@section('title')
زوار ملتقي التحول الرقمي
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">زوار ملتقي التحول الرقمي</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">زوار ملتقي التحول الرقمي

                            </li>
                            <li class="breadcrumb-item active">عرض الكل
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
                                <h4 class="card-title">زوار ملتقي التحول الرقمي</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                                    @if(count($registrations) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-de mb-0" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th>الاسم</th>
                                                    <th>البريد</th>
                                                    <th>الهاتف</th>
                                                    <th>تاريخ التسجيل</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($registrations as $registration)
                                                <tr>
                                                    <td>{{$registration->name}}</td>
                                                    <td>{{$registration->email}}</td>
                                                    <td>{{$registration->phone}}</td>
                                                    <td>{{$registration->date}}</td>
                                                    <td><a href="{{route('admin.digital_transformation_visitiors.delete',$registration->id)}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
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