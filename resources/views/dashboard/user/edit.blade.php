@extends('dashboard.layouts.main')

@section('container')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Edit new user</h1>


            <div class="row mb-4">
                <div class="col">
                    <div class="app-card">
                        <div class="app-card-body p-3 p-lg-4">
                            <form action="/dashboard/user" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="InputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="InputName" value="{{ $user->name }}">

                                    @error('name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputUsername">Username</label>
                                    <input type="text" class="form-control" name="username" id="InputUsername" value="{{ $user->username }}">

                                    @error('username')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputPhone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="InputPhone" value="{{ $user->phone }}">

                                    @error('phone')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputEmail">Email Address</label>
                                    <input type="email" class="form-control" id="InputEmail" name="email" value="{{ $user->email }}">

                                    @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" name="password">

                                    @error('password')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputKonf_Password">Confirm Password</label>
                                    <input type="password" class="form-control" id="InputKonf_Password"
                                        name="konf_password">

                                    @error('konf_password')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div><!--//col-->

            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

@endsection
