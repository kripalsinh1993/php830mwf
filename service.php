<!-- content start here -->

<div class="container mt-5 content">
    <h1 class="text-center text-info">Book Your Slot Here<i class="bi bi-person-fill"></i></h1>
    <hr class="border border-2  w-50 mx-auto">
    <div class="row">

        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <p><img src="<?php echo $baseurl; ?>images/carservice.gif" class="img-fluid w-75"
                            style="width: 100%; height: 200px; margin-left: 10%;"></p>
                    <p style="color: green; font-size: 25px; ; margin-left: 90px; font-weight:600; ">Book Service Slot
                        Here</p>

                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card shadow-lg">
                <div class="card-header bg-primary"></div>
                <div class="card-body">

                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="firstname" placeholder="FirstName *" required
                                    class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="lastname" placeholder="LastName *" required
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-2">
                            <input type="text" name="email" placeholder="Email *" required class="form-control">
                        </div>

                        <div class="row">

                            <div class="form-group col-md-12 mt-2">
                                <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <label class="text-success">Upload Your photo *</label>
                                <input type="file" name="userphoto" placeholder="Photo *" required class="form-control">
                            </div>


                        </div>
                        <div class="form-group col-md-12 ">
                            <label class="text-success">Upload RC photo *</label>
                            <input type="file" name="rcphoto" placeholder="Photo *" required class="form-control">
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <input type="text" name="regno" placeholder="Registration No. eg. 'GJ-11-XX-1111' *"
                                required class="form-control">
                        </div>

                        <div class="form-group col-md-12 mt-2">
                            <textarea name="issue" placeholder="Enter Vehicle Issues *" required
                                class="form-control"></textarea>
                        </div>

                        <div class="form-group col-md-12 mt-2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" value="Submit"
                                class="btn btn-lg btn-info mx-5 shadow-lg">

                            <input type="reset" name="reset" value="Reset!"
                                class="btn btn-lg btn-danger me-5 shadow-lg">
                        </div>



                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
</div>