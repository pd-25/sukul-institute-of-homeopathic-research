<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item {{ Route::is('researches.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('researches.index') }}">
                <i class="ri-group-fill"></i>
                <span>Researches</span>
            </a>
        </li>


        {{-- <li class="nav-item {{ Route::is('blogs.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('blogs.index')}}">
                <i class="ri-group-fill"></i>
                <span>Blogs</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('case-studies.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('case-studies.index')}}">
                <i class="ri-group-fill"></i>
                <span>Case Study</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('news-events.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('news-events.index')}}">
                <i class="ri-group-fill"></i>
                <span>News & Events</span>
            </a>
        </li> --}}
        

        
    </ul>

</aside>



{{--  <li class="nav-item {{ Route::is('members.index') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('members.index')}}">
                <i class="ri-group-fill"></i>
                <span>Members</span>
            </a>
        </li> --}}
