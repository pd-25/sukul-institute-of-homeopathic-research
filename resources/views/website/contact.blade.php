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
                    <h2>Contact</h2>
                    <p>Maecenas sed erat tempor, iaculis nibh eget, auctor mi. Donec ultrices pellentesque tellus, ac
                        vehicula neque mollis et. </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-box">
                        <h3 class="mb-4">Please mention your requirements/queries with us -</h3>
                        <form role="form" action="" method="post" id="contact-form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="First Name"
                                                class="form-control" name="first_name" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="Last Name"
                                                class="form-control" name="last_name" id="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="Occupation"
                                                class="form-control" name="form_Occupation" id="form_Occupation">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="City"
                                                class="form-control" name="form_City" id="form_City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select name="country" id="country" class="form-control">
                                                <option value="India">India </option>
                                                <option value="Australia">Australia </option>
                                                <option value="Bahrain">Bahrain </option>
                                                <option value="Bangladesh">Bangladesh </option>
                                                <option value="Belgium">Belgium </option>
                                                <option value="Canada">Canada </option>
                                                <option value="Doha">Doha </option>
                                                <option value="Dubai">Dubai </option>
                                                <option value="France">France </option>
                                                <option value="Germany">Germany </option>
                                                <option value="Hong Kong">Hong Kong </option>
                                                <option value="Indonesia">Indonesia </option>
                                                <option value="Ireland">Ireland </option>
                                                <option value="Italy">Italy </option>
                                                <option value="Japan">Japan </option>
                                                <option value="Kenya">Kenya </option>
                                                <option value="Kuwait">Kuwait </option>
                                                <option value="Lebanon">Lebanon </option>
                                                <option value="Libya">Libya </option>
                                                <option value="Malaysia">Malaysia </option>
                                                <option value="Maldives">Maldives </option>
                                                <option value="Mauritius">Mauritius </option>
                                                <option value="Mexico">Mexico </option>
                                                <option value="Nepal">Nepal </option>
                                                <option value="Netherlands">Netherlands </option>
                                                <option value="New Zealand">New Zealand </option>
                                                <option value="Norway">Norway </option>
                                                <option value="Oman">Oman </option>
                                                <option value="Pakistan">Pakistan </option>
                                                <option value="Qatar">Qatar </option>
                                                <option value="Quilon">Quilon </option>
                                                <option value="Russia">Russia </option>
                                                <option value="Saudi Arabia">Saudi Arabia </option>
                                                <option value="singapore">Singapore </option>
                                                <option value="South Africa">South Africa </option>
                                                <option value="South Korea">South Korea </option>
                                                <option value="Spain">Spain </option>
                                                <option value="Sri Lanka">Sri Lanka </option>
                                                <option value="Sweden">Sweden </option>
                                                <option value="switzerland">Switzerland </option>
                                                <option value="Thailand">Thailand </option>
                                                <option value="United Arab Emirates">UAE </option>
                                                <option value="United Kingdom">UK </option>
                                                <option value="United States">US </option>
                                                <option value="Yemen">Yemen </option>
                                                <option value="Zimbabwe">Zimbabwe </option>
                                                <option value="Other">Other </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="tel" required="required" placeholder="Phone"
                                                class="form-control" name="form_Phone" id="form_Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="tel" required="required" placeholder="Mobile"
                                                class="form-control" name="form_Mobile" id="form_Mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" required="required" placeholder="Email"
                                                class="form-control" name="form_Email" id="form_Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea data-error="" required="required" rows="4" placeholder="Address..." class="form-control"
                                                name="form_Address" id="form_Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea data-error="Please,leave us a message." required="required" rows="4"
                                                placeholder="Query/ Requirement" class="form-control" name="form_message" id="form_message"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-3">
                                        <input type="submit" value="Submit Now" class="rm-btn">
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-box">
                        <h4>Registered Office</h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Prabhas, Shyambati, PO - Santiniketan
                            731235, West Bengal, India</p>
                        <hr>
                        <h4>Working Office</h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 297C Bramho Samaj Road, Behala, Kolkata
                            700034, India</p>
                        <hr>
                        <p class="mb-0"><b>Prof Nirmal C Sukul</b></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> sukulinst@gmail.com</p>

                        <p class="mb-0"><b>Dr Anirban Sukul</b></p>
                        <p class="mb-0"><i class="fa fa-envelope" aria-hidden="true"></i> anirsukul@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +91 98304 22496</p>

                        <p class="mb-0"><b>Dr Soma Sukul</b></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> sukulinst@gmail.com</p>
                    </div>

                </div>

            </div>



        </div>
    </section>
@endsection
