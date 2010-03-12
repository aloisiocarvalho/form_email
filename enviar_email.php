<?php

	$email= 'julioprotzek@gmail.com';
	$assunto= 'Email enviado pelo PHP';
	$mensagem= 'Hello World!';
	
	mail( $email, $assunto, $mensagem );

?>