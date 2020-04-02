<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Album Foto Add</h3>
            </div>
            <?php echo form_open('album_foto/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_album" class="control-label"><span class="text-danger">*</span>Nama Album</label>
						<div class="form-group">
							<input type="text" name="nama_album" value="<?php echo $this->input->post('nama_album'); ?>" class="form-control" id="nama_album" />
							<span class="text-danger"><?php echo form_error('nama_album');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pembuatan" class="control-label"><span class="text-danger">*</span>Tanggal Pembuatan</label>
						<div class="form-group">
							<input type="text" name="tanggal_pembuatan" value="<?php echo $this->input->post('tanggal_pembuatan'); ?>" class="has-datepicker form-control" id="tanggal_pembuatan" />
							<span class="text-danger"><?php echo form_error('tanggal_pembuatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
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