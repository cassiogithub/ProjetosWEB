<?php 
	session_start();
	/*echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//remover indices do array de sessão
	
	//unset()
	
	unset($_SESSION['y']);

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variavel de sessão
	
	//session_destroy()
*/
	session_destroy();
	//forçar redirecionamento
	header('Location: index.php');


 ?>