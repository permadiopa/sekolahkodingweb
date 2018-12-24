<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Guru</h4>
		<hr/>
		<br/>		
		<form action="updateguru.php" method="POST">
		<?php                                                                                                                                                      
		$link 		 = mysqli_connect('localhost','root','','db_sekolahkoding');
		$id	  		 = $_GET['edit'];

		$edit   	 = mysqli_query($link, "SELECT * FROM tblguru where id_guru='$id'");
		$showguru    = mysqli_fetch_array ($edit);
		?>
		<br>
		<div>
			<button name="update">Update</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>
		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA GURU<h4></caption>
					<input type="hidden" id="id_guru" name="id_guru" value="<?php echo $showguru['id_guru']; ?>">
				<tr>
					<td><label for="nip">Nip</label></td>					
					<td><input type="text" id="nip" name="nip" value="<?php echo $showguru['Nip']; ?>"></td>
				</tr>
				<tr>
					<td><label for="namaguru">Nama</label></td>
				    <td><input type="text" id="namaguru" name="namaguru" value="<?php echo $showguru['Nama']; ?>"></td>
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
				    <td><input type="text" id="nohpguru" name="nohpguru" value="<?php echo $showguru['Nohandphoneguru']; ?>"></td>
				</tr>
				<tr>
					<td><label for="alamatguru">Alamat</label></td>
					<td><input type="text" id="alamatguru" name="alamatguru" value="<?php echo $showguru['Alamat']; ?>"></td>
				</tr>
			    </table>
			    <br>	
			</form>
		</div>
	</main>
<?php require_once 'footer.php'; ?>
		

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      