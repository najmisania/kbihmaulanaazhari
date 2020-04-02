<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Carousel Edit</h3>
            </div>
			<?php echo form_open('carousel/edit/'.$carousel['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select</option>
								<?php 
								$status_values = array(
									'1'=>'Aktif',
									'2'=>'Nonaktif',
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $carousel['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label"><span class="text-danger">*</span>Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $carousel['judul']); ?>" class="form-control" id="judul" />
							<span class="text-danger"><?php echo form_error('judul');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="caption" class="control-label">Caption</label>
						<div class="form-group">
							<input type="text" name="caption" value="<?php echo ($this->input->post('caption') ? $this->input->post('caption') : $carousel['caption']); ?>" class="form-control" id="caption" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_gambar" class="control-label"><span class="text-danger">*</span>Nama Gambar</label>
						<div class="form-group">
							<input type="text" name="nama_gambar" value="<?php echo ($this->input->post('nama_gambar') ? $this->input->post('nama_gambar') : $carousel['nama_gambar']); ?>" class="form-control" id="nama_gambar" />
							<span class="text-danger"><?php echo form_error('nama_gambar');?></span>
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