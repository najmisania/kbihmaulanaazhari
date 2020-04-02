        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Produk Travel Tersimpan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Kegiatan</th>
                        
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th width="10%">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($agenda as $a){ ?>
                        <tr>
                            <td><?php echo $a['id']; ?></td>
                            <td><?php echo $a['kategori_id']; ?></td>
                            <td><?php echo $a['status']; ?></td>
                            <td><?php echo $a['nama_kegiatan']; ?></td>
                            <td><?php echo $a['deskripsi']; ?></td>
                            <td><?php $dates = explode("-",$a['tanggal_kegiatan']);
                            echo "$dates[2]-$dates[1]-$dates[0]"; ?></td>
                            
                            <td><?php echo number_format($a['harga'], 0, ",", "."); ?></td>
                            <td>
                                <img style="height: 20%" src="<?php echo base_url('gambar_produk').'/'.$a['gambar']; ?>"> 
                            </td>
                            <td>
                                <a href="<?php echo site_url('agenda/edit/'.$a['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-edit"></span></a> 
                                <a href="<?php echo site_url('agenda/remove/'.$a['id']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
