<?php $this->load->view('template/plugin')?>

<!--================ Header Menu Area start =================-->
<?php $this->load->view('template/header')?>
<!--================Header Menu Area =================-->

<!--================Hero Banner SM Area Start =================-->

<!--================Hero Banner SM Area End =================-->


<!--================Blog Area =================-->
<br>
<br>
<br>
<br>
<br>


<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "autoPlay": true }'>
  <?php $count=0; while ($count < sizeof($foto)) { ?>
    <div class="carousel-cell">
      <img width="900" height="450" src="<?php echo  ASSET_GALERI_URL.'/'.$foto[$count]->nama_gambar ?>" class="skip-lazy attachment-full" alt="slide 1">
    </div>
  <?php $count++; } ?>
  
  
</div>

<br>
<br>
<br>
<br>
<section id="portfolio"  class="section-bg" >
  <div class="container">
    <div class="row portfolio-container">
    <?php if(sizeof($foto) > 5) {
      for ($i=4; $i < sizeof($foto) ; $i++) { ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo  ASSET_GALERI_URL.'/'.$foto[$count]->nama_gambar ?>" class="img-fluid" alt="">
              <a href="<?php echo  ASSET_GALERI_URL.'/'.$foto[$count]->nama_gambar ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
            </figure>
          </div>
        </div>
      <?php } 
    }?>
    </div>

  </div>
</section><!-- #portfolio -->
<!--================Blog Area =================-->
<!-- ================ start footer Area ================= -->

<?php $this->load->view('template/footer')?>

<!-- ================ End footer Area ================= -->
<?php $this->load->view('template/script')?>