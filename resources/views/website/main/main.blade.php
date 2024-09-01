<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.main.head')
</head>

<body>
    @include('website.main.header')


    @yield('content')
    @include('website.main.footer')
  
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{asset("f_assets/addons/jquery.smartmenus.js")}}"></script>
    <!-- SmartMenus jQuery Bootstrap 4 Addon -->
    <script type="text/javascript" src="{{asset("f_assets/addons/jquery.smartmenus.bootstrap-4.js")}}"></script>
    <script src="{{ asset("f_assets/js/script.js")}}" defer></script>
    <script src="{{ asset("f_assets/owl-carousel/js/owl.carousel.js") }}"></script>
    <!-- End Owl pranab-->
    <script>
        $(document).ready(function() {
            var owl = $('#owl-journal');
            owl.owlCarousel({
                items: 1,
                loop: false,
                nav: false,
                margin: 30,
                autoplay: false,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
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
    <script>
        $(document).ready(function() {
            var owl = $('#owl-seminars');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
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
</body>

</html>
