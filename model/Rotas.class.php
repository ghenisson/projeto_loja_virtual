<?php

class Rotas{
    //função statica permite ser chamada sem precisar instanciar classe
    // nessa função verifica primeiro se a variavel get tem alguma coisa, se tiver verifica dse essa pagina existe.
    static function get_Pagina(){
        if(isset($_GET['pag'])){
            $pagina = "controller/".$_GET['pag'] . '.php';
            if(file_exists($pagina)){
                include $pagina;
            
            }else{
            include 'erro.php';
            }
        }
    }
}


?>