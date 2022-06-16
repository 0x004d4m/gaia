@extends('website.layout.main')
@section('title') {{t('terms_and_conditions')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{t('terms_and_conditions')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="content">
        <div class="container">
            <div class="row">
                {!!t('wysiwyg-editor')!!}
            </div>
        </div>
    </section>
@endsection
