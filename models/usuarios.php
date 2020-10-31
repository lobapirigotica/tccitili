<?php
class Usuarios extends model {

	public function verificarLogin() {

		if(!isset($_SESSION['lgsocial']) || (isset($_SESSION['lgsocial']) && empty($_SESSION['lgsocial']))) {
			header("Location: ".BASE."login");
			exit;
		}

	}

	public function logar($email, $passw) {

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$passw'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$_SESSION['lgsocial'] = $sql['id'];
			$_SESSION['tipo'] = $sql['tipo'];
			if($sql['tipo']== 'u'){
				header("Location: ".BASE."consulta");
				exit;
			}
			if($sql['tipo'] == 'm'){
				header("Location: ".BASE."motorista");
				exit;
			}

			if(isset($_SESSION['link'])){
				$link = $_SESSION['link'];
				unset($_SESSION['link']);
				header("Location: ".BASE.$link);
			}else{
				header("Location: ".BASE);
			}
			exit;
		} else {
			return "E-mail ou Senha inválida!";
		}
	}
	public function userAdd($nome, $endereco, $cidade, $estado, $cep, $telefone, $email, $tipo){
		$senha = md5('info123');
		$sql = "INSERT INTO usuarios SET nome = '$nome', endereco = '$endereco', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', email = '$email', senha = '$senha', tipo = '$tipo'";
		$sql = $this->db->query($sql);
	}



	public function userEdt($id, $nome, $endereco, $cidade, $estado, $cep, $telefone, $email, $tipo){
		$sql = "UPDATE usuarios SET nome = '$nome', endereco = '$endereco', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', email = '$email', tipo = '$tipo' WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}

	public function userDel($id){
		$sql = "DELETE FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

	}

	public function cadastrar($email, $name, $passw, $cep, $num){
		$senha = md5($passw);
		$sql = "INSERT INTO usuarios SET nome = '$name', cep = '$cep', email = '$email', senha = '$senha', tipo = 'u'";

		$sql = $this->db->query($sql);

	}

	public function getName($id) {
		$sql = "SELECT nome FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			return $sql['nome'];
		} else {
			return '';
		}
	}

	public function getDados($id) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function getUsers(){
		$array = array();
		$sql = "SELECT * FROM usuarios";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}


	public function getEmail($id) {

		$sql = "SELECT email FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			return $sql['email'];
		}

		return '';
	}


	public function changepass($passw) {

		$id = $_SESSION['lgsocial'];
		$sql = "UPDATE usuarios SET senha = MD5('$passw') WHERE id = '$id'";

		$this->db->query($sql);
			

	}


	public function searchUserByName($q) {
		$array = array();

		$q = addslashes($q);

		$sql = "SELECT * FROM usuarios WHERE nome LIKE '%$q%'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



    public function buscaRua($cep){
    	$url = "https://viacep.com.br/ws/".$cep."/json/";
    	$json_file = file_get_contents($url);   
		$json_str = json_decode($json_file, true);
		if (array_key_exists('logradouro', $json_str)) {
	        $nomedaRua = $json_str['logradouro'];
		}else{
			$nomedaRua = "0";
		}
        return $nomedaRua;
    }









}