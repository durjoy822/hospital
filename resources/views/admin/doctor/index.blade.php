@extends('admin.layouts.master')
@section('content')
<div class="row no-margin-padding">
    <div class="col-md-6">
        <h3 class="block-title">Doctors</h3>
    </div>
    <div class="col-md-6">
        <ol class="breadcrumb">						
            <li class="breadcrumb-item">
                <a href="index.html">
                    <span class="ti-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Doctors</li>
            <li class="breadcrumb-item active">All Doctors</li>
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
                <h3 class="widget-title">Doctors List</h3>
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
                                <th>Doctor ID</th>
                                <th>Doctor Name</th>
                                <th>Experience <small>(in Years)</small></th>
                                <th>Phone</th>
                                <th>Specialization</th>
                                <th>Availability</th>
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
                                <td>1</td>
                                <td>Manoj Kumar</td>
                                <td>10</td>
                                <td>333-444-7777</td>
                                <td>Dental</td>
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
                                <td>2</td>
                                <td>Riya </td>
                                <td>6</td>
                                <td>3423-232-987</td>
                                <td>Ortho</td>
                                <td>
                                    <span class="badge badge-warning">On Leave</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="3">
                                        <label class="custom-control-label" for="3"></label>
                                    </div>
                                </td>
                                <td>3</td>
                                <td>Paul</td>
                                <td>15</td>
                                <td>3423-132-987</td>
                                <td>General Physician</td>
                                <td>
                                    <span class="badge badge-danger">Not Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="4">
                                        <label class="custom-control-label" for="4"></label>
                                    </div>
                                </td>
                                <td>4</td>
                                <td>Manoj Kumar</td>
                                <td>20</td>
                                <td>333-444-7777</td>
                                <td>ENT</td>
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
                                <td>5</td>
                                <td>Riya </td>
                                <td>16</td>
                                <td>3423-232-987</td>
                                <td>General Physician</td>
                                <td>
                                    <span class="badge badge-warning">On Leave</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="6">
                                        <label class="custom-control-label" for="6"></label>
                                    </div>
                                </td>
                                <td>6</td>
                                <td>Paul</td>
                                <td>12</td>
                                <td>3423-132-987</td>
                                <td>Ortho</td>
                                <td>
                                    <span class="badge badge-danger">Not Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="7">
                                        <label class="custom-control-label" for="7"></label>
                                    </div>
                                </td>
                                <td>7</td>
                                <td>Manoj Kumar</td>
                                <td>19</td>
                                <td>333-444-7777</td>
                                <td>Nuero Surgen</td>
                                <td>
                                    <span class="badge badge-success">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="1">
                                        <label class="custom-control-label" for="1"></label>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>Manoj Kumar</td>
                                <td>10</td>
                                <td>333-444-7777</td>
                                <td>Dental</td>
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
                                <td>2</td>
                                <td>Riya </td>
                                <td>6</td>
                                <td>3423-232-987</td>
                                <td>Ortho</td>
                                <td>
                                    <span class="badge badge-warning">On Leave</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="3">
                                        <label class="custom-control-label" for="3"></label>
                                    </div>
                                </td>
                                <td>3</td>
                                <td>Paul</td>
                                <td>15</td>
                                <td>3423-132-987</td>
                                <td>General Physician</td>
                                <td>
                                    <span class="badge badge-danger">Not Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="4">
                                        <label class="custom-control-label" for="4"></label>
                                    </div>
                                </td>
                                <td>4</td>
                                <td>Manoj Kumar</td>
                                <td>20</td>
                                <td>333-444-7777</td>
                                <td>ENT</td>
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
                                <td>5</td>
                                <td>Riya </td>
                                <td>16</td>
                                <td>3423-232-987</td>
                                <td>General Physician</td>
                                <td>
                                    <span class="badge badge-warning">On Leave</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="6">
                                        <label class="custom-control-label" for="6"></label>
                                    </div>
                                </td>
                                <td>6</td>
                                <td>Paul</td>
                                <td>12</td>
                                <td>3423-132-987</td>
                                <td>Ortho</td>
                                <td>
                                    <span class="badge badge-danger">Not Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="7">
                                        <label class="custom-control-label" for="7"></label>
                                    </div>
                                </td>
                                <td>7</td>
                                <td>Manoj Kumar</td>
                                <td>19</td>
                                <td>333-444-7777</td>
                                <td>Nuero Surgen</td>
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
                                <a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
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
                    <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
                    <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
                </div>
            </div>
        </div>
        <!-- /Widget Item -->
    </div>
</div>
@endsection