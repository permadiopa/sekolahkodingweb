<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Guru</h4>
		<hr/>
		<br/><br/>		
		
		<div>
			<li class="tombol"><a href="tambahguru.php">Tambah</a></li>
		</div>
		
		<br>

			<?php
				$link = mysqli_connect('localhost','root','','db_sekolahkoding');
			
				$perpage	= 5;
				$page 		= isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
				$start		= ($page > 1) ? ($page * $perpage) - $perpage :0;
					
				$result 	= mysqli_query ($link, "SELECT * FROM tblguru");
				$total		= mysqli_num_rows($result);

				$pages		= ceil($total/$perpage);

				$sql = "SELECT  c.id_guru, Nip, Nama, kode_bidangstudi, Nohandphoneguru, Alamat, Bidangstudi
			            FROM tblguru c
			            JOIN tbldibangstudi s USING (kode_bidangstudi) ORDER BY id_guru DESC LIMIT $start, $perpage";

				$articles	= "SELECT * FROM tblguru ORDER BY id_guru DESC LIMIT $start, $perpage";
				$tampil		= mysqli_query($link,$sql);
				
				$id_guru 		= $start + 1;
				
				echo "
					<table>
					<caption style=\"text-align:center;\"><h4>DAFTAR BIODATA GURU<h4></caption>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Bidang Studi</th>	
						<th>No. Handphone</th>
						<th>Alamat</th>					
						<th>Aksi</th>
					</tr>";

				while ($data = mysqli_fetch_assoc($tampil)) {				
				echo "
					<tr>
						<td>$id_guru</td>
						<td>$data[Nip]</td>
					    <td>$data[Nama]</td>
					    <td>$data[Bidangstudi]</td>
						<td>$data[Nohandphoneguru]</td>
						<td>$data[Alamat]</td>					
						<td>
						<a href=\"editguru.php?edit=$data[id_guru]\">Edit</a> | 
						<a href=\"hapusguru.php?hapus=$data[id_guru]\">Hapus</a>
						</td>
					</tr>";
				    $id_guru++;				    
				}				
				    echo "</table>";

				    	echo "<br>";
   					    echo "<b>Halaman : </b>";
				    	for ($i=1; $i<=$pages; $i++){
				    	echo "<div class=\"pagination\">";					    
						echo "<tr><a class=\"paginationlink\" href=\"?halaman=$i\">$i</a></tr>";
						echo "</div>";				
				}
				mysqli_close($link);			
			?>
			
	</main>
<?php require_once 'footer.php'; ?>
		

