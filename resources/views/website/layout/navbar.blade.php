<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="{{url('/Home')}}">Gaia Tours<span>Travel Agency</span></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse ml-5 pt-3" id="ftco-nav">
                <ul class="navbar-nav">
                    <li class="nav-item @if (Request::path() == 'Home') active @endif"><a href="{{url('/')}}" class="nav-link">{{__('website.Home')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'About') active @endif"><a href="{{url('/About')}}" class="nav-link">{{__('website.About')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'Gallery') active @endif"><a href="{{url('/Gallery')}}" class="nav-link">{{__('website.Gallery')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'Programs') active @endif"><a href="{{url('/Programs')}}" class="nav-link">{{__('website.Programs')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'Hotels') active @endif"><a href="{{url('/Hotels')}}" class="nav-link">{{__('website.Hotels')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'Transportation') active @endif"><a href="{{url('/Transportation')}}" class="nav-link">{{__('website.Transportation')}}</a></li>
                    <li class="nav-item @if (Request::path() == 'Contact') active @endif"><a href="{{url('/Contact')}}" class="nav-link">{{__('website.Contact')}}</a></li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('language_name')}}</a>
                        <div class="dropdown-menu">
                            @foreach (Session::get('languages') as $Language )
                            <a class="dropdown-item" href="{{url('Language/'.$Language->id)}}">{{$Language->language}}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
