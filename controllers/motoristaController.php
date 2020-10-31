<?php
class motoristaController extends controller {

    public function __construct() {
        parent::__construct();
        $_SESSION['link'] = $_SERVER["REQUEST_URI"];
        $u = new Usuarios();
        $u->verificarLogin();
    }

    public function index() {
        $t = new Trechos();
        $r = new Rotas();
        
        $dados = array(
        	'user_name' => ''
        );
        $u = new Usuarios();
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);        
        $dados['info'] = $u->getDados($_SESSION['lgsocial']);
        $dados['rotas'] = $r->getRotas();

        $this->loadView('motorista', $dados);
    }

    public function fazerrota($id){
        $r = new Rotas();
        $t = new Trechos();
        $dados = array(
            'user_name' => ''
        );
        $u = new Usuarios();
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);        
        $dados['info'] = $u->getDados($_SESSION['lgsocial']);
        $dados['trechos'] = $t->getTrechos($id);

        $this->loadView('fazerrota', $dados);

    }

}