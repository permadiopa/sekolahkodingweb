<?php
$link	= mysqli_connect('localhost','root','','db_sekolahkoding');

$no_bidangstudi	  = @$_POST['nobidangstudi'];
$kode_bidangstudi = @$_POST['kodebidangstudi'];
$nama_bidangstudi = @$_POST['namabidangstudi'];

$update="UPDATE tbldibangstudi SET kode_bidangstudi='$kode_bidangstudi',Bidangstudi='$nama_bidangstudi' where no_bidangstudi='$no_bidangstudi'";

if (isset($_POST['update'])) {	
	 if (mysqli_query($link,$update)) { 
	 	echo "<script language=\"javascript\">
		         alert (\"Data Berhasil Diupdate !!\")
		         document.location=\"daftarbidangstudi.php\";
		       </script>";						 	 
	 }else
	    echo "<script language=\"javascript\">
		         alert (\"Gagal Update Data\")
		         document.location=\"daftarbidangstudi.php\";
		      </script>";
}

 mysqli_close($link);

?>