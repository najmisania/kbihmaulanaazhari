        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kategori Tersimpan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($master_kategori as $m){   ?>
                    <tr>
                        <td><?php echo $m['id']; ?></td>
                        <td><?php echo $m['nama_kategori']; ?></td>
                        <td>
                          <?php if($m['id'] > 2) { ?>
                            <a href="<?php echo site_url('master_kategori/edit/'.$m['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('master_kategori/remove/'.$m['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                           <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
