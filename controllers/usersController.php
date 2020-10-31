<?php
class usersController extends controller {

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

        if(isset($_POST['name']) && !empty($_POST['name'])) {

            $name = addslashes($_POST['name']);
            $address = addslashes($_POST['address']);
            $city = addslashes($_POST['city']);
            $province = addslashes($_POST['province']);
            $postal = addslashes($_POST['postal']);
            $phone = addslashes($_POST['phone']);


            $u->updateProfile(array(
                'name' => $name,
                'gender' => $gender,
                'address' => $address,
                'city' => $city,
                'province' => $province,
                'postal' => $postal,
                'phone' => $phone,
 
            ));

            if(isset($_POST['passw']) && !empty($_POST['passw'])) {
                $passw = md5($_POST['passw']);

                $u->updateProfile(array(
                    'passw' => $passw
                ));
            }
            header("Location: ".BASE."home");   
        }
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);        
        $dados['info'] = $u->getDados($_SESSION['lgsocial']);
        $dados['users'] = $u->getUsers();

        $this->loadTemplate('users', $dados);
    }

    public function userEdt($id){
        $u = new Usuarios();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
        $dados['info'] = $u->getDados($id);
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $endereco = addslashes($_POST['endereco']);
            $cidade = addslashes($_POST['cidade']);
            $estado = addslashes($_POST['estado']);
            $cep = addslashes($_POST['cep']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $tipo = strtolower(addslashes($_POST['tipo']));
            $u->userEdt($id, $nome, $endereco, $cidade, $estado, $cep, $telefone, $email, $tipo);
            header("Location: ".BASE."users"); 
        }


        $this->loadTemplate('useredt', $dados);


    }

    public function userAdd(){
        $u = new Usuarios();
        $dados = array(
            'user_name' => ''
        );
        $dados['user_name'] = $u->getName($_SESSION['lgsocial']);
//        $dados['info'] = $u->getDados($id);
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $endereco = addslashes($_POST['endereco']);
            $cidade = addslashes($_POST['cidade']);
            $estado = addslashes($_POST['estado']);
            $cep = addslashes($_POST['cep']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $tipo = strtolower(addslashes($_POST['tipo']));
            $u->userAdd($nome, $endereco, $cidade, $estado, $cep, $telefone, $email, $tipo);
            header("Location: ".BASE."users"); 
        }


        $this->loadTemplate('useradd', $dados);


    }

    public function userDel($id){
         $u = new Usuarios();
         $u->userDel($id);
        header("Location: ".BASE."users"); 

    }



}