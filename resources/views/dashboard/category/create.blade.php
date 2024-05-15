@extends('dashboard.layouts.main')

@section('container')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h3>Add New User</h3>
                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Shreyu</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Datatables</li>
                        </ol>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="InputName">Name</label>
                                <input type="text" class="form-control" id="InputName">

                                <small class="form-text text-danger">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="InputUsername">Username</label>
                                <input type="text" class="form-control" id="InputUsername">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="InputPhone">Phone Number</label>
                                <input type="text" class="form-control" id="InputPhone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="InputEmail">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="InputKonf_Password">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="InputKonf_Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/dashboard/user" class="btn btn-warning">Back</a>
                        </form>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>
@endsection
