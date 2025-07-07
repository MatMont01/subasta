<style>
td.nps{
	position:relative;
}
td.nps:hover .globo{
	display:block;
}


.globo::before{
   content: ''; /*o vacío, propiedad necesaria*/
}

.globo{
	display:none;
  position: absolute;
  top: 3px;
  left: 60px;
  max-width:240px;
  min-width:30px;
  padding: 5px;
  border-radius: 4px;
  font-family: sans-serif;
  z-index: 1; 
      background-color: #ff9;
    filter: drop-shadow(0px 0px 1px black);
    box-shadow: 0px 0px 7px #aaa;
}

.globo::before{
  content: '';
  position: absolute; 
  z-index: -1;
  width: 10px;
  height: 10px;
  left: -5px;
  top: 4px;
  background-color:  #ff9;
  transform: skewX(45deg);
}



table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after {
    top: 0px;
    right: 0px;
    font-size: 10px;

}

.celular{
	cursor:pointer;
}
.celular:hover{
    box-shadow: 2px 2px 2px 1px rgba(0,0,0,0.3);
    /* text-shadow: 1px 1px 7px rgba(150, 150, 150, 1); */
    background: #dfd;
    color: #228;
}

#tbl-cartera_filter {height: 30px;}
#tbl-cartera_filter label {
	padding: 5px 10px;
	margin-bottom:0;
	padding-bottom:0;
	float:left;
}
#tbl-cartera_filter label input {
	    padding: 1px;
    line-height: 1;
    height: 22px;
}

#tbl-cartera{
	    border-top: 1px solid #ddd;
}
#tbl-cartera thead th{
	padding-top:0px;
}

#tbl-cartera thead th:hover{
	background: #efe;
}

#tbl-cartera th,#tbl-cartera td{
	padding:2px 5px;
}

#tbl-cartera tr:hover td:nth-child(n) { background-color: #eee !important; }
#tbl-cartera .tc{text-align:center}
#tbl-cartera .bl{ border-left: 1px solid #eee;}

#msg_aprobacion{ display: none; }

table thead tr th{ border-right: 1px solid #ddd; border-top: 1px solid #ddd !important; border-bottom: 0px !important; }

/*SWICTH RADIO BUTTON*/
#tbl-cartera .btn-group{ display: inline-flex;}
#tbl-cartera .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
    padding: 0px 3px;
    border-style: solid;
    border-width: 1px;
}
#tbl-cartera .btn-default.active.si{ background-image: radial-gradient(circle, #ffffff, #bddcf9, #3bc4d9, #00a688, #008000); }
#tbl-cartera .btn-default.active.no{ background-image: radial-gradient(circle, #ffffff, #f8d1fc, #ff97d2, #ff517f, #ff0000); }
#tbl-cartera .btn-group input {
 display: none;
}

#tbl-cartera input:checked + label{
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.modal-sm{ width: 90% !important; }
</style>
<?php 
//echo print_r($fecha_limite);
///echo $fecha_limite['TIPO'].' '.$fecha_limite['FECHA_LIMITE']->format('d-m-Y h:i:s');
	//echo $fecha_actual; echo '<br>';
	//echo $fecha_jefes_mo; echo '<br>';
	//echo $fecha_ejecutivos_mo;
?>
<form id="form_aprobacion" class=""  method="post" action="<?php echo url2('ImportarExoneracion/acApprobate') ?>" >
 <table id="tbl-cartera" class="table table-striped"  style="font-size:11px;margin-bottom:20px;">
	  <thead>
		  <tr>
			  <th scope="row">#</th>
			  <th scope="row">Sistema</th>
			  <th scope="row">Cod Cliente</th>
			  <th scope="row">periodo_ini</th>
			  <th scope="row">periodo_fin</th>
			  <th class="">ciudad</th>
			  <th class="">cod_cliente_nombre</th>
			  <th class="">ejecutivo_sistema</th>
			  <th class="">tipo_ejecutivo</th>
			  <th class="">segmento_corp_tamano</th>
		  </tr>
	  </thead>
	  <tbody>
	  
	<?php $array = array(); for($i=0; $i<count($arr);$i++){  ?>
		<tr class="<?php echo $arr[$i]['sistema'].'-'.$arr[$i]['cod_cliente']; ?>">
		
		  <td class="tr" ><?php echo $i+1 ?></td>
		  <td class="tr" ><?php echo $arr[$i]['sistema']; ?></td>
		  <td class="tr" ><?php echo $arr[$i]['cod_cliente']; ?></td>
		  <td class="tr" ><?php echo $arr[$i]['periodo_ini'] ?> </td>
		  <td class="tr" ><?php echo $arr[$i]['periodo_fin']; ?></td>
		  <td class="tr" ><b><?php echo $arr[$i]['ciudad'] ?></b></td>
		  <td class="tr" ><?php echo $arr[$i]['cod_cliente_nombre']; ?></td>
		  <td class="tr" ><?php echo $arr[$i]['ejecutivo_sistema']; ?></td>
		  <td class="tr" ><?php echo $arr[$i]['tipo_ejecutivo'] ?></td>
		  <td class="tr" ><?php echo $arr[$i]['segmento_corp_tamano'] ?></td>
		</tr>
	
	  <?php		
		array_push($array, $arr[$i]['sistema'].'-'.$arr[$i]['cod_cliente']);
	} ?>	
		
	  </tbody>
	</table>
</form>				
	
	
<script>
	
	$('#tbl-cartera').dataTable({
		bPaginate:false,
		searching: false,
		//sDom: 't',
		bSort:false,
		bStateSave: true,
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
			"sSearch":         "Buscar:",
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

	
</script>
<style>
<?php 
$class = array_unique($array);
//$colors=['#a3e3d9','#a5b9b9','#88ade2','#d1cf78','#efb96a','#8edff1'];
$colors=['#fff','#ccc'];
$i=0;
foreach ($class as $key => $value){  
	//echo '.'.$value.'{ background-color: '.'rgb('.rand(100,255).', '.rand(100,255).', '.rand(100,255).') !important; } ';
	echo '.'.$value.'{ background-color: '.$colors[$i%2].' !important; } ';
	$i++;
}?>
</style>

