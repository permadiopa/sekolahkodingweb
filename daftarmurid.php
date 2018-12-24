<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Murid</h4>
		<hr/>
		<br/><br/>		
		<div>
			<li class="tombol"><a href="tambahmurid.php">Tambah</a></li>
		</div>
		<br>

			<?php
				$link = mysqli_connect('localhost','root','','db_sekolahkoding');
			
				$perpage	= 5;
				$page 		= isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
				$start		= ($page > 1) ? ($page * $perpage) - $perpage :0;
					
				$result 	= mysqli_query ($link, "SELECT * FROM tblmurid");
				$total		= mysqli_num_rows($result);

				$pages		= ceil($total/$perpage);

				$sql = "SELECT  c.id_murid, Nim, Nama, id_kelas, Namakelas, Bidangstudimurid, Nohandphonemurid, Alamat
			            FROM tblmurid c
			            JOIN tbkelas s USING (id_kelas) ORDER BY id_murid DESC LIMIT $start, $perpage";

				$tampil		= mysqli_query($link,$sql);
				$id_murid 		= $start + 1;
				
				echo "
					<table>
					<caption style=\"text-align:center;\"><h4>DAFTAR BIODATA MURID<h4></caption>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Bidang Studi Yang Diambil</th>	
						<th>No. Handphone</th>
						<th>Alamat</th>					
						<th>Aksi</th>
					</tr>";

				while ($data = mysqli_fetch_assoc($tampil)) {
				echo "
					<tr>
						<td>$id_murid</td>
						<td>$data[Nim]</td>
					    <td>$data[Nama]</td>
						<td>$data[Namakelas]</td>
						<td>$data[Bidangstudimurid]</td>
						<td>$data[Nohandphonemurid]</td>
						<td>$data[Alamat]</td>					
						<td>
						<a href=\"editmurid.php?edit=$data[id_murid]\">Edit</a> | 
						<a href=\"hapusmurid.php?hapus=$data[id_murid]\">Hapus</a>
						</td>
					</tr>";
				    $id_murid++;
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
		

