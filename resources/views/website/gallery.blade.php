@extends('website.layout.main')
@section('title') {{__('website.Gallery')}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($About)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{__('website.Gallery')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="content">
        <div class="container">
            <div class="row">
                @foreach ($Gallery as $item)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap hotel">
                            <a href="{{url($item->image)}}" target="_blank" class="img" style="background-image: url({{url($item->image)}});"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $Gallery->links('vendor.pagination.custom') }}
        </div>
    </section>
@endsection
