
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Update Email</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="departments.html">Update Email</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Update Email</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Nama<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="department_id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Email<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="department_dame">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Status<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="head_of_department">
                                        </div>
                                    </div>
                                <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Status Pengiriman<span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="head_of_department">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
