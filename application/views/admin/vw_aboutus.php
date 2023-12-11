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
                                    <li><a href="#">Resep</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('Admin/Sarapan/') ?>">Sarapan</a></li>
                                            <li><a href="<? base_url('Admin/Makanan/') ?>">Makanan</a></li>
                                            <li><a href="<?= base_url('Admin/Dessert/') ?>">Dessert</a></li>
                                            <li><a href="<?= base_url('Admin/Snack/') ?>">Snack</a></li>
                                            <li><a href="<?= base_url('Admin/Minuman/') ?>">Minuman</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="<?= base_url('Admin/Dokumentasi/') ?>">Dokumentasi</a></li>
                                    <li  class="active"><a href="<?= base_url('Admin/Aboutus/') ?>">About Us</a></li>
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
    
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url('Assets/') ?>img/bg-img/breadcumb1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Who we are and what we do?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="sub-heading pb-5">Hype atau Healthy Food merupakan sebuah website yang menyediakan berbagai resep masakan makanan sehat dan bergizi yang dimana melalui aplikasi ini juga dapat melakukan sumbangan secara sukarela untuk orang-orang yang kurang mampu untuk mendapatkan makanan</h6>

                    <p class="text-center">Tujuan aplikasi ini untuk membantu penggunanya menjalani hidup yang lebih sehat dengan memberikan akses ke berbagai resep makanan sehat dan panduan nutrisi. Dengan adanya aplikasi ini, diharapkan pengguna memiliki pola makan sehat dan seimbang sehingga dapat mencegah pengguna dari berbagai macam penyakit. Selain bertujuan dalam meningkatkan kesehatan pengguna, website ini juga memiliki tujuan untuk membantu masyarakat-masyarakat yang kurang mampu dalam perekonomian sehingga memiliki kesempatan yang kecil bahkan tidak memiliki kesempatan untuk makan.</p>
                </div>
            </div>

            <div class="row align-items-center mt-70">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?= base_url('assets') ?>img/core-img/salad.png" alt="">
                        <h3><span class="counter">1287</span></h3>
                        <h6>Pengguna</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?= base_url('assets') ?>iimg/core-img/hamburger.png" alt="">
                        <h3><span class="counter">125</span></h3>
                        <h6>Kegiatan Volunteer</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?= base_url('assets') ?>iimg/core-img/rib.png" alt="">
                        <h3><span class="counter">471</span></h3>
                        <h6>Resep Makanan</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="i<?= base_url('assets') ?>img/core-img/pancake.png" alt="">
                        <h3><span class="counter">326</span></h3>
                        <h6>Resep Minuman</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img class="mb-70" src="<?= base_url('assets') ?>iimg/bg-img/about.png" alt="">
                    <p class="text-center"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

 