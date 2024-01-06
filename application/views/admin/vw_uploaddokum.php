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
                                    <li><a href="<?= base_url('Admin/UploadPesan/') ?>">Upload Menu Pesanan</a></li>
                                    <li><a href="<?= base_url('Admin/Pesan/') ?>">Pesan</a></li>
                                    <li  class="active"><a href="<?= base_url('Admin/Dokumentasi/') ?>">Dokumentasi</a></li>
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


  <style>
    .icon {
      height: 50px;
      margin-right: 10px;
    }

    div[id^="download"] {
      display: none;
    }

    .container-xxxl {
      border-radius: 10px;
      /* Add rounded corners */
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      /* Add a subtle shadow */
    }

    .col-md-8 {
      border-radius: 10px;
      /* Add rounded corners to the inner column */
      overflow: hidden;
      /* Hide overflow for rounded corners */
    }

    .p-5 {
      border-radius: 10%;
      /* Add rounded corners to the inner content */
      background-color: #fff;
      /* Set a white background */
    }
  </style>

  <div class="container-xxxl py-5 px-0 bg-active wow fadeInUp d-flex justify-content-center align-items-center"
    data-wow-delay="0.1s">
    <div class="col-md-8 d-flex align-items-center">
      <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
        <center>
          <h1 class="text-dark mb-5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" ;">UPLOAD DOKUMENTASI KEGIATAN
          </h1>
        </center>
        <form class="d-flex flex-column align-items-center" enctype="multipart/form-data" method="post"
          action="process_recipe.php">
          <div class="row g-3 justify-content-center">

            <div class="col-md-12 mb-4">
              <div class="form-floating">
                <label for="recipe_photo">Upload Recipe Photo</label>
                <input type="file" class="form-control" id="recipe_photo" name="recipe_photo"
                  style="height: 50px;  font-size: 1.5rem;">
              </div>
            </div>

            <div class="col-md-12 mb-4">
              <div class="form-floating mb-3">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                  placeholder="Nama Kegiatan" style="width: 100%;  font-size: 1.5rem;">
              </div>
            </div>
            <div class="col-md-12 mb-4">
              <div class="form-floating mb-3">
                <label for="tanggal">Tanggal Kegiatan</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Kegiatan"
                  style="width: 100%; font-size: 1.5rem;">
              </div>
            </div>

            <div class="col-md-12 mb-4">
              <div class="form-floating">
                <label for="deskripsi">Deskripsi Kegiatan</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"
                  placeholder="Letak deskripsi kegiatan disini" style="height: 150px; font-size: 1.5rem;"></textarea>
              </div>
            </div>

            <div class="col-12 mb-4">
              <a href="<?= base_url('Admin') ?>" class="btn btn-success w-100 py-3" style="font-size: 1.5rem;">Submit
                Resep</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>