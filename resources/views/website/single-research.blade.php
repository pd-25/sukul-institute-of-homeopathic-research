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
                <h2>{{$research->title}}</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="inn-research-box text-left">
                    {!! $research->description !!}
                </div>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col-lg-12">
                <div id="demo-pranab">
                    <div id="owl-research-gallery" class="owl-carousel owl-theme">
                        @foreach($otherResearches as $other)
                        <div class="item">
                            <div class="research-box">
                                <img src="{{asset("storage/". $other->image)}}" class="img-fluid w-100" alt="...">
                                <h3 class="min-height: 0px !important;">{{$other->title}} </h3>
                                <p>{{ Str::limit(strip_tags($other->description), 150, '...') }}</p>
                    <a href="{{ route('frontend.singleresearch', ['slug' => $other->slug]) }}" class="rm-btn">Read More <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                            </div>
                        </div>
                       @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
      var owl = $('#owl-research-gallery');
      owl.owlCarousel({
        items: 3,
        loop: true,
        nav:false,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive:{
0:{
    items:1
},
600:{
    items:1
},
1000:{
    items:3
}
}
      });
      $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [2000])
      })
      $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
      })
    })
  </script>
@endsection