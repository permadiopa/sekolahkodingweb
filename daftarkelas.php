<?php require_once 'header.php'; require_once 'aside.php';?>
	<main>
		<h4>Home / Daftar Kelas</h4>
		<hr/>
		<br/><br/>		
		
		<div>
			<li class="tombol"><a href="tambahkelas.php">Tambah</a></li>
		</div>
		
		<br>

			<?php
				$link = mysqli_connect('localhost','root','','db_sekolahkoding');
			
				$perpage	= 5;
				$page 		= isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
				$start		= ($page > 1) ? ($page * $perpage) - $perpage :0;
					
				$result 	= mysqli_query ($link, "SELECT * FROM tbkelas");
				$total		= mysqli_num_rows($result);

				$pages		= ceil($total/$perpage);

				$articles	= "SELECT * FROM tbkelas ORDER BY no DESC LIMIT $start, $perpage";
				$tampil		= mysqli_query($link,$articles);
				
				$no     	= $start + 1;
				
				echo "
					<table>
					<caption style=\"text-align:center;\"><h4>DAFTAR KELAS<h4></caption>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Kelas</th>
						<th>Aksi</th>
					</tr>";

				$showstudi = mysqli_query ($link, "SELECT * FROM tbkelas ORDER BY no ASC");
				while ($data = mysqli_fetch_assoc($tampil)) {
					
				echo "
					<tr>
						<td>$no</td>
						<td>$data[id_kelas]</td>
					    <td>$data[Namakelas]</td>
						<td>
						<a href=\"editkelas.php?edit=$data[no]\">Edit</a> | 
						<a href=\"hapuskelas.php?hapus=$data[no]\">Hapus</a>
						</td>
					</tr>";
				    $no++;
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
		

