<?php $count=1; ?>
<div class="row">
<?php foreach ($foto as $key => $value) { ?>
            <div class="col-lg-4 mb-4 d-flex">
                <div class="card" >
                  <img class="card-img-top" src="<?php echo base_url('gambar/').$value['nama_gambar'] ?>"  alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title"><?php echo $value['nama_foto'] ?></h6>
                    <a href="<?php echo base_url('foto/remove/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                  </div>
                </div>
            </div>
<?php } ?>
</div>


