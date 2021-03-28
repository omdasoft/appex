@extends('layouts.front')
@section('title')
{{__('pages.award')}}
@endsection
@section('content')
@section('style')
<style type="text/css">
.table td{
    vertical-align:baseline!important;
}
.sidebar .widget.widget_archive ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 10px;
    height: 10px;
    background: #02a9f2;
    margin-top: -5px;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}

#parteners a i {
    width: 40px;
    height: 40px;
    text-align: center;
    display: inline-block;
    line-height: 40px;
    border: 1px solid #ccc;
    border-radius: 50%;
    margin-right: 10px;
    font-size: 16px;
}

#parteners a i:hover {
    width: 40px;
    height: 40px;
    text-align: center;
    display: inline-block;
    line-height: 40px;
    border: 1px solid #02a9f2;
    border-radius: 50%;
    margin-right: 10px;
    font-size: 17px;
}

.sidebar .widget.widget_archive ul li a:hover {
    color: #02a9f2;
}

.card-body p {
    text-align: justify;
    line-height: 2em;
}

.ptb {
    padding-top: 70px;
    padding-bottom: 70px;
}

@media only screen and (max-width: 767px) {
    ul li {
        font-size: 13px;
        padding-bottom: 10px;
    }

    ul {
        padding: 5px;
    }

    .section-title {
        margin-bottom: 0px;
    }
}
</style>
@endsection

<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <h1>{{__('pages.award')}}</h1>
        <span><i class="icofont-award icofont-2x"></i></span>
        <ul>
            <li><a href="{{url('/')}}">{{__('pages.home')}}</a></li>
            <li>{{__('pages.award')}}</li>
        </ul>
    </div>
