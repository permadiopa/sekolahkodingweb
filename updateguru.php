<?php
$link	= mysqli_connect('localhost','root','','db_sekolahkoding');

$id_guru   		= @$_POST['id_guru'];
$kode_bidangstudi = @$_POST['bidangstudi'];
$nip		    = @$_POST['nip'];
$namaguru	 	= @$_POST['namaguru'];
$nohpguru	 	= @$_POST['nohpguru'];
$alamatguru	 	= @$_POST['alamatguru'];        

$update="UPDATE tblguru SET Nip='$nip',Nama='$namaguru',kode_bidangstudi='$kode_bidangstudi',Nohandphoneguru='$nohpguru',Alamat='$alamatguru' where id_guru='$id_guru'";

if (isset($_POST['update'])) {	
	 if (mysqli_query($link,$update)) { 
	 	echo "<script language=\"javascript\">
		         alert (\"Data Berhasil Diupdate !!\")
		         document.location=\"daftarguru.php\";
		       </script>";						 	 
	 }else
	    echo "<script language=\"javascript\">
		         alert (\"Gagal Update Data\")
		         document.location=\"daftarguru.php\";
		      </script>";
}

 mysqli_close($link);

?>