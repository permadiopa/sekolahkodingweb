<?php
$link	= mysqli_connect('localhost','root','','db_sekolahkoding');



$id_murid   		= @$_POST['id_murid'];
$nim				= @$_POST['nim'];
$namamurid	    	= @$_POST['namamurid'];
$kelasmurid	 		= @$_POST['kelasmurid'];
$bidangstudimurid   = @$_POST['bidangstudimurid'];
$nohpmurid	 		= @$_POST['nohpmurid'];  
$alamatmurid 		= @$_POST['alamatmurid'];        

if (isset($_POST['update'])){
   $bidangstudi = implode ($bidangstudimurid, ',');
		$update = "UPDATE tblmurid SET Nim='$nim', Nama='$namamurid', id_kelas='$kelasmurid', Bidangstudimurid='$bidangstudi', 		Nohandphonemurid='$nohpmurid', Alamat='$alamatmurid' where id_murid='$id_murid'";
}

if (isset($_POST['update'])) {	
	 if (mysqli_query($link,$update)) { 

	 	
	 	echo "<script language=\"javascript\">
		         alert (\"Data Berhasil Diupdate !!\")
		         document.location=\"daftarmurid.php\";
		       </script>";						 	 
	 }else{
	    echo "<script language=\"javascript\">
		         alert (\"Gagal Update Data\")
		         document.location=\"daftarmurid.php\";
		      </script>";
}

 mysqli_close($link);
}

?>