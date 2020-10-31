<?php
class controller {

	protected $db;

	public function __construct() {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadRegTemplate($viewName, $viewData = array()) {
		include 'views/template_reg.php';
	}
	public function loadMachineTemplate($viewName, $viewData = array()) {
		include 'views/template_machine.php';
	}

	public function loadRentalTemplate($viewName, $viewData = array()) {
		include 'views/template_rent.php';
	}
	public function loadTonerTemplate($viewName, $viewData = array()) {
		include 'views/template_toner.php';
	}


	public function loadInvTemplate($viewName, $viewData = array()) {
		include 'views/template_inv.php';
	}

	public function loadRepTemplate($viewName, $viewData = array()) {
		include 'views/template_rep.php';
	}
	public function loadExtTemplate($viewName, $viewData = array()) {
		include 'views/template_ext.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadLibrary($lib){
		if(file_exists('library/'.$lib.'.php')) {
			include('library/'.$lib.'.php');
		}
	}

}