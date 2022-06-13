@extends('website.layout.main')
@section('title') {{__('website.Hotels')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{__('website.Hotels')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#container" class="search-property-1">
                            <div class="row no-gutters">
                                <div class="col-lg-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">{{__('website.HotelName')}}</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="fa fa-search"></span></div>
                                            <input name="name" type="text" class="form-control" placeholder="{{__('website.SearchHotels')}}" value="{{Request::has('name')?Request::get('name'):''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">{{__('website.Locations')}}</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="location_id" id="location_id" class="form-control">
                                                    <option></option>
                                                    @foreach ($Locations as $Location)
                                                        <option value="{{$Location->location->id}}" {{Request::has('location_id') && Request::get('location_id') == $Location->location->id?'selected':''}}>{{$Location->location->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg d-flex">
                                    <div class="form-group d-flex w-100 border-0">
                                        <div class="form-field w-100 align-items-center d-flex">
                                            <input type="submit" value="{{__('website.Search')}}" class="align-self-stretch form-control btn btn-primary">
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

    <section class="ftco-section" id="container">
        <div class="container">
            <div class="row">
                @foreach ($Hotels as $Hotel)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap hotel">
                            <a href="/Hotels/{{$Hotel->id}}" class="img" style="background-image: url({{url($Hotel->image)}});">
                                <span class="price">{{$Hotel->location->name}}</span>
                            </a>
                            <div class="text p-4 text-center">
                                <h3 class="mb-2"><a href="/Hotels/{{$Hotel->id}}">{{$Hotel->name}}</a></h3>
                                <a class="btn btn-primary" href="/Hotels/{{$Hotel->id}}">{{__('website.BookNow')}}</a>
                                <a class="btn btn-primary" href="{{$Hotel->url}}">{{__('website.HotelSite')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $Hotels->links('vendor.pagination.custom') }}
        </div>
    </section>
@endsection
