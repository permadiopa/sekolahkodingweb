<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Kelas</h4>
		<hr/>
		<br/>		
		<form action="updatekelas.php" method="POST">
		<?php                                                                                                                                                      
		$link 		 = mysqli_connect('localhost','root','','db_sekolahkoding');
		$no	  		 = $_GET['edit'];

		$edit   	 = mysqli_query($link, "SELECT * FROM tbkelas where no ='$no'");
		$showkelas   = mysqli_fetch_array ($edit);
	
		?>
		<br>
		<div>
			<button name="update">Update</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>
		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA KELAS<h4></caption>
					<td><input type="hidden" id="no" name="no" value="<?php echo $showkelas['no']; ?>"></td>
				<tr>
					<td><label for="kodekelas">Kode Kelas</label></td>					
					<td><input type="text" id="kodekelas" name="kodekelas" value="<?php echo $showkelas['id_kelas']; ?>"></td>
				</tr>
				<tr>
					<td><label for="namakelas">Nama Kelas</label></td>
				    <td><input type="text" id="namakelas" name="namakelas" value="<?php echo $showkelas['Namakelas']; ?>"></td>
				</tr>
			    </table>
			    <br>	
			</form>
		</div>
	</main>
<?php require_once 'footer.php'; ?>
		

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      