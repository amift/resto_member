
		<script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/datatables/js/jquery.dataTables.min.js"></script>

		<script>
			$(document).ready(function() {
	       	    $('#dbtable').DataTable({ 
                    "aLengthMenu": [[3,5, 10, 20, 50], [3,5, 10, 20, 50]],
                    "iDisplayLength": 5,
                    "language": {
                        "paginate": {
                            "first":      "<i class='fa fa-fast-backward'></i>",
                            "last":       "<i class='fa fa-fast-forward'></i>",
                            "next":       "<i class='fa fa-forward'></i>",
                            "previous":   "<i class='fa fa-backward'></i>"
                        },                    
                    },
                });

                $('.error-msg').show().delay(2000).fadeOut('slow');

                $("#btndelete").on("click",function (){
                  if(!confirm("Yakin menghapus data ini ?")){
                     return false
                  }
                });                
			});
		</script>
	</body>
</html>