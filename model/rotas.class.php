<?php

class Rotas {
    public static $pag;
    /**
     * Trata págnias e parâmetros da URL
     */
    static function getPagina () {
        if ( isset($_GET['pag']) ) {
            self::$pag = explode('/', $pagina);
            // var_dump(self::$pag);

            $pagina = 'controller/' . self::$pag[0] . '.php';
            // $pagina = 'controller/' . $_GET['pag'] . '.php';

            if ( file_exists($pagina) )
                include $pagina;
            else {
                echo 'Arquivo não encontrado :' . $pagina;
                include 'erro.php';
            }
        }
    }
}

// https://youtu.be/zn6oO9eGtJI?list=PLq-sApY8QuycUZsoAZD-LKyV5BWueQDgu&t=497