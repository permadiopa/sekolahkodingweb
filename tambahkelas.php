<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Kelas</h4>
		<hr/>
		<br/>
		
		<form action="tambahkelas.php" method="POST">
		<?php

		$link = mysqli_connect('localhost','root','','db_sekolahkoding');

		$kodekelas	 = @$_POST['kodekelas'];
		$namakelas	 = @$_POST['namakelas'];
		$tambah = "INSERT INTO tbkelas (id_kelas, Namakelas)
		          VALUES ('$kodekelas', '$namakelas')";		
		?>
		<br>
		<div>
			<button name="submit">Tambah</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>

		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA KELAS<h4></caption>
				<tr>
					<td><label for="kodekelas\">Kode Kelas</label> </td>
					<td><input type="text" id="kodekelas" name="kodekelas"></td>
				</tr>
				<tr>
					<td><label for="namakelas">Nama Kelas</label></td>
				    <td><input type="text" id="namakelas" name="namakelas"></td>
				</tr>
			    </table>
			    <br>
			    <?php
				     if (isset($_POST['submit'])) {				     	
						 if (mysqli_query($link,$tambah)) {
						 	echo "<script language=\"javascript\">
							         alert (\"Data Berhasil Direkam !!\")
							         document.location=\"daftarkelas.php\";
							       </script>";						 	 

						 }else
						    echo "<script language=\"javascript\">
							         alert (\"Gagal Input Data\")
							         document.location=\"daftarkelas.php\";
							      </script>";
										 }

					 mysqli_close($link);
				 ?>
			</form>
		</div>

	</main>
<?php require_once 'footer.php'; ?>
		

