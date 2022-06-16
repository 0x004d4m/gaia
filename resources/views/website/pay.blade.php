@extends('website.layout.main')
@section('title') {{t('start_ayment')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight">
        <div class="overlay" style="opacity: .9;"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="text-white">{{t('Please_pay_to_continue')}} <br> {{t('price')}}: ${{$Price}}</h2>
                    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$HyperpayId}}"></script>
                    <form action="/{{$Type}}/{{$BookedID}}/Check" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt mt-5 pt-5" id="content">
        <div class="container">
            <div class="row align-items-center mt-5">
            </div>
        </div>
    </section>
@endsection
