<?php

include "../koneksi.php";

$Kode_Kelas	= $_GET["Kode_Kelas"];

$querykelas = mysqli_query($konek, "SELECT * FROM kelas WHERE Kode_Kelas='$Kode_Kelas'");
if($querykelas == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kelas = mysqli_fetch_array($querykelas)){

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
						<h4 class="modal-title">Edit Kelas</h4>
					</div>
					<div class="modal-body">
						<form action="kelas_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="Kode_Kelas" type="text" class="form-control" value="<?php echo $kelas["Kode_Kelas"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="Nama_Kelas" type="text" class="form-control" value="<?php echo $kelas["Nama_Kelas"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_Jurusan_Kls" class="form-control">
											<?php
												
												$queryklsjrs = mysqli_query($konek, "SELECT Kode_Jurusan_Kls, Kode_Jurusan, Nama_Jurusan FROM kelas INNER JOIN jurusan ON Kode_Jurusan_Kls = Kode_Jurusan WHERE Kode_Kelas='$Kode_Kelas'");
												if($queryklsjrs == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($jrskls = mysqli_fetch_array($queryklsjrs)){
													echo "<option value='$jrskls[Kode_Jurusan_Kls]' selected>$jrskls[Nama_Jenjang]</option>";
												}
												
												$queryjrs = mysqli_query($konek, "SELECT * FROM jurusan");
												if($queryjrs == false){
													die("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jrs = mysqli_fetch_array($queryjrs)){
													if($jrs["Kode_Jurusan"]!=$kelas["Kode_Jurusan_Kls"]){
														echo "<option value='$jrs[Kode_Jurusan]'>$jrs[Nama_Jurusan]</option>";
													}
												}
											?>
										</select>
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