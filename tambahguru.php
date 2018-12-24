<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Guru</h4>
		<hr/>
		<br/>
		
		<form action="tambahguru.php" method="POST">
		<?php

		$link = mysqli_connect('localhost','root','','db_sekolahkoding');
		
		$nip		 = @$_POST['nip'];
		$namaguru	 = @$_POST['namaguru'];
		$bidangstudi = @$_POST['bidangstudi'];
		$nohpguru	 = @$_POST['nohpguru'];
		$alamatguru	 = @$_POST['alamatguru']; 		       

		$tambah = "INSERT INTO tblguru (Nip, Nama, kode_bidangstudi, Nohandphoneguru, Alamat)
		          VALUES ('$nip', '$namaguru', '$bidangstudi', '$nohpguru', '$alamatguru')";		
		?>
		<br>
		<div>
			<button name="submit">Tambah</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>

		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA GURU<h4></caption>
				<tr>
					<td><label for="nip">NIP</label> </td>
					<td><input type="text" id="nip" name="nip"></td>
				</tr>
				<tr>
					<td><label for="namaguru">Nama</label></td>
				    <td><input type="text" id="namaguru" name="namaguru"></td>
				</tr>
				<tr>
					<td><label for="bidangstudi">Bidang Studi</label></td>
					<td>
						<Select id="bidangstudi" name="bidangstudi">
						<?php 
							$showstudi = mysqli_query ($link, "SELECT * FROM tbldibangstudi ORDER BY Bidangstudi ASC");
							while ($rowstudi  = mysqli_fetch_array($showstudi)){
								if ($showguru[kode_bidangstudi] == $rowstudi[kode_bidangstudi]){								
									echo "<option value=\"$rowstudi[kode_bidangstudi]\" selected>$rowstudi[Bidangstudi]</option>";
								}else{
									echo "<option value=\"$rowstudi[kode_bidangstudi]\">$rowstudi[Bidangstudi]</option>";		
								}
							}
						?>														
						</Select>
					</td>
				</tr>
				<tr>
					<td><label for="nohpguru">No. Handphone</label></td>
				    <td><input type="text" id="nohpguru" name="nohpguru"></td>
				</tr>
				<tr>
					<td><label for="alamatguru">Alamat</label></td>
					<td><input type="text" id="alamatguru" name="alamatguru"></td>
				</tr>

			    </table>
			    <br>
			    <?php
				     if (isset($_POST['submit'])) {				     	
						 if (mysqli_query($link,$tambah)) {
						 	echo "<script language=\"javascript\">
							         alert (\"Data Berhasil Direkam !!\")
							         document.location=\"daftarguru.php\";
							       </script>";						 	 

						 }else
						    echo "<script language=\"javascript\">
							         alert (\"Gagal Input Data\")
							         document.location=\"daftarguru.php\";
							      </script>";
										 }

					 mysqli_close($link);
				 ?>
			</form>
		</div>

	</main>
<?php require_once 'footer.php'; ?>
		

