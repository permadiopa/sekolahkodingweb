<?php 
error_reporting( E_ALL | error_reporting()); 
require_once 'header.php'; 
require_once 'aside.php';
?>

	<main>
		<h4>Home / Daftar MURID</h4>
		<hr/>
		<br/>
		
		<form action="tambahmurid.php" method="POST">
		<?php

		$link = mysqli_connect('localhost','root','','db_sekolahkoding');

		$nim		 = @$_POST['nim'];
		$namamurid	 = @$_POST['namamurid'];
		$kelasmurid  = @$_POST['kelasmurid'];
		$nohpmurid	 = @$_POST['nohpmurid'];
		$alamatmurid = @$_POST['alamatmurid']; 	
		$bidstudi    = @$_POST['bidangstudimurid']; 	
		
		if (isset($_POST['submit'])){
		$bidangstudi = implode ($bidstudi, ',');
		$tambah = "INSERT INTO tblmurid (Nim, Nama, id_kelas, Bidangstudimurid, Nohandphonemurid, Alamat)
		          VALUES ('$nim', '$namamurid', '$kelasmurid', '$bidangstudi', '$nohpmurid', '$alamatmurid')";		
		}

		?>
		<br>
		<div>
			<button name="submit">Tambah</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>

		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA MURID<h4></caption>
				<tr>
					<td><label for="nim">NIM</label> </td>
					<td><input type="text" id="nim" name="nim"></td>
				</tr>
				<tr>
					<td><label for="namamurid">Nama</label></td>
				    <td><input type="text" id="namamurid" name="namamurid"></td>
				</tr>
				<tr>
					<td><label for="kelasmurid">Kelas</label></td>
					<td>
						<Select id="kelasmurid" name="kelasmurid">
						<?php 
							$showkelas = mysqli_query ($link, "SELECT * FROM tbkelas ORDER BY Namakelas ASC");
							while ($rowkelas  = mysqli_fetch_array($showkelas)){
								if ($showmurid[id_kelas] == $rowkelas[id_kelas]){								
									echo "<option value=\"$rowkelas[id_kelas]\" selected>$rowkelas[Namakelas]</option>";
								}else{
									echo "<option value=\"$rowkelas[id_kelas]\">$rowkelas[Namakelas]</option>";		
								}
							}
						?>														
						</Select>
					</td>
				</tr>
				<tr>
					<td><label for="bidangstudimurid">Bidang Studi</label></td>
					<td>
						<?php 
							 $tampil	  = mysqli_query ($link, "SELECT * FROM tbldibangstudi ORDER BY Bidangstudi ASC");
							 while ($data = mysqli_fetch_array($tampil)) {

							 	echo "<input name=\"bidangstudimurid[]\" type=\"checkbox\" value=\" $data[Bidangstudi]\"> $data[Bidangstudi]&emsp;&emsp;";
							 }
						?>		
						</Select>
					</td>
				</tr>
				<tr>
					<td><label for="nohpmurid">No. Handphone</label></td>
				    <td><input type="text" id="nohpmurid" name="nohpmurid"></td>
				</tr>
				<tr>
					<td><label for="alamatmurid">Alamat</label></td>
					<td><input type="text" id="alamatmurid" name="alamatmurid"></td>
				</tr>

			    </table>
			    <br>
			    <?php
				     if (isset($_POST['submit'])) {					     			     	
						 if (mysqli_query($link,$tambah)) {				     	    
						 	echo "<script language=\"javascript\">
							         alert (\"Data Berhasil Direkam !!\")
							         document.location=\"daftarmurid.php\";
							       </script>";						 	 

						 }else
						    echo "<script language=\"javascript\">
							         alert (\"Gagal Input Data\")
							         document.location=\"daftarmurid.php\";
							      </script>";
										 }

					 mysqli_close($link);
				 ?>
			</form>
		</div>

	</main>
<?php require_once 'footer.php'; ?>
		

