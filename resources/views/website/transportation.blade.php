@extends('website.layout.main')
@section('title') {{$Transportation->locationFrom->name}} - {{$Transportation->locationTo->name}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread ">{{$Transportation->locationFrom->name}} - {{$Transportation->locationTo->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center my-5" id="from">
                <div class="col-md-8 cext-center">
                    <h3 class="text-center">{{__('BookNow')}}</h3>
                    <form method="POST" action="#from">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                @if(Session::has('Message'))
                                    <div class="alert alert-{{Session::get('Color')}}">{{Session::get('Message')}}</div>
                                    @php
                                        Session::forget('Message');
                                        Session::forget('Color');
                                    @endphp
                                @endif
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">{{__('website.first_name')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" required name="first_name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput2">{{__('website.last_name')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput2" required name="last_name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput3">{{__('website.phone')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput3" required name="phone">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput4">{{__('website.email')}}</label>
                                  <input type="email" class="form-control" id="exampleFormControlInput4" required name="email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput5">{{__('website.date_of_birth')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput5" required name="date_of_birth">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput6">{{__('website.number_of_people')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput6" required name="number_of_people">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput7">{{__('website.passport_number')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput7" required name="passport_number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput8">{{__('website.passport_issue_date')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput8" required name="passport_issue_date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput9">{{__('website.passport_expiry_date')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput9" required name="passport_expiry_date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput10">{{__('website.nationality')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput10" required name="nationality">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput11">{{__('website.price')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput11" name="price" value="{{$Transportation->price}}" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">{{__('website.Submit')}}</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection
