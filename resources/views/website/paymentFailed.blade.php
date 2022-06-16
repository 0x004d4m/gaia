@extends('website.layout.main')
@section('title') {{t('payment_failed')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight">
        <div class="overlay" style="opacity: .9;"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <div class="alert alert-danger">
                        {{$Error}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt mt-5 pt-5">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>
@endsection
