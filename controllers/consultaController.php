<?php
class consultaController extends controller {

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
        $dados['suarua'] = $t->getTrechoByCep($dados['info']['cep']);
        $dados['rota'] = $r->getDados($dados['suarua'][0]['idrota']);
        $dados['dias'] = explode(',',$dados['rota']['dias']);
        $dados['trechos'] = $t->getTrechos($dados['rota']['id']);
        //pegar o cep do usuario
        // buscar o trecho
        // buscar o rota
        //montar a Timeline

        $this->loadView('consulta', $dados);
    }



}