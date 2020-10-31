<?php
class rotasController extends controller {

    public function __construct() {
        parent::__construct();
        $_SESSION['link'] = $_SERVER["REQUEST_URI"];
        $u = new Usuarios();
        $u->verificarLogin();
    }

    public function index() {
        $dados = array(
        	'user_name' => ''
        );
        $u = new Usuarios();
        $r = new Rotas();
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
//        $dados['info'] = $->getDados($_SESSION['lgsocial']);
        $dados['rotas'] = $r->getRotas();

        $this->loadTemplate('rotas', $dados);
    }

    public function rotaEdt($id){
        $u = new Usuarios();
        $r = new Rotas();
        $t = new Trechos();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        $dados['info'] = $r->getDados($id);
        $dados['dias'] = explode(',',$dados['info']['dias']);
        $dados['trechos'] = $t->getTrechos($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
     

            $nome = addslashes($_POST['nome']);
            $cidade = addslashes($_POST['cidade']);
            $dias = (isset($_POST['domingo'])? "1" : "");
            $dias = $dias.(isset($_POST['segunda'])? ",2" : "");
            $dias = $dias.(isset($_POST['terca'])? ",3" : "");
            $dias = $dias.(isset($_POST['quarta'])? ",4" : "");
            $dias = $dias.(isset($_POST['quinta'])? ",5" : "");
            $dias = $dias.(isset($_POST['sexta'])? ",6" : "");
            $dias = $dias.(isset($_POST['sabado'])? ",7" : "");
            $r->rotaEdt($id, $nome, $cidade, $dias);
            header("Location: ".BASE."rotas"); 
        }
        $this->loadTemplate('rotaedt', $dados);


    }

    public function rotaAdd(){
        $u = new Usuarios();
        $r = new Rotas();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $cidade = addslashes($_POST['cidade']);
            $dias = (isset($_POST['domingo'])? "1" : "");
            $dias = $dias.(isset($_POST['segunda'])? ",2" : "");
            $dias = $dias.(isset($_POST['terca'])? ",3" : "");
            $dias = $dias.(isset($_POST['quarta'])? ",4" : "");
            $dias = $dias.(isset($_POST['quinta'])? ",5" : "");
            $dias = $dias.(isset($_POST['sexta'])? ",6" : "");
            $dias = $dias.(isset($_POST['sabado'])? ",7" : "");
            $r->rotaAdd($nome, $cidade, $dias);

            header("Location: ".BASE."rotas"); 
        }


        $this->loadTemplate('rotaadd', $dados);


    }

    public function rotaDel($id){
         $r = new Rotas();
         $r->rotaDel($id);
        header("Location: ".BASE."rotas"); 

    }



}