@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper" id="app">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pencil info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>{{App\Models\Post::count()}}</h3>
                                                <span>الاخبار</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-speech warning font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>{{App\Models\Message::count()}}</h3>
                                                <span>الرسائل</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-bell success font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>{{App\Models\Exhibitor::count()}}</h3>
                                                <span>الاشتراكات</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-support danger font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>{{App\Models\Sponsor::count()}}</h3>
                                                <span>الرعايات</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- latest exhibitor reservation -->
                @if(count($inactive_exhibitors) > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اخر طلبات الاشتراك</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <td>
                                            <a href="{{route('admin.exhibitors.inactive')}}"
                                               class="btn btn-sm round btn-warning btn-glow"> عرض الكل </a>
                                        </td>
                                    </div>
                                </div>
                                <div class="card-content">

                                    <div class="table-responsive">
                                        <table class="table table-de mb-0">
                                            <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th> الجهة</th>
                                                <th>طبيعة العمل</th>
                                                <th>العنوان</th>
                                                <th>الهاتف</th>
                                                <th>البريد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($inactive_exhibitors as $e)
                                                <tr>
                                                    <td>{{$e->name}}</td>
                                                    <td>{{$e->company}}</td>
                                                    <td>{{$e->work_nature}}</td>
                                                    <td>{{$e->address}}</td>
                                                    <td>{{$e->phone}}</td>
                                                    <td>{{$e->email}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            <!-- latest sponsor reservation -->
                @if(count($inactive_sponsors) > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اخر طلبات الرعاية</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <td>
                                            <a href="{{route('admin.sponsors.inactive')}}"
                                               class="btn btn-sm round btn-warning btn-glow"> عرض الكل </a>
                                        </td>
                                    </div>
                                </div>
                                <div class="card-content">

                                    <div class="table-responsive">
                                        <table class="table table-de mb-0">
                                            <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th> الجهة</th>
                                                <th>طبيعة العمل</th>
                                                <th>العنوان</th>
                                                <th>الهاتف</th>
                                                <th>البريد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($inactive_sponsors as $e)
                                                <tr>
                                                    <td>{{$e->name}}</td>
                                                    <td>{{$e->company}}</td>
                                                    <td>{{$e->work_nature}}</td>
                                                    <td>{{$e->address}}</td>
                                                    <td>{{$e->phone}}</td>
                                                    <td>{{$e->email}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            <!-- latest sponsor reservation -->
                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-6">
                        @if(count($messages) > 0)
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> اخر الرسائل</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href="#"
                                           class="btn btn-sm round btn-success btn-glow"> عرض الكل </a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-de mb-0">
                                            <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>البريد</th>
                                                <th>الهاتف</th>
                                                <th>الموضوع</th>
                                                <th>التاريخ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($messages as $message)
                                                    <tr>
                                                        <td>{{$message->name}}</td>
                                                        <td>{{$message->email}}</td>
                                                        <td>{{$message->phone}}</td>
                                                        <td>{{$message->subject}}</td>
                                                        <td>{{$message->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-12 col-xl-6">
                        @if(count($posts) > 0)
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">اخر الاخبار</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <a href="{{route("admin.posts.index")}}" class="btn btn-sm round btn-success btn-glow"> عرض الكل </a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>الصورة</th>
                                            <th>عنوان الخبر</th>
                                            <th>التاريخ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                        <tr class="bg-danger bg-lighten-5">
                                            <td><img src="/appex/public/uploads/posts/<?= $post->image ?>" alt="image" width="100" height="70"></td>
                                            <td><i class="cc BTC-alt"></i> {{$post->title_ar}}</td>
                                            <td>{{$post->date}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/app.js"></script>
@endsection