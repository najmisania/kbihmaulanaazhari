<div class="row">
	<div class="col-lg-12">          	
			<?php echo form_open_multipart('agenda/add'); ?>	
		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kategori_id" class="control-label">Kategori</label>
						<div class="form-group">
							<select name="kategori_id" class="form-control">
								<?php 
								foreach($all_master_kategori as $master_kategori)
								{
									$selected = ($master_kategori['id'] == $this->input->post('kategori_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$master_kategori['id'].'" '.$selected.'>'.$master_kategori['nama_kategori'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status Produk</label>
						<div class="form-group">
							<select name="status" class="form-control">
								
								<?php 
								$status_values = array(
									'1'=>'Aktif',
									'2'=>'Nonaktif',
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_kegiatan" class="control-label">Nama Produk</label>
						<div class="form-group">
							<input type="text" name="nama_kegiatan" value="<?php echo $this->input->post('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan" />
							<span class="text-danger"><?php echo form_error('nama_kegiatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<input type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="form-control" id="deskripsi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kegiatan" class="control-label">Tanggal Pelaksanaan</label>
						<div class="form-group">
							<input type="text" name="tanggal_kegiatan" value="<?php echo $this->input->post('tanggal_kegiatan'); ?>" class="has-datepicker form-control" id="tanggal_kegiatan" />
							<span class="text-danger"><?php echo form_error('tanggal_kegiatan');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="number" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control harga" id="harga" />
							<span class="text-danger"><?php echo form_error('harga');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gambar" class="control-label">Gambar</label>
						<div class="form-group">
							<input type="file" name="gambar" value="<?php echo $this->input->post('gambar'); ?>"  id="gambar" />
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-user btn-block">
		<i class="fa fa-check"></i> Simpan
	</button>
	<?php echo form_close() ?>
			</div>
		</div>

			