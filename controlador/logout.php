<?php
	session_start();
	session_destroy();
	header('Location: /PaginaInvestigacion');
	exit(0);
?>