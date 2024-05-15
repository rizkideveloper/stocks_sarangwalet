<!-- Modal -->
<div class="modal modal-lg fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputName">Name</label>
                            <input type="text" class="form-control" name="name" id="name">

                           
                                <small class="form-text text-danger" id="error_name"></small>
                           
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputUsername">Username</label>
                            <input type="text" class="form-control" name="username" id="username">

                            
                                <small class="form-text text-danger" id="error_username"></small>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputPhone">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone">

                            
                                <small class="form-text text-danger" id="error_phone"></small>
                            
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputEmail">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">

                         
                                <small class="form-text text-danger" id="error_email"></small>
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputPassword">Password</label>
                            <input type="password" class="form-control" id="password" name="password">

                          
                                <small class="form-text text-danger" id="error_password"></small>
                            
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="InputKonf_Password">Confirm Password</label>
                            <input type="password" class="form-control" id="konf_password" name="konf_password">


                                <small class="form-text text-danger" id="error_confpassword"></small>
                            
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
