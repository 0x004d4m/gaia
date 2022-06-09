@extends('website.layout.main')
@section('title') {{__('website.Transportations')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url('images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{__('website.Transportations')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row no-gutters">
                                <div class="col-lg-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">From</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$5,000</option>
                                                    <option value="">$10,000</option>
                                                    <option value="">$50,000</option>
                                                    <option value="">$100,000</option>
                                                    <option value="">$200,000</option>
                                                    <option value="">$300,000</option>
                                                    <option value="">$400,000</option>
                                                    <option value="">$500,000</option>
                                                    <option value="">$600,000</option>
                                                    <option value="">$700,000</option>
                                                    <option value="">$800,000</option>
                                                    <option value="">$900,000</option>
                                                    <option value="">$1,000,000</option>
                                                    <option value="">$2,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">To</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$5,000</option>
                                                    <option value="">$10,000</option>
                                                    <option value="">$50,000</option>
                                                    <option value="">$100,000</option>
                                                    <option value="">$200,000</option>
                                                    <option value="">$300,000</option>
                                                    <option value="">$400,000</option>
                                                    <option value="">$500,000</option>
                                                    <option value="">$600,000</option>
                                                    <option value="">$700,000</option>
                                                    <option value="">$800,000</option>
                                                    <option value="">$900,000</option>
                                                    <option value="">$1,000,000</option>
                                                    <option value="">$2,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg d-flex">
                                    <div class="form-group d-flex w-100 border-0">
                                        <div class="form-field w-100 align-items-center d-flex">
                                            <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap hotel">
                        <div class="text p-4 text-center">
                            <h3><span class="days">From:</span> <a href="#">Amman</a></h3>
                            <h3><span class="days">To:</span> <a href="#">Aqaba</a></h3>
                            <p><span class="price">$200/person</span></p>
                            <a class="btn btn-primary" href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
