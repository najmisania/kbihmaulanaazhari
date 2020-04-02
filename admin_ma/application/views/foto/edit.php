<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Foto Edit</h3>
            </div>
			<?php echo form_open('foto/edit/'.$foto['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="album_id" class="control-label">Album Id</label>
						<div class="form-group">
							<input type="text" name="album_id" value="<?php echo ($this->input->post('album_id') ? $this->input->post('album_id') : $foto['album_id']); ?>" class="form-control" id="album_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_foto" class="control-label">Nama Foto</label>
						<div class="form-group">
							<input type="text" name="nama_foto" value="<?php echo ($this->input->post('nama_foto') ? $this->input->post('nama_foto') : $foto['nama_foto']); ?>" class="form-control" id="nama_foto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="caption" class="control-label">Caption</label>
						<div class="form-group">
							<input type="text" name="caption" value="<?php echo ($this->input->post('caption') ? $this->input->post('caption') : $foto['caption']); ?>" class="form-control" id="caption" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_update" class="control-label">Tgl Update</label>
						<div class="form-group">
							<input type="text" name="tgl_update" value="<?php echo ($this->input->post('tgl_update') ? $this->input->post('tgl_update') : $foto['tgl_update']); ?>" class="has-datepicker form-control" id="tgl_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_gambar" class="control-label">Nama Gambar</label>
						<div class="form-group">
							<input type="text" name="nama_gambar" value="<?php echo ($this->input->post('nama_gambar') ? $this->input->post('nama_gambar') : $foto['nama_gambar']); ?>" class="form-control" id="nama_gambar" />
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