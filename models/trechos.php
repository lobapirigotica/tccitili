<?php
class Trechos extends model {

	public function verificarLogin() {

		if(!isset($_SESSION['lgsocial']) || (isset($_SESSION['lgsocial']) && empty($_SESSION['lgsocial']))) {
			header("Location: ".BASE."login");
			exit;
		}

	}

	public function trechoEdt($id, $cep, $inicio, $fim, $tempo, $rua){
		$sql = "UPDATE trechos SET cep = '$cep',rua = '$rua' , inicio = $inicio, fim = $fim, tempo = $tempo WHERE id = '$id'";
		$sql = $this->db->query($sql);
	}

	public function trechoAdd($id, $cep, $inicio, $fim, $tempo, $rua){
		$sql = "INSERT INTO trechos SET cep = '$cep', rua = '$rua' ,inicio = $inicio, fim = $fim, tempo = $tempo, idrota = $id";
		
		$sql = $this->db->query($sql);
	}

	public function trechoDel($id){
		$sql = "DELETE FROM trechos WHERE id = '$id'";
		$sql = $this->db->query($sql);

	}

	public function getDados($id) {
		$array = array();

		$sql = "SELECT * FROM trechos WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getTrechos($id) {
		$array = array();
		$sql = "SELECT * FROM trechos WHERE idrota = $id";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getTrechoByCep($cep) {
		$array = array();
		$sql = "SELECT * FROM trechos WHERE cep = $cep";
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
			$nomedaRua = "Cep Inválido";
		}
        return $nomedaRua;
    }


}