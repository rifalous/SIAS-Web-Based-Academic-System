				<thead>
					<tr>
						<th>NIS</th>
						<th>Siswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysiswa = mysqli_query ($konek, "SELECT NIS, Nama_Siswa, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat, Kode_Kelas_Siswa, Nama_Kelas FROM siswa INNER JOIN kelas ON Kode_Kelas_Siswa = Kode_Kelas");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($siswa = mysqli_fetch_array ($querysiswa)){
							
							echo "
								<tr>
									<td>$siswa[NIS]</td>
									<td>$siswa[Nama_Siswa]</td>
									<td>$siswa[Tanggal_Lahir]</td>
									<td>
								";
									if($siswa["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$siswa[No_Telp]</td>
									<td>$siswa[Alamat]</td>
									<td>$siswa[Nama_Kelas]</td>
									<td>
										<a href='#' class='open_modal' id='$siswa[NIS]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"siswa_delete.php?NIS=$siswa[NIS]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>