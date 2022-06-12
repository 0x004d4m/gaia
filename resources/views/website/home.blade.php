@extends('website.layout.main')
@section('title') {{__('website.Home')}} @endsection
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{url($Home->image)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">{{__('website.Welcome')}}</span>
					<p class="caps">{{$Text}}</p>
                </div>
                <a href="{{url($Home->video_url)}}" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Tour</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Destination</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-in date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-out date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">$100</option>
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
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Destination</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-in date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-out date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">$100</option>
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
                                                            <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    {{-- <span class="subheading">Pacific Provide Places</span> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        @foreach ($Banners as $Banner)
                            <div class="item">
                                <div class="project-destination">
                                    <a class="img" style="background-image: url({{url($Banner->image)}});">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
