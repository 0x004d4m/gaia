@extends('website.layout.main')
@section('title') {{$Hotel->name}} @endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{url($Hotel->image)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-0 bread">{{$Hotel->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @php $i = 0; @endphp
                            @foreach ($Hotel->images as $image)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="@if ($i==0) active @endif"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($Hotel->images as $image)
                                <div class="carousel-item @if ($image->id == $Hotel->images[0]->id) active @endif">
                                    <img src="{{$image->image}}" class="d-block w-100" height="500px">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>{{$Hotel->name}}</h3>
                    <p>{{$Hotel->text}}</p>
                </div>
            </div>
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
                                    <label for="exampleFormControlSelect1">{{__('website.hotel_room_id')}}</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="hotel_room_id" required>
                                        <option></option>
                                        @foreach ($Hotel->rooms as $Room)
                                            <option value="{{$Room->id}}">{{$Room->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="exampleFormControlInput11">{{__('website.price')}}</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput11" name="price" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">{{__('website.Submit')}}</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $('#exampleFormControlSelect1').on('change', async function () {
        await $.get('/api/Hotel/{{$Hotel->id}}/Room/'+$('#exampleFormControlSelect1').val()+'/Price', function (data, status) {
            $('#exampleFormControlInput11').val("$"+data.price);
        });
    })
</script>
@endpush
