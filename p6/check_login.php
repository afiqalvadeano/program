<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']){
	echo "logged $_SESSION[nama]";
}else{
	echo "not logged";
}
?>