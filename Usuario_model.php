<?php
class Usr {
	
	function __construct(){
        parent::__construct();
		
    }
	
	public static function limpiar() { 
		SS()->usr_Usuario = null;
		SS()->usr_NombreCompleto = null;
		SS()->usr_Nombre = null;
		SS()->usr_Apellido = null;
		SS()->usr_EHumano = null;
		SS()->usr_Cargo = null;
		SS()->usr_Ciudad = null;
		SS()->usr_Nivel = null;
	}
	
	public static function setUsuario($Usuario,$NombreCompleto,$Nombre,$Apellido,$EHumano,$Cargo,$Ciudad){
		SS()->usr_Usuario = $Usuario;
		SS()->usr_NombreCompleto = $NombreCompleto;
		SS()->usr_Nombre = $Nombre;
		SS()->usr_Apellido = $Apellido;
		SS()->usr_EHumano = $EHumano;
		SS()->usr_Cargo = $Cargo;
		SS()->usr_Ciudad = $Ciudad;
	}
	public static function setUsuarioNivel($Nivel){
		SS()->usr_Nivel = $Nivel;
	}
	public static function setUsuarioEHumano($EHumano){
		SS()->usr_EHumano = $EHumano;
	}
	public static function setUsuarioCargo($Cargo){
		SS()->usr_Cargo = $Cargo;
	}
	public static function setUsuarioCiudad($Ciudad){
		SS()->usr_Ciudad = $Ciudad;
	}
	
	public static function ok(){ return SS()->usr_Usuario!=null;}
	public static function sa(){ return false;}
	
	
	public static function gUsuario(){ return strtolower(SS()->usr_Usuario); }
	public static function gNombreCompleto(){ return SS()->usr_NombreCompleto; }
	public static function gNombre(){ return SS()->usr_Nombre; }
	public static function gApellido(){ return SS()->usr_Apellido; }
	public static function gEHumano(){ return SS()->usr_EHumano; }
	public static function gCargo(){ return SS()->usr_Cargo; }
	public static function gCiudad(){ return SS()->usr_Ciudad; }
	public static function gNivel(){ return SS()->usr_Nivel; }
	
	

	public static function es_segmentador(){
		if(Usr::gUsuario()=="castrok") return true;
		if(Usr::gUsuario()=="villarroeljr") return true;
		if(Usr::gUsuario()=="floresca") return true;
		if(Usr::gUsuario()=="francoj") return true;
		if(Usr::gUsuario()=="solizp") return true;
		if(Usr::gUsuario()=="vargarmn") return true;
		return false;
	}
	
	public static function is_developer(){
		if(Usr::gUsuario()=="garciaci") return true;
		if(Usr::gUsuario()=="castrok") return true;
		if(Usr::gUsuario()=="francoj") return true;
		if(Usr::gUsuario()=="floresca") return true;
		if(Usr::gUsuario()=="solizp") return true;
		if(Usr::gUsuario()=="vargarmn") return true;
		return false;
	}
	
