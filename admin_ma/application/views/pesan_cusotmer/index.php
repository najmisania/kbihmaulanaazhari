<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pesan Cusotmer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pesan_cusotmer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Subjek</th>
						<th>Isi Pesan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pesan_cusotmer as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['nama']; ?></td>
						<td><?php echo $p['email']; ?></td>
						<td><?php echo $p['subjek']; ?></td>
						<td><?php echo $p['isi_pesan']; ?></td>
						<td>
                            <a href="<?php echo site_url('pesan_cusotmer/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pesan_cusotmer/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
