				<thead>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Guru</th>
						<th>Ruangan</th>
						<th>Kelas</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, Kode_Matapelajaran_Jadwal, NIP_Jadwal, Kode_Ruangan_Jadwal, Hari,
							Jam, Kode_Matapelajaran, Nama_Matapelajaran, NIP, Nama_Guru, Kode_Ruangan, Nama_Ruangan, Kode_Kelas, Nama_Kelas FROM jadwal 
							INNER JOIN matapelajaran ON Kode_Matapelajaran_Jadwal=Kode_Matapelajaran
							INNER JOIN guru ON NIP_Jadwal=NIP
							INNER JOIN ruangan ON Kode_Ruangan_Jadwal=Kode_Ruangan
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
							echo "
								<tr>
									<td>$jadwal[Nama_Matapelajaran]</td>
									<td>$jadwal[Nama_Guru]</td>
									<td>$jadwal[Nama_Ruangan]</td>
									<td>$jadwal[Nama_Kelas]</td>
									<td>$jadwal[Hari]</td>
									<td>$jadwal[Jam]</td>
									<td>
										<a href='#' class='open_modal' id='$jadwal[Id_Jadwal]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jadwal_delete.php?Id_Jadwal=$jadwal[Id_Jadwal]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>