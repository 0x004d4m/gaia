@extends('website.layout.main')
@section('title') {{__('website.Transportations')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
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
                                        <label for="#">{{__('website.From')}}</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="from" id="" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($Locations as $Location)
                                                        <option value="{{$Location->id}}" {{Request::has('from') && Request::get('from') == $Location->id?'selected':''}}>{{$Location->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex">
                                    <div class="form-group p-4 border-0">
                                        <label for="#">{{__('website.To')}}</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="to" id="" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($Locations as $Location)
                                                        <option value="{{$Location->id}}" {{Request::has('to') && Request::get('to') == $Location->id?'selected':''}}>{{$Location->name}}</option>
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

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($Transportations as $Transportation)
                    <div class="col-md-4 ftco-animate mb-5">
                        <div class="project-wrap hotel">
                            <div class="text p-4 text-center">
                                <h3><span class="days">{{__('website.From')}}:</span> <span>{{$Transportation->locationFrom->name}}</span></h3>
                                <h3><span class="days">{{__('website.To')}}:</span> <span>{{$Transportation->locationTo->name}}</span></h3>
                                <p><span class="price">${{$Transportation->price}}</span></p>
                                <a class="btn btn-primary" href="/Transportation/{{$Transportation->id}}">{{__('website.BookNow')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $Transportations->links('vendor.pagination.custom') }}
        </div>
    </section>
@endsection
