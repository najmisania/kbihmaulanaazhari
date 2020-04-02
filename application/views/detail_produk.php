<?php $this->load->view('template/plugin')?>

<!--================ Header Menu Area start =================-->
<?php $this->load->view('template/header')?>
<!--================Header Menu Area =================-->
 <style>
  .hero-banner-sm {
    background: url() left center no-repeat;
    background-size: cover;
    padding-top: 140px;
    padding-bottom: 90px;
  }
  </style>
<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner">
<div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">



          <article class="blog_item">
            <div class="blog_item_img">
              <img style="width: 100%!important; height: 350px!important; object-fit: cover;"  class="card-img rounded-0" src="<?php echo ASSET_PRODUK_URL.'/'.$detail->gambar ?>" alt="">
              <a href="#" class="blog_item_date">
                <h3><?php echo $detail->arrDate[2]?></h3>
                <p> <?php echo $bulan[$detail->arrDate[1]] ?></p>
              </a>
            </div>
            <div class="blog_details">
              <a class="d-inline-block" href="single-blog.html">
                <h2><?php echo $detail->nama_kegiatan ?></h2>
              </a>
              <p><?php echo $detail->deskripsi ?></p>
           <!--    <ul class="blog-info-link">
                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
              </ul> -->
            </div>
          </article>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">

          <aside class="single_sidebar_widget newsletter_widget">
            <!-- <button class="button rounded-0 primary-bg text-white disabled" type="button" >Daftar Online</button> -->
            
            <!-- <img src="<?php echo base_url('assets/img/logo4.png')?>"> -->
            <!-- <hr> -->
             <div class="container">
            <label style="background: #6059f6; color: #fff">&nbsp;&nbsp;Daftar Online&nbsp;&nbsp;</label><br>
            <h3 class="text-center"><b>Kami Segera Menghubungi Anda</b></h3>
            <hr>

            <?php echo form_open('pendaftaran/add') ?>
              <input type="hidden" name="produk_id" value="<?php echo $detail->id ?>">
              <input type="hidden" name="kategori_id" value="<?php echo $detail->kategori_id ?>">
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
              <button type="submit" class="button rounded-0 primary-bg text-white w-100" type="submit">Hubungi Saya</button>
            <?php echo form_close() ?>
            <br>
            <hr>
              <button class="button rounded-0 primary-bg text-white disabled" type="button" >Hubungi Kami</button>
              <br>
              <br>
              <p>
              RA. Kartini, Gg. Kenari II No 32 RT 06/01, Kel. Margahayu Kec. Bekasi Timur <br>
              Indonesia <br>
              <strong>Telp:</strong> (021) 8812810<br>
              <strong>Fax:</strong> (021) 8812810<br>
              <strong>Phone:</strong> 0813-1620-5300 / 0877-8273-3754<br>
              <strong>Email:</strong> kbihmaulanaazhari@gmail.com<br>
            </p>
    
          </aside>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================Hero Banner SM Area End =================-->


</section>
<!--================Blog Area =================-->
<!-- ================ start footer Area ================= -->

<?php $this->load->view('template/footer')?>

<!-- ================ End footer Area ================= -->
<?php $this->load->view('template/script')?>