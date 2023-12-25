<?php

//Essa classe foi criada para comportar essas funções de localizar diretorio do cache, compiler e template 
class Template extends Smarty{
    //Esse é a função construtor que será executada quando classe for chamada.
    function __construct(){
        parent:: __construct();

        //Essa função mostra onde o smarty deve localizar o tempalte quando a função display for acionada
        $this->setTemplateDir('view/');

        //essas duas linhas seguintes dizem onde o compilador o cache serão criados(se não fizer isso eles serão criados na raiz)
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');


    }
}


?>