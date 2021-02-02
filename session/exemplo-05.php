<?php 


require_once("config.php");

echo session_save_path();
echo '<br/>';
var_dump(session_status());
echo '<br/>';

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo 'Sessão Desabilitada. <br>';
		break;
	case PHP_SESSION_NONE:
		echo 'Nenhum sessão foi criada ainda.<br>';
		break;
	case PHP_SESSION_ACTIVE:
		echo 'Sessão Ativa!<br>';
		break;
	default:
		# code...
		break;
}
?>