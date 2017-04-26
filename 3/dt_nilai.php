				<thead>
					<tr>
						<th>Siswa</th>
						<th>Mata Pelajaran</th>
						<th>Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querynilai = mysqli_query ($konek, "SELECT Id_Nilai, NIS_Nilai, Kode_Matapelajaran_Nilai, Nilai, NIS, Nama_Siswa, Kode_Matapelajaran, Nama_Matapelajaran FROM nilai
										INNER JOIN siswa ON NIS_Nilai=NIS
										INNER JOIN matapelajaran ON Kode_Matapelajaran_Nilai=Kode_Matapelajaran WHERE NIS_Nilai='$_SESSION[Username]'");
						if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($nilai = mysqli_fetch_array ($querynilai)){
							
							echo "
								<tr>
									<td>$nilai[Nama_Siswa]</td>
									<td>$nilai[Nama_Matapelajaran]</td>
									<td>$nilai[Nilai]</td>
								</tr>";
						}
					?>
				</tbody>