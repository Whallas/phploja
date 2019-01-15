<?php

/**
 * Parametriza várias informações do sistema/loja.
 */
class Config {
    
    /** Informações de conexão do BD */
    protected $BANCO_HOST = "localhost";
    protected $BANCO_BD   = "loja";
    protected $BANCO_USER = "root";
    protected $BANCO_PASS = "";

    /** URL da página */
    const SITE_URL   = "http://localhost";
    /** Pasta raiz da página */
    const SITE_PASTA = "loja";
    const SITE_LOJA  = "Mini Loja";
    const SITE_ADM_EMAIL = "whallaspimnmetel@gmail.com";

    /** Informações do servidor Email */
    const EMAIL_HOST = "";
    const EMAIL_USER = "";
    const EMAIL_MAME = "";
    const EMAIL_PASS = "";
    const EMAIL_PORT = "";
    const EMAIL_SMTPAUTH   = "";
    const EMAIL_SMTPSECURE = "";

}