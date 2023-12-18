    <style>
    .container-xxxl {
        border-radius: 10px; /* Add rounded corners */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

    .col-md-8 {
        border-radius: 10px; /* Add rounded corners to the inner column */
        overflow: hidden; /* Hide overflow for rounded corners */
    }

    .p-5 {
        border-radius: 10%; /* Add rounded corners to the inner content */
        background-color: #fff; /* Set a white background */
    }

</style>

<div class="container-xxxl py-5 px-0 bg-active wow fadeInUp d-flex justify-content-center align-items-center" data-wow-delay="0.1s">
    <div class="col-md-8 d-flex align-items-center">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <center>
                <!-- <h5 class="section-title ff-secondary text-start text-dark fw-normal">UPLOAD RESEP</h5> -->
                <h1 class="text-dark mb-4">Donasi</h1>
            </center>
            <form class="d-flex flex-column align-items-center" enctype="multipart/form-data" method="post" action="<?= base_url('User/Donasi');?>">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <label for="name">Nama </label>
                            <input type="text" class="form-control" id="name" name="nama" value="<?= set_value('nama'); ?>"
                            placeholder="Nama Lengkap" style="width: 100%; font-size: 1.5rem;">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>"
                            placeholder=" Email" style="width: 100%; font-size: 1.5rem;">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <label for="recipe_name">No Hp</label>
                            <input type="text" class="form-control" id="recipe_name" name="no_hp" value="<?= set_value('no_hp'); ?>"
                            placeholder="Nomor Handphone" style="width: 100%; font-size: 1.5rem;">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <label for="recipe_name">Jumlah Donasi</label>
                            <input type="text" class="form-control" id="recipe_name" name="jum_donasi" value="<?= set_value('jum_donasi'); ?>"
                            placeholder="Nomor Handphone" style="width: 100%; font-size: 1.5rem;">
                            <?= form_error('jum_donasi', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <label for="recipe_photo">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="recipe_photo" value="<?= set_value('bukti_pembayaran'); ?>"
                            name="bukti_pembayaran" style="font-size: 1.5rem;">
                            <?= form_error('bukti_pembayaran', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                    <button type="submit" name="tambah" class="btn btn-success w-100 py-3" 
                    style="font-size: 1.5rem;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
