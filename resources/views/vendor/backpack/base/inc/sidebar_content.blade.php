<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}">{{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('About') }}">About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('AboutText') }}">About Text</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Drives') }}">Drives</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Languages') }}">Languages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Locations') }}">Locations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Gallery') }}">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ContactMessages') }}">Contact Messages</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><span>Permissions</span></a></li>
    </ul>
</li>
