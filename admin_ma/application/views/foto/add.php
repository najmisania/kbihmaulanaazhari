<div class="row">
	<div class="col-lg-12">  
            <?php echo form_open_multipart('foto/add'); ?>
            <input type="hidden" name="album_id" value="<?php echo $album_id ?>">
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-12">
						<label for="nama_foto" class="control-label">Nama Foto</label>
						<div class="form-group">
							<input type="text" name="nama_foto" value="<?php echo $this->input->post('nama_foto'); ?>" class="form-control" id="nama_foto" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="caption" class="control-label">Caption</label>
						<div class="form-group">
							<input type="text" name="caption" value="<?php echo $this->input->post('caption'); ?>" class="form-control" id="caption" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_gambar" class="control-label">Upload Gambar</label>
						<div class="form-group">
							<input type="file" name="nama_gambar" />
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
