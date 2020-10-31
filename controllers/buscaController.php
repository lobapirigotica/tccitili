<?php
class buscaController extends controller {

    public function __construct() {
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

        $dados['resultado'] = $u->searchUserByName($_GET['q']);

        $this->loadTemplate('busca', $dados);
    }
}