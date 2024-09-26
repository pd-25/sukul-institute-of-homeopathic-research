@extends('website.main.main')
@section('content')
@include("website.banner-component")
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
                <h2>Courses offered</h2>
                <p>Aenean tincidunt ultrices vehicula. Maecenas egestas interdum massa sit amet mattis. Nam condimentum
                    nibh a erat feugiat ultricies. Proin mattis euismod tincidunt. In pretium ligula ut mauris
                    fermentum, at aliquet purus lobortis.</p>
            </div>
        </div>


        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-12">
                <div class="inn-course-box">
                    <h3>{{$course->title}}</h3>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Available :</b> {{ \Carbon\Carbon::parse($course->created_at)->format('jS F, Y') }}</p>
                    <p>{{ Str::limit(strip_tags($course->description), 250, '...') }}</p>
                    <a href="{{ route('frontend.singlecourse', ['slug' => $course->slug]) }}" class="rm-btn-red mt-2">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            @endforeach
          

        </div>
    </div>
</section>

<section id="announcement-section" class="mb-5 pb-4">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-12">
                <p>
                <p>The DipUKHomeo designation is honorary not statutory, hence, you are not authorized to practice with
                    this certification in your country and you should consult your own country's guidelines and laws
                    about thorough professional training in
                    homeopathic medicine.</p>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection