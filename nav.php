<header>
    <div class="container-{breakpoint}">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="nav nav1">
                    <a href="index.php" style="text-decoration: none;"><span class="head1"> 4BoND</span></a>
                    <span class="head2">.shop</span>
                    <input type="search" id="search3" placeholder="Hey search for a car here">
                    <button class="search-btn">search</button>
                    <button id="menu" class="btn btn-primary d-lg-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <img src="images/menu.png" style="width:36px; height:36px;">
                    </button>

                    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 60%;">
                        <div class="offcanvas-header">
                            <a href="home" style="text-decoration: none; "><span class="head1" style="font-size:35px;"> 4BoND</span></a>
                            <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>


                                <ul class="nav flex-column  ms-lg-0">
                                    <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link " href="projects.php">Deals</a></li>
                                    <li class="nav-item"><a class="nav-link" href="">Service</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                                </ul>

                            </div>

                        </div>
                    </div>

                    <button class="buy" style="margin-left: 7%;" id="buy"><a href="added-orders.php" style="text-decoration:none; font-size: 17px; color:black;"> Buy Now
                        <?php
    if (isset($_SESSION['added-orders'])){
        $count = count($_SESSION['added-orders']);
        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
    }else{
        echo "<span id=\"cart_count\" class=\"text-warning bg-light \">0</span>";
    }
                        ?> </a></button>

                </div>
            </div>
        </div>
    </div>
</header>