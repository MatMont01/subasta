


<div class="row">
		
		
		<div class="col-md-12" style="margin-bottom:5px">
		
		   <div class="row">
		
		
		
		
		
			<?php if(count($r)>0){ ?>
					<div class="col-md-6">
					
						<div class="list-group-item  active">
							<h4 class="list-group-item-heading nmb">
								Nuevo Plan: <?php echo $r[0]['NOMBRE_NUEVO_PLAN'] ?>
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="min-height: 370px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
							  
							  
								<tr>
								  <th scope="row">TG</th>
								  <td><?php echo $r[0]['TG'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Subsidio</th>
								  <td><?php echo $r[0]['SUBSIDIO'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">TBM Nueva</th>
								  <td><?php echo $r[0]['TBM_NUEVA'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Minutos</th>
								  <td><?php echo $r[0]['MINUTOS'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">Plan Megas</th>
								  <td><?php echo $r[0]['MEGAS_PLAN'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Whatsapp</th>
								  <td><?php echo $r[0]['WHATSAPP'] ?></td>
								</tr>
								<tr>
								  <th scope="row">SMS</th>
								  <td><?php echo $r[0]['SMS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Favoritos</th>
								  <td><?php echo $r[0]['FAVORITOS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Smart App</th>
								  <td><?php echo $r[0]['SMARTAPP'] ?></td>
								</tr>
								
							  </tbody>
							</table>
						</div>
					</div>
			<?php }else{ ?>
					<div class="col-md-6" style="min-height: 410px">
					</div>
			<?php } ?>
			
		
			
			
			<?php if(count($r)==2){ ?>
					<div class="col-md-6">
					
						<div class="list-group-item  active">
							<h4 class="list-group-item-heading nmb">
								Nuevo Plan: <?php echo $r[1]['NOMBRE_NUEVO_PLAN'] ?>
							</h4>
						</div>
						<div class="list-group-item npl npr npt npb " style="min-height: 370px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
						   <table class="table table-striped"  style="font-size:11px">
							  <colgroup>
								 <col style="width:150px" />  <col/>
							  </colgroup>
							  <tbody>
							  
							  
								<tr>
								  <th scope="row">TG</th>
								  <td><?php echo $r[1]['TG'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Subsidio</th>
								  <td><?php echo $r[1]['SUBSIDIO'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">TBM Nueva</th>
								  <td><?php echo $r[1]['TBM_NUEVA'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Minutos</th>
								  <td><?php echo $r[1]['MINUTOS'] ?></td>
								</tr>
								
								<tr>
								  <th scope="row">Plan Megas</th>
								  <td><?php echo $r[1]['MEGAS_PLAN'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Whatsapp</th>
								  <td><?php echo $r[1]['WHATSAPP'] ?></td>
								</tr>
								<tr>
								  <th scope="row">SMS</th>
								  <td><?php echo $r[1]['SMS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Favoritos</th>
								  <td><?php echo $r[1]['FAVORITOS'] ?></td>
								</tr>
								<tr>
								  <th scope="row">Smart App</th>
								  <td><?php echo $r[1]['SMARTAPP'] ?></td>
								</tr>
								
							  </tbody>
							</table>
						</div>
					</div>
			<?php }else{ ?>
					<div class="col-md-6">
					</div>
			<?php } ?>
			
		
		</div>
		    
		    
		</div>
		
		
		
	</div>



<script>
    
	
	
	
</script>

