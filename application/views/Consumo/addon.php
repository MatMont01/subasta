<style>
table.table td, table.table th {
    padding: 5px 12px !important;
}
button.btn-oferta{
	    padding: 2px 9px;
		width:100%;
		margin-top:5px;
}

</style>


<div class="row">
		
		
		<div class="col-md-10 bounceInDown" style="margin-bottom:5px">
		
		   <div class="row">
		
		
		
		
		
			<?php if($r!=null){ ?>
					<div class="col-md-4">
					
						<div class="list-group-item  active">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Ofertar AddOn
								
								
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped nmb"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
							  
							  
								<!--<tr>
								  <th scope="row">Descripción</th>
								  <td><?php echo $r['DESCRIPCION_PLAN'] ?></td>
								</tr>-->
								<tr>
								  <th scope="row">Megas acreditados</th>
								  <td><?php echo $r['MEGAS_ACREDITADOS'] ?> mb</td>
								</tr>
								
								<tr>
								  <th scope="row">Megas navegados</th>
								  <td><?php echo $r['MEGAS_NAVEGADOS'] ?> mb</td>
								</tr>
								<tr>
								  <th scope="row">Plan AddOn</th>
								  <td><?php echo $r['PLAN_ADD_ON'] ?></td>
								</tr> 
								
								<tr>
								  <th scope="row">Megas AddOn</th>
								  <td><?php echo $r['MEGAS_ADD_ON'] ?> mb</td>
								</tr>
								<tr>
								  <th scope="row">TBM AddOn</th>
								  <td><?php echo $r['TBM_ADD_ON'] ?> Bs.</td>
								</tr>
								
								
							  </tbody>
							</table> 
						</div>
						
						<div class="list-group-item  active" style="border-radius: 4px; margin-top: 10px; padding: 4px 12px; text-align: center;">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Pago adicional <?php echo $r['TBM_ADD_ON'] ?> bs.
							</h4>
						</div>
						
						<div class="list-group-item  active" style="border-top-left-radius: 4px;border-top-right-radius: 4px; margin-top: 10px;padding: 4px 12px;text-align: center;">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Atributos adicionales
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped nmb"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
								<tr>
									<th scope="row">Megas adicionales</th>
									    <td><?php echo $r['MEGAS_ADD_ON'] ?> mb</td>
									</tr>
								
								
							  </tbody>
							</table>
						</div>
						
						
							<button class="btn btn-success btn-oferta" data-tipo_oferta="addon" ><i class="fa fa-arrow-up"></i> Se ofertó este producto</button>
						
							
					</div>
		
			<?php } ?>
		
		
		
		
		
		
			<?php for($i=0;$i<count($r2);$i++){ ?>
			        <div class="col-md-4">
					
						<div class="list-group-item  active">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Nuevo Plan: <?php echo $r2[$i]['NOMBRE_NUEVO_PLAN'] ?>
								
								
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped nmb"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
							  
							  
								<tr>
								  <th scope="row">TG</th>
								  <td><?php echo $r2[$i]['TG'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Subsidio</th>
								  <td><?php echo $r2[$i]['SUBSIDIO'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">TBM Nueva</th>
								  <td><?php echo $r2[$i]['TBM_NUEVA'] ?> Bs.</td>
								</tr>
								<tr>
								  <th scope="row">Minutos</th>
								  <td><?php echo $r2[$i]['MINUTOS'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">Plan Megas</th>
								  <td><?php echo $r2[$i]['MEGAS_PLAN'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Whatsapp</th>
								  <td><?php echo $r2[$i]['WHATSAPP'] ?></td>
								</tr>
								<tr>
								  <th scope="row">SMS</th>
								  <td><?php echo $r2[$i]['SMS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Favoritos</th>
								  <td><?php echo $r2[$i]['FAVORITOS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Smart App</th>
								  <td><?php echo $r2[$i]['SMARTAPP'] ?></td>
								</tr>
								
								
								<!--<tr>
								  <th scope="row">Pago adicional</th>
								  <td><?php //echo $r2[$i]['PAGO_ADICIONAL'] ?></td>
								</tr>-->
								
								
							  </tbody>
							</table>
						</div>
						
						
						<div class="list-group-item  active" style="border-radius: 4px; margin-top: 10px; padding: 4px 12px; text-align: center;">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Pago adicional <?php echo $r2[$i]['PAGO_ADICIONAL'] ?> bs.
							</h4>
						</div>
						
						<div class="list-group-item  active" style="border-top-left-radius: 4px;border-top-right-radius: 4px; margin-top: 10px;padding: 4px 12px;text-align: center;">
							<h4 class="list-group-item-heading nmb" style="font-size:14px">
								Atributos adicionales
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped nmb"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
								
								<?php if( $r2[$i]['MINUTOS_ADICIONALES'] != null and  $r2[$i]['MINUTOS_ADICIONALES']!=0 ){?>
											<tr>
											  <th scope="row">Minutos adicionales</th>
											  <td><?php echo $r2[$i]['MINUTOS_ADICIONALES'] ?> min</td>
											</tr>
								<?php } ?>
								
								<?php if( $r2[$i]['MEGAS_ADICIONALES'] != null and  $r2[$i]['MEGAS_ADICIONALES']!=0 ){ ?>
											<tr>
											  <th scope="row">Megas adicionales</th>
											  <td><?php echo $r2[$i]['MEGAS_ADICIONALES'] ?> mb</td>
											</tr>
								<?php } ?>
								<?php if( $r2[$i]['WHATSAPP_ADICIONALES'] != null and  $r2[$i]['WHATSAPP_ADICIONALES']!='0'  ){?>
											<tr>
											  <th scope="row">Whatsapp adicionales</th>
											  <td><?php echo $r2[$i]['WHATSAPP_ADICIONALES'] ?></td>
											</tr>
								<?php } ?>
								
								<?php if( $r2[$i]['SMS_ADICIONALES'] != null and  $r2[$i]['SMS_ADICIONALES']!=0)  {?>
											<tr>
											  <th scope="row">SMS adicionales</th>
											  <td><?php echo $r2[$i]['SMS_ADICIONALES'] ?> sms</td>
											</tr>
								<?php } ?>
								<?php if( $r2[$i]['FAVORITOS_ADICIONALES'] != null and  $r2[$i]['FAVORITOS_ADICIONALES']!=0 ){?>
											<tr>
											  <th scope="row">Favoritos adicionales</th>
											  <td><?php echo $r2[$i]['FAVORITOS_ADICIONALES'] ?></td>
											</tr>
								<?php } ?>
								
								<?php if( $r2[$i]['SMARTAPP_ADICIONALES'] != null and ($r2[$i]['SMARTAPP_ADICIONALES']!=0) ){ ?>
											<tr>
											  <th scope="row">Smartapp adicionales</th>
											  <td><?php echo $r2[$i]['SMARTAPP_ADICIONALES'] ?></td>
											</tr>
								<?php } ?>
								
							  </tbody>
							</table>
						</div>
						
						
						
								    <button class="btn btn-success btn-oferta" data-tipo_oferta="planes" data-PLAN_SUGERIDO="<?php echo $r2[$i]['NOMBRE_NUEVO_PLAN'] ?>" data-TBM_SUGERIDA="<?php echo $r2[$i]['TBM_NUEVA'] ?>"><i class="fa fa-arrow-up"></i> Se ofertó este producto</button>
								
								
								
							
					</div>
			<?php } ?>
		
		</div>
		    
		    
		</div>
		<div class="col-md-2" style="">
			<div id="" class="list-group">
				
			<?php if($map[0]['LATITUDE']!="0.0000000000"){ ?>
					<div id="mapa" class="list-group-item menu-op ">
						<h4 class="list-group-item-heading" style="font-size:15px;float:left;">
							<img src="<?php img('img/tigo_star.png') ?>" style="width:84px" />
						</h4>
						<p class="list-group-item-text" style="font-size:12px;text-align:center;    text-align: center;
    display: inline;">
							En cobertura 
						</p>
					</div>
			<?php }else{ ?>
					<div id="mapa" class="list-group-item menu-op ">
						<h4 class="list-group-item-heading" style="font-size:15px">
							<i class="fa fa-map-marker" style="color:#b44"></i> No tiene cobertura HFC
						</h4>
						<p class="list-group-item-text" style="font-size:12px">
							&nbsp;
						</p>
					</div>
			<?php	} ?>
					
				
				
				
				
				
				
					
					
			</div>
		</div>
		
		<?php if( $r3['TIPO_SIM'] != 'CHIP LTE' ){ ?>
		<div class="col-md-2" style="">
			<div id="" class="list-group">
				<div id="migrar-lte" class="list-group-item menu-op ">
				<p class="list-group-item-text" style="font-size:12px;text-align:center;">
						Migrar SIMCARD a
					</p>
					<h4 class="list-group-item-heading" style="font-size:15px;text-align:center;">
						<img src="<?php img('img/lte.png') ?>" style="width:24px" />
					</h4>
					
				</div>
			</div>
		</div>
		<?php } ?>

		
		<?php if($r3['SITUACION_EQUIPO'] != 'EN COMODATO'){ ?>
		<div class="col-md-2" style="">
			<div id="" class="list-group">
				<div id="contrato-vencido" class="list-group-item menu-op ">
					<h4 class="list-group-item-heading" style="font-size:15px;text-align:center;">
						Sin Comodato Vigente
					</h4>
					<!--<p class="list-group-item-text" style="font-size:12px;text-align:center;">
						<a href="#">Sin Comodato Vigente</a>
					</p>-->
				</div>
			</div>
		</div>
		<?php } ?>

		
	
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
    
	$('.btn-oferta').click(function(){
			
		var cta=$('#CUENTA').val()
		var $this=$(this)
		var tipo_oferta		=$this.attr('data-tipo_oferta');
		var aPLAN_SUGERIDO	=encodeURI( $this.attr('data-PLAN_SUGERIDO'));
		var aTBM_SUGERIDA	=encodeURI( $this.attr('data-TBM_SUGERIDA'));
		
		$('#oferta-dialogo').modal('show')
		$('#oferta-body').load(url2+'Ofertas/agregar?cta='+cta+'&tipo_oferta='+tipo_oferta+'&aPLAN_SUGERIDO='+aPLAN_SUGERIDO+'&aTBM_SUGERIDA='+aTBM_SUGERIDA);
		
		
	})


	$('#mapa').click(function(){
		$('#menu8').click()  
	})

	
</script>

