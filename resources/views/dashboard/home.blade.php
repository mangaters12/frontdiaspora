
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Halo {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Banyak Data</h6>
                                <h3>50055</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Awards</h6>
                                <h3>50+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Department</h6>
                                <h3>30+</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Revenue</h6>
                                <h3>$505</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
            <div class="col-md-12 col-lg-6">

                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Overview</h5>
                            </div>
                            <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span>Teacher</li>
                                    <li><span class="circle-green"></span>Student</li>
                                    <li class="star-menus"><a href="javascript:;"><i
                                                class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="apexcharts-area"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-6">

                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Number of Students</h5>
                            </div>
                            <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span>Girls</li>
                                    <li><span class="circle-green"></span>Boys</li>
                                    <li class="star-menus"><a href="javascript:;"><i
                                                class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bar"></div>
                    </div>
                </div>

            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-6 d-flex">

                <div class="card flex-fill student-space comman-shadow">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title">Dashboard</h5>
                        <ul class="chart-list-out student-ellips">
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table star-student table-hover table-center table-borderless table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Data</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>D1</div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="profile.html">
                                                <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/logoo.png') }}" width="25" alt="Star Students"> Mohammad Subhan                                        </a>

                                            </td>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="text-nowrap">
                                            <div>D2</div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="profile.html">
                                                <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/logoo.png') }}" width="25" alt="Star Students">Fikry Sofyan
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>D3</div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="profile.html">
                                                <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/logoo.png') }}" width="25" alt="Star Students"> Dekanovy
                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>D4</div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="profile.html">
                                                <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/logoo.png') }}" width="25" alt="Star Students"> Rijaldi
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <div>D5</div>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="profile.html">
                                                <img class="rounded-circle"src="{{ URL::to('assets/img/profiles/logoo.png') }}" width="25" alt="Star Students"> Pale Prett
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 d-flex">

                <div class="card flex-fill comman-shadow">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="card-title ">MB Activity </h5>
                        <ul class="chart-list-out student-ellips">
                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="activity-groups">
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-01.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Progress</h4>
                                    <h5>Data Works</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>1 Day ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-02.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Planning</h4>
                                    <h5>Progress</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-awards">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-03.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Place</h4>
                                    <h5>Depok</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>2 Week ago</span>
                                </div>
                            </div>
                            <div class="activity-awards mb-0">
                                <div class="award-boxs">
                                    <img src="assets/img/icons/award-icon-04.svg" alt="Award">
                                </div>
                                <div class="award-list-outs">
                                    <h4>Rewards</h4>
                                    <h5>Visit Japan</h5>
                                </div>
                                <div class="award-time-list">
                                    <span>3 Day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill fb sm-box">
                    <div class="social-likes">
                        <p>Like us on facebook</p>
                        <h6>50,095</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-01.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill twitter sm-box">
                    <div class="social-likes">
                        <p>Follow us on twitter</p>
                        <h6>48,596</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-02.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill insta sm-box">
                    <div class="social-likes">
                        <p>Follow us on instagram</p>
                        <h6>52,085</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-03.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card flex-fill linkedin sm-box">
                    <div class="social-likes">
                        <p>Follow us on linkedin</p>
                        <h6>69,050</h6>
                    </div>
                    <div class="social-boxs">
                        <img src="assets/img/icons/social-icon-04.svg" alt="Social Icon">
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
