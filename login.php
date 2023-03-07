<!-- content start here -->
<div class="container fluid mt-5 content">
    <h1 class="text-info" style="margin-left:36%">Login Your Account <i class="bi bi-person-fill"></i></h1>
    <hr class="border border-2  w-50 mx-auto">
    <div class="row mt-5">


        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <img src="<?php echo $baseurl; ?>images/login.gif" class="img-fluid w-75"
                        style="width: 100%; height: 130px; margin-left: 12%;">
                    <form method="post">
                        <div class="row">
                            <div class="form-group col-md-12 mt-5">
                                <input type="text" name="email" placeholder="Enter Your email *" required
                                    class="form-control">
                                <div class="form-group col-md-12 mt-2">
                                    <input type="password" name="password" placeholder="Enter Password *" required
                                        class="form-control">
                                </div>


                            </div>


                            <div class="form-group col-md-12 mt-1">
                                &nbsp;&nbsp;&nbsp;&nbsp;<a class="text-decoration-none"
                                    href="<?php $mainurl; ?>forgetpassword">Forgot
                                    Password</a>
                                <br>
                                <input type="submit" name="login" value="Login" class="btn btn-md ms-4 btn-info mt-2"
                                    id="btn">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <b> Don't have an account ?</b> <a class="text-decoration-none"
                                    href="<?php $mainurl; ?>register">Create Account</a>

                            </div>
                            <!-- <div class="form-group mt-3 mx-auto">
                                <b> Don't have an account ?</b> <a href="<?php $mainurl; ?>register">Create Account</a>
                            </div> -->
                        </div>


                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
</div>