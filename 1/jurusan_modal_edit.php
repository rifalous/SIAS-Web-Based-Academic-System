<?php

include "../koneksi.php";

$Kode_Jurusan	= $_GET["Kode_Jurusan"];

$queryjurusan = mysqli_query($konek, "SELECT * FROM jurusan WHERE Kode_Jurusan='$Kode_Jurusan'");
if($queryjurusan == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jurusan = mysqli_fetch_array($queryjurusan)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Jurusan</h4>
					</div>
					<div class="modal-body">
						<form action="jurusan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="Kode_Jurusan" type="text" class="form-control" value="<?php echo $jurusan["Kode_Jurusan"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="Nama_Jurusan" type="text" class="form-control" value="<?php echo $jurusan["Nama_Jurusan"]; ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>