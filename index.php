<?php 

 $pagina = 'home';

 if (!empty($_GET['pagina'])){ 

   $pagina = $_GET['pagina'];  
 }

 if(file_exists('./control/'.$pagina.'.php')) {
 	
	require_once('./control/'.$pagina.'.php');
 }

 else {
  require_once './control/error.php';
 }


?>