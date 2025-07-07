<?php
class Fecha {
    
	public $valor;
	
    function __construct($v=null) {
		if(!$v==null) $this->valor=$v;
    }
    
	public static function NullDate(){
		//'return mktime($horas,$minutos,$segundos,$mes,$dia,$anio);
		return Fecha::fromYMD(1900,1,1);
	}
	
	
	
	public static function Now(){
 //date_default_timezone_set("America/Bogota");
		return new Fecha(strtotime('now'));
	}
	
	public static function fromForm($v,$format){
		$f = new Fecha();
	    if ( $format=='date' ) {
			try {
				$f->setFromYMD($v);
			} catch(Exception $xx) {
				return 0;
			}
		} else if ( $format=='dateDMY' ) {
			try {
				$f->setFromDMY($v);
			} catch(Exception $xx) {
				return 0;
			}
		}else{
			try {
				$f->setFromYMDHMS($v);
			} catch(Exception $xx) {
				return 0;
			}
		}
		return $f;	
	}
	
	public static function fromSQL($v) { 
		$f=new Fecha();
		//echo '<br>'.$v.'<br>';
	
		if ($v == null) return null;//Fecha::NullDate();
		
		$f->setFromYMDHMS($v->format('Y/m/d H:i:s'));
		return $f;
	}
	
	public static function fromRango($v,$lado) { 
		list($desde, $hasta) = explode("-", $v);
		
		if ($lado==0) {
			$f=new Fecha();
			$f->setFromDMY($desde);
			return $f;
		} else {
			$f=new Fecha();
			$f->setFromDMY($hasta);
			$f->set($f->anio(),$f->mes(),$f->dia(),23,59,59);
			
			return $f;
		}
	}
	
	public static function fromYMD($v) { 
		$f=new Fecha();
		$f->setFromYMD($v);
		return $f;
	}
	
	public function setFromDMY($v){
		//$this->set(substr($v,0,4),substr($v,5,2),substr($v,8,2));
	
		$this->set(substr($v,6,4),substr($v,3,2),substr($v,0,2));
	}
	
	
	public static function dia_sem($dia) { 
		switch($dia){ case 1: return "lunes";case 2: return "martes";case 3: return "miércoles";case 4: return "jueves";case 5: return "viernes";case 6: return "sábado";case 7: return "domingo";	}
	}
	
	public function __toString(){ //2016-03-25 08:30:45
		return date("Y-m-d H:i:s",$this->valor);
	}
	
	public function formato0(){  //03 jul
		return $this->dia().' '.$this->gMes();// date($f,$this->valor);
	}
	public function formato1(){  //03-jul
		return $this->dia().'-'.$this->gMes();// date($f,$this->valor);
	}
	public function formato11(){  //03-julio
		return $this->dia().'-'.$this->gMes2();// date($f,$this->valor);
	}
	public function formato2(){ //2016-03-25
		$r=date("Y-m-d",$this->valor);
		return $r;
	}
	
	public function formatoRango(){ // 25/05/2016
		if($this->formato2()=='') return '';
		
		return date("d/m/Y",$this->valor); 
	}
	
	public function formato3(){ //martes 3 de enero de 2016
		return $this->gDiaSemana().' '.$this->dia().' de '.$this->gMes2().' de '.$this->anio(); 
	}
	public function formato_blog(){ //martes 3 de enero de 2016 20:35
		return $this->gDiaSemana().' '.$this->dia().' de '.$this->gMes2().' de '.$this->anio().' '. date("H:i",$this->valor); 
	}
	public function formato33(){
		return $this->gDiaSemana().' '.$this->dia().' de '.$this->gMes2(); 
	}
	
	public function formato4(){ //2016-03-25 08:30
	
		return date("Y-m-d H:i",$this->valor); 
	}
	
	public function formato8(){ //2016-03-25 08:30
		return date("H:i",$this->valor); 
	}
	
	public function formato5(){ //2016-03-25 08:30
		return date("Y-m-d",$this->valor); 
	}
	public function formatoYMD(){ //20160325
		return ($this->anio()*10000)+($this->mes()*100)+$this->dia(); 
		
	}
	
	public function formato_control(){ //2016-03-25 08:30
	    $r=date("Y-m-d H:i",$this->valor); 
		return str_replace(' ','T',$r);
	}
	
	public function setFromExcel($excel_value){
		$this->valor = ($excel_value - 25569) * 86400 + (4 * 3600);
	}
	
	public function setFromYMD($v){
		$this->set(substr($v,0,4),substr($v,5,2),substr($v,8,2));
	}
	
	public function setFromYMDHMS($v){
		//echo $v;
		$this->set(substr($v,0,4),substr($v,5,2),substr($v,8,2),substr($v,11,2),substr($v,14,2),substr($v,17,2));
		//echo $v.'<br>';
		//$this->set(substr($v,6,4),substr($v,3,2),substr($v,0,2),substr($v,11,2),substr($v,14,2),substr($v,17,2));
	}
	
	public function setFromWeek($year,$week){
		$time = strtotime("1 January $year", time());
		$day = date('w', $time);
		$time += ((7*($week-1))+1-$day)*24*3600;
		$this->valor = $time;//date('Y-n-j', $time);
		//$this->valor=strtotime("Week $week of $year");
	}
	
	public function set($anio,$mes,$dia,$horas=0,$minutos=0,$segundos=0){
		//echo $anio.' '.$mes.' '.$dia.' '.$horas.' '.$minutos.' '.$segundos;
		$this->valor = mktime($horas,$minutos,$segundos,$mes,$dia,$anio);
	}
	
	public function addDias($cant){
		return new Fecha(strtotime($this.' '.$cant.' days'));
	}

	public function addMinutos($cant){
		return new Fecha(strtotime($this.' '.$cant.' minutes'));
	}
	
	public function anio(){ return date('Y',$this->valor); }
	public function mes(){ return date('m',$this->valor); }
	public function dia(){ return date('d',$this->valor); }
	public function horas(){ return date('H',$this->valor); }
	public function minutos(){ return date('i',$this->valor); }
	public function segundos(){ return date('s',$this->valor); }
	
	public function gDiaSemana(){
		$dia=date('N',$this->valor);
		switch($dia){ case 1: return "lunes";case 2: return "martes";case 3: return "miércoles";case 4: return "jueves";case 5: return "viernes";case 6: return "sábado";case 7: return "domingo";	}
	}
	
	public function gSemanaDelAnio(){
		return date('W',$this->valor)+1;
	}
	
	public function gMes(){
		$mes=$this->mes();
		switch($mes){ case 1: return "ene";case 2: return "feb";case 3: return "mar";case 4: return "abr";case 5: return "may";case 6: return "jun";case 7: return "jul";case 8: return "ago";case 9: return "sep";case 10: return "oct";case 11: return "nov";case 12: return "dic";	}
	}
	
	public function gMes2(){
		$mes=$this->mes();
		switch($mes){ case 1: return "enero";case 2: return "febrero";case 3: return "marzo";case 4: return "abril";case 5: return "mayo";case 6: return "junio";case 7: return "julio";case 8: return "agosto";case 9: return "septiembre";case 10: return "octubre";case 11: return "noviembre";case 12: return "diciembre";	}
	}
	
	public function gIntervalo(){
		return ($this->horas() * 60 * 60) + ($this->minutos() * 60) + $this->segundos();
	}
	
}
