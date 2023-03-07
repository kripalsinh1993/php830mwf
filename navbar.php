<!-- navbar -->
<nav class="navbar sticky-top navbar-expand-md p-3 mt-0 bg-primary">
        <!-- logo here -->
        <a href="<?php echo $mainurl; ?>" class="navbar-brand"
                style="font-size: 22px; font-family: sans-serif; ">EPARK</a>
        <!-- navbar menu -->
        <!-- toggle button -->
        <button type="button" class="navbar-toggler btn btn-lg bg-primary text-white" data-bs-toggle="collapse"
                data-bs-target="#btnToggle">
                <i class="bi bi-three-dots-vertical text-white border-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="btnToggle">
                <ul class="navbar-link">
                        <li><a href="<?php echo $mainurl; ?>"><i class="bi bi-house text-white"></i> HOME</a></li>
                        <li><a href="<?php echo $mainurl; ?>parking"> <i
                                                class="bi bi-p-circle text-white"></i>PARKING</a></li>
                        <li><a href="<?php echo $mainurl; ?>aboutus"><i class="bi bi-people text-white"></i>ABOUTUS</a>
                        </li>
                        <li><a href="<?php echo $mainurl; ?>contactus"><i
                                                class="bi bi-person-rolodex text-white"></i>CONTACTUS</a>
                        </li>
                        <li><a href="<?php echo $mainurl; ?>feedback"><i class="bi bi-journal-text"></i>FEEDBACK</a>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bi bi-person-check-fill"></i> ACCOUNT</a>
                                <ul class="dropdown-menu">
                                        <li><a href="<?php echo $mainurl; ?>login">LogIn!</a></li>
                                        <li><a href="<?php echo $mainurl; ?>register">SignUp!</a></li>
                                </ul>
                        </li>
                </ul>
        </div>
</nav>