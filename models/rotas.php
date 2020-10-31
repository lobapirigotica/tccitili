<?php
class Rotas extends model {

	public function verificarLogin() {

		if(!isset($_SESSION['lgsocial']) || (isset($_SESSION['lgsocial']) && empty($_SESSION['lgsocial']))) {
			header("Location: ".BASE."login");
			exit;
		}

	}

	public function rotaAdd($nome, $cidade, $dias){
		$sql = "INSERT INTO rotas SET nome = '$nome', cidade = '$cidade', dias = '$dias'";
		$sql = $this->db->query($sql);
	}



	public function rotaEdt($id, $nome, $cidade, $dias){
		$sql = "UPDATE rotas SET nome = '$nome', cidade = '$cidade', dias = '$dias' WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}

	public function rotaDel($id){
		$sql = "DELETE FROM rotas WHERE id = '$id'";
		$sql = $this->db->query($sql);

	}

	public function getDados($id) {
		$array = array();

		$sql = "SELECT * FROM rotas WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function getRotas(){
		$array = array();
		$sql = "SELECT * FROM rotas";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}



}