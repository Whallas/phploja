<?php

// autoload carrega todas as dependencias do arquivo
require './lib/autoload.php';
// require_once '.model/Template.class.php';

// Smarty é um sistema de templates para PHP, fornece uma maneira fácil de controlar a separação da aplicação lógica e apresentação.
$smarty = new Template();
// cria variavel
$smarty->assign('H2', 'Whallas Pimentel Bezerra');
// chama o template
$smarty->display('index.tpl');
?>