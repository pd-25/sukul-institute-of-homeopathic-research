@extends('website.main.main')
@section('content')
<section id="banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('/f_assets/images/banner.jpg');">
                <canvas id="canvas"></canvas>
                <div class="carousel-caption">
                    <p class="ban-head-cap">Indian Journal of Research in </p>
                    <h1>Homoeopathy</h1>
                    <p class="banner-cap">An Endeavour of Central Council for Research in Homoeopathy</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('/f_assets/images/banner.jpg')">
                <div class="carousel-caption">
                    <p class="ban-head-cap">Indian Journal of Research in </p>
                    <h1>Homoeopathy</h1>
                    <p class="banner-cap">An Endeavour of Central Council for Research in Homoeopathy</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{ asset("f_assets/images/ban-left-btn.png") }}"
                class="img-fluid"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{ asset("f_assets/images/ban-right-btn.png") }}"
                class="img-fluid"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<!-- Page Content -->
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

<section id="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="section-caption">Welcome To</p>
                <h2>Sukul Institute of Homeopathic Research</h2>
                <p>The Institute conducts basic research on Homeopathy. The subject includes i) physical basis of
                    potentized
                    drugs, ii) mechanism of action of homeopathic potencies in the living system, iii) biological
                    effects of
                    potentized drugs on animals and plants, iv) ex-vivo effect of potencies on isolated ileum, v)
                    ex-vivo effect
                    of potencies on erythrocytes, vi) in vitro effect of potencies on proteins and vii) effect of
                    potencies on
                    animal and plant diseases. A list of publications including two books would show the area of our
                    research
                    activities. The Institute records clinical evidences on homeopathy mainly from its 3 clinics,
                    one at Ghatal
                    and two at Calcutta. It receives grants for research projects on homeopathy and donations for
                    basic research
                    in Homeopathy. The President and Secretary of the Institute are <b>Professor Nirmal C Sukul</b>
                    and <b>Dr
                        Anirban Sukul</b>, respectively. They also provide homeopathic treatment for various acute
                    and chronic
                    ailments. The Institute has already developed some new drugs for hypertension, blood sugar,
                    lipoma, cancer,
                    Parkinson’s disease, Alzheimer’s disease etc. It has also developed new drugs for plant diseases
                    and plant
                    growth. Research works on plants are actively assisted by <b>Dr Soma Sukul</b>, a botanist.
                    Scientist of the
                    Institute are involved in collaborative research program on Homeopathy.</p>
            </div>
        </div>
    </div>
</section>
<section id="profile-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 profile-head">
                <h2>Our Profile</h2>
            </div>
            <div class="col-lg-4">
                <div class="profile-box">
                    <img src="{{ asset("f_assets/images/pro-pic1.jpg") }}" class="img-fluid" alt="...">
                    <h3>Prof. Nirmal C Sukul</h3>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                            href="mailto:sukulinst@gmail.com">sukulinst@gmail.com</a></p>
                    <a href="profile.html" class="rm-btn">View Profile <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="profile-box">
                    <img src="{{ asset("f_assets/images/pro-pic2.jpg") }}" class="img-fluid" alt="...">
                    <h3>Dr. Anirban Sukul</h3>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                            href="maailto:anirsukul@gmail.com">anirsukul@gmail.com</a></p>
                    <a href="profile.html" class="rm-btn">View Profile <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="profile-box">
                    <img src="{{ asset("f_assets/images/pro-pic3.jpg") }}" class="img-fluid" alt="...">
                    <h3>Dr. Soma Sukul</h3>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                            href="mailto:sukulinst@gmail.com">sukulinst@gmail.com</a></p>
                    <a href="profile.html" class="rm-btn">View Profile <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="research-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img src="{{ asset("f_assets/images/research-pic.jpg") }}" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="ctn-right-box">
                    <h2>Research</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non,
                        dignissim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac condimentum
                        scelerisque, libero sem
                        pretium lorem, nec tincidunt tortor massa eu turpis. Praesent eget aliquam velit. Vivamus
                        viverra
                        vulputate venenatis. Donec vel venenatis massa. Aliquam erat volutpat.</p>
                    <p>Aenean finibus sem vel finibus eleifend. Nullam scelerisque lectus eget orci elementum
                        consectetur. Nam
                        blandit eros quis pharetra laoreet. Nam pretium porta laoreet. Vestibulum ante ipsum primis
                        in faucibus
                        orci luctus et ultrices posuere cubilia curae; </p>
                    <a href="#" class="rm-btn-red">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="courses-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="ctn-left-box">
                    <h2>Courses offered</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non,
                        dignissim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac condimentum
                        scelerisque, libero sem
                        pretium lorem, nec tincidunt tortor massa eu turpis. Praesent eget aliquam velit. Vivamus
                        viverra
                        vulputate venenatis. Donec vel venenatis massa. Aliquam erat volutpat.</p>
                    <ul class="ctn-list">
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> International Diploma in
                            Homeopathy</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> International Diploma in
                            Advanced Homeopathy
                        </li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> The Homeopathic Home
                            Prescriber Course</li>
                    </ul>
                    <a href="#" class="rm-btn-red">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img src="{{ asset("f_assets/images/courses-pic.jpg") }}" class="img-fluid w-100" alt="...">
            </div>
        </div>
    </div>
