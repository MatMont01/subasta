


<div class="row fadeIn">
		
		
		<div class="col-md-12" style="margin-bottom:5px">
		
		   <div class="row">
		
		
					<div class="col-md-12">
					
						<div class="list-group-item  active">
							<h4 class="list-group-item-heading nmb"  style="font-size:14px">
								Lineas del Cliente <img id="exportar" title="Exportar a Excel" class="" style="cursor:pointer;margin-left: 10px;margin-top: -3px;" src="<?php img("img/excel.gif") ?>" />
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="min-height: 370px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table id="tbl-lineas" class="table table-striped"  style="font-size:11px">
							  <colgroup>
								 <col style="width:75px" />
							  </colgroup>
							  <thead>
							      <tr>
								      <th scope="row">Cuenta</th>
								      <th>Estado</th>
									  <th>Situación Equipo</th>
									  <th>Descripción</th>
									  <th>TBM Total (Bs.)</th>
									  <th>Monto Recarga (Bs.)</th>
									  
									  <th>Plan Sugerido<br><small>Con subsidio</small></th>
									  <th>Plan Sugerido<br><small>Sin subsidio</small></th>
								  </tr>
							  </thead>
							  <tbody>
							  
							  <?php for($i=0; $i<count($r);$i++){ ?>
								<tr>
								  <th scope="row" class="celular"><?php echo $r[$i]['NRO_CUENTA'] ?></th>
								  <td><?php echo $r[$i]['ESTADO'] ?> </td>
								  <td><?php echo $r[$i]['SITUACION_EQUIPO'] ?> </td>
								  <td><?php echo $r[$i]['DESCRIPCION_PLAN'] ?> </td>
								  <td><?php echo $r[$i]['TBM_TOTAL'] ?> </td>
								   <td><?php echo $r[$i]['MONTO_RECARGA'] ?> </td>
								  <td><?php echo $r[$i]['PLAN_SUGERIDO_CON_SUBSIDIO'] ?> </td>
								  <td><?php echo $r[$i]['PLAN_SUGERIDO_SIN_SUBSIDIO'] ?> </td>
								 
								</tr>
							
                              <?php } ?>							
								
							  </tbody>
							</table>
						</div>
					</div>
		
			
			
		
		</div>
		    
		    
		</div>
		
	
		
	</div>


<style>
.celular{
	cursor:pointer;
}
.celular:hover{
	box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.3);
	 
text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);
background:#dfd;
color: #44a;
}
img#exportar:hover{
    box-shadow: 0px 0px 10px 2px rgba(150,150,0,0.7);
}
#tbl-lineas_filter label {
	padding: 5px 10px;
	margin-bottom:0;
	padding-bottom:0;
	float:left;
}
#tbl-lineas_filter label input {
	    padding: 1px;
    line-height: 1;
    height: 22px;
}
#tbl-lineas thead th{
	padding-top:0px;
}
</style>
<script>
    

	
	
	
	$('.celular').click(function(){
		if(getSelectionText()!="")return
		$('#CUENTA').val($(this).html())
		actualizar()
	})
	function getSelectionText() {
		var text = "";
		if (window.getSelection) {
			text = window.getSelection().toString();
		} else if (document.selection && document.selection.type != "Control") {
			text = document.selection.createRange().text;
		}
		return text;
	}
	
	$('#exportar').click(function(){
		var cta=$('#CUENTA').val();
		window.open('<?php echo url2('') ?>Inicio/ver_datos?cta='+cta);
	})
	
	$('#tbl-lineas').dataTable({
		bPaginate:false,
		sDom: 'ft',
		bSort:true,
	    fixedHeader: true,
		language:{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Filtro:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
	})
	
	//$('#tbl-lineas_filter').html('Filtro:')
	
</script>

