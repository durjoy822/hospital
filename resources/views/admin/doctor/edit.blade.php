@extends('admin.layouts.master')
@section('content')
<div id="content">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="responsive-logo">
                <a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <span class="ti-menu" id="sidebarCollapse"></span>
                </li>
                <li class="nav-item">
                    <span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
                </li>
                <li class="nav-item">
                    <a  data-toggle="modal" data-target=".proclinic-modal-lg">
                        <span class="ti-search"></span>
                    </a>
                    <div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lorvens">
                            <div class="modal-content proclinic-box-shadow2">
                                <div class="modal-header">
                                    <h5 class="modal-title">Search Patient/Doctor:</h5>
                                    <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                    </span>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="search-term" placeholder="Type text here">
                                            <button type="button" class="btn btn-lorvens proclinic-bg">
                                                <span class="ti-location-arrow"></span> Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ti-announcement"></span>
                    </a>
                    <div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
                        <h5>Notifications</h5>
                        <a class="dropdown-item" href="#">
                            <span class="ti-wheelchair"></span> New Patient Added</a>
                        <a class="dropdown-item" href="#">
                            <span class="ti-money"></span> Patient payment done</a>
                        <a class="dropdown-item" href="#">
                            <span class="ti-time"></span>Patient Appointment booked</a>
                        <a class="dropdown-item" href="#">
                            <span class="ti-wheelchair"></span> New Patient Added</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ti-user"></span>
                    </a>
                    <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                        <h5>John Willing</h5>
                        <a class="dropdown-item" href="#">
                            <span class="ti-settings"></span> Settings</a>
                        <a class="dropdown-item" href="#">
                            <span class="ti-help-alt"></span> Help</a>
                        <a class="dropdown-item" href="#">
                            <span class="ti-power-off"></span> Logout</a>
                    </div>
                </li>
            </ul>
        
        </div>
    </nav>
    <!-- /Top Navigation -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Edit Doctor</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">						
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Doctors</li>
                <li class="breadcrumb-item active">Edit Doctor</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Edit Doctor</h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Doctor-name">Doctor Name</label>
                                <input type="text" value="Dr Daniel Smith" class="form-control" placeholder="Doctor name" id="Doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" value="1989-12-12" placeholder="Date of Birth" class="form-control" id="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="specialization">Specialization</label>
                                <input type="text" value="Dentist" placeholder="Specialization" class="form-control" id="specialization">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="experience">Experience</label>
                                <input type="text" value="10 years"  placeholder="Experience" class="form-control" id="experience">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" value="29" placeholder="Age" class="form-control" id="age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" value="+91 12345 67890" placeholder="Phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" value="email@yourdomain.com"  placeholder="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="about-doctor">Doctor Details</label>
                                <textarea placeholder="Doctor Details" class="form-control" id="about-doctor" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris odio, malesuada non rhoncus et, ultricies at turpis. Sed eget lectus nec magna bibendum ornare. </textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea placeholder="Address" class="form-control" id="address" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris odio, malesuada non rhoncus et, ultricies at turpis.</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file">File</label>
                                <input type="file" class="form-control" id="file">
                            </div>
                                                                
                            <div class="form-check col-md-12 mb-2">
                                <div class="text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                    <!-- Alerts-->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Updated Successfully!</strong> Please Check in doctors list
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!-- /Alerts-->
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
    <!-- /Main Content -->
</div>
@endsection