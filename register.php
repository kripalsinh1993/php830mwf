<!-- content start here -->

<div class="container mt-5 content">
    <h1 class="text-center text-info">Create Account Here <i class="bi bi-person-fill"></i></h1>
    <hr class="border border-2  w-50 mx-auto">
    <div class="row">

        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <p><img src="<?php echo $baseurl; ?>images/createaccount.gif" class="img-fluid w-75"
                            style="width: 100%; height: 200px; margin-left: 10%;"></p>
                    <p>EPARK is a parking providing private company, headquartered in Ahmedabad, and incorporated in
                        Rajkot as a private limited company</p>

                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-primary"></div>
                <div class="card-body">

                    <form method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="firstname" placeholder="FirstName *" required
                                    class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="lastname" placeholder="LastName *" required
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-10 mt-2">
                                <input type="text" name="email" placeholder="Email *" required class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mt-2">
                                    <input type="password" name="password" placeholder="Password *" required
                                        class="form-control">
                                </div>

                                <div class="form-group col-md-6 mt-2">
                                    <input type="password" name="cpassword" placeholder="Confirm-Password *" required
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2 col-md-12 mx-auto">
                            <label class="text-success">Select Gender:</label>
                            Male &nbsp;<input type="radio" name="gender" value="male" required>
                            Female &nbsp;<input type="radio" name="gender" value="female" required>
                        </div>

                        <label class=" text-success mt-1">Date Of Birth :</label>
                        <div class="form-group col-md-6 mt-2">
                            <input type="date" name="dob" required class="form-control">
                        </div>
                </div>
                <div class="form-group mt-2 col-md-10 ms-3">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>


                <div class="form-group col-md-7 mt-2">
                    <input type="submit" name="register" value="Sign Up!" class="btn btn-lg btn-info"
                        id="btn">&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="reset" name="reset" value="Reset!" class="btn btn-lg btn-danger">
                </div>



                </form>


            </div>
        </div>
    </div>

</div>
</div>
</div>