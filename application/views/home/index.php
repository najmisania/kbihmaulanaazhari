<?php $this->load->view('template/plugin')?>

<!--================ Header Menu Area start =================-->
<?php $this->load->view('template/header')?>
<!--================Header Menu Area =================-->

<style>
    
</style>
<!--================Hero Banner Area Start =================-->
<section class="hero-banner magic-ball">
  <div class="container">
    <div class="row align-items-center text-center text-md-left">
      <!-- <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
        <h1 style="font-family: italic;">KBIH Maulana Azhari</h1>
        <h3 style="font-style: italic;">Siap Mengantarkan Perjalanan Haji Dan Umroh</h3>

      </div> -->
      <div class="col-md-15 col-lg-15 col-xl-15 ">
        <img class="img-fluid" src="<?php echo base_url('assets/img/banner/banner.jpg')?>"alt="maulana azhari">
      </div>
    </div>
  </div>
</section>
<!--================Hero Banner Area End =================-->


<!--================Service Area Start =================-->
   <!--==========================
      Services Section
      ============================-->
      <section id="services">
        <div class="container">

          <header class="section-header wow fadeInUp"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <h3>PROGRAM HAJI</h3>
            <p>Program kegiatan yang sudah dijalankan oleh Yayasan maulana Azhari dengan baik antara lain:</p>
          </header>

          <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-paperplane-outline"></i></div>
              <h4 class="title">Haji Tamattu</h4>

            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-moon-outline"></i></div>
              <h4 class="title">Qiyamul Lail</h4>

            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-android-walk"></i></div>
              <h4 class="title">Memperbanyak Ibadah Umroh Sunnah</h4>

            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-cash"></i></div>
              <h4 class="title">Wajib Membayar DAM dan Disunahkan berqurban</h4>

            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title">Khotmil Qur'an</h4>

            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-people-outline"></i></div>
              <h4 class="title">Berziarah Sekitar Kota Makkah dan Madinah</h4>

            </div>

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-card"></i></div>
              <h4 class="title">Infaq</h4>

            </div>
          </div>

        </div>
      </section><!-- #services -->

      <!--================Service Area End =================-->


      <!--================Tour section Start =================-->
      <section class="bg-gray section-padding magic-ball magic-ball-about">
        <div class="container">
          <div class="row">
            <?php foreach ($produk_haji as $key => $value) { ?>
            <div class="col-md-6">
              <div class="tour-card">
                <img class="card-img rounded-0" 
                style="width: 100%!important; height: 400px!important; object-fit: cover;" 
                src="<?php echo ASSET_PRODUK_URL.'/'.$value->gambar ?>" alt="">
                <div class="tour-card-overlay">
                  <div class="media">
                    <div class="media-body">
                      <h4><?php echo $value->nama_kegiatan ?></h4>
                      <p></p>
                    </div>
                    <div class="media-price">
                        <small> Mulai Dari </small>    
                      <h4 class="text-primary"><?php echo $value->harga ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
                      <?php foreach ($produk_umroh as $key => $value) { ?>
            <div class="col-md-6">
              <div class="tour-card">
                <img class="card-img rounded-0" 
                style="width: 100%!important; height: 400px!important; object-fit: cover;" 
                src="<?php echo ASSET_PRODUK_URL.'/'.$value->gambar ?>" alt="">
                <div class="tour-card-overlay">
                  <div class="media">
                    <div class="media-body">
                      <h4><?php echo $value->nama_kegiatan ?></h4>
                      <p></p>
                    </div>
                    <div class="media-price">
                        <small>Mulai Dari</small> 
                      <h4 class="text-primary"><?php echo $value->harga?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
            </div>
          </div>
        </div>
      </section>
      <!--================Tour section End =================-->


      <!--================Search Package section Start =================-->
      <style>
        .search-wrapper {
          background: #f8f8ff;
          padding: 30px 10px;
          text-align: left;
        }

        @media (min-width: 600px) {
          .search-wrapper {
            padding: 60px;
          }
        }

        .search-wrapper h3 {
          font-size: 25px;
          margin-bottom: 25px;
        }

        @media (min-width: 600px) {
          .search-wrapper h3 {
            margin-bottom: 50px;
          }
        }
      </style>
      <section class="section-margin">
        <div class="container">
          <h2 class="text-center">Kami Segera Menghubungi Anda</h2>
          <h3 class="text-center">Jika Anda ingin mengetahui lebih lanjut mengenai informasi Haji, Umroh & Paket Wisata Anda bisa mengisi form dibawah ini, kami akan menghubungi Anda</h3>
          <div class="col-lg-12 col-xl-12 ">
            <div class="search-wrapper">
              <?php echo form_open('pendaftaran/add') ?>
                <div class="form-group">
                  <label class="text-md-left control-label">Nama Lengkap<span class="text-danger">*</span></label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="" required>
                  <span class="text-danger"><?php echo form_error('nama_lengkap');?></span>
                </div>
                 <div class="form-group">
                  <label class="control-label">NIK<span class="text-danger">*</span></label>
                  <input type="nik" name="nik" class="form-control" placeholder="" required>
                  <span class="text-danger"><?php echo form_error('nik');?></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="">
                  
                </div>
                <div class="form-group">
                  <label>No Handphone<span class="text-danger">*</span></label>
                  <input type="text" name="no_telepon" class="form-control" placeholder="" required>
                  <span class="text-danger"><?php echo form_error('no_telepon');?></span>
                  <small>*Masukkan No Handphone/Whatsapp yang dapat kami hubungi</small>

                </div>
                <div class="form-group">
                  <label class="control-label">Alamat Lengkap</label>
                  <input type="alamat" name="alamat" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                <label>Hubungi Saya Mengenai:</label>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori_id" id="gridRadios1" value="1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Haji
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori_id" id="gridRadios2" value="2">
                        <label class="form-check-label" for="gridRadios2">
                          Paket Umroh
                        </label>
                      </div>
                    </div>
                  </div>
                
                <div class="form-group">
                  <label class="control-label">Kapan Kami Bisa Menghubungi?<span class="text-danger">*</span></label>
                  <input type="text" class="form-control has-datepicker" name="tanggal_kontak" placeholder="" required>
                  <span class="text-danger"><?php echo form_error('tanggal_kontak');?></span>
                </div>
                <button class="button rounded-0 primary-bg text-white" type="submit">Submit</button>
              <?php echo form_close() ?>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--================Search Package section End =================-->


    <!-- ================ start footer Area ================= -->

    <?php $this->load->view('template/footer')?>

    <!-- ================ End footer Area ================= -->
    <?php $this->load->view('template/script')?>