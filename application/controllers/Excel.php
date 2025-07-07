<?php

class Excel extends BaseController {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('model_cfos_emitidos', 'dbdata');
        //$this->load->library('PHPExcel/IOFactory.php');
        //$this->db = $this->load->database('default', TRUE);
    }
	
	public function load() { if(!$this->val_vista())return;
		
		$data=[];
		
		$data['dis_NOMBRE_CLIENTE']		=$this->noc_model->distinct_NOMBRE_CLIENTE();
		$data['dis_NRO_CONTRATO']		=$this->noc_model->distinct_NRO_CONTRATO();
		$data['dis_NRO_CUENTA']			=$this->noc_model->distinct_NRO_CUENTA();
		$data['dis_ESTADO']				=$this->noc_model->distinct_ESTADO();
		$data['dis_PLAN_CONSUMO']		=$this->noc_model->distinct_PLAN_CONSUMO();
		$data['dis_EJECUTIVO_CORPORATE']=$this->noc_model->distinct_EJECUTIVO_CORPORATE();
		$data['dis_COD_CLIENTE']		=$this->noc_model->distinct_COD_CLIENTE();
	
		
		$this->load->view('excel/load',$data);
		$this->usuario_model->ping('NOC','');
		
	}

	public function listado_avanzado(){ if(!$this->val_vista())return;
		$fpp=$this->input->get('fpp');
		$ndp=$this->input->get('ndp');
	
		$params=$this->input->post(null, true);
		
		$arr=$this->noc_model->listado_avanzado($fpp,$ndp,$params);
		echo json_encode($arr);
	}
	
	public function importar() { if(!$this->val_vista())return;
		$data=[];
		
		$data['dis_NOMBRE_CLIENTE']		=$this->noc_model->distinct_NOMBRE_CLIENTE();
		$data['dis_NRO_CONTRATO']		=$this->noc_model->distinct_NRO_CONTRATO();
		$data['dis_NRO_CUENTA']			=$this->noc_model->distinct_NRO_CUENTA();
		$data['dis_ESTADO']				=$this->noc_model->distinct_ESTADO();
		$data['dis_PLAN_CONSUMO']		=$this->noc_model->distinct_PLAN_CONSUMO();
		$data['dis_EJECUTIVO_CORPORATE']=$this->noc_model->distinct_EJECUTIVO_CORPORATE();
		$data['dis_COD_CLIENTE']		=$this->noc_model->distinct_COD_CLIENTE();
		
		$this->load->view('excel/listado',$data);
		$this->usuario_model->ping('NOC','');
	}
	
	public function read() {

        //include 'Classes/PHPExcel/IOFactory.php';
		//include 'libraries/PHPExcel/IOFactory.php';
		//$this->load->library('PHPExcel/IOFactory.php');
		//require_once 'libraries/PHPExcel/IOFactory.php';
		/*if(file_exists('libraries/PHPExcel/IOFactory.php?val=1'))
			echo 'entro 1 '; //require_once 'libraries/PHPExcel/IOFactory.php';
		if(file_exists('../libraries/PHPExcel/IOFactory.php?val=2'))
			echo 'entro 2 '; //require_once '../libraries/PHPExcel/IOFactory.php';
		if(file_exists('../../libraries/PHPExcel/IOFactory.php?val=3'))
			echo 'entro 3 '; //require_once '../../libraries/PHPExcel/IOFactory.php';
		if(file_exists('../../../libraries/PHPExcel/IOFactory.php?val=4'))
			echo 'entro 4 '; //require_once '../../../libraries/PHPExcel/IOFactory.php';
		if(file_exists('../../../../libraries/PHPExcel/IOFactory.php?val=5'))
			echo 'entro 5 '; //require_once '../../../../libraries/PHPExcel/IOFactory.php';*/

        if (isset($_FILES['file']['name'])) {

            $file_name = $_FILES['file']['name'];
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            //Checking the file extension
            if (strtolower($ext) == "xlsx" || strtolower($ext) == "xls") {

            $file_name = $_FILES['file']['tmp_name'];
            $inputFileName = $file_name;

            //  Read your Excel workbook
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME). '": ' . $e->getMessage());
            }

            //Table used to display the contents of the file
            echo '<center><table style="width:50%;" border=1>';

            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            //  Loop through each row of the worksheet in turn
            for ($row = 1; $row <= $highestRow; $row++) {
                //  Read a row of data into an array
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                echo "<tr>";
                //echoing every cell in the selected row for simplicity. You can save the data in database too.
                foreach ($rowData[0] as $k => $v)
                    echo "<td>" . $v . "</td>";
                echo "</tr>";
            }

            echo '</table></center>';
            } else {
              echo '<p style="color:red;">Please upload file with xls or xlsx extension</p>';
            }
        } else {
            echo '<p style="color:red;">not upload file</p>';
        }
    }
	
	/*public function exportar(){ if(!$this->val_vista())return;
		
		$data=[];
		
		$arr=$this->noc_model->listado_exportar();
		
		$e=new CExcel();
		$e->nuevo('noc.xls');
		
		$cols=[];//array_keys($arr[$f]);
		
		for($f=0;$f<count($arr);$f++){
			if($f==0){
				$cols=array_keys($arr[0]);
				for($c=0;$c<count($cols);$c++){
					$e->scelda($f+1,$c+1, utf8_encode($cols[$c]));
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
		
		$e->descargar('noc.xls');
	}*/

}

