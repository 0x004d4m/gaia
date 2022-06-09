<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}">{{ trans('backpack::base.dashboard') }}</a></li>

@if(backpack_user()->can('Manage Home'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">Manage Home</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Languages') }}">Languages</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Locations') }}">Locations</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('About') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('ContactInfo') }}">ContactInfo</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Gallery') }}">Gallery</a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->can('Manage Bookings'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">Manage Bookings</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('BookedTransportation') }}">Booked Transportations</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('BookedHotelRoom') }}">Booked Hotel Rooms</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('BookedProgram') }}">Booked Programs</a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->can('Manage Hotels'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Hotel') }}">Hotel</a></li>
@endif

@if(backpack_user()->can('Manage Programs'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Program') }}">Manage Programs</a></li>
@endif

@if(backpack_user()->can('Contact Messages'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('ContactMessages') }}">Contact Messages</a></li>
@endif

@if(backpack_user()->can('Manage Transportations'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('Transportations') }}">Manage Transportations</a></li>
@endif

@if(backpack_user()->can('Manage Authentication'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">Manage Admins</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><span>Users</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><span>Roles</span></a></li>
        </ul>
    </li>
@endif
