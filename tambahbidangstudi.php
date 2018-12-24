<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Bidang studi</h4>
		<hr/>
		<br/>
		
		<form action="tambahbidangstudi.php" method="POST">
		<?php

		$link = mysqli_connect('localhost','root','','db_sekolahkoding');

		$kode_bidangstudi	 = @$_POST['kodebidangstudi'];
		$namabidangstudi     = @$_POST['namabidangstudi'];
		$tambah = "INSERT INTO tbldibangstudi (kode_bidangstudi, Bidangstudi)
		          VALUES ('$kode_bidangstudi', '$namabidangstudi')";		
		?>
		<br>
		<div>
			<button name="submit">Tambah</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>

		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA BIDANG STUDI<h4></caption>
				<tr>
					<td><label for="kodebidangstudi\">Kode Bidang studi</label> </td>
					<td><input type="text" id="kodebidangstudi" name="kodebidangstudi"></td>
				</tr>
				<tr>
					<td><label for="namabidangstudi">Nama Bidang studi</label></td>
				    <td><input type="text" id="namabidangstudi" name="namabidangstudi"></td>
				</tr>
			    </table>
			    <br>
			    <?php
				     if (isset($_POST['submit'])) {				     	
						 if (mysqli_query($link,$tambah)) {
						 	echo "<script language=\"javascript\">
							         alert (\"Data Berhasil Direkam !!\")
							         document.location=\"daftarbidangstudi.php\";
							       </script>";						 	 

						 }else
						    echo "<script language=\"javascript\">
							         alert (\"Gagal Input Data\")
							         document.location=\"daftarbidangstudi.php\";
							      </script>";
										 }

					 mysqli_close($link);
				 ?>
			</form>
		</div>

	</main>
<?php require_once 'footer.php'; ?>
		

