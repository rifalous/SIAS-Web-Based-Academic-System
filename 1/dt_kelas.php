				<thead>
					<tr>
						<th>Kode Kelas</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykelas = mysqli_query ($konek, "SELECT Kode_Kelas, Nama_Kelas, Kode_Jurusan_Kls, Kode_Jurusan, Nama_Jurusan FROM kelas INNER JOIN jurusan ON Kode_Jurusan_Kls = Kode_Jurusan");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kelas = mysqli_fetch_array ($querykelas)){
							
							echo "
								<tr>
									<td>$kelas[Kode_Kelas]</td>
									<td>$kelas[Nama_Kelas]</td>
									<td>$kelas[Nama_Jurusan]</td>
									<td>
										<a href='#' class='open_modal' id='$kelas[Kode_Kelas]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"kelas_delete.php?Kode_Kelas=$kelas[Kode_Kelas]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>