</div>
<!-- End Page Title Area -->
<!-- End Contact Area -->
<section class="contact-area ptb">
    <div class="container-fluid" style="padding:30px">
        <div class="section-title">
            <h2>{{__('pages.award')}}</h2>
            <div class="bar"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 mb-5">
                <div class="sidebar">
                    <div class="widget widget_archive">

                        <ul>
                            <li><a href="#about">{{__('pages.about-award')}}</a></li>
                            <li><a href="#goals">{{__('pages.objectives')}}</a></li>
                            <li><a href="#conditions">{{__('pages.award-conditions')}}</a></li>
                            <li><a href="#levels">{{__('pages.stage-of-rivalry')}}</a></li>
                            <li><a href="#awards">{{__('pages.gains-and-prizes')}}</a></li>
                            <li><a href="#team">{{__('pages.award-team')}}</a></li>
                            <li><a href="#judgement">{{__('pages.judgement-comity')}}</a></li>
                            <li><a href="#nafeer_teem">{{__('pages.nafeer-team')}}</a></li>
                            <li><a href="#parteners">{{__('pages.partners')}}</a></li>
                            <li><a href="#apply">{{__('pages.award-apply')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="leftbar award">
                    <div class="card text-center" id="about">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-award"></i>{{__('pages.about-award')}}</h5>
                        </div>
                        <div class="card-body">
                            <h6>{{__('pages.award-intro')}}</h6>
                            <p>
                                {{__('pages.award-content')}}
                            </p>
                            <h6>{{__('pages.award-title')}}</h6>
                            <p>
                                {{__('pages.award-title-content')}}
                            </p>
                            <h6>{{__('pages.award-desc')}}</h6>
                            <p>
                                {{__('pages.award-desc-content')}}
                            </p>
                            <h6>{{__('pages.award-idea')}}</h6>
                            <p>
                                {{__('pages.award-idea-content')}}
                            </p>
                            <h6>{{__('pages.award-targeted')}}</h6>
                            <p>
                                {{__('pages.award-targeted-content')}}
                            </p>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="goals">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-disc"></i>{{__('pages.objectives')}}</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>{{__('pages.obj1')}}</li>
                                <li>{{__('pages.obj2')}}</li>
                                <li>{{__('pages.obj3')}}</li>
                                <li>{{__('pages.obj4')}}</li>
                                <li>{{__('pages.obj5')}}</li>
                                <li>{{__('pages.obj6')}}</li>
                                <li>{{__('pages.obj7')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="conditions">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i
                                    class="icofont-check-circled"></i>{{__('pages.award-conditions')}}</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>{{__('pages.award-cond1')}}</li>
                                <li>{{__('pages.award-cond2')}}</li>
                                <li>{{__('pages.award-cond3')}}</li>
                                <li>{{__('pages.award-cond4')}}</li>
                                <li>{{__('pages.award-cond5')}}</li>
                                <li>{{__('pages.award-cond6')}}</li>
                                <li>{{__('pages.award-cond7')}}</li>

                            </ul>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="levels">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-flag-alt-2"></i>{{__('pages.stage-of-rivalry')}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>{{__('pages.stage1')}} </li>
                                <li>{{__('pages.stage2')}} </li>
                                <li>{{__('pages.stage3')}}</li>
                                <li>{{__('pages.stage4')}}</li>
                                <li>{{__('pages.stage5')}}</li>
                                <li>{{__('pages.stage6')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="awards">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-badge"></i>{{__('pages.gains-and-prizes')}}</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>{{__('pages.gains1')}}</li>
                                <li>{{__('pages.gains2')}}</li>
                                <li>{{__('pages.gains3')}}</li>
                                <li>{{__('pages.gains4')}}</li>
                                <li>{{__('pages.gains5')}}</li>
                                <li>{{__('pages.gains6')}}</li>
                                <li>{{__('pages.gains7')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="team">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-users"></i>{{__('pages.award-team')}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stribed">
                                    <thead>
                                        <th>{{__('pages.name-label')}}</th>
                                        <th>{{__('pages.position')}}</th>
                                        <th>{{__('pages.phone-label')}}</th>
                                        <th>{{__('pages.email-label')}}</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{__('pages.mahjoub')}}</td>
                                            <td>{{__('pages.team-leader')}}</td>
                                            <td>0100090641</td>
                                            <td>kabkb14@yahoo.com</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.mohammed-ali')}}</td>
                                            <td>{{__('pages.foreign-affairs')}}</td>
                                            <td>011144498</td>
                                            <td>mohammedaliahmed738@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.abdullah')}}</td>
                                            <td>{{__('pages.media')}}</td>
                                            <td>0127804240</td>
                                            <td>Abo0918424677@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.fawzia')}}</td>
                                            <td>{{__('pages.public-relations')}}</td>
                                            <td>0115840900</td>
                                            <td>Fafaabd203@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="judgement">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-hammer"></i>{{__('pages.judgement-comity')}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stribed">
                                    <thead>
                                        <th>{{__('pages.name-label')}}</th>
                                        <th>{{__('pages.position')}}</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{__('pages.suha')}}</td>
                                            <td>{{__('pages.comity-p1')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.mohamed-awad')}}</td>
                                            <td>{{__('pages.comity-p2')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.hashem')}}</td>
                                            <td>{{__('pages.comity-p3')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.ibrahim')}}</td>
                                            <td>{{__('pages.comity-p4')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.ayman')}}</td>
                                            <td>{{__('pages.comity-p5')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center mt-5" id="nafeer_teem">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-users"></i>
                                {{__('pages.nafeer-team')}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stribed">
                                    <thead>
                                        <th>{{__('pages.name-label')}}</th>
                                        <th>{{__('pages.position')}}</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{__('pages.yahia')}}</td>
                                            <td>{{__('pages.nafeer-founder')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.diab')}}</td>
                                            <td>{{__('pages.creativity-advisor')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.freed')}}</td>
                                            <td>{{__('pages.creative-ideas')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.alderdery')}}</td>
                                            <td>{{__('pages.media-consultant')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.sahar')}}</td>
                                            <td>{{__('pages.capacity-building')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.sara')}}</td>
                                            <td>{{__('pages.creative-ideas')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.samar')}}</td>
                                            <td>{{__('pages.creative-ideas')}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{__('pages.hajir')}}</td>
                                            <td>{{__('pages.creative-ideas')}}</td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                    <div class="card text-center mt-5" id="parteners">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-handshake-deal"></i> {{__('pages.partners')}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stribed">
                                    <thead>
                                        <th>{{__('pages.partner-logo')}}</th>
                                        <th>{{__('pages.agency-label')}}</th>
                                        <th>{{__('pages.partner-website')}}</th>
                                        <th>{{__('pages.partner-social-media')}}</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/nic.png')}}"
                                                    title="{{__('pages.partner-nic')}}"></td>
                                            <td>{{__('pages.partner-nic')}}</td>
                                            <td><a href="http://nic.gov.sd/" target="new">nic.gov.sd</a></td>
                                            <td>
                                                <a href="https://www.facebook.com/nicsudan.sd/" target="new">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/nafeer.png')}}"
                                                    title="{{__('pages.partner-nafeer')}}"></td>
                                            <td>{{__('pages.partner-nafeer')}}</td>
                                            <td><a href="https://Nafeer4software.sd" target="new">Nafeer4software.sd</a>
                                            </td>
                                            <td>
                                                <a href="https://www.facebook.com/114825676603603/posts/450278613058306/"
                                                    target="new">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/ciec.png')}}"
                                                    title="{{__('pages.partner-comboni')}}"></td>
                                            <td>{{__('pages.partner-comboni')}}</td>
                                            <td></td>
                                            <td>
                                                <a href="https://www.facebook.com/ciecSudan" target="new">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/ztc.png')}}"
                                                    title="{{__('pages.partner-zafar')}}"></td>
                                            <td>{{__('pages.partner-zafar')}}</td>
                                            <td>
                                                <a href="https://www.zafarint.com/">www.zafarint.com</a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/kh.png')}}"
                                                    title="{{__('pages.partner-khfm')}}"></td>
                                            <td>{{__('pages.partner-khfm')}}</td>
                                            <td>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/savannah.png')}}"
                                                    title="{{__('pages.partner-savana')}}"></td>
                                            <td>{{__('pages.partner-savana')}}</td>
                                            <td>
                                            </td>
                                            <td>
                                                <a href="https://www.facebook.com/savannahlabs/" target="new">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/21.png')}}"
                                                    title="{{__('pages.partner-21')}}"></td>
                                            <td>{{__('pages.partner-21')}}</td>
                                            <td>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        
                                        <tr>
                                            <td><img src="{{asset('front/img/award_partiners/carisma.png')}}"
                                                    title="{{__('pages.prtner-charisma')}}"></td>
                                            <td>{{__('pages.prtner-charisma')}}</td>
                                            <td>
                                            </td>
                                            <td>
                                                <a href="https://m.facebook.com/pages/category/Consulting-Agency/%D9%83%D8%A7%D8%B1%D9%8A%D8%B2%D9%85%D8%A7-%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D9%8A%D8%A9-Charisma-Consultancy-100643454771640/" target="new">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="card text-center mt-5" id="apply">
                        <div class="card-header text-center">
                            <h5 class="text-center"><i class="icofont-id-card"></i>{{__('pages.award-apply')}}</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                {{__('pages.award-apply-content')}}
                            </p>
                            <a href="https://nafeer4software.sd/Terms_Of_Submission"
                                class="btn btn-lg btn-success disabled" style="color:#fff;cursor:pointer"
                                target="new">{{__('pages.to-apply-for-award')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Contact Area -->
@endsection
@section('script')
<!--script src="js/app.js"></script -->
@endsection