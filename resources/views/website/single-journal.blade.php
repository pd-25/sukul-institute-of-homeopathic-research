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
                    <h2>Council's Research Work</h2>
                    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Published :</b>
                        1st November, 2024</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset("f_assets/images/journal-pic.jpg")}}" class="img-fluid w-100 mb-4">
                </div>
                <div class="col-lg-7">
                    <p> Pellentesque scelerisque facilisis arcu, sed euismod felis tristique in. In volutpat faucibus
                        nulla, a rutrum odio commodo eget. Integer non turpis et ante molestie mattis. Ut blandit ac
                        arcu eu suscipit. Pellentesque dui ex, tristique non arcu et, interdum vehicula orci. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse nisl
                        quam, mollis posuere felis aliquet, feugiat porttitor ex. Integer eu risus eu ligula placerat
                        fringilla. Nam ut lectus nec est maximus placerat. Ut mollis volutpat feugiat. Donec semper
                        suscipit euismod. Ut vulputate vitae enim vel tincidunt. In eget dui velit. Nulla elementum erat
                        sapien, vel iaculis libero iaculis at. Quisque pretium sagittis facilisis. Phasellus non nibh at
                        massa sodales blandit ut et ante. </p>
                    <p> Proin non dapibus velit. Suspendisse lacinia dolor eu luctus feugiat. Phasellus ac semper est.
                        Curabitur rhoncus ipsum eget suscipit porta.</p>

                </div>
                <div class="col-lg-12">
                    <p>Sed hendrerit ligula non convallis posuere. Integer eget libero tincidunt, vestibulum metus sit
                        amet, tincidunt augue. Nunc ultrices, massa sit amet mollis lacinia, nibh nisi pretium dolor,
                        eget laoreet ante ante sed ipsum. Nunc augue nunc, volutpat eget mattis quis, imperdiet id dui.
                        Etiam augue ipsum, tristique nec lectus id, tincidunt viverra mi. Nulla at augue a ante laoreet
                        sodales non a enim. Sed non ullamcorper urna. Aenean imperdiet fringilla rhoncus. Nunc suscipit
                        ipsum in magna blandit, a pulvinar sem imperdiet. Quisque malesuada rutrum scelerisque. Nulla ac
                        est eu nisi accumsan mollis sed nec arcu. </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet pretium quam vel
                        vehicula. In imperdiet fermentum ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Vivamus auctor metus urna, at euismod augue molestie a. Donec id nulla turpis. Donec ac
                        mattis nulla. Sed odio odio, ornare eget dui in, sollicitudin condimentum mi. Cras tristique leo
                        sodales consequat euismod. Fusce eget rutrum tellus. Aliquam accumsan turpis in molestie
                        consequat. </p>
                    <p> Aenean tincidunt ultrices vehicula. Maecenas egestas interdum massa sit amet mattis. Nam
                        condimentum nibh a erat feugiat ultricies. Proin mattis euismod tincidunt. In pretium ligula ut
                        mauris fermentum, at aliquet purus lobortis. Cras efficitur ipsum non felis posuere, ac
                        vulputate mi bibendum. Cras quis sollicitudin orci. Curabitur fermentum malesuada erat vitae
                        consectetur. </p>
                </div>

            </div>

        </div>
    </section>
@endsection
