<header id="main-header" class="header">
    <div id="top-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-4">
                    <div class="logo"><img src="{{ asset('f_assets/images/logo.png') }}" class="img-fluid"> </div>
                </div>
                <!-- Section: Navbar Menu -->
                <div class="col-lg-10 col-8">
                    <nav class="navbar navbar-expand-lg navbar-light mainmenu">
                        <button aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNav"
                            data-target="#navbarNav" data-toggle="collapse" type="button" class="navbar-toggler">
                            <span class="navbar-toggler-icon"></span> </button>
                        <div id="navbarNav" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active"> <a href="{{ route('frontend.index') }}"
                                        class="nav-link">Home</a> </li>
                                <li class="nav-item"> <a href="{{ route('frontend.profile') }}"
                                        class="nav-link">Profile</a> </li>
                                <li class="nav-item"> <a href="{{ route('frontend.aboutUs') }}" class="nav-link">About
                                        Us</a> </li>

                                <li class="nav-item"> <a href="{{ route('frontend.research') }}"
                                        class="nav-link">Research</a> </li>

                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                        href="">Courses</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('frontend.course')}}">Course
                                                Overview</a></li>
                                        <li><a class="dropdown-item" href="{{route('frontend.feesStructure')}}">Fees Structure</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{route('frontend.commingSoon')}}">Online
                                                Application</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"> <a href="{{ route('frontend.cancerTherapy') }}"
                                        class="nav-link">Cancer
                                        Therapy</a> </li>
                                <li class="nav-item"> <a href="{{ route('frontend.journal') }}"
                                        class="nav-link">Journal</a> </li>
                                <li class="nav-item"> <a href="{{route('frontend.commingSoon')}}"
                                        class="nav-link">Seminars</a> </li>
                                <li class="nav-item"> <a href="{{ route('frontend.contact') }}"
                                        class="nav-link">Contact</a> </li>
                                {{-- <li class="nav-item"> <a href="{{ route('frontend.enquiry') }}"
                                        class="nav-link">Enquiry</a> </li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
