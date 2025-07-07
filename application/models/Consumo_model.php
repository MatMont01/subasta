<?php
class Consumo_Model extends CI_Model { 
	
	function acceso_form($form){
		/*
		*/
		$sql = "select * from app_b2b.[dbo].[ACCESOS] where NIVEL='".Usr::gNivel()."' and ID_FORM=".$form;
		$arr=$this->sqlserver->query($sql);
		return (count($arr)>0);
	}
	

	function base_migracion($cta){
		$sql = "select *,corporate.dbo.GET_NOMBRE(NOMBRE_CLIENTE,COD_CLIENTE_NOMBRE) UNIFICADO  from CORPORATE.dbo.VISTA_BASE_MIGRACION_APP where nro_cuenta='".$cta."'";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
		
			$arr[0]['NOMBRE_CLIENTE']		=utf8_encode($arr[0]['UNIFICADO']);
			$arr[0]['EJECUTIVO_CORPORATE']	=utf8_encode($arr[0]['EJECUTIVO_CORPORATE']);
			$arr[0]['DESCRIPCION_PLAN']		=utf8_encode($arr[0]['DESCRIPCION_PLAN']);
			$arr[0]['DESCRIPCION_PLAN_SVA']	=utf8_encode($arr[0]['DESCRIPCION_PLAN_SVA']);
			
			$arr[0]['CIUDAD_EJECUTIVO']			= utf8_encode($arr[0]['CIUDAD_EJECUTIVO']);
			$arr[0]['DIRECCION']				= utf8_encode($arr[0]['DIRECCION']);
			$arr[0]['NOMBRE_REPRESENTANTE1']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE1']);
			$arr[0]['NOMBRE_REPRESENTANTE2']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE2']);
			
			$arr[0]['MONTO_RECARGA'] 	= sprintf('%0.2f', $arr[0]['MONTO_RECARGA']);
			$arr[0]['MEGAS_NAVEGADOS'] 	= sprintf('%0.2f', $arr[0]['MEGAS_NAVEGADOS']);
			$arr[0]['MINUTOS_HABLADOS'] = sprintf('%0.2f', $arr[0]['MINUTOS_HABLADOS']);
			$arr[0]['CONSUMO_BS'] 		= sprintf('%0.2f', $arr[0]['CONSUMO_BS']);
			$arr[0]['EXEDENTE_MEGAS']   = sprintf('%0.2f', $arr[0]['EXEDENTE_MEGAS']);
			$arr[0]['EXEDENTE_CONSUMO'] = sprintf('%0.2f', $arr[0]['EXEDENTE_CONSUMO']);
		
			$arr[0]['TBM_TOTAL_CLIENTE'] 	=  number_format($arr[0]['TBM_TOTAL_CLIENTE']); //sprintf('%0.2f', );   
		
			return $arr[0];
		}else{
			return null;
		}
		
	}
	function base_migracion_uni($cta){
		$sql = "select v.NRO_CUENTA,v.LINEAS_MO,v.ESTADO,v.NOMBRE_CLIENTE,v.LINEAS_CLIENTE,v.TBM_TOTAL_CLIENTE,v.EJECUTIVO_CORPORATE,v.SEGMENTO_CORP_TAMANO,v.TIPO_SIM
					  ,v.DESCRIPCION_PLAN,v.TELEGROUP,v.TBM_TOTAL,v.TBM_VOZ,v.TBM_DATOS,v.DESCRIPCION_PLAN_SVA,v.MEGAS_ACREDITADOS_PLAN,v.SITUACION_EQUIPO,v.MONTO_RECARGA
					  ,v.MEGAS_NAVEGADOS,v.MINUTOS_HABLADOS,v.CONSUMO_BS,v.EXEDENTE_MEGAS,v.EXEDENTE_CONSUMO,v.NIT_CLIENTE,v.TIPO_EJECUTIVO,v.CIUDAD_EJECUTIVO,v.NOMBRE_REPRESENTANTE1
					  ,v.NOMBRE_REPRESENTANTE2,v.DIRECCION,v.CIUDAD_COBERTURA,v.LATITUDE,v.LONGITUDE,v.ZONA,v.TELEFONO_TITULAR_PYME,v.CORREO_TITULAR_PYME,v.NOMBRE_TITULAR_PYME
					  --,replace(replace(replace(replace(v.COD_CLIENTE_NOMBRE,Char(9),''),Char(10),''),Char(13),''),Char(0xA0), '') COD_CLIENTE_NOMBRE,
					  ,v.COD_CLIENTE_NOMBRE,
				corporate.dbo.GET_NOMBRE(v.NOMBRE_CLIENTE,v.COD_CLIENTE_NOMBRE) UNIFICADO,--t.NOMBRE_TITULAR,t.NRO_CUENTA_TITULAR,t.EMAIL_TITULAR
				REPLACE(case when v.NOMBRE_TITULAR_PYME is not null AND v.NOMBRE_TITULAR_PYME!='' then v.NOMBRE_TITULAR_PYME ELSE t.NOMBRE_TITULAR END,CHAR(0xA0), '') NOMBRE_TITULAR_360,
				REPLACE(case when v.TELEFONO_TITULAR_PYME is not null AND v.TELEFONO_TITULAR_PYME!='' then v.TELEFONO_TITULAR_PYME ELSE t.NRO_CUENTA_TITULAR END,CHAR(0xA0), '') TELEFONO_TITULAR_360,
				REPLACE(case when v.CORREO_TITULAR_PYME is not null AND v.CORREO_TITULAR_PYME!='' then v.CORREO_TITULAR_PYME ELSE t.EMAIL_TITULAR END,CHAR(0xA0), '') CORREO_TITULAR_360
		from CORPORATE.dbo.VISTA_BASE_MIGRACION_APP v 
		left join CORPORATE.dbo.TITULARES_BASE t on t.NOMBRE_CLIENTE = v.NOMBRE_CLIENTE
		where v.cod_cliente_nombre='".($cta)."' --and len(v.nro_cuenta)<>6	
		--order by v.nro_cuenta desc
		ORDER BY CLOSING_MIC DESC,CASE WHEN V.SISTEMA='BBD' THEN 1 WHEN V.SISTEMA='BCCS'THEN 2 ELSE 3 END ASC
		";
		
		//echo $sql;
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			
			$arr[0]['NOMBRE_CLIENTE']		=utf8_encode($arr[0]['UNIFICADO']);
			$arr[0]['EJECUTIVO_CORPORATE']	=utf8_encode($arr[0]['EJECUTIVO_CORPORATE']);
			$arr[0]['DESCRIPCION_PLAN']		=utf8_encode($arr[0]['DESCRIPCION_PLAN']);
			$arr[0]['DESCRIPCION_PLAN_SVA']	=utf8_encode($arr[0]['DESCRIPCION_PLAN_SVA']);
			
			$arr[0]['CIUDAD_EJECUTIVO']			= utf8_encode($arr[0]['CIUDAD_EJECUTIVO']);
			$arr[0]['DIRECCION']				= utf8_encode($arr[0]['DIRECCION']);
			$arr[0]['NOMBRE_REPRESENTANTE1']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE1']);
			$arr[0]['NOMBRE_REPRESENTANTE2']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE2']);
			
			$arr[0]['MONTO_RECARGA'] 	= sprintf('%0.2f', $arr[0]['MONTO_RECARGA']);
			$arr[0]['MEGAS_NAVEGADOS'] 	= sprintf('%0.2f', $arr[0]['MEGAS_NAVEGADOS']);
			$arr[0]['MINUTOS_HABLADOS'] = sprintf('%0.2f', $arr[0]['MINUTOS_HABLADOS']);
			$arr[0]['CONSUMO_BS'] 		= sprintf('%0.2f', $arr[0]['CONSUMO_BS']);
			$arr[0]['EXEDENTE_MEGAS']   = sprintf('%0.2f', $arr[0]['EXEDENTE_MEGAS']);
			$arr[0]['EXEDENTE_CONSUMO'] = sprintf('%0.2f', $arr[0]['EXEDENTE_CONSUMO']);
		
			$arr[0]['TBM_TOTAL_CLIENTE'] 	=  number_format($arr[0]['TBM_TOTAL_CLIENTE']); //sprintf('%0.2f', );   
		
			return $arr[0];
		}else{
			$sql = "select v.NRO_CUENTA,v.LINEAS_MO,v.ESTADO,v.NOMBRE_CLIENTE,v.LINEAS_CLIENTE,v.TBM_TOTAL_CLIENTE,v.EJECUTIVO_CORPORATE,v.SEGMENTO_CORP_TAMANO,v.TIPO_SIM
						  ,v.DESCRIPCION_PLAN,v.TELEGROUP,v.TBM_TOTAL,v.TBM_VOZ,v.TBM_DATOS,v.DESCRIPCION_PLAN_SVA,v.MEGAS_ACREDITADOS_PLAN,v.SITUACION_EQUIPO,v.MONTO_RECARGA
						  ,v.MEGAS_NAVEGADOS,v.MINUTOS_HABLADOS,v.CONSUMO_BS,v.EXEDENTE_MEGAS,v.EXEDENTE_CONSUMO,v.NIT_CLIENTE,v.TIPO_EJECUTIVO,v.CIUDAD_EJECUTIVO,v.NOMBRE_REPRESENTANTE1
						  ,v.NOMBRE_REPRESENTANTE2,v.DIRECCION,v.CIUDAD_COBERTURA,v.LATITUDE,v.LONGITUDE,v.ZONA,v.TELEFONO_TITULAR_PYME,v.CORREO_TITULAR_PYME,v.NOMBRE_TITULAR_PYME
						  --,replace(replace(replace(replace(v.COD_CLIENTE_NOMBRE,Char(9),''),Char(10),''),Char(13),''),Char(0xA0), '') COD_CLIENTE_NOMBRE,
						  ,v.COD_CLIENTE_NOMBRE,
						  corporate.dbo.GET_NOMBRE(v.NOMBRE_CLIENTE,v.COD_CLIENTE_NOMBRE) UNIFICADO   
			from CORPORATE.dbo.VISTA_BASE_MIGRACION_APP v where v.cod_cliente_nombre='".$cta."'	
			ORDER BY CLOSING_MIC DESC,CASE WHEN V.SISTEMA='BBD' THEN 1 WHEN V.SISTEMA='BCCS'THEN 2 ELSE 3 END ASC";
			//echo $sql;
			$arr=$this->sqlserver->query($sql);
			if(count($arr)>0){
				
				$arr[0]['NOMBRE_CLIENTE']		=utf8_encode($arr[0]['UNIFICADO']);
				$arr[0]['EJECUTIVO_CORPORATE']	=utf8_encode($arr[0]['EJECUTIVO_CORPORATE']);
				$arr[0]['DESCRIPCION_PLAN']		=utf8_encode($arr[0]['DESCRIPCION_PLAN']);
				$arr[0]['DESCRIPCION_PLAN_SVA']	=utf8_encode($arr[0]['DESCRIPCION_PLAN_SVA']);
				
				$arr[0]['CIUDAD_EJECUTIVO']			= utf8_encode($arr[0]['CIUDAD_EJECUTIVO']);
				$arr[0]['DIRECCION']				= utf8_encode($arr[0]['DIRECCION']);
				$arr[0]['NOMBRE_REPRESENTANTE1']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE1']);
				$arr[0]['NOMBRE_REPRESENTANTE2']	= utf8_encode($arr[0]['NOMBRE_REPRESENTANTE2']);
				
				$arr[0]['MONTO_RECARGA'] 	= sprintf('%0.2f', $arr[0]['MONTO_RECARGA']);
				$arr[0]['MEGAS_NAVEGADOS'] 	= sprintf('%0.2f', $arr[0]['MEGAS_NAVEGADOS']);
				$arr[0]['MINUTOS_HABLADOS'] = sprintf('%0.2f', $arr[0]['MINUTOS_HABLADOS']);
				$arr[0]['CONSUMO_BS'] 		= sprintf('%0.2f', $arr[0]['CONSUMO_BS']);
				$arr[0]['EXEDENTE_MEGAS']   = sprintf('%0.2f', $arr[0]['EXEDENTE_MEGAS']);
				$arr[0]['EXEDENTE_CONSUMO'] = sprintf('%0.2f', $arr[0]['EXEDENTE_CONSUMO']);
			
				$arr[0]['TBM_TOTAL_CLIENTE'] 	=  number_format($arr[0]['TBM_TOTAL_CLIENTE']); //sprintf('%0.2f', );   
			
				return $arr[0];
			}else{
			
				return null;
			}
			return null;
		}
		
	}
	
	function estado($cta){
		$sql = "select ESTADO from CORPORATE.dbo.BASE_MIGRACION_APP where nro_cuenta='".$cta."'";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			return $arr[0]['ESTADO'];
		}else{
			return '';
		}
	}
	
	function oferta_migracion($cta){
		/*
		*/
		$sql = "select * from  CORPORATE.dbo.VISTA_OFERTA_MIGRACION where nro_cuenta='".$cta."'";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			return $arr;
		}else{
			return null;
		}
		
	}
	
	function addon($cta){
		/*
		*/
		$sql = "select * from  CORPORATE.dbo.VISTA_OFERTA_ADD_ON where nro_cuenta='".$cta."'";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			
			$arr[0]['MEGAS_ACREDITADOS'] 	= sprintf('%0.2f', $arr[0]['MEGAS_ACREDITADOS']);
			$arr[0]['MEGAS_NAVEGADOS'] 	= sprintf('%0.2f', $arr[0]['MEGAS_NAVEGADOS']);
			$arr[0]['DESCRIPCION_PLAN']	=utf8_encode($arr[0]['DESCRIPCION_PLAN']);
			$arr[0]['PLAN_ADD_ON']	=utf8_encode($arr[0]['PLAN_ADD_ON']);
			
			return $arr[0];
		}else{
			return null;
		}
		
	}
	
	function lineas($cta){
		/*
		*/
		/*
		$sql = "select MONTO_RECARGA,NRO_CUENTA,ESTADO,SITUACION_EQUIPO,DESCRIPCION_PLAN,TBM_TOTAL,PLAN_SUGERIDO_CON_SUBSIDIO,PLAN_SUGERIDO_SIN_SUBSIDIO from  CORPORATE.dbo.BASE_MIGRACION_app
				where NOMBRE_CLIENTE in 
				(select distinct NOMBRE_CLIENTE from  CORPORATE.dbo.BASE_MIGRACION_APP where NRO_CUENTA=".$cta." )	
				and TIPO_PLAN_CONSUMO<>'BBD'";
				*/
		$sql="select MONTO_RECARGA,NRO_CUENTA,ESTADO,SITUACION_EQUIPO,DESCRIPCION_PLAN,TBM_TOTAL,PLAN_SUGERIDO_CON_SUBSIDIO,
PLAN_SUGERIDO_SIN_SUBSIDIO ,COD_CLIENTE_NOMBRE
from  CORPORATE.dbo.BASE_MIGRACION_app
				where cod_cliente_nombre in 
				(select distinct cod_cliente_nombre from  CORPORATE.dbo.BASE_MIGRACION_APP where NRO_CUENTA=".$cta." )	
				and TIPO_PLAN_CONSUMO<>'BBD'
				";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
				 
			for($i=0;$i<count($arr);$i++){
				$arr[$i]['DESCRIPCION_PLAN']=utf8_encode($arr[$i]['DESCRIPCION_PLAN']);
				$arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']=utf8_encode($arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']);
				$arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']=utf8_encode($arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']);	
				
				$arr[$i]['MONTO_RECARGA'] = str_replace(',','.', number_format($arr[$i]['MONTO_RECARGA'],0)); 
				
			}
			return $arr;
		}else{
			return null;
		}
	}
	
	function nombre_cliente($cta) {
		$sql = "select distinct NOMBRE_CLIENTE from  CORPORATE.dbo.BASE_MIGRACION_APP where NRO_CUENTA=".$cta;
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0) {
			$arr[0]['NOMBRE_CLIENTE']=utf8_encode($arr[0]['NOMBRE_CLIENTE']);
			return $arr[0]['NOMBRE_CLIENTE'];
		} else {
			return null;
		}
		
	}
	
	function nombre_cliente_noutf($cta) {
		$sql = "select distinct NOMBRE_CLIENTE from  CORPORATE.dbo.BASE_MIGRACION_APP where NRO_CUENTA=".$cta;
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0) {
			//$arr[0]['NOMBRE_CLIENTE']=utf8_encode($arr[0]['NOMBRE_CLIENTE']);
			return $arr[0]['NOMBRE_CLIENTE'];
		} else {
			return null;
		}
		
	}
	
	
	function titulares_base($nombre){
		$sql = "select * from  CORPORATE.dbo.TITULARES_BASE where NOMBRE_CLIENTE='".$nombre."'";
		
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0) {
			$arr[0]['NOMBRE_CLIENTE']=utf8_encode($arr[0]['NOMBRE_CLIENTE']);
			$arr[0]['NRO_CUENTA_TITULAR']=utf8_encode($arr[0]['NRO_CUENTA_TITULAR']);
			$arr[0]['NOMBRE_TITULAR']=utf8_encode($arr[0]['NOMBRE_TITULAR']);
			$arr[0]['EMAIL_TITULAR']=utf8_encode($arr[0]['EMAIL_TITULAR']);
			
			/*$arr[0]['VALIDADO']=utf8_encode($arr[0]['VALIDADO']);
			$arr[0]['MEDIO_VALIDACION']=utf8_encode($arr[0]['MEDIO_VALIDACION']);
			$arr[0]['FECHA_VALIDADO']=utf8_encode($arr[0]['FECHA_VALIDADO']);*/
			return $arr[0];
		} else {
			return null;
		}
	}
	
	function registar_titularidad($NOMBRE_CLIENTE,$NRO_CUENTA_TITULAR,$NOMBRE_TITULAR,$EMAIL_TITULAR,$COD_CLIENTE_NOMBRE,$NRO_CUENTA){
		if($NOMBRE_CLIENTE=='')		return "El nombre del cliente no puede ser vacio";
		if($NRO_CUENTA_TITULAR=='')	return "El nro de cuenta de titular no puede ser vacio";
		if($NOMBRE_TITULAR=='')		return "El nombre de titular no puede ser vacio";
		if($EMAIL_TITULAR=='')		return "El email no puede ser vacio";

		$t=$this->titulares_base($NOMBRE_CLIENTE);
		
		if($t!=null){			
			if($NRO_CUENTA_TITULAR==$t['NRO_CUENTA_TITULAR']
			and $NOMBRE_TITULAR==$t['NOMBRE_TITULAR']
			and $EMAIL_TITULAR==$t['EMAIL_TITULAR']
			) return "No ha realizado cambios en la información.";
			
			$sql="delete  CORPORATE.dbo.TITULARES_BASE where NOMBRE_CLIENTE='".$NOMBRE_CLIENTE."'";
			$this->sqlserver->query($sql);
		}else{
			
		}
		
		$sql="insert into  CORPORATE.dbo.TITULARES_BASE(NOMBRE_CLIENTE,NRO_CUENTA_TITULAR,NOMBRE_TITULAR,EMAIL_TITULAR,COD_CLIENTE_NOMBRE,NRO_CUENTA) values('$NOMBRE_CLIENTE','$NRO_CUENTA_TITULAR','$NOMBRE_TITULAR','$EMAIL_TITULAR','$COD_CLIENTE_NOMBRE',$NRO_CUENTA)";
		$this->sqlserver->query($sql);
		
		
		return "";
	}
	
	
	/*
			
				union
				
				select top 2  convert(varchar,max(NRO_CUENTA)) +' - '+NOMBRE_CLIENTE label , 
                max(NRO_CUENTA) value  from VISTA_OPORTINUDAD_PREPAGO 
			    where NOMBRE_CLIENTE like '%".$term."%' or nro_cuenta like '%".$term."%' group by nombre_cliente
				
	*/
	function listado_cuentas($term) {
		$sql = "select top 10  convert(varchar,max(NRO_CUENTA)) +' - '+NOMBRE_CLIENTE label , max(NRO_CUENTA) value from  CORPORATE.dbo.VISTA_BASE_MIGRACION_APP 
		        where NOMBRE_CLIENTE like '%".$term."%' or nro_cuenta like '%".$term."%' group by NOMBRE_CLIENTE
				";
		
		$arr=$this->sqlserver->query($sql);
		
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['label']= utf8_encode($arr[$i]['label']) ;
			$arr[$i]['value']= utf8_encode($arr[$i]['value']);	
		}
		
		return $arr;
	}
	
	function listado_cuentas_2($term) {
		/*$sql = "select top 10  convert(varchar,max(NRO_CUENTA)) +' - '+NOMBRE_CLIENTE label , max(NRO_CUENTA) value from CORPORATE.dbo.VISTA_BASE_MIGRACION_APP 
		        where NOMBRE_CLIENTE like '%".$term."%' or nro_cuenta like '%".$term."%' group by NOMBRE_CLIENTE
				";
		
		$arr=$this->sqlserver->query($sql);
		
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['label']= utf8_encode($arr[$i]['label']) ;
			$arr[$i]['value']= utf8_encode($arr[$i]['value']);	
			$arr[$i]['unif']= utf8_encode($arr[$i]['unif']);	
		}
		*/
		
		//$sql = "select  top 20 * from  BUSQUEDA_UNIFICADO where  busqueda like '%".$term."%'";
		
		$sql = "Select top 10 *
					From APP_B2B.dbo.BUSQUEDA_UNIFICADO
					Where busqueda like '%".$term."%'
					union
				Select top 10 *
					From APP_B2B.dbo.BUSQUEDA_UNIFICADO
					Where COD_CLIENTE_NOMBRE like '%".$term."%'
						  and ISNUMERIC(busqueda)=0";
	
		$arr=$this->sqlserver->query($sql);
		//$this->ping('SQL',$sql);
		for($i=0;$i<count($arr);$i++){
			
			
			$unificado=str_replace('"',"''",utf8_encode($arr[$i]['COD_CLIENTE_NOMBRE']));
		
			$arr[$i]['unificado']	= $unificado ;
			
			$nombre=str_replace('"',"''",utf8_encode($arr[$i]['Nombre']));
		
			$arr[$i]['nombre']		= $nombre;	
			$arr[$i]['cuenta']		= utf8_encode($arr[$i]['nro_cuenta']);	
			$arr[$i]['busqueda']	= utf8_encode($arr[$i]['busqueda']);	
			
			$arr[$i]['COD_CLIENTE_NOMBRE']='';
			$arr[$i]['Nombre']='';
		}

		return $arr;
	}
	function telf_eje($nombre){
		$nombre=explode ('-' , $nombre );
		$nombre= $nombre[0];
		//$sql = "select * from [ReportServerAut].[dim].[EJECUTIVO] where NOMBRE like '%".trim($nombre)."%'";
		$sql = "SELECT * FROM CORPORATE.dbo.CORP_TIPO_EJECUTIVO_LAST WHERE EJECUTIVO='".trim($nombre)."'";
		//echo $sql;
		/*$sql = "SELECT TOP 1 * FROM [APP_B2B].[dbo].[B2B_COR_EQUIPO_HUMANO_MENSUAL] WHERE mes=( (YEAR(getdate())*100) + MONTH(getdate()) ) and 
					(NOMBRE_EHUMANO like '%".trim($nombre)."%' 
					or REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(NOMBRE_EHUMANO,char(193),'A'),char(201),'E'),char(205),'I'),char(211),'O'),char(218),'U'),char(209),'N'),'#','N') like '%".str_replace('Ñ','N',str_replace(', ','%',trim($nombre)))."%' 
					or NOMBRE_COMPLETO like '%".trim($nombre)."%')";*/
		$arr=$this->sqlserver->query($sql);
		//return print_r($arr);
		if(count($arr)==0){
			return "";	
		}else{
			return $arr[0];
		}
	}
	function telf_cod_eje($nombre){
		$nombre=explode ('-' , $nombre );
		$nombre= $nombre[0];
		//$sql = "select * from [ReportServerAut].[dim].[EJECUTIVO] where NOMBRE= '".$nombre."'";
		$sql = "SELECT TOP 1 H.* FROM [CORPORATE].[dbo].[cubo_carteras] C
					LEFT JOIN [APP_B2B].[dbo].[B2B_COR_EQUIPO_HUMANO_MENSUAL] H ON H.COD_EHUMANO=C.EHUMANO AND C.PERIODO=H.MES
					WHERE COD_CLIENTE_NOMBRE='".$nombre."' AND EHUMANO IS NOT NULL";
		$arr=$this->sqlserver->query($sql);
		//return print_r($arr);
		if(count($arr)==0){
			return "";	
		}else{
			return $arr[0];
		}
	}
	function listado_cuentas_3($term) {

		$sql = "select  top 5 * from  BUSQUEDA_UNIFICADO where  busqueda like '%".$term."%'";
	
		$arr=$this->sqlserver->query($sql);
		
		for($i=0;$i<count($arr);$i++){
			
			$nombre=str_replace('"',"''",utf8_encode($arr[$i]['COD_CLIENTE_NOMBRE']));
		
			$arr[$i]['unificado']	= $nombre ;
			
			$nombre=str_replace('"',"''",utf8_encode($arr[$i]['Nombre']));
		
			$arr[$i]['nombre']		= $nombre;	
			$arr[$i]['cuenta']		= utf8_encode($arr[$i]['nro_cuenta']);	
			$arr[$i]['busqueda']	= utf8_encode($arr[$i]['busqueda']);	
			
			$arr[$i]['COD_CLIENTE_NOMBRE']='';
			$arr[$i]['Nombre']='';
		}

		return $arr;
	}
	
	function ofertab2b(){
		/*
		*/
		$sql = "select  TG,
						SUBSIDIO,
						COD_PLAN,
						NOMBRE_NUEVO_PLAN,
						TBM_NUEVA,
						MINUTOS,
						MEGAS_PLAN,
						WHATSAPP,
						SMS,
						FAVORITOS,
						SMARTAPP,
						ROAMING_VOZ,
						ROAMING_DATOS,
						TIGO_STAR from  CORPORATE.dbo.PLANES_SUGERIDOS
						";
		$arr=$this->sqlserver->query($sql);
		
		for($i=0;$i<count($arr);$i++){
			/*$arr[$i]['DESCRIPCION_PLAN']=utf8_encode($arr[$i]['DESCRIPCION_PLAN']);
			$arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']=utf8_encode($arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']);
			$arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']=utf8_encode($arr[$i]['PLAN_SUGERIDO_CON_SUBSIDIO']);	*/
		}
		return $arr;	
	}
	
	function mapa($cta){
        $sql = "SELECT CIUDAD_COBERTURA,LATITUDE,LONGITUDE, ZONA FROM  CORPORATE.dbo.VISTA_BASE_MIGRACION_APP WHERE NRO_CUENTA=".$cta;
		$arr=$this->sqlserver->query($sql);
		
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['LATITUDE']= sprintf('%0.10f', $arr[$i]['LATITUDE']); //utf8_encode($arr[$i]['DESCRIPCION_PLAN']);
			$arr[$i]['LONGITUDE']= sprintf('%0.10f', $arr[$i]['LONGITUDE']);;//utf8_encode($arr[$i]['']);
		}
		return $arr;
	}
	
	
	/*function vista360($nombre){
		$sql = "select * from APP_B2B.[dbo].[VISTA_360] where NOMBRE_CLIENTE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['REVENUE'] 	= str_replace(',','.', number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	=str_replace(',','.', number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['RGU'] 	= str_replace(',','.', number_format($arr[$i]['RGU'],0)); 
		}
		return $arr;
	}*/
	function vista360_uni($nombre_uni){
		$sql = "select  COD_CLIENTE_NOMBRE,PRODUCTO,sum(revenue) REVENUE,sum(TBM) TBM,sum(RGU) RGU from APP_B2B.[dbo].[VISTA_360_UNIFICADA] 
		where COD_CLIENTE_NOMBRE='".$nombre_uni."' group by COD_CLIENTE_NOMBRE,PRODUCTO order by PRODUCTO";
		//echo $sql;
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['REVENUE'] = str_replace(',','.', number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	= str_replace(',','.', number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['RGU'] 	= str_replace(',','.', number_format($arr[$i]['RGU'],0)); 
		}
		return $arr;
	}
	
	function vista360_uni_det($nombre_uni){
		$sql = "SELECT SISTEMA,COD_CLIENTE,NOMBRE_CLIENTE,COD_CLIENTE_NOMBRE 
				FROM corporate.dbo.COD_CLIENTE_NOMBRE where COD_CLIENTE_NOMBRE='".$nombre_uni."' order by sistema";
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['SISTEMA']            = utf8_encode($arr[$i]['SISTEMA']) ;
			$arr[$i]['COD_CLIENTE'] 	   = utf8_encode($arr[$i]['COD_CLIENTE']) ;
			$arr[$i]['NOMBRE_CLIENTE'] 	   = utf8_encode($arr[$i]['NOMBRE_CLIENTE']) ;
			$arr[$i]['COD_CLIENTE_NOMBRE'] = utf8_encode($arr[$i]['COD_CLIENTE_NOMBRE']) ;
		}
		return $arr;
	}
	
	function vista360_scoring($nombre_uni){
		$sql = "SELECT distinct COD_CLIENTE_NOMBRE ,titulo_score 
				FROM CORPORATE.dbo.SCORING_B2B_360 
				where COD_CLIENTE_NOMBRE='".$nombre_uni."' ";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			return $arr[0]['titulo_score'];
		}else{
			return '';
		}
	}
	
	/*function vista360_totales($nombre){
		$sql = "select sum(REVENUE) REVENUE,sum(TBM) TBM,sum(RGU) RGU from APP_B2B.[dbo].[VISTA_360] where NOMBRE_CLIENTE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['REVENUE'] 	= str_replace(',','.',number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	= str_replace(',','.',number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['RGU'] 	=str_replace(',','.',number_format($arr[$i]['RGU'],0))  ; 
		}
		return $arr;
	}*/
	
	function vista360_totales_uni($nombre_uni){
		$sql = "select sum(REVENUE) REVENUE,sum(TBM) TBM,sum(RGU) RGU from APP_B2B.[dbo].[VISTA_360_UNIFICADA] where COD_CLIENTE_NOMBRE='".$nombre_uni."'";
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			$arr[$i]['REVENUE'] 	= str_replace(',','.',number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	= str_replace(',','.',number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['RGU'] 	=str_replace(',','.',number_format($arr[$i]['RGU'],0))  ; 
		}
		return $arr;
	}
	
	function vista360_detalle_uni($nombre){
		$sql = "SELECT 
				   [PRODUCTO]
				  ,[TIPO_EJECUTIVO]
				  ,[NRO_CUENTA]
				  ,[ESTADO]
				  ,[FECHA_HABILITACION]
				  ,[PLAN_CONSUMO]
				  ,[TBM]
				  ,[TBM_USD]
				FROM [APP_B2B].[dbo].[TBL_DETALLE_CUENTAS]
				where COD_CLIENTE_NOMBRE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
		for($i=0;$i<count($arr);$i++){
			//$arr[$i]['REVENUE'] 	= str_replace(',','.',number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	= str_replace(',','.',number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['TBM_USD'] 	= str_replace(',','.',number_format($arr[$i]['TBM_USD'],0)); 
			
		}
		return $arr;
	}
	
	function vista360_cuentas($nombre){
		$sql = "SELECT [TIPO]
				  ,[CANT]
			  FROM [APP_B2B].[dbo].[VISTA_ESTADO_CUENTAS_UNIFICADO]
				where COD_CLIENTE_NOMBRE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
		/*for($i=0;$i<count($arr);$i++){
			//$arr[$i]['REVENUE'] 	= str_replace(',','.',number_format($arr[$i]['REVENUE'],0));
			$arr[$i]['TBM'] 	= str_replace(',','.',number_format($arr[$i]['TBM'],0)); 
			$arr[$i]['TBM_USD'] 	= str_replace(',','.',number_format($arr[$i]['TBM_USD'],0)); 
			
		}*/
		return $arr;
	}
	/*function vista360_cuentas_total($nombre,$tipo){
		$sql="select sum(RGU) RGU from APP_B2B.[dbo].[VISTA_360] where NOMBRE_CLIENTE='".$nombre."' ";
		if($tipo=='CUENTAS EN MO MOVIL') 		$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN PROPIO') 			$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN SR') 				$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS SIN CHIP LTE') 		$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN TP') 				$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN COBERTURA HFC') 	$sql .= " and PRODUCTO='MOVIL'";
		
		if($tipo=='CUENTAS EN PA') 				$sql .= " and PRODUCTO<>'MOVIL'";
		if($tipo=='CUENTAS EN MO FIJO') 		$sql .= " and PRODUCTO<>'MOVIL'";
		
		
		$arr=$this->sqlserver->query($sql);
	
		return $arr[0]['RGU'];
	}*/
	function vista360_cuentas_total_uni($nombre_uni,$tipo){
		$sql="select sum(RGU) RGU from APP_B2B.[dbo].[VISTA_360_UNIFICADA] where COD_CLIENTE_NOMBRE='".$nombre_uni."' ";
		if($tipo=='CUENTAS EN MO MOVIL') 		$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN PROPIO') 			$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN SR') 				$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS SIN CHIP LTE') 		$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN TP') 				$sql .= " and PRODUCTO='MOVIL'";
		if($tipo=='CUENTAS EN COBERTURA HFC') 	$sql .= " and PRODUCTO='MOVIL'";
		
		if($tipo=='CUENTAS EN PA') 				$sql .= " and PRODUCTO<>'MOVIL'";
		if($tipo=='CUENTAS EN MO FIJO') 		$sql .= " and PRODUCTO<>'MOVIL'";
		
		
		$arr=$this->sqlserver->query($sql);
	
		return $arr[0]['RGU'];
	}
	function vista360_cuentas_total_uni_todos($nombre_uni){
		$sql="SELECT SUM(TOT_CUENTAS_EN_MO_MOVIL) TOT_CUENTAS_EN_MO_MOVIL,
				SUM(TOT_CUENTAS_EN_PROPIO) TOT_CUENTAS_EN_PROPIO,
				SUM(TOT_CUENTAS_EN_SR) TOT_CUENTAS_EN_SR,
				SUM(TOT_CUENTAS_SIN_CHIP_LTE) TOT_CUENTAS_SIN_CHIP_LTE,
				SUM(TOT_CUENTAS_EN_TP) TOT_CUENTAS_EN_TP,
				SUM(TOT_CUENTAS_EN_COBERTURA_HFC) TOT_CUENTAS_EN_COBERTURA_HFC,
				SUM(TOT_CUENTAS_EN_PA) TOT_CUENTAS_EN_PA,
				SUM(TOT_CUENTAS_EN_MO_FIJO) TOT_CUENTAS_EN_MO_FIJO
				FROM(
					SELECT --sum(RGU) RGU 
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_MO_MOVIL,
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_PROPIO,
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_SR,
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_SIN_CHIP_LTE,
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_TP,
						CASE WHEN PRODUCTO = 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_COBERTURA_HFC,
						CASE WHEN PRODUCTO <> 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_PA,
						CASE WHEN PRODUCTO <> 'MOVIL' THEN sum(RGU) END TOT_CUENTAS_EN_MO_FIJO
					FROM APP_B2B.[dbo].[VISTA_360_UNIFICADA] 
						WHERE COD_CLIENTE_NOMBRE='".$nombre_uni."' 
					GROUP BY PRODUCTO
				) A";
		
		$arr=$this->sqlserver->query($sql);
	
		return $arr[0];
	}
	function vista360_cuentas_tipo_uni($nombre,$tipo){
		$sql = "SELECT sum(CANT) as cant
			  FROM [APP_B2B].[dbo].[VISTA_ESTADO_CUENTAS_UNIFICADO] 
				where COD_CLIENTE_NOMBRE='".$nombre."' and tipo='".$tipo."'";
		$arr=$this->sqlserver->query($sql);
	
		return $arr[0]['cant'];
	}
	function vista360_cuentas_tipo_uni_todos($nombre){
		$sql = "SELECT MAX(CANT_CUENTAS_EN_MO_MOVIL) CANT_CUENTAS_EN_MO_MOVIL,
					MAX(CANT_CUENTAS_EN_PROPIO) CANT_CUENTAS_EN_PROPIO,
					MAX(CANT_CUENTAS_EN_SR) CANT_CUENTAS_EN_SR,
					MAX(CANT_CUENTAS_SIN_CHIP_LTE) CANT_CUENTAS_SIN_CHIP_LTE,
					MAX(CANT_CUENTAS_EN_TP) CANT_CUENTAS_EN_TP,
					MAX(CANT_CUENTAS_EN_COBERTURA_HFC) CANT_CUENTAS_EN_COBERTURA_HFC,
					MAX(CANT_CUENTAS_EN_PA) CANT_CUENTAS_EN_PA,
					MAX(CANT_CUENTAS_EN_MO_FIJO) CANT_CUENTAS_EN_MO_FIJO
					FROM (
					SELECT 
						CASE WHEN TIPO = 'CUENTAS EN MO MOVIL' THEN SUM(CANT) END CANT_CUENTAS_EN_MO_MOVIL,
						CASE WHEN TIPO = 'CUENTAS EN PROPIO' THEN SUM(CANT) END CANT_CUENTAS_EN_PROPIO,
						CASE WHEN TIPO = 'CUENTAS EN SR' THEN SUM(CANT) END CANT_CUENTAS_EN_SR,
						CASE WHEN TIPO = 'CUENTAS SIN CHIP LTE' THEN SUM(CANT) END CANT_CUENTAS_SIN_CHIP_LTE,
						CASE WHEN TIPO = 'CUENTAS EN TP' THEN SUM(CANT) END CANT_CUENTAS_EN_TP,
						CASE WHEN TIPO = 'CUENTAS EN COBERTURA HFC' THEN SUM(CANT) END CANT_CUENTAS_EN_COBERTURA_HFC,
						CASE WHEN TIPO = 'CUENTAS EN PA' THEN SUM(CANT) END CANT_CUENTAS_EN_PA,
						CASE WHEN TIPO = 'CUENTAS EN MO FIJO' THEN SUM(CANT) END CANT_CUENTAS_EN_MO_FIJO
								  FROM [APP_B2B].[dbo].[VISTA_ESTADO_CUENTAS_UNIFICADO] 
									where COD_CLIENTE_NOMBRE='".$nombre."'
									GROUP BY TIPO
					) A";
		$arr=$this->sqlserver->query($sql);
	
		return $arr[0];
	}
	function vista360_cuenta_detalle_uni($nombre,$tipo){
		$sql = "  select NRO_CUENTA from [APP_B2B].dbo.VISTA_ESTADO_CUENTAS_DETALLE_UNIFICADO
				where COD_CLIENTE_NOMBRE='".$nombre."' and tipo='".$tipo."'";
		$arr=$this->sqlserver->query($sql);
	
		return $arr;
	}
	function vista360_cuenta_detalle_uni_todos($nombre){
		$sql = "  select ROW_NUMBER() OVER(ORDER BY TIPO ASC) AS ID, TIPO, NRO_CUENTA from [APP_B2B].dbo.VISTA_ESTADO_CUENTAS_DETALLE_UNIFICADO
				where COD_CLIENTE_NOMBRE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
	
		return $arr;
	}
	
	function vista360_cuenta_detalle($nombre,$tipo){
		$sql = "  select NRO_CUENTA from [APP_B2B].dbo.VISTA_ESTADO_CUENTAS_DETALLE
				where NOMBRE_CLIENTE='".$nombre."' and tipo='".$tipo."'";
			
		$arr=$this->sqlserver->query($sql);
	
		return $arr;
	}
	
	
	function vista360_deuda_fijo_uni($nombre){
		/*$sql = " SELECT isnull(sum([TOTAL]),0) TOTAL
				  FROM [APP_B2B].[dbo].[DEUDA_CLIENTE_UNIFICADO]
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='DEUDA BBD' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float)$arr[0]['TOTAL'], 2, ',', '.'); 
		return $arr;
		*/
		$sql = "    SELECT  isnull(sum([MONTO_FACTURA]),0) TOTAL
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='BBD' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float) $arr[0]['TOTAL'] , 2, ',', '.'); 
		
		return $arr;	
	}

    function vista360_deuda_movil_uni($nombre){
		/*$sql = " SELECT isnull(sum([TOTAL]),0) TOTAL
				  FROM [APP_B2B].[dbo].[DEUDA_CLIENTE_UNIFICADO]
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='DEUDA BCCS' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float)$arr[0]['TOTAL'], 2, ',', '.'); 
		
		return $arr;
		*/
		$sql = "    SELECT  isnull(sum([MONTO_FACTURA]),0) TOTAL
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='BCCS' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float) $arr[0]['TOTAL'] , 2, ',', '.'); 
		
		return $arr;
	}
	
	function vista360_saldos($nombre){
		/*$sql = " SELECT isnull(sum([TOTAL]),0) TOTAL
				  FROM [APP_B2B].[dbo].[DEUDA_CLIENTE_UNIFICADO]
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='DEUDA BCCS' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float)$arr[0]['TOTAL'], 2, ',', '.'); 
		
		return $arr;
		*/
		$sql = "SELECT sum(saldo_corebalance) AS SALDO_CORE_BS FROM [APP_B2B].dbo.[CACHE_VISTA_SALDOS_BILLETERAS_360] WHERE
					COD_CLIENTE_NOMBRE='".$nombre."'";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float) $arr[0]['SALDO_CORE_BS'] , 2, ',', '.'); 
		
		return $arr;
	}

    function vista360_deuda_hfc_uni($nombre){
		/*
		$sql = " SELECT isnull(sum([TOTAL_FACTURA_X_CUENTA]),0) TOTAL
				  FROM [APP_B2B].dbo.DEUDA_SIGA_DETALLE
				  where COD_CLIENTE_NOMBRE ='".$nombre."'  ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float) $arr[0]['TOTAL'] , 2, ',', '.'); 
		
		return $arr;
		*/
		$sql = "    SELECT  isnull(sum([MONTO_FACTURA]),0) TOTAL
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='SIGA' ";
		$arr=$this->sqlserver->query($sql);
		$arr= number_format((float) $arr[0]['TOTAL'] , 2, ',', '.'); 
		
		return $arr;		  
	}


  	function vista360_deuda_fijo_detalle($nombre){
		/*$sql = "    SELECT *
				  FROM [dbo].[DEUDA_FIJO_DETALLE]
				  where COD_CLIENTE_NOMBRE ='".$nombre."'  ";
			return $this->sqlserver->query($sql);*/
		$sql = "    SELECT  *
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='BBD' ";
		return $this->sqlserver->query($sql);
	}

    function vista360_deuda_movil_detalle($nombre){
		/*$sql = "SELECT *
			  FROM [dbo].[DEUDA_MOVIL_DETALLE]
			  where COD_CLIENTE_NOMBRE  ='".$nombre."'  ";
		return $this->sqlserver->query($sql);*/
		$sql = "    SELECT  *
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='BCCS' ";
		return $this->sqlserver->query($sql);
	}
	
	function vista360_saldos_detalle($nombre){
		/*$sql = "SELECT *
			  FROM [dbo].[DEUDA_MOVIL_DETALLE]
			  where COD_CLIENTE_NOMBRE  ='".$nombre."'  ";
		return $this->sqlserver->query($sql);*/
		$sql = "SELECT * FROM [APP_B2B].dbo.[CACHE_VISTA_SALDOS_BILLETERAS_360] WHERE
					COD_CLIENTE_NOMBRE='".$nombre."'";
		return $this->sqlserver->query($sql);
	}

    function vista360_deuda_hfc_detalle($nombre){
		/*$sql = "SELECT *
			  FROM [APP_B2B].dbo.DEUDA_SIGA_DETALLE
			  where COD_CLIENTE_NOMBRE  ='".$nombre."'  ";
		return $this->sqlserver->query($sql);
		*/
		$sql = "    SELECT  *
				  FROM CORPORATE.dbo.CACHE_TOTAL_DEUDAS_COBRO_360
				  where COD_CLIENTE_NOMBRE ='".$nombre."' and sistema='SIGA' ";
		return $this->sqlserver->query($sql);
	}


    function vista360_bolsa_movil($nombre){
		$sql = "SELECT *
				  FROM [APP_B2B].[dbo].[CLIENTE_BOLSA]
				  where NOMBRE_CLIENTE ='".$nombre."' and TIPO='MOVIL' ";
		$arr=$this->sqlserver->query($sql);
		return $arr;
	}

	function vista_subsidio_uni($nombre){
		$sql = "select * from app_b2b.dbo.SUBSIDIO_TOTAL_CLIENTE_UNIFICADO
				  where COD_CLIENTE_NOMBRE ='".$nombre."'  ";
		$arr=$this->sqlserver->query($sql);
		
		if(count($arr)==0){
			$arr=[ '0' => ['PORCENTAJE_ENTREGADO'=>0,'TBM_CASADAS'=>0,'SUBSIDIO_USD'=>0 ] ];
		}
		$arr[0]['PORCENTAJE_ENTREGADO']	= number_format((float)$arr[0]['PORCENTAJE_ENTREGADO'], 0, ',', '.'); 
		$arr[0]['TBM_CASADAS']			= number_format((float)$arr[0]['TBM_CASADAS'], 2, ',', '.'); 
		$arr[0]['SUBSIDIO_USD']			= number_format((float)$arr[0]['SUBSIDIO_USD'], 2, ',', '.'); 

		return $arr;
	}
	
	function ping($accion,$cta){
		$username=Usr::gUsuario();
		$accion=utf8_decode($accion);
		$sql="insert into Bitacora values(getdate(),'".$username."','".$accion."','".$cta."','".utf8_decode(Usr::gNombreCompleto())."','".Usr::gCargo()."','".$this->ip()."')";
		//echo $sql;
		$this->sqlserver->query($sql);
	}
	
	function update_search(){
		
		$sql = "select count(*) cant_inicial from  [APP_B2B].[dbo].BUSQUEDA_UNIFICADO";
		$arr=$this->sqlserver->query($sql);
		$cant_inicial = $arr[0]['cant_inicial'];
		
		try {
			//$sql = "EXEC msdb.dbo.sp_start_job N'BASE 360'";
			//$sql = "EXEC [CORPORATE].[dbo].[SP_ACTUALIZAR_BASE_360]";
			//$this->sqlserver->query($sql);
			$pumpId = 1;
			/*$sql = "SET NOCOUNT ON 
                            DECLARE @return_value int
                            EXEC    @return_value = [dbo].[SP_ACTUALIZAR_BASE_360]
                                    @PumpID = $pumpId";
			$result = $this->sqlserver->query($sql);*/						
			/*$result = $this->db->simple_query("SET NOCOUNT ON 
                            DECLARE @return_value int
                            EXEC    @return_value = [dbo].[SP_ACTUALIZAR_BASE_360]
                                    @PumpID = $pumpId");
			return $result;*/
			$sql = "EXEC [CORPORATE].[dbo].[SP_ACTUALIZAR_BASE_360];";
			$query = $this->sqlserver->query($sql);

			//$sync= $this->load->database('sync', TRUE);
			//$query = $this->sqlserver->query("Calef_Replicas")->result_array();
			//echo '<pre>';
			//print_r($query);
			//$query = $this->sqlserver->query($sql);
			
			//$query->result();
			
		}catch(Exception $e) {
			return json_encode(array('ok'=> false, 'cant_inicial' => $cant_inicial, 'msg'=> $e->getMessage()));
		}
		
		
		//$sql = "EXEC [APP_B2B].[dbo].[cachear_busqueda_unificada]";
		//$this->sqlserver->query($sql);
		
		/*$sql = "select count(*) cant_final from  [APP_B2B].[dbo].BUSQUEDA_UNIFICADO";
		$arr=$this->sqlserver->query($sql);
		$cant_final = $arr[0]['cant_final'];*/
		
		return $cant_inicial;
	}

	function cant_search(){
		$sql = "select count(*) cant_final from  [APP_B2B].[dbo].BUSQUEDA_UNIFICADO";
		$arr=$this->sqlserver->query($sql);
		$cant_final = $arr[0]['cant_final'];
		
		return $cant_final;
	}

	function view_history($nombre){
		
		try {

			/*$sql = "Declare @cliente varchar(200)='%$nombre%', @cliente_filtro varchar(200)=''
			Declare @base_cartera table (Estado_cliente varchar(15), cod_cliente_nombre varchar(400),nombre_cliente varchar(200), nit varchar(20),closing_mic varchar(4), sistema varchar(15), cod_cliente int,
			jefe varchar(100), ejecutivo_sistema varchar(150), tipo_ejecutivo varchar(100), segmento_corp_tamano varchar(50), fecha_proceso datetime, rgu int, tbm_usd float)
			
			insert @base_cartera
			Select *
			From (
					Select corporate.carterizacion.fn_estado_general_cliente(a.cod_cliente_nombre,0) Estado_cliente,
						a.cod_cliente_nombre,a.nombre_cliente,a.nit,a.closing_mic,a.sistema,a.cod_cliente,b.jefe,
						a.ejecutivo_sistema,a.tipo_ejecutivo,a.segmento_corp_tamano,a.fecha_proceso,a.rgu,a.tbm_usd
					From corporate.carterizacion.cubo_cartera a
					left join corporate.dbo.corp_tipo_ejecutivo b on a.ejecutivo_sistema=case When a.ejecutivo_sistema='TELEVENTAS' Then b.EJECUTIVO Else b.ejecutivo_bccs End
																	and b.mes=convert(varchar(6),a.fecha_proceso,112)
				Where a.cod_cliente_nombre like @cliente or a.NOMBRE_cliente like @cliente
			) a
			Where a.cod_cliente_nombre like case when @cliente_filtro='' then a.cod_cliente_nombre else @cliente_filtro end
			
			
			Select sistema, cod_cliente, min(periodo) periodo_ini, MAX(periodo) periodo_fin, ciudad, ejecutivo_sistema, tipo_ejecutivo, segmento_corp_tamano
			From corporate.carterizacion.cubo_carteras_periodo
			Where cod_cliente in (Select distinct cod_cliente From @base_cartera)
			Group by ciudad, segmento_corp_tamano, tipo_ejecutivo, ejecutivo_sistema, sistema, cod_cliente
			Order by cod_cliente, sistema, periodo_fin";*/

			$sql = "Select * From corporate.carterizacion.fn_historico_cliente('".$nombre."') 
			Order by cod_cliente, sistema, periodo_fin";

			$arr=$this->sqlserver->query($sql);	
			
		}catch(Exception $e) {
			return json_encode(array('ok'=> false,'msg'=> $e->getMessage()));
		}
		
		return $arr;
	}




	function BlockSQLInjection($str)
	{
		//return str_replace(array("'",'"',"'",'"'),array("'","&quot;"'","&quot;",$str));
	}

	function list_items($tipo=''){
		$cad = "max";
		if($tipo=='COMPRA'){
			$cad = "sum";
		}
		$sql = "select i.*, s.PUJA, su.OFRECIDO, isnull(img.nro_image,0) NRO_IMAGEN, IMG2.URL_IMAGE
					from [APP_B2B].[dbo].[INVENTARIO] I
				left join (select id_inventario, $cad(monto) puja from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] group by id_inventario) s on s.ID_INVENTARIO=i.ID 
				left join (select id_inventario, $cad(monto) ofrecido from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] where usuario='".Usr::gUsuario()."' group by id_inventario) su on su.ID_INVENTARIO=i.ID 
				left join (select id_inventario, max(nro_image) nro_image from [APP_B2B].[dbo].[INVENTARIO_IMAGEN] group by id_inventario) IMG ON I.ID = IMG.ID_INVENTARIO
				left join (select id_inventario, min(nro_image) nro_image, min(url_image) url_image from [APP_B2B].[dbo].[INVENTARIO_IMAGEN] where estado='A' group by id_inventario) IMG2 ON I.ID = IMG2.ID_INVENTARIO
				where i.tipo_compra='".$tipo."'
		";
		$arr=$this->sqlserver->query($sql);
		return $arr;
	}

	function list_items_award($tipo=''){
		$sql = "select i.ID, I.ITEM, I.MARCA, I.TIPO_MODELO, I.PLACA_DETALLE, I.MODELO_DIMENSION, I.COLOR, I.CIUDAD, I.PRECIO_BASE, s2.MONTO, rrhh.NOMBRE_COMPLETO
					from [APP_B2B].[dbo].[INVENTARIO] I
				left join (select id_inventario, max(monto) max_monto from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] group by id_inventario) s on s.ID_INVENTARIO=i.ID 
				left join [APP_B2B].[dbo].[INVENTARIO_SUBASTA] s2 on s2.ID_INVENTARIO=s.ID_INVENTARIO and s2.MONTO=s.max_monto
				left join [APP_B2B].[dbo].[B2B_COR_EQUIPO_HUMANO_MENSUAL] rrhh on rrhh.USER_CODE=s2.USUARIO
				where i.tipo_compra='".$tipo."'
				order by i.id asc
		";
		//echo $sql;
		$arr=$this->sqlserver->query($sql);
		return $arr;
	}

	function list_items_users(){
		$sql = "select i.ID, I.ITEM, I.MARCA, I.TIPO_MODELO, I.PLACA_DETALLE, I.MODELO_DIMENSION, I.COLOR, I.CIUDAD, I.PRECIO_BASE, s2.MONTO, rrhh.NOMBRE_COMPLETO
					from [APP_B2B].[dbo].[INVENTARIO] I
				left join (select id_inventario, max(monto) max_monto from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] group by id_inventario) s on s.ID_INVENTARIO=i.ID 
				left join [APP_B2B].[dbo].[INVENTARIO_SUBASTA] s2 on s2.ID_INVENTARIO=s.ID_INVENTARIO and s2.MONTO=s.max_monto
				left join [APP_B2B].[dbo].[B2B_COR_EQUIPO_HUMANO_MENSUAL] rrhh on rrhh.USER_CODE=s2.USUARIO
				where s2.USUARIO='".Usr::gUsuario()."'
				order by i.id asc
		";
		//echo $sql;
		$arr=$this->sqlserver->query($sql);
		return $arr;
	}

	function list_pujas(){
		$sql = "select * from  [APP_B2B].[dbo].[INVENTARIO_SUBASTA] where usuario='".Usr::gUsuario()."'";
		$arr=$this->sqlserver->query($sql);
		return $arr;
	}

	function load_mayor($id){
		$arr = [];
		$sql = "select ISNULL(MAX(s.MONTO),MAX(i.PRECIO_BASE)) + 1 mayor from [APP_B2B].[dbo].[INVENTARIO] I
				left join [APP_B2B].[dbo].[INVENTARIO_SUBASTA] s on s.ID_INVENTARIO=i.ID where i.id=".$id;
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			return $arr[0]['mayor'];
		}
		return 0;
	}

	function save_puja($id_inventario, $monto){

		$validar = "select MAX(monto) mayor from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] where ID_INVENTARIO=".$id_inventario;
		$val = $this->sqlserver->query($validar);
		if(count($val) > 0 && intval($val[0]['mayor']) == intval($monto)){
			$return = false;
			$msg = "Alguien mas acaba de registrar una puja con el mismo monto ".$monto;
		}else{
			$sql="insert into [APP_B2B].[dbo].[INVENTARIO_SUBASTA](ID_INVENTARIO,USUARIO,EHUMANO,MONTO) values(".$id_inventario.",'".Usr::gUsuario()."',".Usr::gEHumano().",".$monto.")";
			$this->sqlserver->query($sql);
			$return = true;
			$msg = "Se registro correctamente el monto ".$monto;
		}
		return array("ok" => $return, "msg" => $msg);
	}

	function save_buy($id_inventario, $monto){

		$validar = "select I.CANTIDAD, S.COMPRAS from [APP_B2B].[dbo].[INVENTARIO] I
						left join (select ID_INVENTARIO, SUM(monto) COMPRAS from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] group by ID_INVENTARIO) S ON S.ID_INVENTARIO=I.ID
					where I.ID=".$id_inventario;
		$val = $this->sqlserver->query($validar);
		if(count($val) > 0 && intval($monto) > (intval($val[0]['CANTIDAD'])-intval($val[0]['COMPRAS'])) ){
			$return = false;
			$msg = "Alguien mas acaba de registrar una compra, quedan disponibles ".(intval($val[0]['CANTIDAD'])-intval($val[0]['COMPRAS']));
		}else{
			$sql="insert into [APP_B2B].[dbo].[INVENTARIO_SUBASTA](ID_INVENTARIO,USUARIO,EHUMANO, MONTO) values(".$id_inventario.",'".Usr::gUsuario()."',".Usr::gEHumano().",".$monto.")";
			$this->sqlserver->query($sql);
			$return = true;
			$msg = "Se registro correctamente el monto ".$monto;
		}
		return array("ok" => $return, "msg" => $msg);
	}

	function load_pujas(){
		$arr = [];
		$sql = "select s.ID_INVENTARIO, s.PUJA, su.OFRECIDO 
					from (select id_inventario, max(monto) puja from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] group by id_inventario) s 
				inner join (select id_inventario, max(monto) ofrecido from [APP_B2B].[dbo].[INVENTARIO_SUBASTA] where usuario='".Usr::gUsuario()."' group by id_inventario) su on su.ID_INVENTARIO=s.ID_INVENTARIO ";
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			return $arr;
		}
		return 0;
	}

	function list_images($item){
		$result = [];
		$sql = "select nro_image, url_image from  [APP_B2B].[dbo].[INVENTARIO_IMAGEN] where estado='A' and id_inventario=".$item." order by nro_image asc";
		//echo $sql;
		$arr=$this->sqlserver->query($sql);
		if(count($arr)>0){
			$result = $arr;
		}
		return $result;
	}

	function save_image($item, $nro_img, $adjunto){
		$url_image = 'item_'.$item.'/'.$adjunto;
		$targetDir = "C:\\inetpub\\wwwroot\\subasta\\files\\".str_replace('/','\\',$url_image); 
		if (file_exists($targetDir)) {
			$sql="insert into [APP_B2B].[dbo].[INVENTARIO_IMAGEN](ID_INVENTARIO,NRO_IMAGE,URL_IMAGE) values(".$item.",".$nro_img.",'".$url_image."')";
			//echo $sql;
			$this->sqlserver->query($sql);
		}
		return true;
	}

	function delete_image($item, $nro_img, $adjunto){
		//$url_image = 'item_'.$item.'/'.$adjunto;
		$targetDir = "C:\\inetpub\\wwwroot\\subasta\\files\\".str_replace('/','\\',$adjunto); 
		if (file_exists($targetDir)) {
			//mkdir($targetDir, 0775, true); 

			/*@chmod($targetDir, 777);
			@chown($targetDir, 777);
			@unlink($targetDir);*/

			//unlink($targetDir);
			//rmdir($targetDir);
			//chown($targetDir,777); //Insert an Invalid UserId to set to Nobody Owern; 666 is my standard for "Nobody" 
			//unlink($targetDir); 
			
			//$command = "chmod -R 777 ".$targetDir;
			//exec($command);

			/*HABILITAR ESTA LINEA PARA ELIMINAR EL ARCHIVO*/
			//unlink($targetDir);
		}

		//$sql="delete from [APP_B2B].[dbo].[INVENTARIO_IMAGEN] where ID_INVENTARIO=".$item." and NRO_IMAGE=".$nro_img;
		$sql="update [APP_B2B].[dbo].[INVENTARIO_IMAGEN] set estado='X' where ID_INVENTARIO=".$item." and NRO_IMAGE=".$nro_img;
		//echo $sql;
		$this->sqlserver->query($sql);
		return true;
	}
  
}

