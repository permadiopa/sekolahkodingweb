<?php require_once 'header.php'; require_once 'aside.php';?>
<main>
		<h4>Home / Daftar Kelas</h4>
		<hr/>
		<br/><br/>		

		<?php

		$link	= mysqli_connect('localhost', 'root', '', 'db_sekolahkoding');
		$no		= $_GET['hapus'];		
		$hapus	= "DELETE FROM tbkelas WHERE no = '$no'";				

							if (mysqli_query ($link, $hapus)) {
								echo "<script language=\"javascript\">
							         alert (\"Data berhasil dihapus\")
							         document.location=\"daftarkelas.php\";
							         </script>";
							}else{
								echo "<script language=\"javascript\">
							         alert (\"Gagal hapus data\")
							         document.location=\"daftarkelas.php\";
							         </script>";					    			
			 					  }			
		    mysqli_close($link);
		?>
</main>
<?php require_once 'footer.php'; ?>
