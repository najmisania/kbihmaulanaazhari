<?php

  $_SESSION['produk_haji'] = $this->db->order_by('tanggal_kegiatan', 'desc')->get_where('agenda', 'kategori_id="1"')->result();
  $_SESSION['produk_umroh'] = $this->db->order_by('tanggal_kegiatan', 'desc')->get_where('agenda', 'kategori_id="2"')->result();

?>

 <header class="header_area"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="<?php echo site_url('Home/index')?>"><img src="<?php echo base_url('assets/img/logo_travel.png')?>" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('Home/index')?>">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('About/index')?>">About</a></li> 
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Haji</a>
                <ul class="dropdown-menu">
                  <?php foreach ($_SESSION['produk_haji'] as $key => $value) { ?>
                      <li class="nav-item"><a style="font-size: 12px" class="nav-link" href="<?php echo site_url('home/detail_produk/'.$value->id)?>"><?php echo $value->nama_kegiatan ?></a> 
                  <?php } ?>

                  <li class="nav-item"><a style="font-size: 12px" class="nav-link" href="<?php echo site_url('Haji/Dokumentasi')?>">Dokumentasi Haji</a>               
                </ul>
							</li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Umroh</a>
                <ul class="dropdown-menu">
                  <?php foreach ($_SESSION['produk_umroh'] as $key => $value) { ?>
                      <li class="nav-item"><a style="font-size: 12px" class="nav-link" href="<?php echo site_url('home/detail_produk/'.$value->id)?>"><?php echo $value->nama_kegiatan ?></a> 
                  <?php } ?>
                  <li class="nav-item"><a style="font-size: 12px" class="nav-link" href="<?php echo site_url('Umroh/dokumentasi')?>">Dokumentasi Umroh</a></li>

                 
                </ul>
							</li>
              <li class="nav-item"><a  class="nav-link" href="<?php echo site_url('Contact/index')?>">Contact</a></li>
            </ul>

         
          </div> 
        </div>
      </nav>
    </div>
  </header>