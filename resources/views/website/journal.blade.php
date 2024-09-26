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
            @foreach($journal as $item)
            <div class="row journal-box mb-5">
                <div class="col-lg-5">
                    <img src="{{asset("storage/". $item->image)}}" class="img-fluid w-100" alt="{{ $item->title }}">
                </div>
                <div class="col-lg-7 align-self-center">
                    <h3>{{ $item->title }}</h3>
                    <p class="jdate">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> 
                        <b>Published:</b> {{ \Carbon\Carbon::parse($item->created_at)->format('jS F, Y') }}
                    </p>
                    <p>{{ Str::limit(strip_tags($item->description), 450, '...') }}</p>
                    <a href="{{ route('frontend.singlejurnal', ['slug' => $item->slug]) }}" class="rm-btn-red mt-2">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        @endforeach
        
           



        </div>
    </section>
@endsection
