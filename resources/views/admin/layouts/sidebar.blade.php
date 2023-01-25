<nav id="sidebar" class="proclinic-bg">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/admin/images/logo.png') }}" class="logo"
                alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        <li class="">
            <a href="{{ route('admin.dashboard') }}">
                <span class="ti-home"></span> Dashboard
            </a>
        </li>
        <li>
            <a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
                <span class="ti-wheelchair"></span> Patients
            </a>
            <ul class="collapse list-unstyled" id="nav-patients">
                <li>
                    <a href="{{ route('admin.patient') }}">All Patients</a>
                </li>
                <li>
                    <a href="{{ route('admin.patientAdd') }}">Add Patient</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
                <span class="ti-user"></span> Doctors
            </a>
            <ul class="collapse list-unstyled" id="nav-doctors">
                <li>
                    <a href="{{ route('doctor.create') }}">Add Doctor</a>
                </li>
                <li>
                    <a href="{{ route('doctor.index') }}">All Doctors</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
                <span class="ti-pencil-alt"></span> Appointments
            </a>
            <ul class="collapse list-unstyled" id="nav-appointment">
                <li>
                    <a href="{{ route('appointment.create') }}">Add Appointment</a>
                </li>
                <li>
                    <a href="{{ route('appointment.index') }}">All Appointments</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
                <span class="ti-money"></span> Payments
            </a>
            <ul class="collapse list-unstyled" id="nav-payment">
                <li>
                    <a href="{{ route('payment.create') }}">Add Payment</a>
                </li>
                <li>
                    <a href="{{ route('payment.index') }}">All Payments</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-rooms" data-toggle="collapse" aria-expanded="false">
                <span class="ti-key"></span> Room Allotments
            </a>
            <ul class="collapse list-unstyled" id="nav-rooms">
                <li>
                    <a href="{{ route('admin.roomAdd') }}">Add Room Allotment</a>
                </li>
                <li>
                    <a href="{{ route('admin.room') }}">All Rooms</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('department.index') }}">
                <span class="ti-layout-menu-v"></span> Department
            </a>
        </li>
        <li>
            <a href="{{ route('medicine.index') }}">
                <span class="ti-heart-broken"></span> Medicine
            </a>
        </li>
        <li>
            <a href="{{ route('orders') }}">
                <span class="ti-wallet"></span> Orders
            </a>
        </li>
        <li>
            <a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
                <span class="ti-file"></span> Other Pages
            </a>
            <ul class="collapse list-unstyled" id="nav-pages">
                <li>
                    <a href="{{route('admin.blog')}}">Blog </a>
                </li>
                <li>
                    <a href="{{route('carousel.index')}}">Carousel </a>
                </li>
                <li>
                    <a href="{{route('service.index')}}">Services </a>
                </li>
                <li>
                    <a href="{{route('review.index')}}">Review </a>
                </li>
                <li>
                    <a href="login.html">Login </a>
                </li>
                <li>
                    <a href="sign-up.html">Sign Up</a>
                </li>
                <li>
                    <a href="404.html">404</a>
                </li>
                <li>
                    <a href="blank-page.html">Blank Page</a>
                </li>
                <li>
                    <a href="pricing.html">Pricing</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="blank-page.html">Coming Soon</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="nav-help animated fadeIn">
        <h5><span class="ti-comments"></span> Need Help</h5>
        <h6>
            <span class="ti-mobile"></span> +8801616657585
        </h6>
        <h6>
            <span class="ti-email"></span> adeveloper.info
        </h6>
        <p class="copyright-text">Copy rights &copy; {{ date('Y') }}</p>
    </div>
</nav>
