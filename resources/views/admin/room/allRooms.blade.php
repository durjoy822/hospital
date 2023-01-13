@extends('admin.layouts.master')
@section('content')
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Allotments</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Allotments</li>
                <li class="breadcrumb-item active">All Allotments</li>
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
                    <h3 class="widget-title">Allotments List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="select-all">
                                            <label class="custom-control-label" for="select-all"></label>
                                        </div>
                                    </th>
                                    <th>Room</th>
                                    <th>Room Type</th>
                                    <th>Patient Name</th>
                                    <th>Allotment Date</th>
                                    <th>Discharge Date</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="1">
                                            <label class="custom-control-label" for="1"></label>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>Icu</td>
                                    <td>Manoj Kumar</td>
                                    <td>12-11-2018</td>
                                    <td>16-11-2018</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="2">
                                            <label class="custom-control-label" for="2"></label>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>Ac Room</td>
                                    <td>Susan</td>
                                    <td>10-11-2018</td>
                                    <td>-</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-danger">Not Discharged</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="3">
                                            <label class="custom-control-label" for="3"></label>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>Ac Room</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <span class="badge badge-warning">Not Alloted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="4">
                                            <label class="custom-control-label" for="4"></label>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>General</td>
                                    <td>Raj kiran</td>
                                    <td>10-11-2018</td>
                                    <td>12-11-2018</td>
                                    <td>Dr Wilsson</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="5">
                                            <label class="custom-control-label" for="5"></label>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>Icu</td>
                                    <td>Manoj Kumar</td>
                                    <td>12-11-2018</td>
                                    <td>16-11-2018</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="6">
                                            <label class="custom-control-label" for="6"></label>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>Ac Room</td>
                                    <td>Susan</td>
                                    <td>10-11-2018</td>
                                    <td>-</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-danger">Not Discharged</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="7">
                                            <label class="custom-control-label" for="7"></label>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>Ac Room</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <span class="badge badge-warning">Not Alloted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="8">
                                            <label class="custom-control-label" for="8"></label>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>General</td>
                                    <td>Raj kiran</td>
                                    <td>10-11-2018</td>
                                    <td>12-11-2018</td>
                                    <td>Dr Wilsson</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="9">
                                            <label class="custom-control-label" for="9"></label>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>Icu</td>
                                    <td>Manoj Kumar</td>
                                    <td>12-11-2018</td>
                                    <td>16-11-2018</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="10">
                                            <label class="custom-control-label" for="10"></label>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>Ac Room</td>
                                    <td>Susan</td>
                                    <td>10-11-2018</td>
                                    <td>-</td>
                                    <td>Dr Daniel Smith</td>
                                    <td>
                                        <span class="badge badge-danger">Not Discharged</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="11">
                                            <label class="custom-control-label" for="11"></label>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>Ac Room</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <span class="badge badge-warning">Not Alloted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="12">
                                            <label class="custom-control-label" for="12"></label>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>General</td>
                                    <td>Raj kiran</td>
                                    <td>10-11-2018</td>
                                    <td>12-11-2018</td>
                                    <td>Dr Wilsson</td>
                                    <td>
                                        <span class="badge badge-success">Available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!--Export links-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center export-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Export links-->
                        <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span>
                            DELETE</button>
                        <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span>
                            EDIT</button>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
@endsection