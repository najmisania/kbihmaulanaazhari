<?php $this->load->view('template/plugin')?>

<!--================ Header Menu Area start =================-->
<?php $this->load->view('template/header')?>
<!--================Header Menu Area =================-->

<!--================Hero Banner SM Area Start =================-->
<br>
<br>
<br>
<br>
<br>


<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "autoPlay": true }'>
  <div class="carousel-cell">
    <img width="900" height="450" src="<?php echo base_url('assets/img/maz/266797.jpg')?>" class="skip-lazy attachment-full" alt="slide 1">
  </div>
  <div class="carousel-cell">
   <img width="900" height="450" src="<?php echo base_url('assets/img/maz/kabah.jpeg')?>" class="skip-lazy attachment-full" alt="slide 2">
 </div>
 <div class="carousel-cell">
   <img width="900" height="450" src="<?php echo base_url('assets/img/maz/gunung.jpeg')?>" class="skip-lazy attachment-full" alt="slide 3">
 </div>
 <div class="carousel-cell">
   <img width="900" height="450" src="<?php echo base_url('assets/img/maz/266796.jpg')?>" class="skip-lazy attachment-full" alt="slide 4">
 </div>
 <div class="carousel-cell">
  <img width="900" height="450" src="<?php echo base_url('assets/img/maz/baru.jpeg')?>" class="skip-lazy attachment-full" alt="slide 5">
</div>
<div class="carousel-cell">
  <img width="900" height="450" src="<?php echo base_url('assets/img/maz/267486.jpg')?>" class="skip-lazy attachment-full" alt="slide 6">
</div>
</div>

<br>
<br>
<br>
<br>
<section id="portfolio"  class="section-bg" >
  <div class="container">
    <div class="row portfolio-container">


       <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?php echo base_url('assets/img/maz/gunung.jpeg')?>" class="img-fluid" alt="">
            <a href="<?php echo base_url('assets/img/maz/gunung.jpeg')?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
          </figure>
        </div>
      </div>

<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?php echo base_url('assets/img/maz/baru.jpeg')?>" class="img-fluid" alt="">
            <a href="<?php echo base_url('assets/img/maz/baru.jpeg')?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
          </figure>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?php echo base_url('assets/img/maz/kabah.jpeg')?>" class="img-fluid" alt="">
            <a href="<?php echo base_url('assets/img/maz/kabah.jpeg')?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
          </figure>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?php echo base_url('assets/img/maz/266797.jpg')?>" class="img-fluid" alt="">
            <a href="<?php echo base_url('assets/img/maz/266797.jpg')?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
          </figure>
        </div>
      </div>


      
    </div>

  </div>
</section><!-- #portfolio -->
<!--================Blog Area =================-->
<!-- ================ start footer Area ================= -->

<?php $this->load->view('template/footer')?>

<!-- ================ End footer Area ================= -->
<?php $this->load->view('template/script')?>