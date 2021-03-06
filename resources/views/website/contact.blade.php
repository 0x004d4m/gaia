@extends('website.layout.main')
@section('title') {{t('contact_us')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{t('contact_us')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">{{t('contact_number_1')}}</h3>
                        <p><a href="tel://{{$ContactInfo->phone1}}">{{$ContactInfo->phone1}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">{{t('contact_number_2')}}</h3>
                        <p><a href="tel://{{$ContactInfo->phone2}}">{{$ContactInfo->phone2}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">{{t('email_address')}}</h3>
                        <p><a href="mailto:{{$ContactInfo->email}}">{{$ContactInfo->email}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <h3 class="mb-2">{{t('p_o_box')}}</h3>
                        <p><a href="#">{{$ContactInfo->POBox}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pt" id="container">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#container" method="POST" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            @if(Session::has('Message'))
                                <div class="alert alert-{{Session::get('Color')}}">{{Session::get('Message')}}</div>
                                @php
                                    Session::forget('Message');
                                    Session::forget('Color');
                                @endphp
                            @endif
                            <input name="first_name" type="text" class="form-control" placeholder="{{t('first_name')}}" required>
                        </div>
                        <div class="form-group">
                            <input name="last_name" type="text" class="form-control" placeholder="{{t('last_name')}}" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="{{t('email')}}" required>
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control" placeholder="{{t('phone')}}" required>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="{{t('subject')}}" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="{{t('message')}}" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="{{t('send_message')}}" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex">
                    {!!$ContactInfo->location!!}
                </div>
            </div>
        </div>
    </section>
@endsection
