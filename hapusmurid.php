<?php require_once 'header.php'; require_once 'aside.php';?>
<main>
		<h4>Home / Daftar Murid</h4>
		<hr/>
		<br/><br/>		

		<?php

		$link	= mysqli_connect('localhost', 'root', '', 'db_sekolahkoding');
		$id		= $_GET['hapus'];		

		//if (!$link){
		//	die('data tidak konek'. mysqli_connect_error());
		//}else
		//    echo "<script language=\"javascript\">
		//         alert (\"berhasil\")
		//         document.location=\"daftarmurid.php\";
		//         </script>";

		
					$hapus	= "DELETE FROM tblmurid WHERE id_murid='$id'";				

							if (mysqli_query ($link, $hapus)) {
								echo "<script language=\"javascript\">
							         alert (\"Data berhasil dihapus\")
							         document.location=\"daftarmurid.php\";
							         </script>";

							}else{
								echo "<script language=\"javascript\">
							         alert (\"Gagal hapus data\")
							         document.location=\"daftarmurid.php\";
							         </script>";					    			
			 					  }			
			 			
		    mysqli_close($link);
		?>
</main>
<?php require_once 'footer.php'; ?>