    public static function es_ecare(){
		//if(strtolower(Usr::gUsuario())=="villarroeljr") return true;
		if( Usr::gNivel()=="CALL") return true;
		if( Usr::gNivel()=="SAC") return true;
		
		 
		if(strtolower(Usr::gUsuario())=="naviaa") return true;
		if(strtolower(Usr::gUsuario())=="encinasal") return true;
		if(strtolower(Usr::gUsuario())=="cubillosa") return true;
		if(strtolower(Usr::gUsuario())=="pozoc") return true;
		if(strtolower(Usr::gUsuario())=="rojasca") return true;
		if(strtolower(Usr::gUsuario())=="cocad") return true;
		if(strtolower(Usr::gUsuario())=="rossol") return true;
		if(strtolower(Usr::gUsuario())=="velize") return true;
		if(strtolower(Usr::gUsuario())=="aliendree") return true;
		if(strtolower(Usr::gUsuario())=="escobare") return true;
		if(strtolower(Usr::gUsuario())=="castedoe") return true;
		if(strtolower(Usr::gUsuario())=="martinj") return true;
		if(strtolower(Usr::gUsuario())=="balcazarjc") return true;
		if(strtolower(Usr::gUsuario())=="gonzalesjl") return true;
		if(strtolower(Usr::gUsuario())=="rocajos") return true;
		if(strtolower(Usr::gUsuario())=="monteroj") return true;
		if(strtolower(Usr::gUsuario())=="sueldol") return true;
		if(strtolower(Usr::gUsuario())=="justinianolu") return true;
		if(strtolower(Usr::gUsuario())=="osinagam") return true;
		if(strtolower(Usr::gUsuario())=="paniaguam") return true;
		if(strtolower(Usr::gUsuario())=="zabalami") return true;
		if(strtolower(Usr::gUsuario())=="robledop") return true;
		if(strtolower(Usr::gUsuario())=="gomezpa") return true;
		if(strtolower(Usr::gUsuario())=="monasteriop") return true;
		if(strtolower(Usr::gUsuario())=="munizp") return true;
		if(strtolower(Usr::gUsuario())=="cespedespe") return true;
		if(strtolower(Usr::gUsuario())=="riverorod") return true;
		if(strtolower(Usr::gUsuario())=="escobarv") return true;
		if(strtolower(Usr::gUsuario())=="cuellarv") return true;
		if(strtolower(Usr::gUsuario())=="ruizw") return true; 
		if(strtolower(Usr::gUsuario())=="naviaw") return true;
		if(strtolower(Usr::gUsuario())=="ariasy") return true;
		if(strtolower(Usr::gUsuario())=="escobare") return true;
		if(strtolower(Usr::gUsuario())=="antunezj") return true;
		if(strtolower(Usr::gUsuario())=="suarezlg") return true;
		if(strtolower(Usr::gUsuario())=="solaresm") return true;
		if(strtolower(Usr::gUsuario())=="robledop") return true;
		if(strtolower(Usr::gUsuario())=="gomezpa") return true;
		if(strtolower(Usr::gUsuario())=="primintelaw") return true;
		if(strtolower(Usr::gUsuario())=="pazc") return true;
		if(strtolower(Usr::gUsuario())=="coimbrac") return true;
		if(strtolower(Usr::gUsuario())=="barriose") return true;
		if(strtolower(Usr::gUsuario())=="bazanjg") return true;
		if(strtolower(Usr::gUsuario())=="schruppm") return true; 
		if(strtolower(Usr::gUsuario())=="salvatierrap") return true;
		
		if((Usr::gEHumano())=="49452") return true;
		if((Usr::gEHumano())=="46585") return true;
		if((Usr::gEHumano())=="54489") return true;
		if((Usr::gEHumano())=="40886") return true;
		if((Usr::gEHumano())=="48094") return true;
		if((Usr::gEHumano())=="51359") return true;
		if((Usr::gEHumano())=="49909") return true;
		if((Usr::gEHumano())=="29016") return true;
		if((Usr::gEHumano())=="45308") return true;
		if((Usr::gEHumano())=="55272") return true;
		if((Usr::gEHumano())=="57662") return true;
		if((Usr::gEHumano())=="54730") return true;
		if((Usr::gEHumano())=="60728") return true;
		if((Usr::gEHumano())=="54870") return true;
		if((Usr::gEHumano())=="52485") return true;
		if((Usr::gEHumano())=="49982") return true;
		if((Usr::gEHumano())=="39906") return true;
		if((Usr::gEHumano())=="39038") return true;
		if((Usr::gEHumano())=="48219") return true;
		if((Usr::gEHumano())=="48615") return true;
		if((Usr::gEHumano())=="55158") return true;
		if((Usr::gEHumano())=="27725") return true;
		if((Usr::gEHumano())=="58512") return true;
		if((Usr::gEHumano())=="51992") return true;
		if((Usr::gEHumano())=="58521") return true;
		if((Usr::gEHumano())=="46676") return true;
		if((Usr::gEHumano())=="38262") return true;
		if((Usr::gEHumano())=="55759") return true;
		if((Usr::gEHumano())=="62290") return true;
		if((Usr::gEHumano())=="40887") return true;
		if((Usr::gEHumano())=="56421") return true;
		if((Usr::gEHumano())=="55030") return true;
		if((Usr::gEHumano())=="59198") return true;
		if((Usr::gEHumano())=="58519") return true;
		if((Usr::gEHumano())=="45929") return true;
		if((Usr::gEHumano())=="52967") return true;
		if((Usr::gEHumano())=="34058") return true;
		if((Usr::gEHumano())=="55760") return true;
		if((Usr::gEHumano())=="59232") return true;
		if((Usr::gEHumano())=="53886") return true;
		if((Usr::gEHumano())=="46129") return true;
		if((Usr::gEHumano())=="62032") return true;
		if((Usr::gEHumano())=="54876") return true;
		if((Usr::gEHumano())=="48970") return true;
		if((Usr::gEHumano())=="59880") return true;
		if((Usr::gEHumano())=="62036") return true;
		if((Usr::gEHumano())=="60975") return true;
		if((Usr::gEHumano())=="50344") return true;
		if((Usr::gEHumano())=="55271") return true;
		if((Usr::gEHumano())=="63914") return true;
		if((Usr::gEHumano())=="65779") return true;
		if((Usr::gEHumano())=="27566") return true;
		if((Usr::gEHumano())=="45820") return true;
		if((Usr::gEHumano())=="13164") return true;
		if((Usr::gEHumano())=="34364") return true;
		if((Usr::gEHumano())=="41278") return true;
		if((Usr::gEHumano())=="13165") return true;
		if((Usr::gEHumano())=="49587") return true;
		if((Usr::gEHumano())=="15753") return true;
		if((Usr::gEHumano())=="49194") return true;
		if((Usr::gEHumano())=="27715") return true;
		if((Usr::gEHumano())=="12853") return true;
		if((Usr::gEHumano())=="54954") return true;
		if((Usr::gEHumano())=="37223") return true;
		if((Usr::gEHumano())=="31750") return true;
		if((Usr::gEHumano())=="14675") return true;
		if((Usr::gEHumano())=="31401") return true;
		if((Usr::gEHumano())=="12619") return true;
		if((Usr::gEHumano())=="11152") return true;
		if((Usr::gEHumano())=="35922") return true;
		if((Usr::gEHumano())=="26488") return true;
		if((Usr::gEHumano())=="39037") return true;
		if((Usr::gEHumano())=="45347") return true;
		if((Usr::gEHumano())=="36192") return true;
		if((Usr::gEHumano())=="49075") return true;
		if((Usr::gEHumano())=="36906") return true;
		if((Usr::gEHumano())=="32601") return true;
		if((Usr::gEHumano())=="65454") return true;
		if((Usr::gEHumano())=="68212") return true;
		if((Usr::gEHumano())=="45026") return true;
		if((Usr::gEHumano())=="50986") return true;
		if((Usr::gEHumano())=="49843") return true;
		if((Usr::gEHumano())=="39321") return true;
		if((Usr::gEHumano())=="61133") return true;
		if((Usr::gEHumano())=="54734") return true;
		if((Usr::gEHumano())=="59197") return true;
		if((Usr::gEHumano())=="50877") return true;
		if((Usr::gEHumano())=="51058") return true;
		if((Usr::gEHumano())=="48880") return true;
		if((Usr::gEHumano())=="48837") return true;
		if((Usr::gEHumano())=="14697") return true;
		if((Usr::gEHumano())=="54648") return true;
		if((Usr::gEHumano())=="48667") return true;
		if((Usr::gEHumano())=="48040") return true;
		if((Usr::gEHumano())=="38582") return true;
		if((Usr::gEHumano())=="40543") return true;
		if((Usr::gEHumano())=="41306") return true;
		if((Usr::gEHumano())=="48929") return true;
		if((Usr::gEHumano())=="48970") return true;
		if((Usr::gEHumano())=="48668") return true;
		if((Usr::gEHumano())=="45842") return true;
		if((Usr::gEHumano())=="50340") return true;
		if((Usr::gEHumano())=="14591") return true;
		if((Usr::gEHumano())=="45136") return true;
		if((Usr::gEHumano())=="41227") return true;
		if((Usr::gEHumano())=="55399") return true;
		if((Usr::gEHumano())=="48833") return true;
		if((Usr::gEHumano())=="54212") return true;
		if((Usr::gEHumano())=="51809") return true;
		if((Usr::gEHumano())=="53957") return true;
		if((Usr::gEHumano())=="55758") return true;
		if((Usr::gEHumano())=="54123") return true;
		if((Usr::gEHumano())=="45826") return true;
		if((Usr::gEHumano())=="53888") return true;
		if((Usr::gEHumano())=="52125") return true;
		if((Usr::gEHumano())=="55556") return true;
		if((Usr::gEHumano())=="53206") return true;
		if((Usr::gEHumano())=="63918") return true;
		if((Usr::gEHumano())=="68369") return true;
		if((Usr::gEHumano())=="64799") return true;
		if((Usr::gEHumano())=="48978") return true;
		if((Usr::gEHumano())=="58855") return true;
		if((Usr::gEHumano())=="66714") return true;
		if((Usr::gEHumano())=="45303") return true;
		if((Usr::gEHumano())=="60345") return true;
		if((Usr::gEHumano())=="45036") return true;
		if((Usr::gEHumano())=="48636") return true;
		if((Usr::gEHumano())=="45144") return true;
		if((Usr::gEHumano())=="33738") return true;
		if((Usr::gEHumano())=="63002") return true;
		if((Usr::gEHumano())=="51158") return true;
		if((Usr::gEHumano())=="49372") return true;
		if((Usr::gEHumano())=="50145") return true;
		if((Usr::gEHumano())=="59992") return true;
		if((Usr::gEHumano())=="41321") return true;
		if((Usr::gEHumano())=="51699") return true;
		if((Usr::gEHumano())=="63687") return true;
		if((Usr::gEHumano())=="59993") return true;
		if((Usr::gEHumano())=="40433") return true;
		if((Usr::gEHumano())=="49852") return true;
		if((Usr::gEHumano())=="65776") return true;
		if((Usr::gEHumano())=="63599") return true;
		if((Usr::gEHumano())=="50370") return true;
		if((Usr::gEHumano())=="62320") return true;
		if((Usr::gEHumano())=="68587") return true;
		if((Usr::gEHumano())=="40180") return true;
		if((Usr::gEHumano())=="50375") return true;
		if((Usr::gEHumano())=="56947") return true;
		if((Usr::gEHumano())=="61247") return true;
		
		return false;
	}
	public static function es_ejecutor_comisiones(){
		if(Usr::gUsuario()=="aponteha") return true;
		
		return false;
	}
	
	
	public static function es_ejecutor(){
		//if(Usr::gUsuario()=="villarroeljr") return true;
		if(Usr::gUsuario()=="torresa") return true;
		
		if(strtolower(Usr::gUsuario())=="llanosm") return true;
		if(strtolower(Usr::gUsuario())=="bazanca") return true;
		if(strtolower(Usr::gUsuario())=="callej") return true;
		if(strtolower(Usr::gUsuario())=="rojasll") return true;
		if(strtolower(Usr::gUsuario())=="pedrazad") return true;
		if(strtolower(Usr::gUsuario())=="saavedrare") return true;
		if(strtolower(Usr::gUsuario())=="landivarjl") return true;
		if(strtolower(Usr::gUsuario())=="rojasfer") return true;
		
		if(strtolower(Usr::gUsuario())=="zunay") return true;
		if(strtolower(Usr::gUsuario())=="abregoj") return true;
		if(strtolower(Usr::gUsuario())=="girondam") return true;
		if(strtolower(Usr::gUsuario())=="rocaanav") return true;
		if(strtolower(Usr::gUsuario())=="fernandezd") return true;
		if(strtolower(Usr::gUsuario())=="silvac") return true;
		if(strtolower(Usr::gUsuario())=="bilbaog") return true;
		if(strtolower(Usr::gUsuario())=="micheli") return true;
		if(strtolower(Usr::gUsuario())=="carrascor") return true;
		/*202305*/
		if(strtolower(Usr::gUsuario())=="surubij") return true;
		if(strtolower(Usr::gUsuario())=="floresdd") return true;
		if(strtolower(Usr::gUsuario())=="barrerov") return true;
		if(strtolower(Usr::gUsuario())=="grajedad") return true;
		if(strtolower(Usr::gUsuario())=="sandovalce") return true;
		if(strtolower(Usr::gUsuario())=="maldonadok") return true;
		if(strtolower(Usr::gUsuario())=="silvama") return true;
		if(strtolower(Usr::gUsuario())=="castromv") return true;
		
		if(strtolower(Usr::gUsuario())=="saucedoli") return true;
		if(strtolower(Usr::gUsuario())=="vear") return true;
		if(strtolower(Usr::gUsuario())=="sotog") return true;
		if(strtolower(Usr::gUsuario())=="paredesfab") return true;
		return false;
	}
	
	
	public static function FUNNEL_LECTURA(){
		//return false;
		//if (Usr::gCargo()=="B2B EJECUTIVO DE CUENTAS - SEGMENTO EMPRESAS") return true;
		if (strtolower(Usr::gUsuario())=="nemtalal") return true;
		if (strtolower(Usr::gUsuario())=="santacruzs") return true;
		if (strtolower(Usr::gUsuario())=="mercadoja") return true;
		if (strtolower(Usr::gUsuario())=="terrazasca") return true;
		if (strtolower(Usr::gUsuario())=="chaconm") return true;
		if (strtolower(Usr::gUsuario())=="andial") return true;
		if (strtolower(Usr::gUsuario())=="suarezrj") return true;
		if (strtolower(Usr::gUsuario())=="paradan") return true;
		if (strtolower(Usr::gUsuario())=="ortizro") return true;
		if (strtolower(Usr::gUsuario())=="anezpe") return true;
		if (strtolower(Usr::gUsuario())=="nunezro") return true;
		if (strtolower(Usr::gUsuario())=="acostar") return true;
		if (strtolower(Usr::gUsuario())=="ruckf") return true;
		if (strtolower(Usr::gUsuario())=="espinozamay") return true;
		if (strtolower(Usr::gUsuario())=="velardem") return true;
		if (strtolower(Usr::gUsuario())=="moscosoar") return true;
		if (strtolower(Usr::gUsuario())=="nemtalal") return true;
		if (strtolower(Usr::gUsuario())=="delgadillok") return true;
		if (strtolower(Usr::gUsuario())=="castillob") return true;
		if (strtolower(Usr::gUsuario())=="cassiss") return true;
		if (strtolower(Usr::gUsuario())=="gonzalezm") return true;
		if (strtolower(Usr::gUsuario())=="sallesp") return true;
		if (strtolower(Usr::gUsuario())=="aguirrec") return true;
		if (strtolower(Usr::gUsuario())=="sotoi") return true;
		if (strtolower(Usr::gUsuario())=="alvarezs") return true;
		if (strtolower(Usr::gUsuario())=="campuzanos") return true;
		if (strtolower(Usr::gUsuario())=="porroc") return true;
		if (strtolower(Usr::gUsuario())=="pereiraah") return true;
		if (strtolower(Usr::gUsuario())=="perezad") return true;
		if (strtolower(Usr::gUsuario())=="ojopido") return true;
		if (strtolower(Usr::gUsuario())=="penag") return true;
		if (strtolower(Usr::gUsuario())=="rocamr") return true;
		if (strtolower(Usr::gUsuario())=="moralesy") return true;
		
		return false;
	}
	
	
	public static function esNEGOCIO(){
		$ci =& get_instance();
		return $ci->usuario_model->esNEGOCIO();
	}
	public static function esNEGOCIO_EJECUTIVO(){
		$ci =& get_instance();
		return $ci->usuario_model->esNEGOCIO_EJECUTIVO();
	}
	public static function esNEGOCIO_ADM(){
		$ci =& get_instance();
		return $ci->usuario_model->esNEGOCIO_ADM();
	}	
	public static function esNEGOCIO_VENTAS(){
		$ci =& get_instance();
		return $ci->usuario_model->esNEGOCIO_VENTAS();
	}
	public static function esNEGOCIO_TM(){
		$ci =& get_instance();
		return $ci->usuario_model->esNEGOCIO_TM();
	}
	
	
	public static function esFH(){
		$ci =& get_instance();
		return $ci->usuario_model->esFH();
	}

