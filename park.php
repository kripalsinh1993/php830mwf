<!-- content start here -->

<div class="container mt-5 content">
    <h1 class="text-center text-info">Book Your Slot Here</h1>
    <hr class="border border-2  w-50 mx-auto">
    <div class="row">

        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <p><img src="<?php echo $baseurl; ?>images/park.gif" class="img-fluid w-75"
                            style="width: 100%; height: 200px; margin-left: 10%;"></p>
                    <p style="color: green; font-size: 25px; ; margin-left: 12px;"><b>Hurry !! Park Your Vehicle</b></p>

                </div>
            </div>
        </div>

        <div class="col-md-8">
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



                        </div>

                        <div class="form-group col-md-12 mt-2">
                            <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mt-2">
                                <select name="parkarea" placeholder="which type of vehicle*" required
                                    class="form-control">
                                    <option value="">-select parking near-</option>
                                    <option value="1">KKV Chawk </option>
                                    <option value="2">Indira Circle </option>
                                    <option value="3">Nana Mava Chawk</option>
                                    <option value="4">Gondal Chokdi</option>
                                    <option value="5">Bhaktinagar</option>
                                    <option value="6">Astron Chawk</option>
                                    <option value="7">Mahila College Circle</option>
                                    <option value="8">Kotecha Chawk</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <input type="text" name="regno" placeholder="Registration No. eg. 'GJ-11-XX-1111' *"
                                    required class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-2">
                            <label class="text-success">Upload RC Book photo *</label>
                            <input type="file" name="rcphoto" placeholder="Photo *" required class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 mt-2">
                                <label class="text-success">Entry Date *</label>
                                <input type="date" name="entrydate" required class="form-control">
                            </div>
                            <div class="form-group col-md-2 mt-2">
                                <label class="text-success">Entry Time *</label>
                                <input type="time" name="entrytime" required class="form-control">
                            </div>

                            <div class="form-group col-md-4 mt-2">
                                <label class="text-success">Exit Date *</label>
                                <input type="date" name="outdate" required class="form-control">
                            </div>
                            <div class="form-group col-md-2 mt-2">
                                <label class="text-success">Entry Time *</label>
                                <input type="time" name="outtime" required class="form-control">
                            </div>

                        </div>


                        <div class="form-group col-md-12 mt-2">
                            <textarea name="address" placeholder="Residential Address *" required
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