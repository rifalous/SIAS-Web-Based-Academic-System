				<thead>
					<tr>
						<th>NIP</th>
						<th>Guru</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryguru = mysqli_query ($konek, "SELECT NIP, Nama_Guru, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat FROM guru");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($guru = mysqli_fetch_array ($queryguru)){
							
							echo "
								<tr>
									<td>$guru[NIP]</td>
									<td>$guru[Nama_Guru]</td>
									<td>$guru[Tanggal_Lahir]</td>
									<td>
								";
									if($guru["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$guru[No_Telp]</td>
									<td>$guru[Alamat]</td>
									<td>
										<a href='#' class='open_modal' id='$guru[NIP]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"guru_delete.php?NIP=$guru[NIP]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>