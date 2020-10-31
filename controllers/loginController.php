

<?php
class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $dados = array('erro'=>'');

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $passw = md5($_POST['passw']);

            $u = new Usuarios();
            $dados['erro'] = $u->logar($email, $passw);
        }

        
        $this->loadView('login', $dados);
    }

    public function entrar() {
    }

    public function cadastrar() {
    	$dados = array();
        $u = new Usuarios();


    	if(isset($_POST['email']) && !empty($_POST['email'])) {
    		$email = addslashes($_POST['email']);
            $passw = addslashes($_POST['passw']);
            $passw2 = addslashes($_POST['passw2']);
            $cep = addslashes($_POST['cep']);
            $num = addslashes($_POST['num']);
            $name = addslashes($_POST['name']);
            
            if($u->buscaRua($cep)=="0"){
                $dados['erro'] = "Cep Inválido";
            }elseif($passw != $passw2){
                $dados['erro'] = "Senhas nao sao iguais";
            }
            else{
        		$dados['erro'] = $u->cadastrar($email, $name, $passw, $cep, $num);
                header("Location: ".BASE);
            }
    	}

    	$this->loadView('login_cadastrar', $dados);
    }

    public function sair() {
    	unset($_SESSION['lgsocial']);
    	header("Location: ".BASE);
    }

    public function changepass(){
        $u = new Usuarios();
        $dados = array();

        if(isset($_POST['passw1']) && !empty($_POST['passw1'])) {
            $passw1 = addslashes($_POST['passw1']);
            $passw2 = addslashes($_POST['passw2']);
            if ($passw1 == $passw2) {
                $u->changepass($passw1);
                header("Location: ".BASE);
            }else {
                $dados['erro'] = 'Password Not Match';
            }
            
        }

        $this->loadView('login_changepass', $dados);
    }

}