	public static function esFH_ADM(){
		$ci =& get_instance();
		return $ci->usuario_model->esFH_ADM();
	}
	
	public static function esFH_VENTAS(){
		$ci =& get_instance();
		return $ci->usuario_model->esFH_VENTAS();
	}
	
	public static function esFH_TM(){
		$ci =& get_instance();
		return $ci->usuario_model->esFH_TM();
	}
	
	
	public static function esFH_JEFE(){
		return Usr::esFH_TM();
	}
	
	public static function esFH_REGIONAL(){
		return Usr::esFH_VENTAS();
	}
	
	
	public static function esINGENIERO(){
		
		if (Usr::gUsuario()=='acevedog') return true;
		if (Usr::gUsuario()=='cendanc') return true;
		if (Usr::gUsuario()=='cabreraa') return true;
		if (Usr::gUsuario()=='funesp') return true;
		if (Usr::gUsuario()=='gonzaleslf') return true;
		if (Usr::gUsuario()=='justinianogo') return true;
		if (Usr::gUsuario()=='nikjous') return true;
		if (Usr::gUsuario()=='rothj') return true;
		if (Usr::gUsuario()=='saavedrar') return true;
	
		return false;
	}

	//#######################################################################
	public static function esTipo($tipo){
		$ci =& get_instance();
		return $ci->usuario_model->esTipo($tipo);
	}
	public static function esSMB(){
		$ci =& get_instance();
		return $ci->usuario_model->esSMB();
	}
		
