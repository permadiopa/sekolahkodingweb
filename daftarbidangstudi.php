<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Bidang Studi</h4>
		<hr/>
		<br/><br/>		
		
		<div>
			<li class="tombol"><a href="tambahbidangstudi.php">Tambah</a></li>
		</div>
		
		<br>

			<?php
				$link = mysqli_connect('localhost','root','','db_sekolahkoding');
			
				$perpage	= 5;
				$page 		= isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
				$start		= ($page > 1) ? ($page * $perpage) - $perpage :0;
					
				$result 	= mysqli_query ($link, "SELECT * FROM tbldibangstudi");
				$total		= mysqli_num_rows($result);

				$pages		= ceil($total/$perpage);

				$articles	= "SELECT * FROM tbldibangstudi ORDER BY no_bidangstudi DESC LIMIT $start, $perpage";
				$tampil		= mysqli_query($link,$articles);
				
				$no_bidangstudi	= $start + 1;
				
				echo "
					<table>
					<caption style=\"text-align:center;\"><h4>DAFTAR BIDANG STUDI<h4></caption>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Bidang Studi</th>
						<th>Aksi</th>
					</tr>";

				$showstudi = mysqli_query ($link, "SELECT * FROM tbldibangstudi ORDER BY no_bidangstudi ASC");
				while ($data = mysqli_fetch_assoc($tampil)) {
					
				echo "
					<tr>
						<td>$no_bidangstudi</td>
						<td>$data[kode_bidangstudi]</td>
					    <td>$data[Bidangstudi]</td>
						<td>
						<a href=\"editbidangstudi.php?edit=$data[no_bidangstudi]\">Edit</a> | 
						<a href=\"hapusbidangstudi.php?hapus=$data[no_bidangstudi]\">Hapus</a>
						</td>
					</tr>";
				    $no_bidangstudi++;
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
		

