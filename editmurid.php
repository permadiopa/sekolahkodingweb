<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Murid</h4>
		<hr/>
		<br/>		
		<form action="updatemurid.php" method="POST">
		<?php                                                                                                                                                      
		$link 		  = mysqli_connect('localhost','root','','db_sekolahkoding');
		$id	  		  = $_GET['edit'];

		$edit   	  = mysqli_query($link, "SELECT * FROM tblmurid where id_murid='$id'");
		$showmurid    = mysqli_fetch_array ($edit);
		$checked	  = explode(',', $showmurid['Bidangstudimurid']);
		$query_bstudi = mysqli_query($link, "SELECT * FROM tblmurid ORDER By id_murid DESC"); 	
	
		?>
		<br>
		<div>
			<button name="update">Update</button>
			<button name="cancel">Batal</button>	
		</div>		
		<br>
		<div>			
				<table>
					<caption style="text-align:center;"><h4>REGISTRASI DATA MURID<h4></caption>
					<input type="hidden" id="id_murid" name="id_murid" value="<?php echo $showmurid['id_murid']; ?>">
				<tr>
					<td><label for="nim">Nim</label></td>					
					<td><input type="text" id="nim" name="nim" value="<?php echo $showmurid['Nim']; ?>"></td>
				</tr>
				<tr>
					<td><label for="namamurid">Nama</label></td>
				    <td><input type="text" id="namamurid" name="namamurid" checked value="<?php echo $showmurid['Nama']; ?> "></td>
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
						<input type="checkbox" name="bidangstudimurid[]" value="PHP" <?php in_array('PHP', $checked) ? print "checked" : ""; ?> > PHP&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="Javascript" <?php in_array('Javascript', $checked) ? print "checked" : ""; ?> > Javascript&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="Bootstrap" <?php in_array('Bootstrap', $checked) ? print "checked" : ""; ?> > Bootstrap&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="Laravel" <?php in_array('Laravel', $checked) ? print "checked" : ""; ?> > Laravel&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="Codeigniter" <?php in_array('Codeigniter', $checked) ? print "checked" : ""; ?> > Codeigniter&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="MySQL" <?php in_array('MySQL', $checked) ? print "checked" : ""; ?> > MySQL&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="JQuery" <?php in_array('JQuery', $checked) ? print "checked" : ""; ?> > JQuery&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="CSS" <?php in_array('CSS', $checked) ? print "checked" : ""; ?> > CSS&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="ASP.net" <?php in_array('ASP.net', $checked) ? print "checked" : ""; ?> > ASP.net&emsp;
						<input type="checkbox" name="bidangstudimurid[]" value="HTML" <?php in_array('HTML', $checked) ? print "checked" : ""; ?> > HTML&emsp;
					</td>
				</tr>
				<tr>
					<td><label for="nohpmurid">No. Handphone</label></td>
				    <td><input type="text" id="nohpmurid" name="nohpmurid" value="<?php echo $showmurid['Nohandphonemurid']; ?>"></td>
				</tr>
				<tr>
					<td><label for="alamatmurid">Alamat</label></td>
					<td><input type="text" id="alamatmurid" name="alamatmurid" value="<?php echo $showmurid['Alamat']; ?>"></td>
				</tr>
			    </table>
			    <br>	
			</form>
		</div>
	</main>
<?php require_once 'footer.php'; ?>
		

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      