        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Berita Tersimpan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Pilihan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($berita as $b){ ?>
                    <tr>
                        <td><?php echo $b['id']; ?></td>
                        <td><?php echo $b['kategori_id']; ?></td>
                        <td><?php echo $b['status_aktif']; ?></td>
                        <td><?php echo $b['judul']; ?></td>
                        <td><?php echo $b['tanggal']; ?></td>
                        <td><?php echo $b['isi_berita']; ?></td>
                        <td>
                            <a href="<?php echo site_url('beritum/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('beritum/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
