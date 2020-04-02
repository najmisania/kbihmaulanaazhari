<div class="row">
	<div class="col-lg-12">
            <?php echo form_open('pendaftaran/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="produk_id" class="control-label">Agenda</label>
						<div class="form-group">
							<select name="produk_id" class="form-control">
								<option value="">select agenda</option>
								<?php 
								foreach($all_agenda as $agenda)
								{
									$selected = ($agenda['id'] == $this->input->post('produk_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$agenda['id'].'" '.$selected.'>'.$agenda['nama_kegiatan'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('produk_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_kontak" class="control-label">Status Kontak</label>
						<div class="form-group">
							<select name="status_kontak" class="form-control">
								<option value="">select</option>
								<?php 
								$status_kontak_values = array(
									'0'=>'Belum Dihubungi',
									'1'=>'Sudah DIhubungi',
								);

								foreach($status_kontak_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status_kontak')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama lengkap" class="control-label">Nama Lengkap</label>
						<div class="form-group">
							<input type="text" name="nama lengkap" value="<?php echo $this->input->post('nama lengkap'); ?>" class="form-control" id="nama lengkap" />
							<span class="text-danger"><?php echo form_error('nama lengkap');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telepon" class="control-label">No Telepon</label>
						<div class="form-group">
							<input type="text" name="no_telepon" value="<?php echo $this->input->post('no_telepon'); ?>" class="form-control" id="no_telepon" />
							<span class="text-danger"><?php echo form_error('no_telepon');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kontak" class="control-label">Tanggal Kontak</label>
						<div class="form-group">
							<input type="text" name="tanggal_kontak" value="<?php echo $this->input->post('tanggal_kontak'); ?>" class="has-datepicker form-control" id="tanggal_kontak" />
							<span class="text-danger"><?php echo form_error('tanggal_kontak');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
							<span class="text-danger"><?php echo form_error('alamat');?></span>
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
