@extends('dashboard.layouts.main')

@section('container')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Add new user</h1>


            <div class="row mb-4">
                <div class="col">
                    <div class="app-card">
                        <div class="app-card-body p-3 p-lg-4">
                            <form action="/dashboard/user" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="InputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">

                                    @error('name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputUsername">Username</label>
                                    <input type="text" class="form-control" name="username" id="username">

                                    @error('username')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputPhone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone">

                                    @error('phone')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputEmail">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email">

                                    @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                    @error('password')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="InputKonf_Password">Confirm Password</label>
                                    <input type="password" class="form-control" id="konf_password"
                                        name="konf_password">

                                    @error('konf_password')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button class="btn btn-primary" id="submit">Submit</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div><!--//col-->

            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <script>
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

                    //data post
                    let post = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.title}</td>
                        <td>${response.data.content}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                    //append to table
                    $('#table-posts').prepend(post);

                    //clear form
                    $('#title').val('');
                    $('#content').val('');

                    //close modal
                    $('#modal-create').modal('hide');


                },
                error: function(error) {

                    if (error.responseJSON.title[0]) {

                        //show alert
                        $('#alert-title').removeClass('d-none');
                        $('#alert-title').addClass('d-block');

                        //add message to alert
                        $('#alert-title').html(error.responseJSON.title[0]);
                    }

                    if (error.responseJSON.content[0]) {

                        //show alert
                        $('#alert-content').removeClass('d-none');
                        $('#alert-content').addClass('d-block');

                        //add message to alert
                        $('#alert-content').html(error.responseJSON.content[0]);
                    }

                }

            });

        });
    </script>
@endsection
