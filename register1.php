<!-- Modal-->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup for an Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form action="_handle(r).php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" id="uname">User Name</label>
                            <input type="text" class="form-control" id="signupEmail" name="signupEmail"
                                aria-describedby="emailHelp" require>
                           <!-- <div>We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword" require> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="signupCpassword" name="signupCpassword" require>
                        </div>

                        <button type="submit" class="btn btn-primary">Signup</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </form>
                
            </div>
        </div>
    </div>
