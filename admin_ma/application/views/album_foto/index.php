        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pilih Kategori Foto</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th width="70%">Nama Album</th>
                        <!-- <th>Tanggal Pembuatan</th>
                        <th>Keterangan</th> -->
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Album</th>
                        <!-- <th>Tanggal Pembuatan</th>
                        <th>Keterangan</th> -->
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($album_foto as $a){ ?>
                    <tr>
                        <td><?php echo $a['id']; ?></td>
                        <td><?php echo $a['nama_album']; ?></td>
                        <td>
                            <a href="<?php echo site_url('foto/index/'.$a['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span> Atur Foto</a> 
                            <!-- <a href="<?php echo site_url('album_foto/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a> -->
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
