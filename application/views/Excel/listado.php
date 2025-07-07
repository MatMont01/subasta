<style>
	.fontf{font-family:courier; font-size:13px;}
	.fila:hover{background-color: #e0ffe0;}
    .fila:hover b.cro{color: #090;text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);}
	.fila:hover i{text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);}
	.fila a:hover{border: 1px solid #ccc;text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);}

	.fila .desc{font-size:11px;line-height:1;color: #aaa;}
	.fila .mensaje	{     color: #e55;
    font-size: 11px;}
	
	.filahija td{ border-top:none !important; padding-top:0px !important;padding-bottom:0px !important;}
	
	.well { padding:10px }
	
	
	.fila{
		border-left: 1px solid #ddd;
		border-right: 1px solid #ddd;
	}
	
	#listado table tbody tr:last-child{
		border-bottom:1px solid #ddd;
	}
	
	i.fa-folder{
	    color: #eecc00;	
	}
	
	div#listado table tr td{
		/*padding-bottom: 1px;
		padding-top: 1px;*/
	}
	.cro{color:#555}
	
	
	#filtro-funnel input, #filtro-funnel select, #filtro-funnel label{
		padding: 3px 8px !important;
		height: auto !important;
		font-size: 11px;
	}

	
	
	
	
	
	.leyenda{
	left: 16%;
    position: absolute;
    color: #444;
    text-shadow: 1px 1px #bbb;
    font-size: 12px;
    font-family: Helvetica;
    font-weight: bold;
}
.leyenda2{
	    left: 2.3%;
    position: absolute;
    color: #fff;
    text-shadow: 1px 1px 6px #222;
    font-size: 9px;
    font-family: Helvetica;
    font-weight: bold;
    width: 8%;
    text-align: center;
}
.valor{
	    position: absolute;
    width: 100%;
    background-size: 100% 100%;
    font-size: 10px;
    font-family: Helvetica;
    font-weight: bold;
    color: #fff;
        text-shadow: 0px 0px 3px #222;
    height: 20%;
    padding: 1% 23% 0% 59%;
    box-sizing: border-box;
    text-align: center;
    line-height: 1;
}


.label {
    font-size: 95%;
    padding: 1px 5px;
    font-weight: normal;
}

.etapa{color:#00b; cursor:pointer;}
	.editar{color:#0b0; cursor:pointer;}
	
	
	.etapa:hover, .editar:hover{
		text-shadow: 1px 1px 5px rgba(115, 115, 115, 1);
	
	}
	
	.msg-gris{
		background: #ddd;
    color: #666;
	}
	
	
	#ver_mas:hover{
		box-shadow: 0px 0px 8px #222;
		text-shadow: rgb(221, 221, 221) 1px 1px;
	}
	
	#ver_mas,#viendo_mas,#busqueda_completa{
		text-align: center;
	}
	
	.table-filtros{
		font-size: 11px;
		margin-bottom: 8px;
    border-spacing: 4px;
    border-collapse: inherit;
    width: 100%;		
	}
	.table-filtros td{
		padding: 1px 5px !important;
	}
	.table-filtros td.lb{
		text-align:right;
	}
	.table-filtros td.np{
		padding: 0px 0px !important;
		min-width: 160px;
	}
	.table-filtros td.np select{
		border-radius:0px !important;
		    border-width: 0.8px;
	}
	
	
	
	
	
	
	
	/* ######################################################### */
	/* ######################################################### */
	
	
	
	.encabezado{
		position:relative;
		/**/
		font-size: 10px;
	}
	.encabezado > i{
		cursor:pointer;
		font-size:14px;
	}
    .encabezado:hover{
		background: #eee;
	}	

	.encabezado .desplegable{
		position: absolute;
		border: 0.8px solid #aaa;
		background: #fff;
		cursor: default;
	
		top:99%;
		
		display:none;
		width:240px;
		font-weight: normal;
		padding:3px;
	
		
		box-shadow: 0px 9px 12px 0px #aaa;
		left: -1px;
		border-top: none;
	}
	.encabezado{
		border-width: 1px;
		border: 0.8px solid #999;
	}
	.encabezado.abierto {
		box-shadow: 0px 4px 12px 0px #aaa;
		background:#fff;
		z-index: 9999;
	}
	 
	.encabezado.abierto .desplegable{
		display:block;
		  
	}
	
	
	.encabezado i.dropdown{display:block;}
	.encabezado i.filtro	{display:none;}
	.encabezado i.iasc	{display:none;}
	.encabezado i.idesc	{display:none;}
	.encabezado i.cargando{display:none;}
	
	.encabezado.filtrado i.dropdown{display:none !important;}
	.encabezado.filtrado i.filtro  {display:block !important;}
	
	.encabezado.oasc i.iasc{display:block !important;}
	.encabezado.odesc i.idesc  {display:block !important;}
	
	
	
	.encabezado.ocupado i.filtro  {display:none !important;}
	.encabezado.ocupado i.dropdown{display:none !important;}
	.encabezado.ocupado i.cargando{display:block !important;}
	
	
	.desplegable .opcion{
		cursor:pointer;
		padding: 4px 10px;
	}
	
	.desplegable .opcion:hover{
		background: #eee;
	}
	
	.desplegable .opcion.asc i,
	.desplegable .opcion.desc i{
		color: #44a;
	}
	
	.desplegable .opcion.delfiltro{
		border-top: 0.8px solid #ddd;
	}
	
	.desplegable .opcion.delfiltro i{
		color: #a00;
		text-decoration:line-through;
	}
	.desplegable .opcion.filtro{
		background: #fff !important;
		border-top: 0.8px solid #ddd;
	}
	.desplegable .opcion.falta{
		cursor:default;
		display:none;
	}
	
	.desplegable .opcion.filtro input{
		
		width:98%;
		outline: none;
	}
	
	.desplegable .opcion.lis {
		background: #fff !important;
		 cursor: default;
	}
	.desplegable .opcion.lis .listado {
		border: 0.8px solid #ccc;
		background: #fff;
		padding:5px;
		overflow-x: scroll;
		overflow-y: scroll;
		height: 127px;
	}
	
	.desplegable .opcion.botones {
		text-align:right;
		background:#fff !important;
		cursor:default;
	}
	.desplegable .opcion.botones button{
		width:75px;
	}
		
	
	
	.desplegable .item {
		padding-right: 4px;
		width: max-content;
		clear:both;
	}
	
	.desplegable .item input{
		margin-top: 1px;
		float:left;
	}
	
	
	.deshabilitado{
		opacity:0.5;
		cursor:default !important;
	}
	
	.titulo{
		width:100%;
		display:block;
		font-size: 10px;
		
		padding: 1px 4px;
		cursor:pointer;
		    min-height: 16px;
	}
	.titulo i{
		font-size: 12px;
		margin-top: 1px;
	}
	.titulo > span{
		max-width: 82%;
		display: block;
		height: 13px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		float: left;
	}
	.modelo{display:none}
	.acmo{
		padding: 1px 8px;
		font-size: 10px;
		/*position: absolute;
		right: 16px;
		bottom: 5px;*/
	}
</style>



	<div class="modelo encabezado" data-colclass="rgu"  ><span class="titulo"><span>[Todo]</span>
	
		<i class="fa fa-filter pull-right filtro"></i>
		<i class="fa fa-sort-alpha-asc pull-right iasc"></i>
		<i class="fa fa-sort-alpha-desc pull-right idesc"></i>
	
		
		</span>
		<div class="desplegable">
			<div class="opcion asc"> 
				<i class="fa fa-sort-alpha-asc"></i>
				Ordenar Ascendentemente
			</div>
			<div class="opcion desc"> 
				<i class="fa fa-sort-alpha-desc"></i>
				Ordenar Descendentemente
			</div>
			
			<div class="opcion delfiltro"> 
							<i class="fa fa-filter"></i>
							Borrar Filtro
						</div>
			<div class="opcion filtro"> 
				<input placeholder="Buscar" />
			</div>
			<div class="opcion lis"> 
				<div class="listado">
					<div class="item todos">
						<input type="checkbox" checked/>
						<span>(Seleccionar todo)</span>
					</div>
					<div class="item valitem">
						<input type="checkbox" checked/>
						<span>(Vacío)</span>
					</div>
					
				</div>
			</div>
			<div class="opcion falta">
			    <i class="fa fa-warning"></i> No se muestran todos los elementos.
			</div>
			<div class="opcion botones"> 
				<button class="aceptar">Aceptar</button>
				<button class="cancelar">Cancelar</button>
			</div>
			
		</div>
	
	</div>
	
	

<div class="row ">
	
	<div class="col-md-12" style="margin-bottom:5px">
	
	   <div class="row">
	
			<div class="col-md-12">
			
				<div class="list-group-item  active" style=" height: 26px;padding: 5px 15px;">
					<h4 id="agregar" class="list-group-item-heading nmb"  style="font-size:14px">
						NOC &nbsp;<i id="cargando" class="fa fa-refresh fa-spin push-right" ></i> 
					</h4>
				</div>
		
				<div class="list-group-item npl npr npt npb " style="min-height: 370px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
					
					
					<div id="filtro-funnel" class="col-md-10" style=" margin: 7px 0px;" >
						
						<!-- <div class="col-md-12" style="margin-bottom :5px" >
								<button id="agregar_funnel" type="submit" class="btn btn-primary  " style="padding:1px 17px;margin-right:5px;">Registrar Oportunidad</button>	
								
								<button id="exportar_funnel" type="submit" class="btn btn-success  " 
								
								style="padding:1px 17px;"><i class="fa fa-file-excel-o"></i> Exportar</button>	
								
							</div> -->
						
						
						<div style="margin: 7px 0px;
							margin: -3px 0px;
							border-radius: 4px;
							padding: 0px ;"
						>
						
						
						
							<table class="table-filtros" style="margin-bottom:0px;  border: 0.8px solid #ccc; ">
								<colgroup>
									<col style="width:10%"/>
									<col style="width:20%"/>
									<col style="width:15%"/>
									<col style="width:10%"/>
									<col style="width:15%"/>
									<col style="width:20%"/>
									
								</colgroup>
							
								<tbody>
								
									<tr>
										<td colspan="6" style="background: #ddd;text-align: center;">Filtros</td>
									</tr>
								
									<tr>
										<td class="lb"><b>Cliente</b></td>
										<td class="np">
											<select id="fNOMBRE_CLIENTE" class="form-control" >
												<?php for($i=0; $i<count($dis_NOMBRE_CLIENTE);$i++){ ?>
													<option ><?php echo $dis_NOMBRE_CLIENTE[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
										
										<!--<td class="lb"><b>Nro. Contrato</b></td>
										<td class="np">
											<select id="fNRO_CONTRATO" class="form-control" >
												<?php //for($i=0; $i<count($dis_NRO_CONTRATO);$i++){ ?>
													<option ><?php //echo $dis_NRO_CONTRATO[$i]['txt'] ?></option>
												<?php //} ?>
											</select>
										</td> -->
										
										<td class="lb"><b>Código Cliente</b></td>
										<td class="np">
											<select id="fCOD_CLIENTE" class="form-control" >
												<?php for($i=0; $i<count($dis_COD_CLIENTE);$i++){ ?>
													<option ><?php echo $dis_COD_CLIENTE[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
										
										
										
										<td class="lb"><b>Estado</b></td>
										<td class="np">
											<select id="fESTADO" class="form-control" >
												<?php for($i=0; $i<count($dis_ESTADO);$i++){ ?>
													<option ><?php echo $dis_ESTADO[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
										
									</tr>
									<tr>
										<td class="lb"><b>Ejecutivo</b></td>
										<td class="np">
											<select id="fEJECUTIVO_CORPORATE" class="form-control" >
												<?php for($i=0; $i<count($dis_EJECUTIVO_CORPORATE);$i++){ ?>
													<option ><?php echo $dis_EJECUTIVO_CORPORATE[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
										<td class="lb"><b>Nro. Cuenta</b></td>
										<td class="np">
											<select id="fNRO_CUENTA" class="form-control" >
												<?php for($i=0; $i<count($dis_NRO_CUENTA);$i++){ ?>
													<option ><?php echo $dis_NRO_CUENTA[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
										
										<td class="lb"><b>Plan Consumo</b></td>
										<td class="np">
											<select id="fPLAN_CONSUMO" class="form-control" >
												<?php for($i=0; $i<count($dis_PLAN_CONSUMO);$i++){ ?>
													<option ><?php echo $dis_PLAN_CONSUMO[$i]['txt'] ?></option>
												<?php } ?>
											</select>
										</td>
								
									</tr>
		
								</tbody>
							</table>
						
							<div class="row"> 
								
							</div>
							
						</div>
					</div>
					
					
					<div class="col-md-2">
						<button id="ver_acmos" class="btn btn-primary  pull-right" style="margin-top: 26px;">Ver ACMOS</button>
					</div>
					
					<div id="listado"> 
					
					
						<table id="tbl-funnel" class="table table-striped"  style="font-size:10px">
							<colgroup>
								<col style="width:25%"/>
								<col style="width:30%"/>
								<col style=""/>
							</colgroup>
						  <thead>
								<!--
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>
								-->
						  </thead> 
						  <tbody>
						  
						  </tbody>
						</table>
	
						
						<div class="col-md-1"></div>
						<div class="col-md-10" style="margin-top:5px;">
							<div id="ver_mas" class="alert alert-success" style="cursor:pointer;">
								<strong>Cargar mas</strong>
							</div>
							<div id="viendo_mas" class="alert alert-success msg-gris" style="">
								<strong><i class="fa fa-cog fa-spin"></i> Cargando...</strong>
							</div>
							<div id="busqueda_completa" class="alert alert-info" style="">
								<strong>Búsqueda completa.</strong>
							</div>
						
						</div>
						<div class="col-md-1"></div>
					
					
					</div>
				</div>
			</div>
				
		</div>
		
		
	</div>
	
</div>


<div id="acmo-dialogo" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm" style="width:500px">
		<div class="modal-content">
			<div class="modal-header" style="padding: 7px;padding-bottom: 3px;background-color: #337ab7;border-radius: 2px;color: #fff;">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
			  </button>
			  <h4 class="modal-title" >Crear ACMO - #<span id="nro_acmo"></span></h4>
			</div>
			<div id="acmo-body" class="modal-body" style="padding:1px">
			  
			</div>
		</div>
	</div>
</div>
	
 
<script>
    
	var ndp=0;
	var fpp=100;
    
	function agregar_fila(NOMBRE_CLIENTE,COD_CLIENTE,NRO_CONTRATO,NRO_CUENTA,ESTADO,DESCRIPCION_U2000,PLAN_CONSUMO,DIRECCION,ANCHO_BI_U2000,EJECUTIVO_CORPORATE,FECHA_HAB,INGENIERO){
	
		var tr='<tr >'
		tr+='<td ><span style="color: #005;font-weight: bold;text-decoration: underline;">'+NOMBRE_CLIENTE+'</span>'
				 +'<br><b>Código Cliente:</b> '+COD_CLIENTE+
		          '<br><b>Nro. Cuenta:</b> '+NRO_CUENTA
		
		
		if(ESTADO=='AC' || ESTADO=='GC'){
			tr+=' <span class="label label-success">'+ESTADO+'</span></td>';
		}else if(ESTADO=='EL' || ESTADO=='SU'){
			tr+=' <span class="label label-danger">'+ESTADO+'</span></td>';
		}else if(ESTADO=='MO'){
			tr+=' <span class="label label-info" style="color: #d9534f; background: #ff0;  border: 0.8px solid #d9534f;font-weight: bold;">'+ESTADO+'</span></td>';
		}else {
			tr+=' <span class="label label-info">'+ESTADO+'</span></td>';
		}
		
		tr+='<td ><b>Plan Consumo: </b>'+PLAN_CONSUMO+'<br><b>Ejecutivo: </b>'+EJECUTIVO_CORPORATE+'<br><b>Ingeniero: </b>'+INGENIERO+'</td>'
		tr+='<td style="position:relative;">'
		
		//if(DESCRIPCION_U2000!='')
		tr+='<b>Habilitación: </b>'+FECHA_HAB+'<br>'
		
		tr+='<b>Dirección: </b>'+DIRECCION
		if(DESCRIPCION_U2000!='')
			tr+='<br>'+'<b>U2000: </b>'+DESCRIPCION_U2000
		
		tr+='<div>'
		
		if(ANCHO_BI_U2000!='')
			tr+='<span class="label label-default">Ancho BI: '+ANCHO_BI_U2000+'</span> '
		
		
		
		<?php if( !Usr::esFH() and !Usr::esINGENIERO() ) { ?>
	
		tr+='<button  class="btn btn-primary  pull-right acmo" data-cliente="'+NOMBRE_CLIENTE+'" data-cuenta="'+NRO_CUENTA+'" style="">Crear ACMO</button></div>'
		
		<?php } ?>
		
	
		tr+='</td>'
		
		tr+='</tr>'

		$tr=$(tr)
		//eventos

		$('button.acmo',$tr).click(function(){
			var cliente=encodeURI( $(this).attr('data-cliente'))
			var cuenta =$(this).attr('data-cuenta')
			
			
			$('#acmo-dialogo').modal('show')
			$('#acmo-body').html('Cargando...') 
			
			$('#acmo-body').load(url2+'acmo/agregar?cliente='+cliente+'&cuenta='+cuenta)
		})
		
		$('#tbl-funnel tbody').append($tr)
	}
	
	
	$('#ver_mas').click(function(){
		$('#ver_mas').hide()
		$('#viendo_mas').show()
		$('#busqueda_completa').hide()
		
		ndp++;
		
		var params={
			filtros:obtener_filtros(),
			orden:obtener_orden()
		};
	
		ajaxAccionParam('noc/listado_avanzado?fpp='+fpp+'&ndp='+ndp,params,function(r){
			//console.log(r)
			if(r.length==0){
				$('#ver_mas').hide()
				$('#viendo_mas').hide()
				
			}else{
				for(var i=0;i<r.length;i++){
					agregar_fila(
						r[i].NOMBRE_CLIENTE,
						r[i].COD_CLIENTE,
						r[i].NRO_CONTRATO,
						r[i].NRO_CUENTA,
						r[i].ESTADO,
						r[i].DESCRIPCION_U2000,
						r[i].PLAN_CONSUMO,
						r[i].DIRECCION,
						r[i].ANCHO_BI_U2000,
						r[i].EJECUTIVO_CORPORATE,
						r[i].FECHA_HABILITACION,
						r[i].INGENIERO
					)
				}
				
				if(r.length<fpp){
					$('#ver_mas').hide()
					$('#viendo_mas').hide()
				}else{
					$('#ver_mas').show()
					$('#viendo_mas').hide()			
				}
				
			}
			
		})
	})
	
	
    function actualizar_funnel() {
		$('#cargando').css('visibility','hidden')
		
		$('#tbl-funnel tbody').html('')
		ndp=0;
		$('#ver_mas').show()
		$('#viendo_mas').hide()
		$('#busqueda_completa').hide()
		
		$('#ver_mas').click()
		
		var params={
			filtros:obtener_filtros(),
			orden:obtener_orden()
		};
		/*ajaxAccionParam('noc/listado_avanzado_resumen',params,function(r){
			actualizar_resumen(r)
		})*/
	}
	
	/*$('#exportar_funnel').click(function(){
	    window.location.href=(url2+'noc/exportar')
	})*/
	
	
	///////############################################################
	///////############################################################
	function existe_valor(valor,v){
		for(var i=0;i< v.length ;i++){
			if(v[i]==valor)return true;
		}
		return false
	}
	
	var FILTROS=[]
	var ORDEN=['','']
	var SERVERSIDE=[]
	var callback_filtro=null
	
	
	function actualizar_checks($p) {
		//indeterminate
		
		var c1=$('.item.valitem:visible input:checked',$p).length
		var ct=$('.item.valitem:visible input',$p).length
		
		$('.aceptar',$p.parent().parent()).removeClass('deshabilitado').prop('disabled',false)
		if(c1==0){
			$('.item.todos input',$p).prop('checked',false)
			$('.item.todos input',$p).prop('indeterminate',false)
			$('.aceptar',$p.parent().parent()).addClass('deshabilitado').prop('disabled',true)
			return
		}
		if(c1==ct){
			$('.item.todos input',$p).prop('checked',true)
			$('.item.todos input',$p).prop('indeterminate',false)
			return
		}
		$('.item.todos input',$p).prop('checked',false)
		$('.item.todos input',$p).prop('indeterminate',true)
		
	}
	
	
	function cargar_listado_desde_servidor(cc,texto){
		var $enc=$('.encabezado[data-colclass="'+cc+'"]')
		
		$('.item.valitem',$enc).remove()
		
		$sel=$('select[data-colclass="'+cc+'"]')
		$sel.html('')
		
		var params={s:texto};
		
		ajaxAccionParam('noc/listado_clientes',params,function(r){
			if(r.length==0){
				
			}else{
				var htm=''
				for(var i=0;i<r.length;i++){
					htm+='<option>'+r[i].txt+'</option>'
				}
				$sel.html(htm)
			}
			if(r.length<1000){
				$('.falta',$enc).hide();
			}else{
				$('.falta',$enc).show();
			}
			cargar_listado(cc)
			actualizar_checks($enc)
		})
	}
	
	function cargar_listado(cc){
		var $enc=$('.encabezado[data-colclass="'+cc+'"]')
		var $lis=$('.listado',$enc)
		
		$('.item.valitem',$enc).remove()
		

		$('select[data-colclass="'+cc+'"] option').each(function(){
			var valor=$(this).html()
			
			var $item

			$item=$('<div class="item valitem"><input type="checkbox" checked /><span>'+valor+'</span></div>')
			
			$lis.append($item)
		})
		
		$('.item.todos input',$enc).prop('checked',true)
		$('.item.todos input',$enc).prop('indeterminate',false)
		
		$('.item.valitem input',$enc).change(function(){
			var $p=$(this).parent().parent()
			actualizar_checks($p)
		})	

		
	}
	
	function mostrar_seleccionado($enc){
		var todos=$('.item.todos input',$enc).is(':checked')
		todos = todos && ($('.opcion.filtro input',$enc ).val()=='')
		$enc.removeClass('filtrado')
		
		var colclass=$enc.attr('data-colclass')
		
		$('.titulo span',$enc).html('[Todo]')
		if(todos){
			
			if($('.item.valitem',$enc).length==1){
				$('.titulo span',$enc).html(  $('.item.valitem span',$enc).html()   )
			}
			FILTROS[colclass]=[]
		}else{
			$enc.addClass('filtrado')
			if(FILTROS[colclass].length ==1){
				$('.titulo span',$enc).html(FILTROS[colclass][0])
			}else{
				$('.titulo span',$enc).html('[Varios elementos]')
			}
		}
		
	}
	
	
	function asignar_eventos($encabezado){
		
		$('.titulo',$encabezado).click(function(e){
			var $enc=$(this).parent()
			if($enc.hasClass('abierto')){
				$enc.removeClass('abierto')
			}else{
				$('.encabezado.abierto').removeClass('abierto')
			
				$enc.addClass('abierto')
				var colclass=$enc.attr('data-colclass')
				
				$('.opcion.filtro input',$enc).val('').keyup().focus()
				if($enc.hasClass('filtrado')){
					$('.opcion.delfiltro',$enc).removeClass('deshabilitado')

					$('.item.valitem',$enc).each(function(){
						var ch=existe_valor($('span',$(this)).html(),FILTROS[colclass])
						$('input',$(this)).prop('checked',ch)
					})
					
				}else{
					$('.opcion.delfiltro',$enc).addClass('deshabilitado')
					$('.item.valitem',$enc).each(function(){
						$('input',$(this)).prop('checked',true)
					})
				}
				actualizar_checks($enc)
			}
		})
		
		$('.item.valitem input',$encabezado).click(function(){
			var $p=$(this).parent().parent()
			actualizar_checks($p)
		})	
		
		$('.desplegable .aceptar',$encabezado).click(function(){
			if($(this).hasClass('deshabilitado'))return
			var $enc=$(this).parent().parent().parent()
			
			var colclass=$enc.attr('data-colclass')
			FILTROS[colclass]=[]
			
			$('.item.valitem:visible input:checked',$enc).each(function(){
				FILTROS[colclass].push($(this).next().text()) //OJO
			})
			$('.encabezado.abierto').removeClass('abierto')
			
			mostrar_seleccionado($encabezado)
			callback_filtro(FILTROS,ORDEN)
		})
		
		$('.desplegable .opcion.asc',$encabezado).click(function(){
			var $enc=$(this).parent().parent()
			$enc.removeClass('abierto')
			$('.encabezado').removeClass('oasc').removeClass('odesc')
			$enc.addClass('oasc')
			var colclass=$enc.attr('data-colclass')
			ORDEN=[colclass,'asc']
			callback_filtro(FILTROS,ORDEN)
		})
		
		$('.desplegable .opcion.desc',$encabezado).click(function(){
			var $enc=$(this).parent().parent()
			$enc.removeClass('abierto')
			$('.encabezado').removeClass('oasc').removeClass('odesc')
			$enc.addClass('odesc')
			var colclass=$enc.attr('data-colclass')
			ORDEN=[colclass,'desc']
			callback_filtro(FILTROS,ORDEN)
		})
		
		$('.desplegable .opcion.delfiltro',$encabezado).click(function(){
			if(!$(this).hasClass('deshabilitado')){
				var $enc=$(this).parent().parent()
				$enc.removeClass('filtrado').removeClass('abierto')
				var colclass=$enc.attr('data-colclass')
				FILTROS[colclass]=[]
				$('.titulo span',$enc).html('[Todo]')
				callback_filtro(FILTROS,ORDEN)
			}
		})
		
		$($encabezado).click(function(e){
			if( ! $(this).hasClass('abierto'))
			$('.encabezado.abierto').removeClass('abierto')
		    e.stopPropagation()			
		})
		
		$('.cancelar',$encabezado).click(function(e){
			$('.encabezado.abierto').removeClass('abierto')
		})
		
		$('.item.todos input',$encabezado).click(function(){
			var $p=$(this).parent().parent()
			//indeterminate
			$('.item.valitem input',$p).prop('checked',false)
			$('.item.valitem:visible input',$p).prop('checked',$(this).prop('checked'))
			
			actualizar_checks($p)
		})
		
		$('.opcion.filtro input',$encabezado).keyup(function(e){
			
			if(e.key=='Escape')$('.encabezado.abierto').removeClass('abierto')
			if(e.key=='Enter'){
				$('.opcion.botones .aceptar',$(this).parent().parent()).click()
				return;
			}
			
			var texto=$(this).val().toUpperCase()
			
			var cc=$(this).parent().parent().parent().attr('data-colclass')
			
			if(texto==$(this).attr('data-valor')){
				return
			}else{
				$(this).attr('data-valor',texto)
			}
			
			if(SERVERSIDE[cc] != ''){
				cargar_listado_desde_servidor(cc,texto)
				return 
			}
			
			var $lis=$('.listado',$(this).parent().parent())
			
			$('.item.valitem',$lis).each(function(){
				var txt=$('span',$(this)).text().toUpperCase()
				if(txt.indexOf(texto)>=0){
					$('input',$(this)).prop('checked',true)
					$(this).show()
				}else{
					$('input',$(this)).prop('checked',false)
					$(this).hide()
				}
			})
			
			actualizar_checks($lis)
		})
	}
	
	function list_excel($sel){
		var cc=$sel.attr('id')
		$sel.attr('data-colclass',cc)
		var serverside=$sel.attr('data-server')
		
		var $enc=$('div.modelo').clone().removeClass('modelo')
		$enc.attr('data-colclass',cc)
		
		var contenedor=$sel.parent()
		contenedor.append($enc)
		$sel.hide()
		cargar_listado(cc)
		FILTROS[cc]=[]
		SERVERSIDE[cc]=serverside==undefined?'':serverside;
		asignar_eventos($enc)
		mostrar_seleccionado($enc)
	}
	
	function preparar_filtros($elems,callback){
		$('body').click(function(){
			$('div.encabezado.abierto').removeClass('abierto')
		})
		FILTROS=[]
	    ORDEN=['','']
		$elems.each(function(){
			list_excel($(this))
		})
		
		callback_filtro=callback
		
		
	}
	function toObject(data) {
		var rv = {};
		for (var k in data) {
			//if (data.hasOwnProperty(k)) {
				rv[k] = data[k];
			//}
		}
		return rv;
	}
	
	
	function number_format(number, decimals, dec_point, thousands_sep) {

		var n = !isFinite(+number) ? 0 : +number, 
			prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
			sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
			dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
			toFixedFix = function (n, prec) {
				var k = Math.pow(10, prec);
				return Math.round(n * k) / k;
			},
			s = (prec ? toFixedFix(n, prec) : Math.round(n)).toString().split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}
	
	 
	///////############################################################
	///////############################################################
	
	function obtener_filtros()	{	return toObject(FILTROS);	}
	function obtener_orden()	{	return ORDEN;	}
	
	preparar_filtros($('#fNOMBRE_CLIENTE,#fCOD_CLIENTE,#fNRO_CUENTA,#fESTADO,#fPLAN_CONSUMO,#fEJECUTIVO_CORPORATE'),function(f, o){
		actualizar_funnel()
	})

	actualizar_funnel()
	
	
	$('#ver_acmos').click(function(e){
		e.preventDefault()
		$('#body1').html('<center style="padding-top: 30vh;font-size: 100px;opacity: 0.2;"><i class="fa fa-cog" style="margin-left:-30px;margin-top:-30px;  animation: fa-spin 12s infinite linear;"></i></center>')
		$('#body1').load(url2+'acmo/listado')
	})	
</script>
	
	



