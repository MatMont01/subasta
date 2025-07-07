<?php
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: *');
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
class Inicio extends BaseController {

	function __construct() {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
    }
	
	public function usuariok(){
		$this->json(Usr::ok());
	}
		
	public function login(){
		$this->load->view('inicio/login');		
	}

    public function index(){ 

		if(Usr::ok()){
			//$this->load->view('admin/index',$data);
			//$this->view_items();
			redirect('Inicio/view_items', 'refresh');
		}else{

			$this->load->view('inicio/login');
		}
	}

	public function view_items(){ if(!$this->val_vista())return;
		$data = [];
		$data['table']  = $this->consumo_model->list_items('SUBASTA');
		$data['pujas']  = $this->consumo_model->list_pujas();
		$this->load->view('admin/view_items',$data);
	}

	public function view_items_buys(){ if(!$this->val_vista())return;
		$data = [];
		$data['table']  = $this->consumo_model->list_items('COMPRA');
		//$data['pujas']  = $this->consumo_model->list_pujas();
		$this->load->view('admin/view_items_buys',$data);
	}

	public function list_items(){ if(!$this->val_vista())return;
		$data=[];
		$data['table']  = $this->consumo_model->list_items('SUBASTA');
		$this->load->view('admin/list_items',$data);
	}

	public function list_items_compras(){ if(!$this->val_vista())return;
		$data=[];
		$data['table']  = $this->consumo_model->list_items('COMPRA');
		$this->load->view('admin/list_items',$data);
	}

	public function list_items_award(){ if(!$this->val_vista())return;
		$data=[];
		$data['table']  = $this->consumo_model->list_items_award('SUBASTA');
		$this->load->view('admin/list_items_award',$data);
	}

	public function list_items_users(){ if(!$this->val_vista())return;
		$data=[];
		$data['table']  = $this->consumo_model->list_items_users();
		$this->load->view('admin/list_items_users',$data);
	}

	public function load_mayor(){  if(!$this->val_vista())return;
		$id=$this->input->get("id") ;
		$arr=$this->consumo_model->load_mayor($id) ;
		echo json_encode($arr) ;
	}

	public function save_amount(){  if(!$this->val_vista())return;
		$id_inventario=$this->input->post("id_inventario") ;
		$monto=$this->input->post("monto") ;
		$arr=$this->consumo_model->save_puja($id_inventario, $monto) ;
		echo json_encode($arr) ;
	}

	public function save_buy(){  if(!$this->val_vista())return;
		$id_inventario=$this->input->post("id_inventario") ;
		$monto=$this->input->post("monto") ;
		$arr=$this->consumo_model->save_buy($id_inventario, $monto) ;
		echo json_encode($arr) ;
	}

	public function update_info(){  if(!$this->val_vista())return;
		$arr=$this->consumo_model->load_pujas() ;
		echo json_encode($arr) ;
	}

	public function load_items(){ if(!$this->val_vista())return;
		$data['item'] = $this->input->get("item");
		$data['images'] = $this->consumo_model->list_images($data['item']); //array(1=>1);
		if($this->input->get("adjunto")){
			$nro_img = $this->input->get("nro_img");
			$url_img = 'item_'.$data['item'].'/'.$this->input->get("adjunto");
			array_push($data['images'],array('nro_image'=>$nro_img,'url_image'=>$url_img));
		}
		//$data['table']  = $this->consumo_model->list_items();
		//$data['pujas']  = $this->consumo_model->list_pujas();
		//echo print_r($data['images']);
		$this->load->view('admin/slider_items',$data);
	}

	public function save_images(){  if(!$this->val_vista())return;
		$item = $this->input->get("item");
		$nro_img = $this->input->get("nro_img");
		$adjunto = $this->input->get("adjunto");
		$arr = $this->consumo_model->save_image($item, $nro_img, $adjunto);
		echo json_encode($nro_img);
	}

	public function delete_images(){  if(!$this->val_vista())return;
		$item = $this->input->get("item");
		$nro_img = $this->input->get("nro_img");
		$adjunto = $this->input->get("adjunto");
		$arr = $this->consumo_model->delete_image($item, $nro_img, $adjunto);
		echo json_encode($nro_img);
	}
	
	public function consumodet(){  if(!$this->val_vista())return;
	
	
		$cta=$this->input->get('cta');

		if($cta=='' or $cta=='0'){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['ar']  = $this->consumo_model->addon($cta);
		$data['ar2'] = $this->consumo_model->oferta_migracion($cta);
		$data['ar3'] = $this->consumo_model->base_migracion($cta);
		$data['map'] = $this->consumo_model->mapa($cta);
		$data['r']   = $this->consumo_model->base_migracion($cta);
		//$data['estado']=$this->consumo_model->estado($cta);
		$this->load->view('consumo/consumodet',$data);
		
		$this->usuario_model->ping('Informacion Cliente',$cta);
	}
	
	public function migracion(){ if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['r']=$this->consumo_model->oferta_migracion($cta);
		$this->load->view('consumo/migracion',$data);
		
		$this->usuario_model->ping('Productos a recomendar',$cta);
	}
	public function addon(){ if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['r']=$this->consumo_model->addon($cta);
		$data['r2']=$this->consumo_model->oferta_migracion($cta);
		$data['r3']=$this->consumo_model->base_migracion($cta);
		$data['map']=$this->consumo_model->mapa($cta);
		$this->load->view('consumo/addon',$data);
		
		$this->usuario_model->ping('Productos a recomendar',$cta);
	}
	public function cobertura(){ if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['map']=$this->consumo_model->mapa($cta);
		$this->load->view('consumo/cobertura',$data);
		
		$this->usuario_model->ping('Ver cobertura',$cta);
	}
	
	public function lineas(){ if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['r']=[]; //$this->consumo_model->lineas($cta);
		$this->load->view('consumo/lineas',$data);
		
		$this->usuario_model->ping('Lineas del cliente',$cta);
	}
	public function ofertab2b(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2b();
		$this->load->view('consumo/ofertab2b',$data);
		
		$this->usuario_model->ping('Oferta B2B Movil Comodato','');
	}
	public function ofertab2b_antiguo(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2b();
		$this->load->view('consumo/ofertab2b_antiguo',$data);
		
		$this->usuario_model->ping('Oferta B2B Movil Clientes Antiguos','');
	}
	public function ofertab2bfijo(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2bfijo();
		$this->load->view('consumo/ofertab2bfijo',$data);
		
		$this->usuario_model->ping('Oferta B2B Fijo','');
	}
	public function ofertab2bftth(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2bfijo();
		$this->load->view('consumo/ofertab2bftth',$data);
		
		$this->usuario_model->ping('Oferta B2B FTTH','');
	}
	public function convergente(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2bfijo();
		$this->load->view('consumo/convergente',$data);
		
		$this->usuario_model->ping('Bolsa Convergente','');
	}
	public function convergente2(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2bfijo();
		$this->load->view('consumo/convergente2',$data);
		
	
	}
	public function soluciones_avanzadas(){ if(!$this->val_vista())return;
		//$cta=$this->input->get('cta');
		$data=[];
		//$data['r']=$this->consumo_model->ofertab2bfijo();
		$this->load->view('consumo/soluciones_avanzadas',$data);
		
		$this->usuario_model->ping('Soluciones Avanzadas','');
	}
	
	public function titularidad(){ if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$data=[];
		$data['NOMBRE_CLIENTE']=$this->consumo_model->nombre_cliente($cta);
		$data['r']=$this->consumo_model->titulares_base($data['NOMBRE_CLIENTE']);
		 
		$this->load->view('consumo/titularidad',$data);
		
		$this->usuario_model->ping('Registrar titularidad',$cta);
	}
	
	public function acRegistrarTitularidad(){
		try {
			$NOMBRE_CLIENTE		=utf8_decode($this->input->post('NOMBRE_CLIENTE'));
			$NRO_CUENTA_TITULAR	=utf8_decode($this->input->post('NRO_CUENTA_TITULAR'));
			$NOMBRE_TITULAR		=utf8_decode($this->input->post('NOMBRE_TITULAR'));
			$EMAIL_TITULAR		=utf8_decode($this->input->post('EMAIL_TITULAR'));
			
			$COD_CLIENTE_NOMBRE		=utf8_decode($this->input->post('COD_CLIENTE_NOMBRE'));
			$NRO_CUENTA		=utf8_decode($this->input->post('NRO_CUENTA'));
			
			$msg = $this->consumo_model->registar_titularidad($NOMBRE_CLIENTE,$NRO_CUENTA_TITULAR,$NOMBRE_TITULAR,$EMAIL_TITULAR,$COD_CLIENTE_NOMBRE,$NRO_CUENTA);
			
			if ($msg != '') {
				$this->json(false,$msg);
			} else {
				$this->usuario_model->ping('Registro titularidad',$NRO_CUENTA_TITULAR);
				$this->json(true);
			}
		}catch(Exception $e) {
			$this->json(false , $e->getMessage() );
		}
	}
	
	function listado_cuentas() { if(!$this->val_vista())return;
		$term=$this->input->get("term") ;
		$arr=$this->consumo_model->listado_cuentas($term) ;
		echo json_encode($arr) ;
	}
	function listado_cuentas_2() { if(!$this->val_vista())return;
		$term=$this->input->get("term");
		$arr=$this->consumo_model->listado_cuentas_2($term) ;
		echo json_encode($arr) ;
	}
	function listado_cuentas_3() { if(!$this->val_vista())return;
		$term=$this->input->get("term");
		$arr=$this->consumo_model->listado_cuentas_3($term) ;
		echo json_encode($arr) ;
	}
	
	
	function ver_datos(){		
		$cta=$this->input->get('cta');
		
		$this->usuario_model->ping('Descarga Lineas - Excel',$cta);
		
		$arr=$this->consumo_model->lineas($cta);
		$arr2=$this->consumo_model->base_migracion($cta);
		
			
			
		
		
		
		$e=new CExcel();
		$e->nuevo($arr2['NOMBRE_CLIENTE'].'.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[$f]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode(  $cols[$c]));
				}
			}
			for($c=0;$c<count($cols);$c++){
				$valor=$arr[$f][$cols[$c]];
				if(gettype($valor)=='object' ){

				}else{
					$valor=utf8_encode($valor);
				}
				$e->scelda($f+2,$c+1,$valor);
			}
		}
		
		$e->setAncho(3,35);
		$e->setAncho(5,35);
		$e->setAncho(6,35);
		
		$e->descargar($arr2['NOMBRE_CLIENTE'].'_'. Fecha::Now()->formato2() .'.xls');
	}
	
	function vacio(){  if(!$this->val_vista())return;
		$this->load->view('consumo/vacio');
	}
	
	function tutorial(){  if(!$this->val_vista())return;
		$this->load->view('consumo/tutorial');
		$this->usuario_model->ping('Tutorial','');
	}
	
	/*function vista360(){  if(!$this->val_vista())return;
		$cta=$this->input->get('cta');
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		$nombre=$this->consumo_model->nombre_cliente_noutf($cta);
		
		$data=[];
		$data['arr']=$this->consumo_model->vista360($nombre);
		$data['arr2']=$this->consumo_model->vista360_totales($nombre);
		
		$data['arr_det']=$this->consumo_model->vista360_detalle($nombre);
		$data['r']=$this->consumo_model->base_migracion($cta);
		
		$data['arr_cue']=$this->consumo_model->vista360_cuentas($nombre);
		//$data['cue_cant']=$this->consumo_model->vista360_cuentas_total($nombre);
	
		
		$data['CANT_CUENTAS_EN_MO_MOVIL']		=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN MO MOVIL');
		$data['CANT_CUENTAS_EN_PROPIO']			=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN PROPIO');
		$data['CANT_CUENTAS_EN_SR']				=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN SR');
		$data['CANT_CUENTAS_SIN_CHIP_LTE']		=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS SIN CHIP LTE');
		$data['CANT_CUENTAS_EN_TP']				=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN TP');
		$data['CANT_CUENTAS_EN_COBERTURA_HFC']	=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN COBERTURA HFC');
		$data['CANT_CUENTAS_EN_PA']				=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN PA');
		$data['CANT_CUENTAS_EN_MO_FIJO']		=$this->consumo_model->vista360_cuentas_tipo($nombre,'CUENTAS EN MO FIJO');
			
		$data['TOT_CUENTAS_EN_MO_MOVIL']		=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN MO MOVIL');
		$data['TOT_CUENTAS_EN_PROPIO']			=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN PROPIO');
		$data['TOT_CUENTAS_EN_SR']				=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN SR');
		$data['TOT_CUENTAS_SIN_CHIP_LTE']		=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS SIN CHIP LTE');
		$data['TOT_CUENTAS_EN_TP']				=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN TP');
		$data['TOT_CUENTAS_EN_COBERTURA_HFC']	=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN COBERTURA HFC');
		$data['TOT_CUENTAS_EN_PA']				=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN PA');
		$data['TOT_CUENTAS_EN_MO_FIJO']			=$this->consumo_model->vista360_cuentas_total($nombre,'CUENTAS EN MO FIJO');
		
		$data['arr_CUENTAS_EN_MO_MOVIL']		=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN MO MOVIL');
		$data['arr_CUENTAS_EN_PROPIO']			=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN PROPIO');
		$data['arr_CUENTAS_EN_SR']				=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN SR');
		$data['arr_CUENTAS_SIN_CHIP_LTE']		=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS SIN CHIP LTE');
		$data['arr_CUENTAS_EN_TP']				=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN TP');
		$data['arr_CUENTAS_EN_COBERTURA_HFC']	=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN COBERTURA HFC');
		$data['arr_CUENTAS_EN_PA']				=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN PA');
		$data['arr_CUENTAS_EN_MO_FIJO']			=$this->consumo_model->vista360_cuenta_detalle($nombre,'CUENTAS EN MO FIJO');
		
		$data['deuda_fijo']		= $this->consumo_model->vista360_deuda_fijo($nombre);
		$data['deuda_movil']	= $this->consumo_model->vista360_deuda_movil($nombre);

		$data['arr_bolsa']		= $this->consumo_model->vista360_bolsa_movil($nombre);	
		
		$data['subsidio']		= $this->consumo_model->vista_subsidio($nombre);

		$data['cliente']=$nombre;
		
		$this->load->view('consumo/vista360',$data);
		$this->usuario_model->ping('Vista 360',$cta);
	}*/
	
	function vista360(){  if(!$this->val_vista())return;
		$cta=$this->input->get('cta_uni');
		
		if($cta==''){ $this->load->view('consumo/vacio'); return; }
		
		//$nombre=$this->consumo_model->nombre_cliente_noutf($cta);
		$nombre=$cta;
		$data=[];
		
		$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);
		$sw = false;
		if(Usr::is_developer())
			//$sw = true;
			
if($sw) $this->benchmark->mark('f1');				
		$data['SCORE']=$this->consumo_model->vista360_scoring($nombre); //0.0983
	
		$data['RIESGO']='';
		
		if($data['SCORE']=='EXCELENTE') 	$data['RIESGO']='MÍNIMO';
		if($data['SCORE']=='REGULAR ALTO') 	$data['RIESGO']='BAJO';
		if($data['SCORE']=='BUENO') 		$data['RIESGO']='BAJO';
		if($data['SCORE']=='MUY BUENO') 	$data['RIESGO']='BAJO';
		if($data['SCORE']=='MUY MALO') 		$data['RIESGO']='MUY ALTO';
		if($data['SCORE']=='MUY MALO') 		$data['RIESGO']='MUY ALTO';
		if($data['SCORE']=='MUY MALO') 		$data['RIESGO']='MUY ALTO';
		if($data['SCORE']=='MUY MALO') 		$data['RIESGO']='MUY ALTO';
		if($data['SCORE']=='REGULAR BAJO') 	$data['RIESGO']='MEDIO';
		if($data['SCORE']=='REGULAR BAJO') 	$data['RIESGO']='MEDIO';
		if($data['SCORE']=='CLIENTE NUEVO') $data['RIESGO']='NUEVO';
if($sw) $this->benchmark->mark('f2');
		$data['arr_uni']=$this->consumo_model->vista360_uni_det($nombre); //0.2461
if($sw) $this->benchmark->mark('f3');		
		$data['arr']=$this->consumo_model->vista360_uni($nombre); //0.0007
if($sw) $this->benchmark->mark('f4');		
		$data['arr2']=$this->consumo_model->vista360_totales_uni($nombre); //0.0010
if($sw) $this->benchmark->mark('f5');
		$data['arr_det']=$this->consumo_model->vista360_detalle_uni($nombre); //0.0399	
if($sw) $this->benchmark->mark('f6');		
		$data['r']=$this->consumo_model->base_migracion_uni($nombre); //0.7354
if($sw) $this->benchmark->mark('f7');		
		$data['ejecutivo']=$this->consumo_model->telf_eje($data['r']['EJECUTIVO_CORPORATE']); //0.6122
		//$data['ejecutivo']=$this->consumo_model->telf_cod_eje($nombre);
		$data['telf_eje']="";
		if($data['r']['EJECUTIVO_CORPORATE'] == 'TELEVENTAS')
			$data['telf_eje']="800170050";
		$data['cod_eje']="";
		$data['nombre_eje']="";
		//echo print_r($data['ejecutivo']);
		//if(isset($data['ejecutivo']) && count($data['ejecutivo'])>0){
		if($data['ejecutivo'] != ""){	
			$data['telf_eje']=$data['ejecutivo']["LINEA"];
			$data['cod_eje']=$data['ejecutivo']["EHUMANO"];
			$data['nombre_eje']=$data['ejecutivo']["EJECUTIVO"];
		}
if($sw) $this->benchmark->mark('f8');		
		$data['file']=$this->ondemand_model->get_cuenta_unificada($nombre); //0.0005		
if($sw) $this->benchmark->mark('f9');		
		$data['arr_cue']=$this->consumo_model->vista360_cuentas($nombre); //2.1392
		//$data['cue_cant']=$this->consumo_model->vista360_cuentas_total($nombre);
if($sw) $this->benchmark->mark('f10');
		$array_tipo = $this->consumo_model->vista360_cuentas_tipo_uni_todos($nombre);
		$data['CANT_CUENTAS_EN_MO_MOVIL'] 		= $array_tipo['CANT_CUENTAS_EN_MO_MOVIL']; //		=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN MO MOVIL'); //0.5191
		$data['CANT_CUENTAS_EN_PROPIO']			= $array_tipo['CANT_CUENTAS_EN_PROPIO']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN PROPIO'); //0.2338		
		$data['CANT_CUENTAS_EN_SR']				= $array_tipo['CANT_CUENTAS_EN_SR']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN SR');
		$data['CANT_CUENTAS_SIN_CHIP_LTE']		= $array_tipo['CANT_CUENTAS_SIN_CHIP_LTE']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS SIN CHIP LTE');
		$data['CANT_CUENTAS_EN_TP']				= $array_tipo['CANT_CUENTAS_EN_TP']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN TP');
		$data['CANT_CUENTAS_EN_COBERTURA_HFC']	= $array_tipo['CANT_CUENTAS_EN_COBERTURA_HFC']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN COBERTURA HFC');
		$data['CANT_CUENTAS_EN_PA']				= $array_tipo['CANT_CUENTAS_EN_PA']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN PA');
		$data['CANT_CUENTAS_EN_MO_FIJO']		= $array_tipo['CANT_CUENTAS_EN_MO_FIJO']; //	=$this->consumo_model->vista360_cuentas_tipo_uni($nombre,'CUENTAS EN MO FIJO');
if($sw) $this->benchmark->mark('f11');		
		$array_total = $this->consumo_model->vista360_cuentas_total_uni_todos($nombre);		
		$data['TOT_CUENTAS_EN_MO_MOVIL']		= $array_total['TOT_CUENTAS_EN_MO_MOVIL']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN MO MOVIL');
		$data['TOT_CUENTAS_EN_PROPIO']			= $array_total['TOT_CUENTAS_EN_PROPIO']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN PROPIO');
		$data['TOT_CUENTAS_EN_SR']				= $array_total['TOT_CUENTAS_EN_SR']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN SR');
		$data['TOT_CUENTAS_SIN_CHIP_LTE']		= $array_total['TOT_CUENTAS_SIN_CHIP_LTE']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS SIN CHIP LTE');
		$data['TOT_CUENTAS_EN_TP']				= $array_total['TOT_CUENTAS_EN_TP']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN TP');
		$data['TOT_CUENTAS_EN_COBERTURA_HFC']	= $array_total['TOT_CUENTAS_EN_COBERTURA_HFC']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN COBERTURA HFC');
		$data['TOT_CUENTAS_EN_PA']				= $array_total['TOT_CUENTAS_EN_PA']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN PA');
		$data['TOT_CUENTAS_EN_MO_FIJO']			= $array_total['TOT_CUENTAS_EN_MO_FIJO']; // =$this->consumo_model->vista360_cuentas_total_uni($nombre,'CUENTAS EN MO FIJO');
if($sw) $this->benchmark->mark('f12');		
		//$data['array_nros'] = $this->consumo_model->vista360_cuenta_detalle_uni_todos($nombre);
		//$data['array'] = array_column($array_nros, 'TIPO','NRO_CUENTA');
		//echo print_r($data['array']); exit();
		$data['arr_CUENTAS_EN_MO_MOVIL']		=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN MO MOVIL');
		$data['arr_CUENTAS_EN_PROPIO']			=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN PROPIO');
		$data['arr_CUENTAS_EN_SR']				=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN SR');
		$data['arr_CUENTAS_SIN_CHIP_LTE']		=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS SIN CHIP LTE');
		$data['arr_CUENTAS_EN_TP']				=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN TP');
		$data['arr_CUENTAS_EN_COBERTURA_HFC']	=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN COBERTURA HFC');
		$data['arr_CUENTAS_EN_PA']				=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN PA');
		$data['arr_CUENTAS_EN_MO_FIJO']			=$this->consumo_model->vista360_cuenta_detalle_uni($nombre,'CUENTAS EN MO FIJO');
//8.3482		
if($sw) $this->benchmark->mark('f13'); 	 		
		$data['deuda_fijo']		= $this->consumo_model->vista360_deuda_fijo_uni($nombre); //0.0463
if($sw) $this->benchmark->mark('f14');		
		$data['deuda_movil']	= $this->consumo_model->vista360_deuda_movil_uni($nombre); //0.2592
if($sw) $this->benchmark->mark('f15');		
		$data['deuda_hfc']		= $this->consumo_model->vista360_deuda_hfc_uni($nombre); //0.0755

		$data['arr_bolsa']		= [];//$this->consumo_model->vista360_bolsa_movil($nombre);	
if($sw) $this->benchmark->mark('f16');		
		$data['subsidio']		= $this->consumo_model->vista_subsidio_uni($nombre); //0.0007

		$data['cliente']=$nombre;
if($sw) $this->benchmark->mark('f17');		
		$data['saldos']	= $this->consumo_model->vista360_saldos($nombre);
if($sw) $this->benchmark->mark('f18');

