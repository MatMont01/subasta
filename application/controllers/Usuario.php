<?php
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: *');
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
class Usuario extends BaseController {
    
    function __construct(){
        parent::__construct();
		//header('Access-Control-Allow-Origin: *');
    }
	
	function acLogin(){
		if (!$this->val_ajax(false)) return;
	 
		$usr = $this->input->post('username');
		$pwd = $this->input->post('password');
		
		$res=$this->usuario_model->Login($usr,$pwd);
		
		//$res = "Sistema en mantenimiento. Por favor intentar mas tarde.";
		
		if ($res=='') {	
			$this->json(true);	
		}else{
			$this->json(false,$res);	
		}
	}
	
	function salir() {
		try {
			$this->usuario_model->ping('Fin Sesión','');
		}catch(Exception $e) {
			
		}
		
		
		Usr::limpiar();
		$this->json(true);
	}
	
	function all_ldap(){
		$res=$this->usuario_model->all_ldap();
		return $res;
	}
	
}
