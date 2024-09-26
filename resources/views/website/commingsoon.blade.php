@extends('website.main.main')
@section('content')
@include("website.banner-component")

<div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="text-center">
        <h1 class="display-4">Coming Soon</h1>
        <p class="lead">We are working hard to bring something amazing. Stay tuned!</p>

        {{-- <!-- Countdown Timer (Optional) -->
        <div id="countdown" class="mb-4">
            <div class="d-inline-block p-2">
                <h2 id="days">00</h2>
                <small>Days</small>
            </div>
            <div class="d-inline-block p-2">
                <h2 id="hours">00</h2>
                <small>Hours</small>
            </div>
            <div class="d-inline-block p-2">
                <h2 id="minutes">00</h2>
                <small>Minutes</small>
            </div>
            <div class="d-inline-block p-2">
                <h2 id="seconds">00</h2>
                <small>Seconds</small>
            </div>
        </div>

        <!-- Notify Button -->
        <a href="#" class="btn btn-primary btn-lg">Notify Me</a> --}}
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
        height: 100vh;
    }

    #countdown h2 {
        font-size: 3rem;
        margin-bottom: 0;
    }

    #countdown small {
        font-size: 1rem;
    }
</style>
{{-- 
<!-- Optional Countdown Script -->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2024 00:00:00").getTime();

    // Update the countdown every 1 second
    var countdownfunction = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the respective elements
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the countdown is over, show a message
        if (distance < 0) {
            clearInterval(countdownfunction);
            document.getElementById("countdown").innerHTML = "The event has started!";
        }
    }, 1000);
</script> --}}
@endsection
