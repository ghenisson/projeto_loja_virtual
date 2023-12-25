<?php

//requisita arquivo autoload cuja função é carregar todas as bibliotecas do projeto
require './lib/autoload.php';

//cria objeto da classe smarty
$smarty = new Template();
Rotas::get_Pagina();




$smarty->assign('nome', 'Ghenisson Sousa Santos');

//essa função carrega o display
//Essa deve ser sempre a ultima linha da classe smarty
$smarty->display('index.tpl');

?>