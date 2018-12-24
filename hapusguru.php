<?php require_once 'header.php'; require_once 'aside.php';?>
<main>
		<h4>Home / Daftar Guru</h4>
		<hr/>
		<br/><br/>		

		<?php

		$link	= mysqli_connect('localhost', 'root', '', 'db_sekolahkoding');
		$id		= $_GET['hapus'];		
		$hapus	= "DELETE FROM tblguru WHERE id_guru='$id'";				

							if (mysqli_query ($link, $hapus)) {
								echo "<script language=\"javascript\">
							         alert (\"Data berhasil dihapus\")
							         document.location=\"daftarguru.php\";
							         </script>";
							}else{
								echo "<script language=\"javascript\">
							         alert (\"Gagal hapus data\")
							         document.location=\"daftarguru.php\";
							         </script>";					    			
			 					  }			
		    mysqli_close($link);
		?>
</main>
<?php require_once 'footer.php'; ?>
