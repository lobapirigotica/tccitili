<?php
class homeController extends controller {

    public function __construct() {
        $_SESSION['link'] = $_SERVER["REQUEST_URI"];
        parent::__construct();
        $u = new Usuarios();
        $u->verificarLogin();
    }

    public function index() {
        $u = new Usuarios();

        $dados = array(
        	'usuario_nome' => ''
        );

        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        $this->loadTemplate('home', $dados);
    }

}