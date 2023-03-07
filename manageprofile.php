<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container mt-5">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $mainurl; ?>"><span class="glyphicon glyphicon-home"
                        aria-hidden="true"></span>Home</a></li>&nbsp;&nbsp;
            <li class="active">Manage Profile</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->

<div class="container mt-4 content">
    <h1 class="text-center">Manage Profile<i class="bi bi-person-fill"></i></h1>
    <hr style="border-color: black; width: 50%; height: 5px; margin: auto;">

    <div class="row">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header"></div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" id="frm4">

                        <div class="form-group mt-2">
                            <img src="<?php echo $shwprof[0]["photo"]; ?>" style="width:150px; height:150px"
                                class="rounded-circle">
                            <input type="file" name="img" placeholder="Photo" class="form-control"
                                data-bvalidator="required">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mt-3">
                                <input type="text" name="fname" value="<?php echo $shwprof[0]["firstname"]; ?>"
                                    placeholder="First Name *" class="form-control" data-bvalidator="required,alpha">
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <input type="text" name="lname" value="<?php echo $shwprof[0]["lastname"]; ?>"
                                    placeholder="Last Name *" class="form-control" data-bvalidator="required,alpha">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" name="dob" value="<?php echo $shwprof[0]["dob"]; ?>"
                                    placeholder="DOB *" class="form-control" data-bvalidator="required">
                            </div>


                        </div>

                        <div class="form-group mt-3">
                            <input type="text" name="email" value="<?php echo $shwprof[0]["email"]; ?>"
                                placeholder="Email *" class="form-control" data-bvalidator="required,email">
                        </div>



                        <div class="form-group mt-3">
                            <input type="text" name="phone" value="<?php echo $shwprof[0]["mobile"]; ?>"
                                placeholder="Phone *" class="form-control"
                                data-bvalidator="required,minlen[10],maxlen[10],digit">
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mt-3">
                                <input type="text" name="edu" value="<?php echo $shwprof[0]["education"]; ?>"
                                    placeholder="Education *" class="form-control" data-bvalidator="required">
                            </div>

                            <div class="col-md-6 form-group mt-3">
                                <input type="text" name="uni" value="<?php echo $shwprof[0]["university"]; ?>"
                                    placeholder="University *" class="form-control" data-bvalidator="required">
                            </div>
                        </div>

                        <div class="form-group  mt-3">
                            <textarea name="address" placeholder="Address *" class="form-control"
                                data-bvalidator="required"><?php echo $shwprof[0]["address"]; ?></textarea>
                        </div>



                        <div class="row">
                            <div class="form-group col-md-6 mt-3">
                                <input type="submit" name="upd" value="Update Profile" required
                                    style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
                            </div>

                            <div class="form-group col-md-6 mt-3">
                                <input type="reset" name="reset" value="Reset" required
                                    style="width: 100%; height: auto; margin: auto; padding: 10px; background-color: red; border-radius: 4px; border: none; color:white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>