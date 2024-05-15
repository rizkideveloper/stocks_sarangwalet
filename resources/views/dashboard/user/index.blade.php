@extends('dashboard.layouts.main')

@section('container')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Users</h1>


            <div class="row mb-4">
                <div class="col">
                    <div class="app-card">
                        <div class="app-card-body p-3 p-lg-4">
                            {{-- <a a href="/dashboard/user/create" class="btn btn-primary mb-3">Add New User</a> --}}

                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#modal-create">
                                Launch demo modal
                            </button>

                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table id="userTable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div><!--//col-->

            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <script>
        $(document).ready(function() {

            $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '5%'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true,
                        width: '25%'
                    },
                    {
                        data: 'username',
                        name: 'username',
                        orderable: true,
                        searchable: true,
                        width: '20%'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        orderable: true,
                        searchable: true,
                        width: '20%'
                    },
                    {
                        data: 'role',
                        name: 'role',
                        orderable: true,
                        searchable: true,
                        width: '20%'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '10%'
                    }
                ]
            });

            //action create post
            $('#submit').click(function(e) {
                e.preventDefault();

                //define variable
                let name = $('#name').val();
                let username = $('#username').val();
                let phone = $('#phone').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let token = $("meta[name='csrf-token']").attr("content");

                //ajax
                $.ajax({
                    url: `/dashboard/user`,
                    type: "POST",
                    cache: false,
                    data: {
                        "name": name,
                        "username": username,
                        "phone": phone,
                        "email": email,
                        "password": password,
                        "_token": token
                    },
                    success: function(response) {

                        //show success message
                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });

                        //clear form
                        $('#name').val('');
                        $('#username').val('');
                        $('#phone').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#konf_password').val('');

                        //close modal
                        $('#modal-create').modal('hide');

                         $('#userTable').DataTable().ajax.reload();


                    },
                    error: function(error) {

                        if (error.responseJSON.name[0]) {
                            $('#error_name').html(error.responseJSON.name[0]);
                        }

                        if (error.responseJSON.username[0]) {
                            $('#error_username').html(error.responseJSON.username[0]);
                        }

                        if (error.responseJSON.phone[0]) {
                            $('#error_phone').html(error.responseJSON.phone[0]);
                        }

                        if (error.responseJSON.email[0]) {
                            $('#error_email').html(error.responseJSON.email[0]);
                        }

                        if (error.responseJSON.password[0]) {
                            $('#error_password').html(error.responseJSON.password[0]);
                        }

                        if (error.responseJSON.konf_password[0]) {
                            $('#error_confpassword').html(error.responseJSON.konf_password[0]);
                        }

                    }

                });

            });
        });
    </script>

    @include('dashboard.user.modal_create')
@endsection
