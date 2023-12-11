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
                                    <li ><a href="#">Resep</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= base_url('User/Sarapan/') ?>">Sarapan</a></li>
                                            <li><a href="<?= base_url('User/Makanan/') ?>">Makanan</a></li>
                                            <li><a href="<?= base_url('User/Dessert/') ?>">Dessert</a></li>
                                            <li><a href="<?= base_url('User/Snack/') ?>">Snack</a></li>
                                            <li><a href="<?= base_url('User/Minuman/') ?>">Minuman</a></li>

                                        </ul>
                                    </li>

                                    <li class="active"><a href="<?= base_url('User/Dokumentasi/') ?>">Dokumentasi</a></li>
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


    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Blog Area -->
                        <div class="single-blog-area mb-80">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="<?= base_url('assets/') ?>img/blog-img/berbagi.jpg" alt="">
                                <!-- Post Date -->
                                <div class="post-date">
                                    <a href="#"><span>05</span>Agustus <br> 2023</a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Pembagian Bahan Makanan Kepada Warga Rumbai</a>
                                <div class="meta-data">by <a href="#">Volunteer</a> in <a href="#">Pekanbaru</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                        </div>

                        <!-- Single Blog Area -->
                        <div class="single-blog-area mb-80">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="<?= base_url('assets/') ?>img/blog-img/berbagi2.jpg" alt="">
                                <!-- Post Date -->
                                <div class="post-date">
                                    <a href="#"><span>08</span>Oktober <br> 2023</a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Dana Bahan Makanan Kepada Warga Riau </a>
                                <div class="meta-data">by <a href="#">Volunteer</a> in <a href="#">Pekanbaru</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                        </div>

                        <!-- Single Blog Area -->
                        <div class="single-blog-area mb-80">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="<?= base_url('assets/') ?>img/blog-img/berbagi3.jpg" alt="">
                                <!-- Post Date -->
                                <div class="post-date">
                                    <a href="#"><span>27</span>Juli <br> 2023</a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Bantuan Sukarela Kepada Masyarakat Dalam Bentuk Bahan Makanan</a>
                                <div class="meta-data">by <a href="#">Volunteer</a> in <a href="#">Pekanbaru</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                        </div>

                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Widget -->
                        <div class="single-widget mb-80">
                            <h6>Archive</h6>
                            <ul class="list">
                                <li><a href="#">March 2023</a></li>
                                <li><a href="#">February 2023</a></li>
                                <li><a href="#">January 2023</a></li>
                                <li><a href="#">December 2022</a></li>
                                <li><a href="#">November 2022</a></li>
                            </ul>
                        </div>


                        <!-- Widget -->
                        <div class="single-widget mb-80">
                            <div class="quote-area text-center">
                                <span>"</span>
                                <h4>Nothing is better than going home to family and eating good food and relaxing</h4>
                                <p>John Smith</p>
                                <div class="date-comments d-flex justify-content-between">
                                    <div class="date">January 04, 2018</div>
                                    <div class="comments">2 Comments</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

   