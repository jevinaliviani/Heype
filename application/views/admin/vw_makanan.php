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
                                    <li><a href="<?= base_url('Admin/') ?>">Home</a></li>
                                    <li class="active"><a href="#">Resep</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('Admin/Sarapan/') ?>">Sarapan</a></li>
                                            <li><a href="<?= base_url('Admin/Makanan/') ?>">Makanan</a></li>
                                            <li><a href="<?= base_url('Admin/Dessert/') ?>">Dessert</a></li>
                                            <li><a href="<?= base_url('Admin/Snack/') ?>">Snack</a></li>
                                            <li><a href="<?= base_url('Admin/Minuman/') ?>">Minuman</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="<?= base_url('Admin/Dokumentasi/') ?>">Dokumentasi</a></li>
                                    <li><a href="<?= base_url('Admin/Aboutus/') ?>">About Us</a></li>
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
                        <h3>Makanan Favorite</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?= base_url('assets/') ?>img/bg-img/m1.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Nasi Goreng</h5>
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
                        <img src="<?= base_url('assets/') ?>img/bg-img/m2.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Sup Ayam</h5>
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
                        <img src="<?= base_url('assets/') ?>img/bg-img/m3.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Salmon Teriyaki Gluten Free </h5>
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
                        <img src="<?= base_url('assets/') ?>img/bg-img/m4.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Kacang Panjang Tumis Daging</h5>
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
                        <img src="<?= base_url('assets/') ?>img/bg-img/m5.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Nasi Ayam Hainan</h5>
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
                        <img src="<?= base_url('assets/') ?>img/bg-img/m6.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Spinach Pasta</h5>
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

                <div class="col-12 text-center">
                                    <a href="<?= base_url('Admin/UploadResep') ?>"  class="btn delicious-btn mt-30" type="submit">Upload</a>
                    </div>
                    
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->