<?php  $this->load->view('_header');?>
<?php  $this->load->view('_nav');?>
<!-- Your Content start here -->
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">	
			<div class="panel panel-primary">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">Data Member : New Data</h3>
			 	</div>
			 	<div class="panel-body">
					<?php echo form_open() ?>
			            <div class="row">
			                 <div class="col-md-6">
			                    <div class="form-group">
			                        <?php 
			                            echo form_label('Nama Lengkap','input_nama'); 
			                            echo form_input('input_nama',set_value('input_nama','',FALSE),'class="form-control" maxlength="60"');
			                            echo form_error('input_nama','<div class="error-msg">','</div>');  
			                        ?>
			                    </div>
			                </div>
			            </div>
			            <div class="row">
			                <div class="col-md-4">
			                    <div class="form-group">
			                        <?php 
			                            echo form_label('Jenis Kelamin ','input_jenis_kelamin'); 
			                            echo form_dropdown('input_jenis_kelamin',$arr_jenis_kelamin,set_value('input_jenis_kelamin','',FALSE),'class="form-control" id="data_agama"');
			                            echo form_error('input_jenis_kelamin','<div class="error-msg">','</div>');  
			                        ?>
			                    </div>
			                </div>	            
			            </div>
			            <div class="row">
			                 <div class="col-md-8">
			                    <div class="form-group">
			                        <?php 
			                            echo form_label('Alamat','input_alamat'); 
			                            echo form_textarea('input_alamat',set_value('input_alamat','',FALSE),'class="form-control" style="height:100px" maxlength="60"');
			                            echo form_error('input_alamat','<div class="error-msg">','</div>');  
			                        ?>
			                    </div>
			                </div>
			            </div>                                     
			            <div class="row">
			                 <div class="col-md-4">
			                    <div class="form-group">
			                        <?php 
			                            echo form_label('No Telepon / HP','input_telepon'); 
			                            echo form_input('input_telepon',set_value('input_telepon','',FALSE),'class="form-control" maxlength="15"');
			                            echo form_error('input_telepon','<div class="error-msg">','</div>');  
			                        ?>
			                    </div>
			                </div>
			                <div class="col-md-4">
			                    <div class="form-group">
			                        <?php 
			                            echo form_label('Type member ','input_type'); 
			                            echo form_dropdown('input_type',$arr_m_type,set_value('input_type','',FALSE),'class="form-control" id="data_agama"');
			                            echo form_error('input_type','<div class="error-msg">','</div>');  
			                        ?>
			                    </div>
			                </div>	            
			            </div>
		                <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-save" aria-hidden="true"> Simpan</span></button>
		                <a href="<?php echo base_url('member') ?>" class="btn btn-danger btn-sm"><span class="fa fa-reply" aria-hidden="true"> Batal</span></a>
			        <?php echo form_close() ?>   
			 	</div>
			 </div>
		</div>
	</div>
</div>
<!-- Your Content end here -->
<?php  $this->load->view('_footer');?>