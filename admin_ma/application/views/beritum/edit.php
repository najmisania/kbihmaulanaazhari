<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Beritum Edit</h3>
            </div>
			<?php echo form_open('beritum/edit/'.$beritum['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kategori_id" class="control-label">Master Kategori</label>
						<div class="form-group">
							<select name="kategori_id" class="form-control">
								<option value="">select master_kategori</option>
								<?php 
								foreach($all_master_kategori as $master_kategori)
								{
									$selected = ($master_kategori['id'] == $beritum['kategori_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$master_kategori['id'].'" '.$selected.'>'.$master_kategori['nama_kategori'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_aktif" class="control-label">Status Aktif</label>
						<div class="form-group">
							<select name="status_aktif" class="form-control">
								<option value="">select</option>
								<?php 
								$status_aktif_values = array(
									'1'=>'Aktif',
									'2'=>'Nonaktif',
								);

								foreach($status_aktif_values as $value => $display_text)
								{
									$selected = ($value == $beritum['status_aktif']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label"><span class="text-danger">*</span>Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $beritum['judul']); ?>" class="form-control" id="judul" />
							<span class="text-danger"><?php echo form_error('judul');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label"><span class="text-danger">*</span>Tanggal</label>
						<div class="form-group">
							<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $beritum['tanggal']); ?>" class="form-control" id="tanggal" />
							<span class="text-danger"><?php echo form_error('tanggal');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="isi_berita" class="control-label"><span class="text-danger">*</span>Isi Berita</label>
						<div class="form-group">
							<textarea name="isi_berita" class="form-control" id="isi_berita"><?php echo ($this->input->post('isi_berita') ? $this->input->post('isi_berita') : $beritum['isi_berita']); ?></textarea>
							<span class="text-danger"><?php echo form_error('isi_berita');?></span>
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