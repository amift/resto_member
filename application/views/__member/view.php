<?php  $this->load->view('_header');?>
<?php  $this->load->view('_nav');?>
<!-- Your Content start here -->
<div class="container">
	<div class="panel panel-info">
	 	<div class="panel-heading">
	 		<h3 class="panel-title">Data Member</h3>
	 	</div>
	 	<div class="panel-body">
	 		<a class="btn btn-primary btn-sm" href="<?php echo base_url('member/new') ?> ">New Data</a>
	 		<hr>
	 		<div class="table-responsive">
	 			<table id='dbtable' class="table table-hover">
	 				<thead>
	 					<tr>
	 						<th>Aksi</th>
	 						<th>Nama</th>
	 						<th>Jenis Kelamin</th>
	 						<th>Telepon</th>
	 						<th>Alamat</th>
	 						<th>Type</th>
	 					</tr>
	 				</thead>
	 				<tbody>
				 		<?php 
							foreach ($db_data as $key ) {
								echo '<tr>';
								echo '<td>
										<a class="btn btn-primary btn-sm" href="'.base_url('member/edit/').$key->id.'">Edit</a>
										<a id="btndelete" class="btn btn-danger btn-sm" href="'.base_url('member/delete/').$key->id.'">Delete</a>
									  </td>';
								echo '<td>'.$key->nama.'</td>';
								echo '<td>'.$key->jenis_kelamin.'</td>';
								echo '<td>'.$key->telepon.'</td>';
								echo '<td>'.$key->alamat.'</td>';
								echo '<td>'.$key->type_member.'</td>';
								echo '</tr>';
							}	 			
				 		?>
	 				</tbody>
	 			</table>
	 		</div>
	 	</div>
	 </div>
</div>
<!-- Your Content end here -->
<?php  $this->load->view('_footer');?>