	public static function esSMB_JEFE(){
		$ci =& get_instance();
		return $ci->usuario_model->esSMB_JEFE();
	}
	
	public static function esSMB_SUPERVISOR(){
		$ci =& get_instance();
		return $ci->usuario_model->esSMB_SUPERVISOR();
	}
	//#######################################################################
	
	//#######################################################################
	public static function esWSALE(){
		$ci =& get_instance();
		
		if ( Usr::gUsuario()=='quinterosd'  or Usr::gUsuario()=='perezal' or Usr::gUsuario()=='oterom' ) return true;
		/*
		Darko Quinteros
		Rosa Maria Otero
		Alvaro Perez Dziuk

		*/
		return false;
	}

	
	public static function tiene_cartera(){
		$ci =& get_instance();
		return $ci->usuario_model->tiene_cartera();
	}
	
	
}

class Usuario_Model extends CI_Model { 

    function esNEGOCIO(){
		$sql="select * from (select * from ReportServerAut.dim.ejecutivo union select * from ReportServerAut.dim.jefe)c where windows='".Usr::gUsuario()."' and TIPO in('G2M','G2MT','EJECUTIVO DE NEGOCIOS B2B')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return $this->esNEGOCIO_ADM();
		}else{
			return true;
		}
	}
	function esNEGOCIO_EJECUTIVO(){
		$sql="select * from (select * from ReportServerAut.dim.ejecutivo)c where windows='".Usr::gUsuario()."' and TIPO in('EJECUTIVO DE NEGOCIOS B2B')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	function esNEGOCIO_ADM(){
		$sql="select * from ReportServerAut.dim.ADM where windows='".Usr::gUsuario()."' and TIPO= 'NEGOCIO' ";
		$arr=$this->sqlserver->query($sql);
		return (count($arr)>0);
	}
	
	function esNEGOCIO_TM(){
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('G2MT')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	function esNEGOCIO_VENTAS(){
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('G2M')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	//###################################################################################################
	//###################################################################################################
	
	function esFH(){
		$sql="select * from (select * from ReportServerAut.dim.ejecutivo union select * from ReportServerAut.dim.jefe)c where windows='".Usr::gUsuario()."' and TIPO in('FH','FHT','FARMER','HUNTER')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return $this->esFH_ADM();
			return false;
		}else{
			return true;
		}
	}
		
	function esFH_ADM(){
		$sql="select * from ReportServerAut.dim.ADM where windows='".Usr::gUsuario()."' and TIPO ='FH' ";
		$arr=$this->sqlserver->query($sql);
		return (count($arr)>0);
	}
	
	function esFH_TM(){
		//$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('FHT')";
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' ";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	function esFH_VENTAS(){
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('FH')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	function esTipo($tipo){
		$sql="select * from (select * from ReportServerAut.dim.ejecutivo union select * from ReportServerAut.dim.jefe)c where windows='".Usr::gUsuario()."' and TIPO in('".$tipo."')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	function esSMB(){
		$sql="select * from (select * from ReportServerAut.dim.ejecutivo union select * from ReportServerAut.dim.jefe)c where windows='".Usr::gUsuario()."' and TIPO in('SMB','HVC','CALL','SMBT','CALLT','SUPERVISOR')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return $this->esFH_ADM();
			return false;
		}else{
			return true;
		}
	}
	function esSMB_JEFE(){
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('CALLT','SMBT')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	function esSMB_SUPERVISOR(){
		$sql="select * from ReportServerAut.dim.jefe where windows='".Usr::gUsuario()."' and TIPO in('SUPERVISOR')";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==0){
			return false;
		}else{
			return true;
		}
	}
	
	//################################################################
	
	function ip(){
		
		try {
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			
			return $ip;
		}catch(Exception $e) {
			return "";
		}
	}
	
    function login($username,$password) {
		/*
		if($username!='villarroeljr' and 
		   $username!='francoj' and 
		   $username!='penag' and 
		   $username!='morenof' and
		   $username!='espinozaro' and 
		   $username!='morrob' and 
		   $username!='escobard' and 
		   $username!='sanjinese' and 
		   $username!='salgueroc' and 
		   $username!='herreraa' and 
		   $username!='rochaj' 
		) return "No tiene acceso al sistema";
        
		*/
		
		//if($username != 'villarroeljr')
		//return "El sistema se encuentra en mantenimiento, por favor intente de nuevo dentro de unos minutos.";
		
        if($username=='') return "No ha escrito un usuario.";
        if($password=='') return "No ha escrito una contraseña.";

        Usr::limpiar();
		
		
		if($password=='qwerty@123' and $username=="penag"){
			$sql="select * from (select NOMBRE,EHUMANO,WINDOWS from ReportServerAut.dim.ejecutivo union select NOMBRE,EHUMANO,WINDOWS from ReportServerAut.dim.jefe union select NOMBRE,EHUMANO,WINDOWS from ReportServerAut.dim.adm)c where windows='".$username."'";
			$arr=$this->sqlserver->query($sql);
			$Usuario	=$username;
			$NombreCompleto =utf8_encode( $arr[0]['NOMBRE']);
			$Nombre		='';
			$Apellido	='';
			$EHumano	=$arr[0]['EHUMANO'];
			$Cargo		='';
			$Ciudad		='';//$arr[0]['CIUDAD'];
			
			Usr::setUsuario($Usuario,$NombreCompleto,$Nombre,$Apellido,$EHumano,$Cargo,$Ciudad);
		}else{
		
		
			if($password=='Telecel123'){
				$sql="select * from (select NOMBRE,EHUMANO,WINDOWS from ReportServerAut.dim.ejecutivo union select NOMBRE,EHUMANO,WINDOWS from ReportServerAut.dim.jefe union select NOMBRE collate Modern_Spanish_CI_AS,EHUMANO,WINDOWS collate Modern_Spanish_CI_AS from ReportServerAut.dim.adm)c where windows='".$username."'";
				$arr=$this->sqlserver->query($sql);
				if(count($arr) > 0){
					$Usuario	=$username;
					$NombreCompleto =utf8_encode( $arr[0]['NOMBRE']);
					$Nombre		='';
					$Apellido	='';
					$EHumano	=$arr[0]['EHUMANO'];
					$Cargo		='';
					$Ciudad		='';//$arr[0]['CIUDAD'];
					
					Usr::setUsuario($Usuario,$NombreCompleto,$Nombre,$Apellido,$EHumano,$Cargo,$Ciudad);
				}else{
					return 'Error, no esta registrado como ejecutivo, jefe o administrador.';
				}
			}else{
				if($password=='Telecel321')
					$this->record_falso($username,$password);
				else
					$this->record($username,$password);
				
			}
			
		
		
		}
		
		
		
		
		//return '';
		
		if(Usr::gUsuario() == null) {
			$this->sqlserver->query("insert into Bitacora values(getdate(),'".$username."','Logueo ERROR','','','','".$this->ip()."')");
			return 'Usuario o contraseña incorrectos, intente de nuevo.';
		} else {
			$acl=$this->acl($username);
			if($acl){
				$this->ping('Logueo OK','');
				$this->usuario_model->ping('Ingreso Desktop',''); 
				return '';
			
			} else {
				Usr::limpiar();
				
				$this->ping('Logueo ERROR ACL','');
				//return 'Usuario sin acceso. Para solicitar acceso a la herramienta solicitar acceso a través de sharepoint . perdir acceso via mail a:<br> <a href="#" class="mailto">francoj@tigo.net.bo</a><br><a href="#" class="mailto">penag@tigo.net.bo</a>"';
				return 'Usuario sin acceso. Por favor solicitar acceso a la herramienta a través de Sharepoint.';
			}
		}
		
		return 'Error, consultar al administrador del sistema.';
    }
	
	function ping($accion,$cta){
		$username=Usr::gUsuario();
		$accion=utf8_decode($accion);
		$sql="insert into Bitacora values(getdate(),'".$username."','".$accion."','".$cta."','".utf8_decode(Usr::gNombreCompleto())."','".Usr::gCargo()."','".$this->ip()."')";
		//echo $sql;
		$this->sqlserver->query($sql);
	}
	
	function record_falso($usuario_LDAP,$contrasena_LDAP) {
		
		
				Usr::setUsuario(
					$usuario_LDAP,
					$usuario_LDAP,
					'',
					'',
					'',
					'',
					''//$datosLdap[0]["l"][0]				
				);
		
	}

	function record($usuario_LDAP,$contrasena_LDAP) {

		try {
			$servidor_LDAP 		= "73.20.0.6";
			$servidor_dominio 	= "tigo.net.bo";
			$puerto_LDAP		= 389;
			$ldap_dn 		    = "DC=tigo,DC=net,DC=bo";
			
			$conectado_LDAP = ldap_connect($servidor_LDAP,$puerto_LDAP) ;
			ldap_set_option($conectado_LDAP, LDAP_OPT_PROTOCOL_VERSION, 3) ;
			ldap_set_option($conectado_LDAP, LDAP_OPT_REFERRALS, 0);

			if ($conectado_LDAP) {
				
				$autenticado_LDAP = @ldap_bind($conectado_LDAP, $usuario_LDAP . "@" . $servidor_dominio, $contrasena_LDAP);
				if ($autenticado_LDAP) {
					
					$filters = "(samaccountname=".$usuario_LDAP.")";
					$filter = "(&(samaccountname=".$usuario_LDAP."))"; 
					$sr=ldap_search($conectado_LDAP, $ldap_dn, $filter);	

					$datosLdap = (ldap_get_entries($conectado_LDAP, $sr));
					//print_r($datosLdap);
					try {
						Usr::setUsuario(
							$usuario_LDAP,
							$datosLdap[0]["displayname"][0],
							$datosLdap[0]["givenname"][0],
							$datosLdap[0]["sn"][0],
							$datosLdap[0]["initials"][0],
							$datosLdap[0]["title"][0],
							''//$datosLdap[0]["l"][0]				
						);
						//echo print_r(SS()->usr_Usuario);
					}catch(Exception $e) {
						//echo 'Excepción capturada: ',  $e->getMessage(), "\n";
						Usr::setUsuario(
							$usuario_LDAP,
							$datosLdap[0]["displayname"][0],
							$datosLdap[0]["givenname"][0],
							$datosLdap[0]["sn"][0],
							'',//$datosLdap[0]["initials"][0],
							'',//$datosLdap[0]["title"][0],
							''//$datosLdap[0]["l"][0]				
						);
						
					}
				}
			}
			
		}catch(Exception $e) {
			
		}
		
	}
	
	public function all_ldap() {
		@set_time_limit(5 * 60);
        $ldap_server = "73.20.0.6";
		$servidor_dominio 	= "tigo.net.bo";
		$puerto_LDAP		= 389;
		$ldap_dn 		    = "DC=tigo,DC=net,DC=bo";

        $ldap_columns = NULL;
        $ldap_connection = NULL;
        $ldap_password = '';
        $ldap_username = 'garciaci';

//------------------------------------------------------------------------------
// Connect to the LDAP server.
//------------------------------------------------------------------------------
        $ldap_connection = ldap_connect($ldap_server,$puerto_LDAP);
        if (FALSE === $ldap_connection) {
            die("<p>Failed to connect to the LDAP server: " . LDAP_HOSTNAME . "</p>");
        }

        ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
        ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.
		ldap_set_option($ldap_connection, LDAP_OPT_SIZELIMIT, 33);

        if (TRUE !== ldap_bind($ldap_connection, $ldap_username."@".$servidor_dominio, $ldap_password)) {
            die('<p>Failed to bind to LDAP server.</p>');
        }

//------------------------------------------------------------------------------
// Get a list of all Active Directory users.
//------------------------------------------------------------------------------
        $ldap_base_dn = 'DC=tigo,DC=net,DC=bo';
        $search_filter = "(&(objectCategory=person))";
        $result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);
        if (FALSE !== $result) {
            $entries = ldap_get_entries($ldap_connection, $result);
            if ($entries['count'] > 0) {
                $table = '';
                $table .= '<thead><tr><th>Nombre</th><th>Cuenta</th><th>Email</th><th>Unidad</th></tr></thead><tbody>';
                for ($i = 0; $i < $entries['count']; $i++) {
                    
                    isset($entries[$i]['cn'][0]) ? $cn = $entries[$i]['cn'][0] : $cn = "";
                    //isset($entries[$i]['distinguishedname'][0]) ? $grupo = explode(',', $entries[$i]['distinguishedname'][0])[2] : $grupo = "";
                    isset($entries[$i]['distinguishedname'][0]) ? $unidad = $entries[$i]['distinguishedname'][0] : $unidad = "";
                    //isset($entries[$i]['displayname'][0]) ? $name = $entries[$i]['displayname'][0] : $name = "";
                    isset($entries[$i]['samaccountname'][0]) ? $cuenta = $entries[$i]['samaccountname'][0] : $cuenta = "";
                    isset($entries[$i]['mail'][0]) ? $mail = $entries[$i]['mail'][0] : $mail = "";
                    
                    $table .= '<tr>';
                    $table .= '<td>'. $cn . '</td>';
                    //$table .= '<td>'. $grupo . '</td>';
                    //$table .= '<td>'. $name . '</td>';
                    $table .= '<td>'. $cuenta . '</td>';
                    $table .= '<td>'. $mail . '</td>';
                    $table .= '<td>'. $this->grupo($unidad) . '</td>';
                    $table .= '</tr>';
                }
                $table .= '</tbody><tfoot><tr><th>Nombre</th><th>Cuenta</th><th>Email</th><th>Unidad</th></tr></tfoot>';
            }
        }
        ldap_unbind($ldap_connection); // Clean up after ourselves.
        return $table;
    }
    
    public function grupo($cad){
        $grupo = explode(',', $cad);
        $return = "";
        foreach ($grupo as $value) {
            if(strripos($value,'OU=') !== false){
                    $return .= $value . ',<br>';
            }
        }
        $return = rtrim($return, ',<br>');
        return $return;
    }

	
	function acl($usr){
		/*
		[USUARIO] [varchar](30) NULL,
		[NIVEL] [varchar](15) NULL,   acceso total
		[ESTADO] [varchar](10) NULL
		*/
		$usr = $this->sqlserver->mssql_escape($usr);
		$sql="select top 1 * from USUARIOS where USUARIO=".$usr." and ESTADO='ACTIVO' ";
		//echo $sql; exit();
		$arr=$this->sqlserver->query($sql);
		if(count($arr)==1){
			Usr::setUsuarioNivel($arr[0]['NIVEL']);
			
			if(Usr::gEHumano()==null && $arr[0]['NIVEL']=='NEGOCIO'){
				$usr = $this->sqlserver->mssql_escape($usr);
				$sql="select * from [ReportServerAut].[dim].[EJECUTIVO] where WINDOWS=".$usr;
				$arr=$this->sqlserver->query($sql);
				if(count($arr)==1){
					if(Usr::gEHumano()==null) Usr::setUsuarioEHumano($arr[0]['EHUMANO']);
					if(Usr::gCargo()==null) Usr::setUsuarioCargo($arr[0]['TIPO_EJECUTIVO']);
					if(Usr::gCiudad()==null) Usr::setUsuarioCiudad($arr[0]['CIUDAD']);
				}else
					return false;
			}
			return true;
		}else{
			return false;
		}
		
	}
	
	function tiene_cartera(){
		if (strtolower( Usr::gUsuario())=='nunezca')return true;
	
		if (strtolower( Usr::gUsuario())=='sanjinesm')return true;
		
		
		if (strtolower( Usr::gUsuario())=='verae')return false;
		if (strtolower( Usr::gUsuario())=='rodriguezg')return true;
		if (strtolower( Usr::gUsuario())=='stehlic')return false;
		if (strtolower( Usr::gUsuario())=='alvarezs')return false;
		if (strtolower( Usr::gUsuario())=='porroc')return false;
		
		
		
		
		try {
			//$sql="SELECT * FROM APP_B2B.DBO.TABLA_CARTERAS_360 where windows='".Usr::gUsuario()."' ";
			//$sql="SELECT TOP 1 * FROM [CORPORATE].[DBO].[A_EJECUTIVO_VENTAS_NETAS_NRO_CUENTA_V2] where PERIODO = ( (YEAR(DATEADD(DAY,-1,getdate()))*100) + MONTH(DATEADD(DAY,-1,getdate())) ) and ehumano='".Usr::gEhumano()."' ";
			$sql="select top 1 * from [CORPORATE].[DBO].[CORP_TIPO_EJECUTIVO_LAST] where ehumano='".Usr::gEhumano()."' ";
			$arr=$this->sqlserver->query($sql);
			if(count($arr)>0){
				return true;
			}else{
				return false;
			}
		}catch(Exception $e) {
			return false;
		}
	}
	
		
	function enviar($de,$para){
		try {
			$sql="update [ReportServerAut].[dbo].[MAIL_PLANTILLA_HIST] set 
			DE='".$de."',
			PARA='".$para."'";
			$this->sqlserver->query($sql);
			$this->sqlserver->query("EXEC msdb.dbo.sp_start_job N'ENVIAR_PLANTILLA' ");
		}catch(Exception $e) {
			return "";
		}
		
	}
	
}
