<div class="row">
	<div class="col-lg-12">
		<?php echo form_open('beritum/add'); ?>
		<div class="row clearfix">
			<div class="col-md-6">
				<label for="kategori_id" class="control-label">Kategori</label>
				<div class="form-group">
					<select name="kategori_id" class="form-control">
						<option value="">Pilih Kategori</option>
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
				<label for="status_aktif" class="control-label">Status Publikasi</label>
				<div class="form-group">
					<select name="status_aktif" class="form-control">								<?php 
					$status_aktif_values = array(
						'1'=>'Aktif',
						'2'=>'Nonaktif',
					);
					foreach($status_aktif_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('status_aktif')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<label for="judul" class="control-label">Judul</label>
			<div class="form-group">
				<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
				<span class="text-danger"><?php echo form_error('judul');?></span>
			</div>
		</div>
		<div class="col-md-6">
			<label for="tanggal" class="control-label">Tanggal</label>
			<div class="form-group">
				<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
				<span class="text-danger"><?php echo form_error('tanggal');?></span>
			</div>
		</div>
		<div class="col-md-12">
			<label for="isi_berita" class="control-label">Isi Berita</label>
			<div class="form-group">
				<textarea name="isi_berita" class="form-control" id="isi_berita"><?php echo $this->input->post('isi_berita'); ?></textarea>
				<span class="text-danger"><?php echo form_error('isi_berita');?></span>
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary btn-user btn-block">
		<i class="fa fa-check"></i> Simpan
	</button>
	<?php echo form_close(); ?>
	</div>
</div>
