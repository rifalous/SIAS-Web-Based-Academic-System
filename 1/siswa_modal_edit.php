<?php

include "../koneksi.php";

$NIS	= $_GET["NIS"];

$querysiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE NIS='$NIS'");
if($querysiswa == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($siswa = mysqli_fetch_array($querysiswa)){

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
						<h4 class="modal-title">Edit Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIS" type="text" class="form-control" value="<?php echo $siswa["NIS"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Siswa" type="text" class="form-control" value="<?php echo $siswa["Nama_Siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $siswa["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $siswa["JK"]; ?>" selected>
											<?php
												if ($siswa["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($siswa["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $siswa["No_Telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $siswa["Alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_Kelas_Siswa" class="form-control">
										<?php
										
											$querysiswakls=mysqli_query($konek, "SELECT Kode_Kelas_Siswa, Kode_Kelas, Nama_Kelas FROM siswa INNER JOIN kelas ON Kode_Kelas_Siswa=Kode_Kelas WHERE NIS='$NIS'");
											if($querysiswakls==false){
												die("Terdapat Kesalahan : ".mysqli_error($konek));
											}
											while($siswakls=mysqli_fetch_array($querysiswakls)){
												echo "<option value=$siswakls[Kode_Kelas_Siswa] selected>$siswakls[Nama_Kelas]</option>";
											}
										
											$querykls = mysqli_query($konek, "SELECT * FROM kelas");
											if($querykls==false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($kls=mysqli_fetch_array($querykls)){
												if($kls["Kode_Kelas"]!=$siswa["Kode_Kelas_Siswa"]){
													echo "<option value=$kls[Kode_Kelas]>$kls[Nama_Kelas]</option>";
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