</section>
<section id="cancer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset("f_assets/images/cancer-pic.jpg") }}" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-lg-6 align-self-center">
                <h2>Cancer Therapy</h2>
                <p>Integer et dolor tristique, mollis metus vel, porttitor justo. Aliqueaim erat volutpat. Duis a
                    odio felis.
                    Cras ut arcu sodin diam consectetur blandit vitae eu elit. Fusce tempor mauada velit et luctus.
                    Sed lacus
                    nibh, dapibus ut pharatra eu, pretium in risus. Ut cursus aliquet ante et ornare. Aenean finibus
                    sem vel
                    fius eleifend. Nullam scelerisque lectus eget orci elementum conetur.</p>
                <p>Lorem ipsum dolor sit amet, consectesetur adipiscing elit. Proin dui elit, bibendum vitae metus
                    non, sim
                    vehicula elit. Ut id porta massa. Aliquam viverra, metus ac conntum scelerisque, libero sem
                    pretium lorem,
                    nec tincidunt tortor masu turpis. Praesent eget aliquam velit. Vivamus viverra vulputate vonec
                    vel venenatis
                    massa. Aliquam erat volutpat eget efficitur dui.</p>
                <a href="#" class="rm-btn-red">Read More <i class="fa fa-angle-double-right"
                        aria-hidden="true"></i></a>
            </div>

        </div>
    </div>
</section>
<section id="journal-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our Journal</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="demo-pranab">
                    <div id="owl-journal" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row journal-box">
                                <div class="col-lg-5">
                                    <img src="{{ asset("f_assets/images/journal-pic.jpg") }}" class="img-fluid w-100" alt="...">
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <h3>Council's Research Work</h3>
                                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        <b>Published :</b> 1st
                                        November, 2024</p>
                                    <p>Lorem ipsum dolor sit amet, consectesetur adipiscing elit. Proin dui elit,
                                        bibendum vitae metus
                                        non, sim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac conntum
                                        libesiro pretiuiem
                                        nec tincidunt tortor masu turpis. Praesent eget aliquam velit. Vivamus
                                        viverra vulputate vonec vel
                                        venenatis massa. Aliquam erat volutpat eget efficitur dui.</p>
                                    <a href="#" class="rm-btn-red mt-2">Read More <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="announcement-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h2>Announcement</h2>
                <img src="{{ asset("f_assets/images/a-doc-pic.jpg") }}" class="img-fluid" alt="...">
                <p> “Dr Anirban Sukul receiving Man of Excellence award from His Excellency Khun Korn Dabbaransi,
                    the former
                    Deputy Prime Minister of Thailand at a ceremony in Bangkok, Thailand”</p>
            </div>
        </div>
    </div>
</section>
<section id="seminars-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our Seminars</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="demo-pranab">
                    <div id="owl-seminars" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="seminars-box">
                                <img src="{{ asset("f_assets/images/seminars-pic.jpg") }}" class="img-fluid w-100" alt="...">
                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seminars-box">
                                <img src="{{ asset("f_assets/images/seminars-pic.jpg") }}" class="img-fluid w-100" alt="...">
                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seminars-box">
                                <img src="{{ asset("f_assets/images/seminars-pic.jpg") }}" class="img-fluid w-100" alt="...">
                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seminars-box">
                                <img src="{{ asset("f_assets/images/seminars-pic.jpg") }}" class="img-fluid w-100" alt="...">
                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection