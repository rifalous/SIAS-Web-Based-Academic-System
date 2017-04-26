				<thead>
					<tr>
						<th>Kode Mata Pelajaran</th>
						<th>Nama Mata Pelajaran</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymatapelajaran = mysqli_query ($konek, "SELECT * FROM matapelajaran");
						if($querymatapelajaran == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($matapelajaran = mysqli_fetch_array($querymatapelajaran)){
							echo "
								<tr>
									<td>$matapelajaran[Kode_Matapelajaran]</td>
									<td>$matapelajaran[Nama_Matapelajaran]</td>
									<td>
										<a href='#' class='open_modal' id='$matapelajaran[Kode_Matapelajaran]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"matapelajaran_delete.php?Kode_Matapelajaran=$matapelajaran[Kode_Matapelajaran]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>