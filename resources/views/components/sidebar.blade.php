@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="">HR Attendance</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="">HRAS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @if (Auth::user()->role == 'superadmin')
            <li class="menu-header">Superadmin</li>
            <li class="{{ Request::is('superadmin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('superadmin') }}"><i class="fas fa-user-shield"></i> <span>Superadmin</span></a>
            </li>
            @endif
              <li class="menu-header">HR CONTROLS</li>
            {{-- <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('blank-page') }}"><i class="far fa-square"></i> <span>EMPLOYEE LIST</span></a>
            </li> --}}
            <li class="{{ Request::is('time-in') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('time-in') }}"><i class="fas fa-user"></i> <span>EMPLOYEE TIMEIN</span></a>
            </li>
           
            <!-- profile ganti password -->
            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}"><i class="far fa-user"></i> <span>Profile</span></a>
            </li>
            <li class="{{ Request::is('profile/change-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/change-password') }}"><i class="fas fa-key"></i> <span>Change Password</span></a>
            </li>
          
          
        </ul>
    </aside>
</div>
@endauth
