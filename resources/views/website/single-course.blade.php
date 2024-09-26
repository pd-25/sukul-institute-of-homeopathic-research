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
    <div class="row">
    <div class="col-lg-12">
    <div class="inn-course-box">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <h3>{{$course->title}}</h3>
    <p class="jdate"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <b>Available :</b>{{ \Carbon\Carbon::parse($course->created_at)->format('jS F, Y') }}</p>
    {!! $course->description !!}
    <a href="single-course.html" class="rm-btn-red mt-2" data-toggle="modal" data-target="#exampleModal">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please fill up the form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{ route('send.sendMailCourse') }}" method="post" id="job-form" enctype="multipart/form-data">
                        @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="First Name" class="form-control" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Last Name" class="form-control" name="last_name" id="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" required="required" placeholder="Phone" class="form-control" name="form_Phone" id="form_Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Email" class="form-control" name="form_Email" id="form_Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message..." class="form-control" name="form_message" id="form_message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="course_title" id="course_title" value="{{ $course->title }}" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><b>Upload CV:</b></label>
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <input type="submit" value="Submit Now" class="rm-btn">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>
    
    </div>	
        
    </div>
    </section>

@endsection
