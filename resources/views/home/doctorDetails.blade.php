@extends('home.layouts.master')
@section('content')
    <section class="doctor-detail-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="docter-detail">
                        <h3 class="name">{{ $doctor->name }}</h3>
                        <span class="designation">{{ $doctor->education }}</span>
                        <div class="text">{{ $doctor->details }}</div>
                        <ul class="doctor-info-list">
                            <li>
                                <strong>Speciality</strong>
                                <p>Endocrinology <br>Paediatric Medicine <br>Urology</p>
                            </li>
                            <li>
                                <strong>Education</strong>
                                <p>{{ $doctor->education }}.</p>
                            </li>
                            <li>
                                <strong>Experience</strong>
                                <p>{{ $doctor->experience }}</p>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <p>{{ $doctor->address }}</p>
                            </li>
                            <li>
                                <strong>Timing</strong>
                                @php $d=json_decode($doctor->working_days); @endphp
                                <p>
                                    @foreach ($d as $day)
                                        @if ($day == 5)
                                            Saturday,
                                        @elseif($day == 6)
                                            Sunday,
                                        @elseif($day == 0)
                                            Monday,
                                        @elseif($day == 1)
                                            Tuesday,
                                        @elseif($day == 2)
                                            Wednesday,
                                        @elseif($day == 3)
                                            Thrusday,
                                        @elseif($day == 4)
                                            Friday.
                                        @endif
                                    @endforeach
                                </p>
                            </li>
                            <li>
                                <strong>Phone</strong>
                                <p>{{ $doctor->phone }}</p>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <p>{{ $doctor->email }}</p>
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
                                <figure class="image"><img src="{{ asset($doctor->photo) }}" alt=""></figure>
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
                                    @foreach ($d as $day)
                                        <li>
                                            @if ($day == 1)
                                                Saturday
                                            @elseif($day == 2)
                                                Sunday
                                            @elseif($day == 3)
                                                Monday
                                            @elseif($day == 4)
                                                Tuesday
                                            @elseif($day == 5)
                                                Wednesday
                                            @elseif($day == 6)
                                                Thrusday
                                            @elseif($day == 7)
                                                Friday
                                            @endif
                                            <span>10:00 - 20:00</span>
                                        </li>
                                    @endforeach
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
                @foreach ($doctors as $list)
                    <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <figure class="image"><img src="{{ asset($list->photo) }}" alt="{{ $list->name }}"
                                    style="height:480px"></figure>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                            </ul>
                            <div class="info-box">
                                <h4 class="name"><a
                                        href="{{ route('doctor.details', $list->id) }}">{{ $list->name }}</a></h4>
                                @php $department = DB::table('departments')->find($list->specialization); @endphp
                                <span class="designation">
                                    @if (isset($department))
                                        {{ $department->name }}
                                    @else
                                        Specialization not found
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection
