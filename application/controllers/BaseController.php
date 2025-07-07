<?php
/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Max-Age: 1728000");

header("Access-Control-Allow-Headers: Content-Type, Connection, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");
header("Connection: close");
class BaseController extends CI_Controller {
    public $SSS;
	
    function __construct(){
		/*header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, x_requested_with");

		if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
			die();
		}*/
        parent::__construct();
		$this->SSS=new SesionMagica();	
    }
    
	public function loadView($pagina,$vista,$data=[]){
		//$data['pagina']=$pagina;
		//$data['usuario']=$this->SS->UsuarioLogueado;
		//$data['rol']=$this->SS->UsuarioRol;
		
		$this->load->view('templates/header', $data);
		//$this->load->view($vista, $data);
		//$this->load->view('templates/footer', $data);
	} 
	
	function val_vista($val_admin=false) {
		
		if(Usr::ok()){
			if($val_admin){
			    if( Usr::sa() )
				    return true;
			    else{
					$this->load->view('inicio/login_redirect');
					return false;
				}
		    }	
			return true;
		}else{
			$this->load->view('inicio/login_redirect');
			return false;
		}
	}
	
	function val_vista_simple() { 
		if( Usr::ok() ) {
			return true;
		} else { 
			$this->load->view('inicio/login');
			return false;
		} 
	}
	
	function val_ajax($val_usuario=true,$val_admin=false){
		$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
		//return print_r($_SERVER);
		if ($ajax){
			if($val_usuario)
				if(Usr::ok()) {
					if($val_admin)
			    		if(Usr::sa())
						    return true;
						else {		
							$this->json(false,'Operacion no permitida.');
							return false;
						}
					return true;
				}else{
					
				}
			return true;
		}else{
			$this->json(false,'Operación no permitida.');
			return false;
		}
	}
	
	public function json($ok,$msg=''){
		echo json_encode( ['ok' => $ok, 'msg' => $msg ] );
	}
	
	
}
