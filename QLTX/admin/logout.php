<?php
 session_start(); 
	if(isset($_SESSION['nv_admin'])){
		unset($_SESSION['nv_admin']);
		header('Location: http://localhost/doan1/QLTX');
	}
?>