
<style>

table input{
	padding: 2px 8px !important;
    height: auto !important;
}
</style>

<div class="row bounceInDown">
		
		
		<div class="col-md-12" style="margin-bottom:5px">
		
		 <div class="row">
			<div class="col-md-6">
			
				<div class="list-group-item  active">
					<h4 class="list-group-item-heading nmb" style="font-size:14px">
                        Formulario
					</h4>
				</div>
		<div class="list-group-item npl npr npt npb " style="min-height: 370px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
				   
				   
		<form id="dlg-formulario" class=""  method="post" action="<?php echo url2('Inicio/acRegistrarTitularidad') ?>" >
					<table class="table table-striped"  style="font-size:11px">
                     
                      <tbody>
                        <tr>
                          <th scope="row">Cliente</th>
                          <td>
								<input id="NRO_CUENTA" name="NRO_CUENTA"  type="hidden" value="" >
								<input id="COD_CLIENTE_NOMBRE" name="COD_CLIENTE_NOMBRE"  type="hidden" value="" >	
						      <input id="NOMBRE_CLIENTE" name="NOMBRE_CLIENTE" type="text" class="form-control" readonly="readonly" value="<?php echo $NOMBRE_CLIENTE ?>">
						  </td>
                        </tr>
                        <tr>
                          <th scope="row">Cuenta Titular</th>
                          <td>
						       <input id="NRO_CUENTA_TITULAR" name="NRO_CUENTA_TITULAR"  type="text" class="form-control" value="<?php echo $r['NRO_CUENTA_TITULAR'] ?>">
						  </td>
                        </tr>
						<tr>
                          <th scope="row">Nombre Titular</th>
                          <td>
						   <input id="NOMBRE_TITULAR" name="NOMBRE_TITULAR"  type="text" class="form-control" value="<?php echo $r['NOMBRE_TITULAR'] ?>">
						  </td>
                        </tr>
						<tr>
                          <th scope="row">Email Titular</th>
                          <td>
						   <input id="EMAIL_TITULAR" name="EMAIL_TITULAR"  type="email" class="form-control" value="<?php echo $r['EMAIL_TITULAR'] ?>">
						  </td>
                        </tr>
						
						<tr>
                          <th scope="row">Validado</th>
                          <td>
						   <input type="text" disabled class="form-control" value="<?php echo $r['VALIDADO'] ?>">
						  </td>
                        </tr>
						<tr>
                          <th scope="row">Medio Validación</th>
                          <td>
						   <input type="text" disabled class="form-control" value="<?php echo $r['MEDIO_VALIDACION'] ?>">
						  </td>
                        </tr>
						<tr>
                          <th scope="row">Fecha Validación</th>
                          <td>
						   <input type="text" disabled class="form-control" value="<?php echo $r['FECHA_VALIDADO'] ?>">
						  </td>
                        </tr>
						
						<tr>
                          <td colspan="2" style="text-align:center">
						  
						  <div id="msg-ok" class="alert alert-success alert-dismissible fade in" role="alert" style="display:none">
							Datos guardados correctamente.
						  </div>
					  
						  <div id="msg-err" class="alert alert-danger alert-dismissible fade in" role="alert" style="display:none">
							<strong>Error!</strong> <span>No se pudo guardar la información.</span>
						  </div>
						  
						   <button id="guardar" type="submit" class="btn btn-primary ">Guardar</button>
						
                           
						  </td>
                        </tr>
						
						
						
						
                        
                      </tbody>
                    </table>
					</form>

					 <?php //if(Usr::gUsuario()=='villarroeljr'){ ?>
					 <center style="margin-top:55px">
						       <button class="btn btn-success btn-oferta " data-tipo_oferta="titularidad" ><i class="fa fa-arrow-up"></i> Se ofreció Registro</button>
							   </center>
						    <?php //} ?> 
				   
				   
				   
				</div>
			</div>
		</div>
		</div>
		    
		    

		
	
		
	
	
</div>

 <div id="oferta-dialogo" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm" style="width:500px">
			<div class="modal-content">
				<div class="modal-header" style="padding: 7px;padding-bottom: 3px;background-color: #337ab7;border-radius: 2px;color: #fff;">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" >Oferta</h4>
				</div>
				<div id="oferta-body" class="modal-body" style="padding:1px">
				  
				</div>
				
			</div>
		</div>
	</div>
	
	
<script>
    var nro_cuenta = $('#CUENTA').val();
	$('#NRO_CUENTA').val(nro_cuenta);
	var nombre = $('#CUENTA_UNIFICADA').val();
	$('#COD_CLIENTE_NOMBRE').val(nombre);
	
	
	frmAccion2('#dlg-formulario',function(){ // antes
	        $('#guardar').hide()
			$('#LINEA').show()
			$('#msg-ok,#msg-err').hide()
	    },function(r) { // Despues
			if(r.ok) {
				$('#msg-ok').show()
			}else{
				$('#msg-err span').html(r.msg)
				$('#msg-err').show()
			}
			setTimeout(function(){ $('#msg-ok,#msg-err').fadeOut() },2600)
			setTimeout(function(){ $('#guardar').show()},3000)     
			$('#LINEA').hide()
	    })
	
	$('.btn-oferta').click(function(e){
		e.preventDefault()	
		var cta=$('#CUENTA').val()
		var $this=$(this)
		var tipo_oferta		=$this.attr('data-tipo_oferta');
		var aPLAN_SUGERIDO	='';
		var aTBM_SUGERIDA	=0;
		
		$('#oferta-dialogo').modal('show')
		$('#oferta-body').load(url2+'Ofertas/agregar?cta='+cta+'&tipo_oferta='+tipo_oferta+'&aPLAN_SUGERIDO='+aPLAN_SUGERIDO+'&aTBM_SUGERIDA='+aTBM_SUGERIDA);
		
		
	})
</script>

