<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Master Kategori Edit</h3>
            </div>
			<?php echo form_open('master_kategori/edit/'.$master_kategori['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_kategori" class="control-label"><span class="text-danger">*</span>Nama Kategori</label>
						<div class="form-group">
							<input type="text" name="nama_kategori" value="<?php echo ($this->input->post('nama_kategori') ? $this->input->post('nama_kategori') : $master_kategori['nama_kategori']); ?>" class="form-control" id="nama_kategori" />
							<span class="text-danger"><?php echo form_error('nama_kategori');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>