if($sw){ 
	echo '<div style="background: lightblue; display: block; float: left; position: absolute; z-index: 1; text-align: right; bottom: 0; font-size: 12px;">';
	echo 'vista360_scoring='.$this->benchmark->elapsed_time('f1', 'f2').'<br>';
	echo 'vista360_uni_det='.$this->benchmark->elapsed_time('f2', 'f3').'<br>';
	echo 'vista360_uni='.$this->benchmark->elapsed_time('f3', 'f4').'<br>';
	echo 'vista360_totales_uni='.$this->benchmark->elapsed_time('f4', 'f5').'<br>';
	echo 'vista360_detalle_uni='.$this->benchmark->elapsed_time('f5', 'f6').'<br>';
	echo 'base_migracion_uni='.$this->benchmark->elapsed_time('f6', 'f7').'<br>';
	echo 'telf_eje='.$this->benchmark->elapsed_time('f7', 'f8').'<br>';
	echo 'get_cuenta_unificada='.$this->benchmark->elapsed_time('f8', 'f9').'<br>';
	echo 'vista360_cuentas='.$this->benchmark->elapsed_time('f9', 'f10').'<br>';
	echo 'vista360_cuentas_tipo_uni_todos='.$this->benchmark->elapsed_time('f10', 'f11').'<br>';
	echo 'vista360_cuentas_total_uni_todos='.$this->benchmark->elapsed_time('f11', 'f12').'<br>';
	echo 'vista360_cuenta_detalle_uni='.$this->benchmark->elapsed_time('f12', 'f13').'<br>';
	echo 'vista360_deuda_fijo_uni='.$this->benchmark->elapsed_time('f13', 'f14').'<br>';
	echo 'vista360_deuda_movil_uni='.$this->benchmark->elapsed_time('f14', 'f15').'<br>';
	echo 'vista360_deuda_hfc_uni='.$this->benchmark->elapsed_time('f15', 'f16').'<br>';
	echo 'vista_subsidio_uni='.$this->benchmark->elapsed_time('f16', 'f17').'<br>';
	echo 'vista360_saldos='.$this->benchmark->elapsed_time('f17', 'f18').'<br>';
	echo 'total='.$this->benchmark->elapsed_time('f1', 'f18').'<br>';
	echo '</div>';
}
		$this->load->view('consumo/vista360',$data);
		//$this->usuario_model->ping('Vista 360',$cta);
	}
	
	
	function descargar_fijo(){
		
		$cta=$this->input->get('cta');
		
		//$arr2=$this->consumo_model->base_migracion_uni($cta);
		//$nombre=$arr2['NOMBRE_CLIENTE'];
		$nombre=$cta;//$this->consumo_model->nombre_cliente_noutf($cta);
		
		
				
		$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);
		
		
		
		$this->usuario_model->ping('Descarga Deuda Fijo - '.$nombre,0);
		
		$arr=$this->consumo_model->vista360_deuda_fijo_detalle($nombre);

		$e=new CExcel();
		$e->nuevo($nombre.'.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[$f]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode(  $cols[$c]));
				}
			}
			for($c=0;$c<count($cols);$c++){
				$valor=$arr[$f][$cols[$c]];
				if(gettype($valor)=='object' ){

				}else{
					$valor=utf8_encode($valor);
				}
				$e->scelda($f+2,$c+1,$valor);
			}
		}
		
		//$e->setAncho(3,35);
		//$e->setAncho(5,35);
		//$e->setAncho(6,35);
		
		$e->descargar($nombre.'_deudaBBD.xls');
	}
	
	
	function descargar_movil(){
		//$this->usuario_model->ping('Descarga Deuda Movil','');
		$cta=$this->input->get('cta');
		
		//$arr2=$this->consumo_model->base_migracion_uni($cta);
	
		//$nombre=$arr2['NOMBRE_CLIENTE'];
		
		$nombre=$cta;//$this->consumo_model->nombre_cliente_noutf($cta);
		
			$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);
		
		
		
		//$partes=explode(' ',$cta);				  
		$this->usuario_model->ping('Descarga Deuda Movil - '.$nombre,0);
	
		$arr=$this->consumo_model->vista360_deuda_movil_detalle($nombre);

		//$arr=["asd"=>0];
		
		$e=new CExcel();
		$e->nuevo($nombre.'.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[$f]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode(  $cols[$c]));
				}
			}
			for($c=0;$c<count($cols);$c++){
				$valor=$arr[$f][$cols[$c]];
				if(gettype($valor)=='object' ){

				}else{
					$valor=utf8_encode($valor);
				}
				$e->scelda($f+2,$c+1,$valor);
			}
		}
		
		//$e->setAncho(3,35);
		//$e->setAncho(5,35);
		//$e->setAncho(6,35);
		
		$e->descargar($nombre.'_deudaBCCS.xls');
	}
	
	function descargar_saldos(){
		//$this->usuario_model->ping('Descarga Deuda Movil','');
		$cta=$this->input->get('cta');
		
		//$arr2=$this->consumo_model->base_migracion_uni($cta);
	
		//$nombre=$arr2['NOMBRE_CLIENTE'];
		
		$nombre=$cta;//$this->consumo_model->nombre_cliente_noutf($cta);
		
			$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);
		
		
		
		//$partes=explode(' ',$cta);				  
		$this->usuario_model->ping('Descarga Saldos - '.$nombre,0);
	
		$arr=$this->consumo_model->vista360_saldos_detalle($nombre);

		//$arr=["asd"=>0];
		
		$e=new CExcel();
		$e->nuevo($nombre.'.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[$f]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode(  $cols[$c]));
				}
			}
			for($c=0;$c<count($cols);$c++){
				$valor=$arr[$f][$cols[$c]];
				if(gettype($valor)=='object' ){

				}else{
					$valor=utf8_encode($valor);
				}
				$e->scelda($f+2,$c+1,$valor);
			}
		}
		
		//$e->setAncho(3,35);
		//$e->setAncho(5,35);
		//$e->setAncho(6,35);
		
		$e->descargar($nombre.'_Saldos.xls');
	}
	
	
	
	
	function descargar_hfc(){
		//$this->usuario_model->ping('Descarga Deuda Movil','');
		$cta=$this->input->get('cta');
		
		//$arr2=$this->consumo_model->base_migracion_uni($cta);
	
		//$nombre=$arr2['NOMBRE_CLIENTE'];
		
		$nombre=$cta;//$this->consumo_model->nombre_cliente_noutf($cta);
		
			$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);
		
		
		
		//$partes=explode(' ',$cta);				  
		$this->usuario_model->ping('Descarga Deuda HFC - '.$nombre,0);
	
		$arr=$this->consumo_model->vista360_deuda_hfc_detalle($nombre);

		$e=new CExcel();
		$e->nuevo($nombre.'.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[$f]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode(  $cols[$c]));
				}
			}
			for($c=0;$c<count($cols);$c++){
				$valor=$arr[$f][$cols[$c]];
				if(gettype($valor)=='object' ){

				}else{
					$valor=utf8_encode($valor);
				}
				$e->scelda($f+2,$c+1,$valor);
			}
		}
		
		//$e->setAncho(3,35);
		//$e->setAncho(5,35);
		//$e->setAncho(6,35);
		
		$e->descargar($nombre.'_deudaHFC.xls');
	}
	
	
	
	public function descargando_calculadora(){ 
		$this->usuario_model->ping('Descarga Calculadora Mobile','');
	}
	
	public function descargando_analisis(){ 
		$this->usuario_model->ping('Descarga Analisis Rentabilidad','');
	}
	
	public function descargando_m2m(){
		$this->usuario_model->ping('Descarga Solicitud Mim Cards','');
	}
	
	function tableau1(){  if(!$this->val_vista())return;
		$cta=0;
		$data=[];
		
		$this->load->view('consumo/tableau1',$data);
		$this->usuario_model->ping('Tableau1',$cta);
	}
	
	public function update_search(){ if(!$this->val_vista()) return;
		
		$cant=$this->consumo_model->update_search();
		$this->usuario_model->ping('Update Search',$cant);
		echo json_encode($cant) ;
	}

	public function cant_search(){ if(!$this->val_vista()) return;
		
		$cant=$this->consumo_model->cant_search();
		$this->usuario_model->ping('Cant Search',$cant);
		echo json_encode($cant) ;
	}
	
	public function prueba(){ if(!$this->val_vista()) return;
		$data=[];
		$this->load->view('consumo/prueba',$data);
	}

	public function prueba_route(){ if(!$this->val_vista()) return;
		$data=[];
		echo 'entro por route';
	}

	public function historico(){ if(!$this->val_vista()) return;
		$cta=$this->input->get('cta_uni');
		
		//$arr2=$this->consumo_model->base_migracion_uni($cta);
	
		//$nombre=$arr2['NOMBRE_CLIENTE'];
		
		$nombre=$cta;//$this->consumo_model->nombre_cliente_noutf($cta);
		
		$nombre=str_replace(';','#',$nombre);
		$nombre=str_replace(':','&',$nombre);
		$nombre=str_replace('¿','Á',$nombre);
		$nombre=str_replace('?','É',$nombre);
		$nombre=str_replace('[','Í',$nombre);
		$nombre=str_replace(']','Ó',$nombre);
		$nombre=str_replace('{','Ú',$nombre);
		$nombre=str_replace('>','+',$nombre);
		$nombre=str_replace("''",'"',$nombre);
		
		$nombre=utf8_decode($nombre);

		$data['arr']=$this->consumo_model->view_history($nombre);
		$this->load->view('consumo/historico',$data);
	}
	
	
}

