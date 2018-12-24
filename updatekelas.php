<?php
$link	= mysqli_connect('localhost','root','','db_sekolahkoding');

$no			 = @$_POST['no'];
$kodekelas   = @$_POST['kodekelas'];
$namakelas	 = @$_POST['namakelas'];

$update="UPDATE tbkelas SET id_kelas='$kodekelas',Namakelas='$namakelas' where no='$no'";

if (isset($_POST['update'])) {	
	 if (mysqli_query($link,$update)) { 
	 	echo "<script language=\"javascript\">
		         alert (\"Data Berhasil Diupdate !!\")
		         document.location=\"daftarkelas.php\";
		       </script>";						 	 
	 }else
	    echo "<script language=\"javascript\">
		         alert (\"Gagal Update Data\")
		         document.location=\"daftarkelas.php\";
		      </script>";
}

 mysqli_close($link);

?>