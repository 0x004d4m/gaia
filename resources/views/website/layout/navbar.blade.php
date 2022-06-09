<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/Home')}}">Gaia Tours<span>Travel Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (Request::path() == 'Home') active @endif"><a href="{{url('/')}}" class="nav-link">{{__('website.Home')}}</a></li>
                <li class="nav-item @if (Request::path() == 'About') active @endif"><a href="{{url('/About')}}" class="nav-link">{{__('website.AboutUs')}}</a></li>
                <li class="nav-item @if (Request::path() == 'Gallery') active @endif"><a href="{{url('/Gallery')}}" class="nav-link">{{__('website.Gallery')}}</a></li>
                <li class="nav-item @if (Request::path() == 'Programs') active @endif"><a href="{{url('/Programs')}}" class="nav-link">{{__('website.Programs')}}</a></li>
                <li class="nav-item @if (Request::path() == 'Hotels') active @endif"><a href="{{url('/Hotels')}}" class="nav-link">{{__('website.Hotels')}}</a></li>
                <li class="nav-item @if (Request::path() == 'Transportation') active @endif"><a href="{{url('/Transportation')}}" class="nav-link">{{__('website.Transportation')}}</a></li>
                <li class="nav-item @if (Request::path() == 'Contact') active @endif"><a href="{{url('/Contact')}}" class="nav-link">{{__('website.Contact')}}</a></li>
            </ul>
        </div>
    </div>
</nav>
