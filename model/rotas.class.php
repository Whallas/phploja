<?php

class Rotas {
    /** Define a pasta Controller */
    private static $pasta_controller = 'controller';
    /** Define a pasta View */
    private static $pasta_view = 'view';

    /*** Recebe os parâmetros da URL */
    public static $pag;

    /**
     * Trata págnias e parâmetros da URL
     */
    static function getPagina () {

        // verifica se exite parâmetro page na URL
        if ( isset($_GET['pag']) ) {
            
            self::$pag = explode('/', $_GET['pag']);
            // var_dump(self::$pag);

            $pagina = self::$pasta_controller . '/' . self::$pag[0] . '.php';
            // $pagina = 'controller/' . $_GET['pag'] . '.php';

            if ( file_exists($pagina) )
                include $pagina;
            else {
                echo 'Arquivo não encontrado :' . $pagina;
                include 'erro.php';
            }
        }
    }

    /**
     * @return string: URL home do site
     */
    static function getSiteHOME () {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    /**
     * @return string: Pasta Raiz do site
     */
    static function getSiteRAIZ () {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    /**
     * @return string: URL do template do site
     */
    static function getSiteTEMA () {
        return self::getSiteHOME() . '/' . self::$pasta_view;
    }

    static function pag_Carrinho () {
        return self::getSiteHOME() . '/carrinho';
    }

    static function pag_CarrinhoAlterar () {
        return self::getSiteHOME() . '/carrinho_alterar';
    }

    static function pag_Produtos () {
        return self::getSiteHOME() . '/produtos';
    }

    static function pag_ProdutosInfo () {
        return self::getSiteHOME() . '/produtos_info';
    }

    static function pag_Login () {
        return self::getSiteHOME() . '/login';
    }

    static function pag_ClienteRecovery () {
        return self::getSiteHOME() . '/clientes_recovery';
    }

    static function pag_ClienteConta () {
        return self::getSiteHOME() . '/clientes_minhaconta';
    }

    static function pag_PedidoConfirmar () {
        return self::getSiteHOME() . '/pedido_confirmar';
    }

    static function pag_PedidoFinalizar () {
        return self::getSiteHOME() . '/pedido_finalizar';
    }
} 