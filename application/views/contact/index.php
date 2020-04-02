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
     
        <div class="col-md-12 col-lg-12 mb-12 text-center">
          <h1 style="font-family: italic;">Contact Us</h1>
                    
        </div>
      
  </div>
</section>
  <!--================Hero Banner SM Area End =================-->



  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">



      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Hubungi Kami</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Kantor Maulana Azhari</h3>
              <p>RA. Kartini, Gg. Kenari II No 32 RT 06/01, Kel. Margahayu Kec. Bekasi Timur</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">(021) 8812810 / 0813-1620-5300</a></h3>
              <p>Senin-Sabtu jam 09:00 s/d 17:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">kbihmaulanaazhari@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
<?php $this->load->view('template/footer')?>

  <!-- ================ End footer Area ================= -->
<?php $this->load->view('template/script')?>