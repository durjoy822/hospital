@extends('home.layouts.master')
@section('content')
    <section class="doctor-detail-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="docter-detail">
                        <h3 class="name">{{ $doctor->name ?? ''}}</h3>
                        <span class="designation">{{ $doctor->education ?? ''}}</span>
                        <div class="text">{{ $doctor->details }}</div>
                        <ul class="doctor-info-list">
                            <li>
                                <strong>Speciality</strong>
                                <p>Endocrinology <br>Paediatric Medicine <br>Urology</p>
                            </li>
                            <li>
                                <strong>Education</strong>
                                <p>{{ $doctor->education ?? ''}}.</p>
                            </li>
                            <li>
                                <strong>Experience</strong>
                                <p>{{ $doctor->experience ?? ''}}</p>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <p>{{ $doctor->address ?? ''}}</p>
                            </li>
                            <li>
                                <strong>Timing</strong>
                                @php $d=json_decode($doctor->working_days ?? ''); @endphp
                                <p>
                                    @isset($d)
                                        @foreach ($d as $day)
                                            @if ($day == 6)
                                                Saturday
                                            @elseif($day == 0)
                                                Sunday
                                            @elseif($day == 1)
                                                Monday
                                            @elseif($day == 2)
                                                Tuesday
                                            @elseif($day == 3)
                                                Wednesday
                                            @elseif($day == 4)
                                                Thrusday
                                            @elseif($day == 5)
                                                Friday
                                            @endif
                                        @endforeach
                                    @endisset
                                </p>
                            </li>
                            <li>
                                <strong>Phone</strong>
                                <p>{{ $doctor->phone ?? ''}}</p>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <p>{{ $doctor->email  ?? ''}}</p>
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
                        <form action="{{route('contact.us.appointment')}}" method="post" id="email-form">@csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <div class="response"></div>
                                </div>
                                <input type="hidden" name="doctor_name" value="{{$doctor->name ?? ''}}">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="username" placeholder="Full Name *" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="email" placeholder="Email Address *" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone" class="username" placeholder="Your Phone" value="{{ old('phone') }}">
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <textarea class="message" name="message" placeholder="Massage">{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 text-center pt-3">
                                    <button class="theme-btn btn-style-one" type="submit" id="submit"
                                        ><span class="btn-title">Send Message</span></button>
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
                                    @isset($d)
                                        @foreach ($d as $day)
                                        <li>
                                            @if ($day == 6)
                                                Saturday
                                            @elseif($day == 0)
                                                Sunday
                                            @elseif($day == 1)
                                                Monday
                                            @elseif($day == 2)
                                                Tuesday
                                            @elseif($day == 3)
                                                Wednesday
                                            @elseif($day == 4)
                                                Thrusday
                                            @elseif($day == 5)
                                                Friday
                                            @endif
                                            <span>10:00 - 20:00</span>
                                            </li>
                                        @endforeach
                                    @endisset
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
