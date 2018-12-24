<?php require_once 'header.php'; require_once 'aside.php';?>
<main>
		<h4>Home / Daftar Bidang Studi</h4>
		<hr/>
		<br/><br/>		

		<?php

		$link	= mysqli_connect('localhost', 'root', '', 'db_sekolahkoding');
		$no_bidangstudi		= $_GET['hapus'];		
		$hapus	= "DELETE FROM tbldibangstudi WHERE no_bidangstudi = '$no_bidangstudi'";				

							if (mysqli_query ($link, $hapus)) {
								echo "<script language=\"javascript\">
							         alert (\"Data berhasil dihapus\")
							         document.location=\"daftarbidangstudi.php\";
							         </script>";
							}else{
								echo "<script language=\"javascript\">
							         alert (\"Gagal hapus data\")
							         document.location=\"daftarbidangstudi.php\";
							         </script>";					    			
			 					  }			
		    mysqli_close($link);
		?>
</main>
<?php require_once 'footer.php'; ?>
