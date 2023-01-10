@extends('home.layouts.master')
@section('content')
    <section class="doctor-detail-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="docter-detail">
                        <h3 class="name">Dr. Morila Wood</h3>
                        <span class="designation">MBBS (Sydney), FRACS (Paediatric Surgery)</span>
                        <div class="text">After graduating from West Virginia University Medical School, Dr. Emily Haden
                            completed a two-year fellowship in sports medicine at Akron Children’s Hospital. During his
                            training at Akron, Dr. Emily Haden Alex was team physician for the University of Akron and Walsh
                            University.</div>
                        <ul class="doctor-info-list">
                            <li>
                                <strong>Speciality</strong>
                                <p>Endocrinology <br>Paediatric Medicine <br>Urology</p>
                            </li>
                            <li>
                                <strong>Education</strong>
                                <p>Doctor of Medicine, University of Texas, USA (1990) Medical Orientation Program, St.
                                    Louis University (St. Louis, Missouri 1996)</p>
                            </li>
                            <li>
                                <strong>Experience</strong>
                                <p>25 years of Experience in Medicine <br> Vice President and Chief Medical Officer, Kessler
                                    Institute for Rehabilitation <br>Medical Corporation Professor, Institute Of Coast
                                    Private Hospital Campus</p>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <p>Suite 27, Medical Centre, The Sunshine Coast Private Hospital, QLD 4556</p>
                            </li>
                            <li>
                                <strong>Timing</strong>
                                <p>Monday - Friday 08:00 - 20:00 <br> Saturday&nbsp; 09:00 - 18:00 <br> Sunday &nbsp; &nbsp;
                                    09:00 - 18:00</p>
                            </li>
                            <li>
                                <strong>Phone</strong>
                                <p><a href="#">+1-23-345-6789</a></p>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <p><a href="#">myemail@yourdomain.com</a></p>
                            </li>
                            <li>
                                <strong>Website</strong>
                                <p><a href="#">www.yourdomain.com</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="appointment-form default-form">
                        <div class="sec-title">
                            <span class="sub-title">Online Appoinment</span>
                            <h2>Make An Appointment</h2>
                            <span class="divider"></span>
                        </div>

                        <!--Comment Form-->
                        <form action="#" method="post" id="email-form">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="username" placeholder="Your Name">
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <input type="text" name="phone" placeholder="Your Phone">
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <input type="email" name="email" placeholder="Your Email *">
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <textarea name="contact_message" placeholder="Tell us about Pasent"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="theme-btn btn-style-one" type="button" name="submit-form"><span
                                            class="btn-title">Submit Query</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">
                        <!-- Team Block -->
                        <div class="team-block wow fadeInUp">
                            <div class="inner-box">
                                <figure class="image"><img src="{{asset('assets/home/images/resource/team-1.jpg')}}" alt=""></figure>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Doctor Availability -->
                        <div class="docter-availability">
                            <div class="inner">
                                <div class="sec-title">
                                    <span class="sub-title">Timining</span>
                                    <h2>Availability</h2>
                                    <span class="divider"></span>
                                    <div class="text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar.
                                        Vestibulum bib volutpat accumsan non laoreet nulla luctus.</div>
                                </div>
                                <ul class="timing-list-two">
                                    <li>Monday - Friday <span>08:00 - 20:00</span></li>
                                    <li>Saturday <span>09:00 - 18:00</span></li>
                                    <li>Sunday <span>09:00 - 18:00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Detail Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/home/images/resource/team-1.jpg')}}" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/home/images/resource/team-2.jpg')}}" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/home/images/resource/team-3.jpg')}}" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/home/images/resource/team-4.jpg')}}" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection
