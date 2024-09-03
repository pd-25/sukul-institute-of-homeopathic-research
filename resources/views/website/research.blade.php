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
                <h2>Research</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dui elit, bibendum vitae metus
                    non, dignissim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac condimentum
                    scelerisque, libero sem pretium lorem, nec tincidunt tortor massa eu turpis. Praesent eget
                    aliquam velit. Vivamus viverra vulputate venenatis. Donec vel venenatis massa. Aliquam erat
                    volutpat.</p>
            </div>
        </div>


        <div class="row">
            @forelse ($researchs as $research)
            <div class="col-lg-4">
                <div class="inn-research-box">
                    <img src="{{asset("storage/". $research->image)}}" class="img-fluid w-100">
                    <h3>{{$research->title}}</h3>
                    <p>{{ Str::limit(strip_tags($research->description), 150, '...') }}</p>
                    <a href="single-research.html" class="rm-btn">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            @empty
                
            @endforelse
            

            {{-- <div class="col-lg-4">
                <div class="inn-research-box">
                    <img src="{{asset("f_assets/images/research-pic1.jpg")}}" class="img-fluid w-100">
                    <h3>Other Publications</h3>
                    <p>Proin dui elit, bibendum vitae metus non, dignissim vehicula metus ac sem pretium lorem, nec
                        massa eu turpis.</p>
                    <a href="single-research.html" class="rm-btn">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="inn-research-box">
                    <img src="{{asset("f_assets/images/research-pic1.jpg")}}" class="img-fluid w-100">
                    <h3>Research - Dr Anirban Sukul</h3>
                    <p>Proin dui elit, bibendum vitae metus non, dignissim vehicula metus ac sem pretium lorem, nec
                        massa eu turpis.</p>
                    <a href="single-research.html" class="rm-btn">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                </div>
            </div> --}}
        </div>

    </div>
</section>
@endsection