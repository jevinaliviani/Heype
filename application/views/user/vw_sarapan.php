       <!-- Navbar Area -->
       <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="<?= base_url('assets/') ?>img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?= base_url('User/') ?>">Home</a></li>
                                    <li class="active"><a href="#">Resep</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('User/Sarapan/') ?>">Sarapan</a></li>
                                            <li><a href="<?= base_url('User/Makanan/') ?>">Makanan</a></li>
                                            <li><a href="<?= base_url('User/Dessert/') ?>">Dessert</a></li>
                                            <li><a href="<?= base_url('User/Snack/') ?>">Snack</a></li>
                                            <li><a href="<?= base_url('User/Minuman/') ?>">Minuman</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="<?= base_url('User/Dokumentasi/') ?>">Dokumentasi</a></li>
                                    <li><a href="<?= base_url('User/Aboutus/') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('Auth/logout/') ?>">Logout</a></li>
                                </ul>

                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
 
 <!-- ##### Best Receipe Area Start ##### -->
 <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Sarapan Populer</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s1.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Chocolate Chia Seed</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s2.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Homemade Sandwitch</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s3.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Smoothies Vegetarian</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s4.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Sandwitch Omlete</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s5.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Roti Telur</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/s6.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Bubur Ayam</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->