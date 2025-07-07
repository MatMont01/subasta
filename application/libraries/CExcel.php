<?php
class CExcel {
    private $xls;
    private $archivo;
    
    function __construct() {
        $ci =& get_instance();
        $ci->load->library("PHPExcel");
        $this->xls = null;
    }
    
    public function nuevo($archivo){
        $this->xls = new PHPExcel();
        $this->archivo = $archivo;
    }
    
	public function abrir($archivo,$directorio=''){
        //$this->xls = PHPExcel_IOFactory::load(_FS_ . '\\files\\' .$archivo);
		if($directorio=='OnDemand'){
			$this->xls = PHPExcel_IOFactory::load(_FS_ . '\\files_on_demand\\' .$archivo);
			//print_r($this->xls); exit();
		}else{
			$this->xls = PHPExcel_IOFactory::load(_FS_ . '\\files\\' .$archivo);
			//print_r($this->xls); exit();
		}
        $this->archivo = $archivo;
    }
	
	public function abrir_comisiones($archivo){
        $this->xls = PHPExcel_IOFactory::load(_FS_ . '\\files_flujo_comisiones\\' .$archivo);
        $this->archivo = $archivo;
    }
	
    public function guardar(){
	    $objWriter = new PHPExcel_Writer_Excel2007($this->xls);
        $objWriter->save($this->archivo);
    }
    
    public function guardarComo($archivo){
        $this->archivo=$archivo;
        $this->guardar();
    }
    
    public function descargar($filename){
		header_remove(); 
		header('Content-Type: application/vnd.ms-excel;');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
		
        $objWriter = PHPExcel_IOFactory::createWriter($this->xls, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
        $objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
    }
    public function activarHoja($hoja){
        $xls->setActiveSheetIndexByName($hoja);
    }
    
	public function gcelda($f,$c){
        $rango=$this->C_L($c).$f;
		$value = $this->xls->getActiveSheet()->getCell($rango)->getValue();
		//if (date('d/m/Y H:i', strtotime($value)) == date('d/m/Y H:i', '19/1/2022 00:00'))  
		//if($c == 1)
			//return PHPExcel_Shared_Date::ExcelToPHPObject($value)->format('Y-m-d H:i:s');
		//else
			return $value;
	}
	
	public function gcelda_fecha($f,$c){
        $rango=$this->C_L($c).$f;
		$value = $this->xls->getActiveSheet()->getCell($rango)->getValue();
		$result = null;
		if($value != null)
			$result = PHPExcel_Shared_Date::ExcelToPHPObject($value)->format('d-m-Y H:i:s');
		return $result;
	}
    
    public function scelda($f,$c,$valor){
        $rango=$this->C_L($c).$f;
		$this->xls->getActiveSheet()->setCellValue($rango,$valor);
	}
    
    public function arr($f1,$c1,$f2,$c2){
        $res=array();
        for($f=$f1;$f<=$f2;$f++){
            $row=array();
            for($c=$c1;$c<=$c2;$c++){
                array_push($row,$this->gcelda($f,$c));    
            }
            array_push($res,$row);
        }
        return $res;
    }
    
    public function L_C($letra){
        if(strlen($letra)==1){
            return ord($letra)-64;
        }else{
            return (26 * $this->L_C($letra[0])) + $this->L_C($letra[1]);
        }
    }
    
    public function C_L($c){
        if($c == 0) $c=26;
        if($c <= 26)
            return chr($c+64);
        else 
            return $this->C_L(($c - 1) / 26) . $this->C_L($c % 26);
    }
    
    public function setAncho($c,$ancho) {
        $this->xls->getActiveSheet()->getColumnDimension($this->C_L($c))->setWidth($ancho);    
    }
    
}
