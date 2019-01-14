<?php

// Smarty é um sistema de templates para PHP, fornece uma maneira fácil de controlar a separação da aplicação lógica e apresentação.
// para cada .tpl é necessario fazer a configuração abaixo, por isso é uma boa prática generalizar:
class Template extends Smarty {
    public function __construct() {
        parent::__construct();

        // define o diretório dos templates
        $this->setTemplateDir('view/');
        // define a pata de compilação
        $this->setCompileDir('view/compile/');
        // define o diretprio de caches
        $this->setCacheDir('view/cache/');
    }
}