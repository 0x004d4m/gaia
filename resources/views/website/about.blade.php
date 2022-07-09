@extends('website.layout.main')
@section('title') {{t('about_us')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{t('about_us')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-6 d-flex">
                            <img class="img" src="{{url($About2)}}">
                        </div>
                        <div class="col-md-12 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">{{t('about_us')}}</span>
                                    <p>{{$Text}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <p>{!!t('things_to_know')!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <p>{!!t('history_and_info')!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <p>{!!t('culter_and_people')!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
