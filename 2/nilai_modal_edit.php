<?php

include "../koneksi.php";

$Id_Nilai	= $_GET["Id_Nilai"];

$daftarnilai[] = "A";
$daftarnilai[] = "B";
$daftarnilai[] = "C";
$daftarnilai[] = "D";

$querynilai = mysqli_query($konek, "SELECT * FROM nilai WHERE Id_Nilai='$Id_Nilai'");
if($querynilai == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($nilai = mysqli_fetch_array($querynilai)){

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
						<h4 class="modal-title">Edit Nilai</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input type="hidden" name="Id_Nilai" value="<?php echo $nilai["Id_Nilai"]; ?>">
							<div class="form-group">
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-users"></i>
										</div>
										<select name="NIS_Nilai" class="form-control">
										<?php
										
											$querynilaisiswa = mysqli_query($konek, "SELECT NIS_Nilai, NIS, Nama_Siswa FROM nilai INNER JOIN siswa ON NIS_Nilai=NIS WHERE Id_Nilai='$Id_Nilai'");
											if($querynilaisiswa == false){
												die("Terdapat Kesalahan : ". mysqli_query($konek));
											}
											while($nilaisiswa = mysqli_fetch_array($querynilaisiswa)){
												echo "<option value='$nilaisiswa[NIS_Nilai]' selected>$nilaimhs[Nama_Siswa]</option>";
											}
											
											$querysiswa = mysqli_query($konek, "SELECT * FROM siswa");
											if($querysiswa == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($siswa = mysqli_fetch_array($querysiswa)){
												if($siswa["NIS"] != $nilai["NIS_Nilai"]){
													echo "<option value='$siswa[NIS]'>$siswa[Nama_Siswa]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Mata Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="Kode_Matapelajaran_Nilai" class="form-control">
										<?php
										
											$querynilaimapel = mysqli_query($konek, "SELECT Kode_Matapelajaran_Nilai, Kode_Matapelajaran, Nama_Matapelajaran FROM nilai INNER JOIN matapelajaran ON Kode_Matapelajaran_Nilai=Kode_Matapelajaran WHERE Id_Nilai='$Id_Nilai'");
											if($querynilaimapel == false){
												die("Terdapat Kesalahan : ". mysqli_query($konek));
											}
											while($nilaimapel = mysqli_fetch_array($querynilaimapel)){
												echo "<option value='$nilaimapel[Kode_Matapelajaran_Nilai]' selected>$nilaimapel[Nama_Matapelajaran]</option>";
											}
											
											$querymapel = mysqli_query($konek, "SELECT * FROM matapelajaran");
											if($querymapel == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($mtk = mysqli_fetch_array($querymapel)){
												if($mtk["Kode_Matapelajaran"] != $nilai["Kode_Matapelajaran_Nilai"]){
													echo "<option value='$mtk[Kode_Matapelajaran]'>$mtk[Nama_Matapelajaran]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="Nilai" class="form-control">
										<?php
										
										echo "<option value='$nilai[Nilai]' selected>$nilai[Nilai]</option>";
											for($nilai=0; $nilai<count($daftarnilai); $nilai++){
												if($nilai["Nilai"] != $daftarnilai[$nilai])
												{
													echo "<option value='$daftarnilai[$nilai]'>$daftarnilai[$nilai]</option>";
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