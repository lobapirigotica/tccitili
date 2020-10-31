<?php
class trechosController extends controller {

    public function __construct() {
        parent::__construct();
        $_SESSION['link'] = $_SERVER["REQUEST_URI"];
        $u = new Usuarios();
        $u->verificarLogin();
    }

    public function index() {

    }

    public function trechoEdt($id){
        $u = new Usuarios();
        $r = new Rotas();
        $t = new Trechos();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        $dados['info'] = $t->getDados($id);

        
        if(isset($_POST['cep']) && !empty($_POST['cep'])) {
            $cep = addslashes($_POST['cep']);
            $inicio = addslashes($_POST['inicio']);
            $fim = addslashes($_POST['fim']);
            $tempo = addslashes($_POST['tempo']);
            $rua = $t->buscaRua($cep);
            $t->trechoEdt($id, $cep, $inicio, $fim, $tempo, $rua);
            header("Location: ".BASE."rotas/rotaedt/".$dados['info']['idrota']); 
        }
        $this->loadTemplate('trechoedt', $dados);


    }
    public function trechoAdd($id){
        $u = new Usuarios();
        $r = new Rotas();
        $t = new Trechos();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        $dados['info'] = $id;
        
        if(isset($_POST['cep']) && !empty($_POST['cep'])) {
            $cep = addslashes($_POST['cep']);
            $inicio = addslashes($_POST['inicio']);
            $fim = addslashes($_POST['fim']);
            $tempo = addslashes($_POST['tempo']);
            $rua = $t->buscaRua($cep);
            $t->trechoAdd($id, $cep, $inicio, $fim, $tempo, $rua);
            header("Location: ".BASE."rotas/rotaedt/".$dados['info']['idrota']); 
        }
        $this->loadTemplate('trechoadd', $dados);


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

    public function trechoDel($id,$idrota){
         $t = new Trechos();
         $t->trechoDel($id);
        header("Location: ".BASE."rotas/rotaedt/".$idrota); 

    }



}