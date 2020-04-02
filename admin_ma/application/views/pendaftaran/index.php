        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Calon Peserta Terdaftar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-align: center;">
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>

                        <th>Kategori / Produk</th>
                        <th>Tanggal Kontak</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($pendaftaran as $p){ ?>
                    <tr>
                        <td><?php echo $p['nik']; ?></td>
                        <td><?php echo $p['nama_lengkap']; ?></td>
                        <td><?php echo $p['no_telepon']; ?></td>
                        <td><?php echo $p['email']; ?></td>
                        <td><?php echo $p['alamat']; ?></td>

                        <td><?php echo "$p[nama_kategori] $p[nama_kegiatan]"; ?></td>
                        <td><?php $dates = explode("-", $p['tanggal_kontak']);
                                echo "$dates[2]-$dates[1]-$dates[0]";
                                ?></td>
                        <td class="small"><?php echo $status_kontak_values[$p['status_kontak']]; ?></td>

                        <td>
                            <a href="<?php echo site_url('pendaftaran/setTerhubungi/'.$p['nik']); ?>" class="btn btn-success btn-sm"><span class="fa fa-check"></span> </a>  
                            <!-- <a href="<?php echo site_url('pendaftaran/edit/'.$p['nik']); ?>" class="btn btn-info btn-sm"><span class="fa fa-edit"></span> </a>  -->
                            <a href="<?php echo site_url('pendaftaran/remove/'.$p['nik']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
