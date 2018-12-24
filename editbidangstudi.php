<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Bidangstudi</h4>
		<hr/>
		<br/>		
		<form action="updatebidangstudi.php" method="POST">
		<?php                                                                                                                                                      
		$link 		    = mysqli_connect('localhost','root','','db_sekolahkoding');
		$no_bidangstudi = $_GET['edit'];

		$edit   	 = mysqli_query($link, "SELECT * FROM tbldibangstudi where no_bidangstudi ='$no_bidangstudi'");
		$showbidangstudi   = mysqli_fetch_array ($edit);
	
		?>
		<br>
		<div>
			<button name="update">Update</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>
		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA BIDANG STUDI<h4></caption>
					<td><input type="hidden" id="nobidangstudi" name="nobidangstudi" value="<?php echo $showbidangstudi['no_bidangstudi']; ?>"></td>
				<tr>
					<td><label for="kodebidangstudi">Kode Bidangstudi</label></td>					
					<td><input type="text" id="kodebidangstudi" name="kodebidangstudi" value="<?php echo $showbidangstudi['kode_bidangstudi']; ?>"></td>
				</tr>
				<tr>
					<td><label for="namabidangstudi">Nama Bidangstudi</label></td>
				    <td><input type="text" id="namabidangstudi" name="namabidangstudi" value="<?php echo $showbidangstudi['Bidangstudi']; ?>"></td>
				</tr>
			    </table>
			    <br>	
			</form>
		</div>
	</main>
<?php require_once 'footer.php'; ?>
		

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      