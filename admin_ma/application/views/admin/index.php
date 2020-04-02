<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Username</th>
						<th>Status Aktif</th>
						<th>Password</th>
						<th>Email</th>
						<th>Nama</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin as $a){ ?>
                    <tr>
						<td><?php echo $a['username']; ?></td>
						<td><?php echo $a['status_aktif']; ?></td>
						<td><?php echo $a['password']; ?></td>
						<td><?php echo $a['email']; ?></td>
						<td><?php echo $a['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/edit/'.$a['username']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['username']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
