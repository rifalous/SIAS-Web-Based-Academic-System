<?php

include "../koneksi.php";

$Id_Jadwal	= $_GET["Id_Jadwal"];

$daftarhari[] = "Senin";
$daftarhari[] = "Selasa";
$daftarhari[] = "Rabu";
$daftarhari[] = "Kamis";
$daftarhari[] = "Jumat";
$daftarhari[] = "Sabtu";
$daftarhari[] = "Minggu";

$queryjadwal = mysqli_query($konek, "SELECT * FROM jadwal WHERE Id_Jadwal='$Id_Jadwal'");
if($queryjadwal == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jadwal = mysqli_fetch_array($queryjadwal)){

?>
	<link rel="stylesheet" href="../aset/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai2').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai2').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Jadwal</h4>
					</div>
					<div class="modal-body">
						<form action="jadwal_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="Id_Jadwal" type="hidden" value="<?php echo "$jadwal[Id_Jadwal]"; ?>">
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="NIP_Jadwal" class="form-control">
										<?php
											
											$queryjdwds = mysqli_query($konek, "SELECT NIP_Jadwal, NIP, Nama_Guru FROM jadwal INNER JOIN guru ON NIP_Jadwal=NIP WHERE Id_Jadwal='$Id_Jadwal'");
											if ($queryjdwds == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($jdwds = mysqli_fetch_array($queryjdwds)){
												echo "<option value='$jdwds[NIP_Jadwal]' selected>$jdwds[Nama_Guru]</option>";
											}
											
											$queryguru = mysqli_query($konek, "SELECT * FROM guru");
											if($queryguru == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($guru = mysqli_fetch_array($queryguru)){
												if($guru["NIP"] != $jadwal["NIP_Jadwal"])
												{
													echo "<option value='$guru[NIP]'>$guru[Nama_Guru]</option>";
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
										<select name="Kode_Matapelajaran_Jadwal" class="form-control">
											<?php
												
												$queryjdwmapel = mysqli_query($konek, "SELECT Kode_Matapelajaran_Jadwal, Kode_Matapelajaran, Nama_Matapelajaran FROM jadwal INNER JOIN matapelajaran ON Kode_Matapelajaran_Jadwal=Kode_Matapelajaran WHERE Id_Jadwal='$Id_Jadwal'");
												if($queryjdwmapel == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jdwmapel = mysqli_fetch_array($queryjdwmapel)){
													echo "<option value='$jdwmapel[Kode_Matapelajaran_Jadwal]'>$jdwmapel[Nama_Matakuliah]</option>";
												}
												
												$querymapel = mysqli_query ($konek, "SELECT * FROM matapelajaran");
												if ($querymapel == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($mapel = mysqli_fetch_array($querymapel)){
													if($mapel["Kode_Matapelajaran"] != $jadwal["Kode_Matapelajaran_Jadwal"]){
														echo "<option value='$mapel[Kode_Matapelajaran]'>$mapel[Nama_Matapelajaran]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Ruangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<select name="Kode_Ruangan_Jadwal" class="form-control">
											<?php
											
												$queryjdwru = mysqli_query($konek, "SELECT Kode_Ruangan_Jadwal, Kode_Ruangan, Nama_Ruangan FROM jadwal INNER JOIN ruangan ON Kode_Ruangan_Jadwal=Kode_Ruangan WHERE Id_Jadwal='$Id_Jadwal'");
												if($queryjdwru == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jdwru = mysqli_fetch_array($queryjdwru))
												{
													echo "<option value='$jdwru[Kode_Ruangan_Jadwal]' selected>$jdwru[Nama_Ruangan]</option>";
												}
												
												$queryruang = mysqli_query($konek, "SELECT * FROM ruangan");
												if($queryruang == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($ruang = mysqli_fetch_array($queryruang)){
													if($ruang["Kode_Ruangan"] != $jadwal["Kode_Ruangan_Jadwal"]){
														echo "<option value='$ruang[Kode_Ruangan]'>$ruang[Nama_Ruangan]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<select name="Kode_Kelas_Jadwal" class="form-control">
											<?php
											
												$queryjdwkls = mysqli_query($konek, "SELECT Kode_Kelas_Jadwal, Kode_Kelas, Nama_Kelas FROM jadwal INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas WHERE Id_Jadwal='$Id_Jadwal'");
												if($queryjdwkls == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jdwkls = mysqli_fetch_array($queryjdwkls))
												{
													echo "<option value='$jdwkls[Kode_Kelas_Jadwal]' selected>$jdwkls[Nama_Kelas]</option>";
												}
												
												$querykelas = mysqli_query($konek, "SELECT * FROM kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($kelas = mysqli_fetch_array($querykelas)){
													if($kelas["Kode_Kelas"] != $jadwal["Kode_Kelas_Jadwal"]){
														echo "<option value='$kelas[Kode_Kelas]'>$kelas[Nama_Kelas]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Hari</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<select name="Hari" class="form-control">
										<?php
											echo "<option value='$jadwal[Hari]' selected>$jadwal[Hari]</option>";
											for($hari=0; $hari<count($daftarhari); $hari++){
												if($jadwal["Hari"] != $daftarhari[$hari])
												{
													echo "<option value='$daftarhari[$hari]'>$daftarhari[$hari]</option>";
												}
												
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Jam Mulai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Mulai2" name="Jam_Mulai" type="text" class="form-control" value="<?php echo substr($jadwal["Jam"],0,5); ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jam Selesai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Selesai2" name="Jam_Selesai" type="text" class="form-control" value="<?php echo substr($jadwal["Jam"],-5); ?>">
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