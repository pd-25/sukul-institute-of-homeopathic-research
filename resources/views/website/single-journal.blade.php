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
            <div class="row mb-3">
                <div class="col-lg-12">
                    <h2>{{ $journal->title }}</h2>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Published :</b>
                        {{ \Carbon\Carbon::parse($journal->created_at)->format('jS F, Y') }}</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset("f_assets/images/journal-pic.jpg")}}" class="img-fluid w-100 mb-4">
                </div>
                @php
                // Get the full description text without HTML tags
                $description = strip_tags($journal->description);
            
                // Get the first 200 words
                $firstPart = Str::words($description, 198, '');
            
                // Remove the first 200 words from the description and get the rest
                $remainingText = trim(str_replace($firstPart, '', $description));

                
            @endphp
            
            <div class="col-lg-7">
                {!! $firstPart !!} <!-- Show first 200 words -->
            </div>
            
            <div class="col-lg-12">
                {!! $remainingText !!} <!-- Show the rest of the text -->
            </div>
            

            </div>

        </div>
    </section>
@endsection
