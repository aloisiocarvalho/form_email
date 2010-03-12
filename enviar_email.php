<?php

	$email= 'julioprotzek@gmail.com';
	$assunto= $_POST['assunto'];
	$mensagem= $_POST['mensagem'];
	
	mail( $email, $assunto, $mensagem );

?>