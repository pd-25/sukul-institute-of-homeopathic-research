@extends('website.main.main')
@section('content')
    @include('website.banner-component')

    <section id="marqe-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-4 redCol mb-0">
                    <p>Archive on Homoeopathy</p>
                </div>
                <div class="col-lg-10 col-8">
                    <div class="marquee-box">
                        <marquee direction="right">
                            <ul>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                            </ul>

                        </marquee>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="inn-section">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-lg-12">
                    <h2>Our Journal</h2>
                    <p>Integer convallis enim vitae egestas elementum. Ut sollicitudin, arcu et laoreet fringilla, odio
                        leo interdum magna, sed viverra massa turpis et ipsum. Maecenas sed erat tempor, iaculis nibh
                        eget, auctor mi. Donec ultrices pellentesque tellus, ac vehicula neque mollis et. </p>
                </div>
            </div>

            <div class="row journal-box mb-5">
                <div class="col-lg-5">
                    <img src="{{asset("f_assets/images/journal-pic.jpg")}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-lg-7 align-self-center">
                    <h3>Council's Research Work</h3>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Published :</b>
                        1st November, 2024</p>
                    <p>Lorem ipsum dolor sit amet, consectesetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non, sim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac conntum libesiro pretiuiem
                        nec tincidunt tortor masu turpis. Praesent eget aliquam velit. Vivamus viverra vulputate vonec
                        vel venenatis massa. Aliquam erat volutpat eget efficitur dui.</p>
                    <a href="single-journal.html" class="rm-btn-red mt-2">Read More <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="row journal-box mb-5">
                <div class="col-lg-5">
                    <img src="{{asset("f_assets/images/journal-pic.jpg")}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-lg-7 align-self-center">
                    <h3>Council's Research Work</h3>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Published :</b>
                        1st November, 2024</p>
                    <p>Lorem ipsum dolor sit amet, consectesetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non, sim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac conntum libesiro pretiuiem
                        nec tincidunt tortor masu turpis. Praesent eget aliquam velit. Vivamus viverra vulputate vonec
                        vel venenatis massa. Aliquam erat volutpat eget efficitur dui.</p>
                    <a href="single-journal.html" class="rm-btn-red mt-2">Read More <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="row journal-box mb-5">
                <div class="col-lg-5">
                    <img src="{{asset("f_assets/images/journal-pic.jpg")}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="col-lg-7 align-self-center">
                    <h3>Council's Research Work</h3>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Published :</b>
                        1st November, 2024</p>
                    <p>Lorem ipsum dolor sit amet, consectesetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non, sim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac conntum libesiro pretiuiem
                        nec tincidunt tortor masu turpis. Praesent eget aliquam velit. Vivamus viverra vulputate vonec
                        vel venenatis massa. Aliquam erat volutpat eget efficitur dui.</p>
                    <a href="single-journal.html" class="rm-btn-red mt-2">Read More <i
                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>



        </div>
    </section>
@endsection
