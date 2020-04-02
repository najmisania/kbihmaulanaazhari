<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pesan Cusotmer Add</h3>
            </div>
            <?php echo form_open('pesan_cusotmer/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
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
						<label for="subjek" class="control-label"><span class="text-danger">*</span>Subjek</label>
						<div class="form-group">
							<input type="text" name="subjek" value="<?php echo $this->input->post('subjek'); ?>" class="form-control" id="subjek" />
							<span class="text-danger"><?php echo form_error('subjek');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="isi_pesan" class="control-label"><span class="text-danger">*</span>Isi Pesan</label>
						<div class="form-group">
							<textarea name="isi_pesan" class="form-control" id="isi_pesan"><?php echo $this->input->post('isi_pesan'); ?></textarea>
							<span class="text-danger"><?php echo form_error('isi_pesan');?></span>
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