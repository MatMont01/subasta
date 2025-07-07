
<style>


.unificado-th:hover {
	background:#ffa;
}




.unificado-row-1:hover #copiar-cliente{
	display:block;
}

   #copiar-cliente{
		display:none;
		color: #00a;
		text-decoration:underline;
		cursor:pointer;
		color:#00a !important;
	}
	
	
	.unificado-row-1:hover .texto-uni{
		display:none;
	}
	
	/*#bloque-info:hover  #copiar-cliente{
		display:block;
	}*/
	
    .unificado-row:hover{
		background:#ffa;
		cursor:pointer;
	}
	
	
	
	/* .unificado-row:hover #copiar-cliente{
		display:block;
	}*/
	
	
    .unificados{
		display:none;
	}
	
	.unificado:hover .unificados{
		display:block;
	}
	
	
	
	
	#tbl-vista .r{
		text-align:right;
	}
	
	#DIV_VISTA .highcharts-pie-series .highcharts-point {
		stroke: #dfd;
		stroke-width: 5px;
	}
	
	
/*
 *  STYLE 4
 */

.style-4::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.style-4::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

.style-4::-webkit-scrollbar-thumb
{
	background-color: #aaaaaa;
	border: 2px solid #eeeeee;
}



#tbl-prod th ,#tbl-prod td{
	    padding: 1px 4px;
    font-size: 11px;
	}
	#tbl-prod  td.tr{
	    text-align:right;
	}
	
	#datos-cli table td,#datos-cli table th{   padding: 3px 6px;
    font-size: 10px;line-height: 1.25;}
	
	
	
	.cont1 , .cont2 , .cont3 , .cont4 , .cont5 , .cont6 , .cont7 , .cont8 {
		cursor:pointer;
	}
	
	/*div.divcont:hover{
		    background: #f6f6ff;
    border: 1px solid #ccd;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
	border-bottom:none;
	
	}*/
	
	
	
	div.divcont:hover .detalle {
		display:block !important;
	}
	
	
	div.detalle{
		    background: #fafffa;
    width: 143px;
    bottom: 61px;
    max-height: 200px;
    position: fixed;
    z-index: 9999;
    box-shadow: 0px 0px 7px #555;
    border-radius: 0px;
    overflow-y: scroll;
    min-height: 20px;;display:none;
	}
	table.linea{margin-bottom:0px !important;}
	table.linea td,table.linea th{
		font-size: 12px;
		text-align: center;
		font-family: courier;
		font-weight: bold;
		padding:0px !important;
	}
	
	#panel-der{
        overflow: hidden !important;
	}
	
	
	#descfijo{
		cursor:pointer !important;
	}
	#descmovil{
		cursor:pointer !important;
	}
	#saldos{
		cursor:pointer !important;
	}
	
	#deschfc{
		cursor:pointer !important;
	}
	
	#descfijo:hover{
		    background: #e3e3e3 !important;
	}
	
	#descmovil:hover{
		    background: #e3e3e3 !important;
	}
	#saldos:hover{
		    background: #e3e3e3 !important;
	}
	
	#deschfc:hover{
		    background: #e3e3e3 !important;
	}
	
	.busc-num:hover{background:#afa;}
	
	#upload_on_demand,#view_history{     
		font-size: 12px;
		padding: 0px 5px;
		margin: 0px;
	}
</style>

<div id="DIV_VISTA" class="row">

    <!--
	<div class="col-md-12" style="text-align: center; font-size: 17px; font-weight: bold; color: #337ab7; text-shadow: 1px 1px 1px #aaa;">
		<?php echo $cliente ?>
	</div> 
	-->
	
	<div class="col-md-9" >
	
	<?php if (true==true){ ?>
			
					<div style="
						border: 1px solid #999;
						border-radius: 6px;
						overflow: hidden;
						width: 112px;
						right: 17px;
						position: absolute;
						box-shadow: 1px 1px 11px #aaa;
					">
								<div style="
									font-size: 8px;
									text-align: center;
									background: #ddd;
								">SCORING</div>

								<div style="
									background: #f3f3f3;
									text-align: center;
									font-weight: bold;
									font-size:12px;
									text-shadow: 1px 1px 0px #fff;
								"><?php echo $SCORE ?></div>
								
								
								
										<div style="
									font-size: 8px;
									text-align: center;
									background: #ddd;
								">RIESGO DE MORA</div>

								<div style="
									background: #f3f3f3;
									text-align: center;
									font-weight: bold;
									font-size:12px;
									text-shadow: 1px 1px 0px #fff;
								"><?php echo $RIESGO ?></div>
				
				</div>
					
	<?php } ?>
	
	
	<div class="col-md-12" style="">
		<div id="efect" style="position:fixed;/*display:none;*/background: #337ab7; border-radius: 50%;opacity: 0.5;">
	
		</div>
		
		
		
		
		
		
		
		
		
		<div style="margin-left:15%;width:70%;height:375px">

		
	
		
		
		
<div id="comp360" class="pulse" style="background: url(http://bicorporate/application/assets/img/ruedapng6.png);width: 100%;height: 370px;background-size: 100% 100%;position: relative;">

	






	
	<div style="position: absolute;left: 79%;top: 18%;color: #0B6CB1;">
		<div style="font-size: 11px;font-family: Helvetica;" class="">
		<b>HFC</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='HFC'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
			
		</div>
	</div>
		
	<div style="position: absolute;left: 56%;top: 3%;color: #0C174F;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>CLOUD</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='CLOUD'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 15%;top: 6%;color: #F1A209;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>VPN</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='VPN'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 79%;top: 49%;color: #C8453B;">
		<div style="font-size: 11px;font-family: Helvetica;" class="">
		<b>MANUAL</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='MANUAL'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 5%;top: 29%;color: #7C3821;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>INTERNET</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='INTERNET'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 75%;t;top: 82%;color: #6EBA0F;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>OFFICE</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='OFFICE'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 8%;top: 65%;color: #007177;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>MOVIL</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='MOVIL'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
		
	<div style="position: absolute;left: 32%;top: 84%;color: #FB7516;">
		<div style="font-size: 11px;font-family: Helvetica;">
		<b>SIP</b>
		</div>
		<div style="font-size: 9px;font-family: Helvetica;" class="detpie">
			<?php for($i=0; $i<count($arr);$i++){ ?>
				<?php if($arr[$i]['PRODUCTO']=='SIP'){ ?>
					<b class="">TBM</b>: <?php echo $arr[$i]['TBM'] ?> Bs
					<br>
					<b>RGU</b>: <?php echo $arr[$i]['RGU'] ?>
				<?php } ?>
		  	<?php } ?>
				
				
				
		</div>
	</div>
	
	<img src="<?php img('img/t-HFC.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;left: 62%; top: 34%;" />
	<img src="<?php img('img/t-CLOUD.png') ?>" style="position: absolute;opacity: 0.2; width: 4%;left: 53%;  top: 26%;" />
	<img src="<?php img('img/t-SIP.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;    left: 42%;    top: 59%;" />
	<img src="<?php img('img/t-VPN.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;    left: 42%;    top: 27%;" />
	<img src="<?php img('img/t-MANUAL.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;left: 62%; top: 49%;" />
	<img src="<?php img('img/t-INTERNET.png') ?>" style="position: absolute;opacity: 0.3; width: 4%;left: 34%; top: 36%;" />
	<img src="<?php img('img/t-OFFICE.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;left: 54%; top: 59%;" />
	<img src="<?php img('img/t-MOVIL.png') ?>" style="position: absolute;opacity: 0.1; width: 4%;left: 33%; top: 49%;" />
	
	<svg style="top: 45.5%;position: absolute;left: 0;width: 50%;height100px;height: 55.5%;" viewBox="0 0 100 100" preserveAspectRatio="none">
	  <polygon id="p1" points="0,0 100,0 69,31 69.5,43 63,43 0,100" style="fill: #fff;opacity: 0;"></polygon>
	 
		<polygon id="p2" points="100,100 99.7,0 69,31 69.5,43 63,43 0,100" style="fill: #fff;opacity: 0;"></polygon>
	</svg>

	<svg style="top: 44.5%;position: absolute;left: 50%;width: 50%;height100px;height: 55.5%;" viewBox="0 0 100 100" preserveAspectRatio="none">
	  <polygon id="p3" points="100,0 -1.3,0 31,31 31.3,43 37,43 43,48 100,60" style="fill: #fff;opacity: 0;"></polygon>
	 
		<polygon id="p4" points="0,100  -1.3,0 31,31 31.3,43 37,43 43,48 100,60 100,100" style="fill: #fff;opacity: 0;"></polygon>
	</svg>

	<svg style="top: 0;position: absolute;left: 49.9%;width: 50.5%;height100px;height: 44.5%;" viewBox="0 0 100 100" preserveAspectRatio="none">
	  <polygon id="p5" points="1,100 100,100 100,0 77,0" style="fill: #fff;opacity: 0;"></polygon>
	 
		<polygon id="p6" points="0,0 0,100 1.1,100 77,0 " style="fill: #fff;opacity: 0;"></polygon>
	</svg>
	
	<svg style="top: 0;position: absolute;left: 0;width: 49.9%;height100px;height: 45.5%;" viewBox="0 0 100 100" preserveAspectRatio="none">
	  <polygon id="p7" points="0,0 100,0 100,99 60,51.5 27,40" style="fill: #fff;opacity: 0;"></polygon>
	 
		<polygon id="p8" points="0,0 0,100 100,100 100,99 60,51.5 27,40 " style="fill: #fff;opacity: 0;"></polygon>
	</svg>
	
	<svg style="top: 35.5%;position: absolute;left: 41.5%;width: 17%;height100px;height: 19.5%;" viewBox="0 0 100 100" preserveAspectRatio="none">
		<ellipse cx="50" cy="50" rx="38" ry="38" style="fill: #888;"></ellipse>	  
	</svg>
	
	<svg style="top: 34%;position: absolute;left: 41.5%;width: 17%;height100px;height: 20.0%;" viewBox="0 0 100 100" preserveAspectRatio="none">
		<ellipse cx="50" cy="50" rx="38" ry="38" style="fill: #ccc;"></ellipse>	  
	</svg>

	
	
	
	
	
	
	
	</div>
	
	
	
	
	<div id="titulo-prod" style=" padding: 2px 7px;
    color: rgb(255, 255, 255);
    box-shadow: rgb(51, 51, 51) 0px 0px 5px;
    background-color: rgb(0, 55, 123) !important;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    font-size: 12px;    margin-top: 4px;;display:none">
	<span>T</span>	  <i id="cerrar-prod" class="fa fa-close pull-right" style="cursor:pointer;"></i>
		</div>
			
	<div id="prod-cont" class="col-md-12 style-4" style="    min-height: calc(100% - 240px);
    max-height: calc(100% - 240px);
	overflow-y:scroll;display:none;padding:0px;    background: #eee;
    box-shadow: 0px 0px 5px #333;">
		
		
			
		
		
		
		
	
		<table id="tbl-prod" class="table table-striped " style="background:#fff;font-size: 13px; border: 1px solid #ccc;margin-bottom:0px;">
		  <colgroup>
			 <col /><col /><col /><col /><col /><col />
		  </colgroup>
		  <thead>
			  <tr>
				  <th>Cuenta</th>
				  <th>Estado</th>
				 
				  <th>Plan Consumo</th>
				  <th class="r">TBM (Bs)</th>
				  <th class="r">TBM (Usd)</th>
			  </tr>
		  </thead>
		  <tbody>
			  <?php for($i=0; $i<count($arr_det);$i++){ ?>
				<tr data-prod="<?php echo $arr_det[$i]['PRODUCTO'] ?>">
				  <th><?php echo $arr_det[$i]['NRO_CUENTA'] ?></th>
				  <td><?php echo $arr_det[$i]['ESTADO'] ?></td>
				
				  <td><?php echo utf8_encode( $arr_det[$i]['PLAN_CONSUMO']) ?></td>
				  <td class="tr"><?php echo $arr_det[$i]['TBM'] ?> </td>
				  <td class="tr"><?php echo $arr_det[$i]['TBM_USD'] ?> </td>
				</tr>
			  <?php } ?>
		  </tbody>
		</table>
		
		
	</div>

		
		
		
</div>

<style>

   #p1,#p2,#p3,#p4,#p5,#p6,#p7,#p8{cursor:pointer;fill:#fff !important;}
   #p1:hover,#p2:hover,#p3:hover,#p4:hover,#p5:hover,#p6:hover,#p7:hover,#p8:hover
   {opacity:0.2 !important;}

  



   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='HFC')$e=true;
		} 
		if(!$e) echo '#p5 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='CLOUD')$e=true;
		} 
		if(!$e) echo '#p6 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='SIP')$e=true;
		} 
		if(!$e) echo '#p2 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='VPN')$e=true;
		} 
		if(!$e) echo '#p7 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='MANUAL')$e=true;
		} 
		if(!$e) echo '#p3 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='INTERNET')$e=true;
		} 
		if(!$e) echo '#p8 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='OFFICE')$e=true;
		} 
		if(!$e) echo '#p4 {opacity:0.8 !important;}';
	?>
   <?php 
		$e=false;
		for($i=0; $i<count($arr);$i++){
			if($arr[$i]['PRODUCTO']=='MOVIL')$e=true;
		} 
		if(!$e) echo '#p1 {opacity:0.8 !important;}';
	?>

	
	.exportar-lst{
		background: #ddd;
		font-size: 11px;
		padding: 4px 3px;
	}
	
	.exportar-lst.copiado{
		background: #afa;
		font-weight: bold;
		text-decoration: none !important;
		color: #060;
	}
	
	
	.exportar-lst:hover{
		text-decoration:underline;
		color: #00a;
	} 
	
	/*.exportar-lst:hover i{
		text-shadow: 2px 2px 8px 0px #afa;
		transform: rotate(6deg) scale(1.2);
	}*/
	
	
	
</style>
		
		
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div id="gr" style="height:0px;"> <!-- 380px -->
		
		</div>
	</div>
	
	
	
	<style>
	.titu{    font-size: 9px;
    text-align: center;
    padding-top: 3px;
	
    margin-bottom: 3px;
    margin-top: -3px;
	}
	</style>
	
	<div class="col-md-12 bounceInUp" style="margin-bottom: 26px;
    border: 1px solid #aaa;
    border-radius: 11px;
    box-shadow: 1px 1px 11px #aaa;
    background: #f3f3f3;padding:0px;position: fixed;
    width: 60%;
	height: 80px;
    bottom: 40px;    
	z-index:2;    
 " >
		
		
	
<div style="width: 35%;
    float: left;border-right: 1px solid #ccc;height:78px;">  
<div style="
    font-size: 8px;
    text-align: center;
    background: #ddd;padding: 3px;
    font-weight: bold;
    text-shadow: 1px 1px #bbb;border-top-left-radius: 10px;
">MOVIL</div>
	
		<div class=" npl npr divcont cont1" style="width:20%;float:left;">
			<div class="titu">PROPIO</div>
			<?php //print_r(array_column($array_nros,'NRO_CUENTA', 'TIPO')); ?>
			<div id="container1" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
				
			</div>
			 			 
			<div class="detalle style-4">
			    <div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
					<table class="table table-striped linea" style="border:1px solid #ccc">
                      <thead>
                        <tr> 
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead> 
                      <tbody>
					  
					    <?php for($i=0;$i<count($arr_CUENTAS_EN_PROPIO);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num"  style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_PROPIO[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
				
			
			</div>
        </div>
		<div class=" npl npr divcont cont2" style="width:20%;float:left;">
			<div class="titu">TP</div>
			<div id="container2" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
			<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			     <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					    <?php for($i=0;$i<count($arr_CUENTAS_EN_TP);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_TP[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
					
			</div>
        </div>
		<div class=" npl npr divcont cont3" style="width:20%;float:left;">
			<div class="titu">MO</div>
			<div id="container3" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
			<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_EN_MO_MOVIL);$i++){ ?>
						
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_MO_MOVIL[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			
			</div>
        </div>
		<div class=" npl npr divcont cont4" style="width:20%;float:left;">
			<div class="titu">Sin chip LTE</div>
			<div id="container4" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
				<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_SIN_CHIP_LTE);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_SIN_CHIP_LTE[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			</div>
        </div>
		<div class=" npl npr divcont cont6" style="width:20%;float:left;">
			<div class="titu">SR</div>
			<div id="container6" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
				<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			 
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_EN_SR);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_SR[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			</div>
        </div>
		
		
		
	 </div>
	 
	 <div style="    width: 25%;
    float: left;border-right: 1px solid #ccc;    height: 78px;">
	 <div style="
    font-size: 8px;
    text-align: center;
    background: #ddd;padding: 3px;
    font-weight: bold;
    text-shadow: 1px 1px #bbb;
">FIJO</div>
		<div class=" npl npr divcont cont5" style="width:33%;float:left;">
			<div class="titu">MO</div>
			<div id="container5" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
			<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			 
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_EN_MO_FIJO);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_MO_FIJO[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			</div>
        </div>
		
		<div class=" npl npr divcont cont7" style="width:33%;float:left;">
			<div class="titu">Cobertura HFC</div>
			<div id="container7" style="background:transparent;height:78px;    margin-top: -20px;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
			<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_EN_COBERTURA_HFC);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num" style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_COBERTURA_HFC[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			</div>
        </div>
		<div class=" npl npr divcont cont8" style="width:33%;float:left;">
			<div class="titu">PA</div>
			<div id="container8" style="background:transparent;height:78px; margin-top: -20px;;text-align:center;">
 
			</div>
			<div class="detalle style-4 ">
			<div class="exportar-lst ">
					<i class="fa fa-copy"></i>
					<span>Copiar al portapapeles</span>
				</div>
			  <table class="table table-striped linea" style="border:1px solid #ccc">
                       <thead>
                        <tr>
                          <th style="border:1px solid #ccc">#</th>
                          <th style="border:1px solid #ccc">Cuenta</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=0;$i<count($arr_CUENTAS_EN_PA);$i++){ ?>
				 
                        <tr>
                          <th scope="row"><?php echo ($i+1) ?></th>
                          <td class="busc-num"  style="border-left:1px solid #ccc"><?php echo $arr_CUENTAS_EN_PA[$i]['NRO_CUENTA'] ?></td>
                        </tr>

						<?php } ?>
                      </tbody>
                    </table>
			</div>
        </div>
		
	</div>	
		
		
		<div id="deschfc" class=" npl npr divcont cont8" style="width:10%;float:left;">
			<div class="titu" style="font-weight: bold; color: #a44; text-shadow: 1px 1px #ccc;">Facturas Pendientes HFC</div>
			<div id="" style="background:transparent;min-height:76px;max-height:76px;    margin-top: -27px;;text-align:center;    padding-top: 30px;
    font-size: 13px;">
				<?php echo $deuda_hfc ?> <br>Bs
			</div>
			
        </div>
		<div id="descfijo" class=" npl npr divcont cont8" style="width:10%;float:left;">
			<div class="titu" style="font-weight: bold; color: #a44; text-shadow: 1px 1px #ccc;">Facturas Pendientes Fijo</div>
			<div id="" style="background:transparent;min-height:76px;max-height:76px;    margin-top: -27px;;text-align:center;    padding-top: 30px;
    font-size: 13px;">
				<?php echo $deuda_fijo ?> <br>Bs
			</div>
			
        </div>
		<div id="descmovil" class=" npl npr divcont cont8" style="width:10%;float:left;">
			<div class="titu" style="font-weight: bold; color: #a44; text-shadow: 1px 1px #ccc;">Facturas Pendientes Movil</div>
			<div id="" style="background:transparent;min-height:76px;max-height:76px;    margin-top: -27px;;text-align:center;    padding-top: 30px;
    font-size: 13px;">
				<?php echo $deuda_movil ?> <br>Bs
			</div>
			
        </div>
		<div id="saldos" class=" npl npr divcont cont8" style="width:10%;float:left;    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;">
			<div class="titu" style="font-weight: bold; color: #a44; text-shadow: 1px 1px #ccc;">Saldos 'Beta' <br><br></div>
			<div id="" style="background:transparent;min-height:76px;max-height:76px;    margin-top: -27px;;text-align:center;    padding-top: 30px;
    font-size: 13px;">
				<?php echo $saldos; ?> <br>Bs
			</div>
			
        </div>
		
	</div>
	
	
	
	
	
	</div>
	
	
	
	
	<div class="col-md-3 npl" >
	
					  
			<div id="datos-cli" class="col-md-12 npl npr bounceInRight" style="">
			<!--
				<div class="list-group-item  active">
					<h4 class="list-group-item-heading nmb" style="font-size:14px">
                        Datos Cliente
					</h4>
				</div>-->
				
				<div id="bloque-info" class="list-group-item npl npr npt npb " style="overflow:hidden;border-raiuds-5px;background-color: #fdfdfd;box-shadow: 0px 0px 18px -8px rgba(0,0,0,1);">
				  




<div class="list-group-item  active" style="text-align: center; padding: 4px;">
					<h4 class="list-group-item-heading nmb" style="font-size:12px">
						Información del Cliente
					</h4>
				</div>

				  <table class="table table-striped  nmb"  style="font-size:10px">
                      
                      <tbody>
		
                        <tr>
                          <th scope="row">Cliente</th>
                          <td><?php echo $r['NOMBRE_CLIENTE'] ?><span class="label label-success pull-right"><?php echo strtoupper($r['SEGMENTO_CORP_TAMANO']) ?></span>
						  <br><b>Nit: </b><?php echo $r['NIT_CLIENTE'] ?>
						  <input type="hidden" id="nit_client" name="nit_client" value="<?php echo $r['NIT_CLIENTE']; ?>">
						  <input type="hidden" id="segment_client" name="segment_client" value="<?php echo strtoupper($r['SEGMENTO_CORP_TAMANO']); ?>">
						  </td>
                        </tr>
						
						<tr class="unificado-row-1">
                          <th scope="row" class="unificado-th">
							<span class="texto-uni">Unificado</span>
							<i id="copiar-cliente" class="fa fa-copy" style="
								/*color: #000;
								position: absolute;
								left: 3px;
								top: 57px; */
								font-size: 12px;
							">Copiar</i>

			
						  </th>
                          <td class="unificado unificado-row" style="text-decoration: underline; color: #00a;">
						  
						  <?php echo utf8_encode($r['COD_CLIENTE_NOMBRE']) ?>
						  
						  <input id="texto-a-copiar" type="hidden" value="<?php 
						  
						  $partes=explode(' \ ',utf8_encode($r['COD_CLIENTE_NOMBRE']));
						  echo utf8_encode($r['COD_CLIENTE_NOMBRE']) ;
						  /*if(count($partes)>1){
							  echo $partes[1];
						  }else{
							  echo $partes[0]; 
						  }*/
						  
						  ?>" />
						  
						  <i id="uni-up" class="fa fa-arrow-up pull-right" style="display:none"></i>
						  
						  <i id="uni-down" id="" class="fa fa-arrow-down pull-right"></i>
						  
						  </td>
                        </tr>
						
						
						<tr id="unificado-det" style="heigth:0px;display:none;">
							<td colspan="2" style="background: #ffa; padding: 3px;">
							<div style="max-height: 200px; overflow-y: scroll;" class="style-4">
								<table id="tbl-subsidio" class="table table-striped nmb" style="background:#fff;font-size: 11px; border: 1px solid #ccc;">
								<tbody>
									<tr>
										<td><b>Sistema</b></td>
										<td><b>Código</b></td>
										<td><b>Nombre</b></td>
									</tr>
									<?php for($i=0;$i<count($arr_uni);$i++){ ?>
									<tr>
										<td><?php echo $arr_uni[$i]['SISTEMA'] ?></td>
										<td><?php echo $arr_uni[$i]['COD_CLIENTE'] ?></td>
										<td><?php echo $arr_uni[$i]['NOMBRE_CLIENTE'] ?></td>
									</tr>
									<?php } ?>
									
							
									
								</tbody>
								</table>
							</div>
							</td>
							
						</tr>
						
					
					
					
					
						
	<?php if (true==false){ ?>
			
	<tr>
                          <th scope="row">Scoring</th>
                          <td><?php echo $SCORE ?>
						  </td>
                        </tr>
					
	<?php } ?>
					<?php if(isset($r['EJECUTIVO_CORPORATE'])){ ?>
						<tr>
                          <th scope="row">Ejecutivo</th>
                          <td>
						  <?php $arrn = explode ('-' , $r['EJECUTIVO_CORPORATE'] ); ?>
							<input type="hidden" id="cod_ejec" name="cod_ejec" value="<?php echo $cod_eje; ?>">
							<input type="hidden" id="name_ejec" name="name_ejec" value="<?php if(isset($arrn[0])) echo trim($arrn[0]); ?>">
							<input type="hidden" id="charge_ejec" name="charge_ejec" value="<?php if(isset($arrn[1])) echo trim($arrn[1]); ?>">
							<div class="row"><?php if(isset($arrn[0])) echo trim($arrn[0]); ?></diV>
							<div class="row">
							  <span class="label label-primary" style="margin-left:3px;font-size: 10px;font-weight: normal;">
								<?php echo $r['CIUDAD_EJECUTIVO'] ?>
							  </span> &nbsp;
							   
							  <?php if(isset($telf_eje)){ ?>
								<a href="tel:<?php echo $telf_eje; ?>">
									 <span class="label label-primary" style="font-size: 10px; font-weight: normal;">  
									 <i class="fa fa-phone-square"></i> 
												<?php echo $telf_eje; ?>
									 </span> &nbsp;		
								</a>								 
							  <?php } ?>
							  
							  <span class="label label-success" style="margin-top:1px"><?php if(isset($arrn[1])) echo $arrn[1]; //$r['TIPO_EJECUTIVO']; ?></span>
							</diV>  
						  </td>
                        </tr>
					<?php } ?>
					<?php if(isset($arrn[0])) { ?>
						 <?php if(trim( $arrn[0])=="MORRO NUNEZ, BERNARDO"){ ?>
								<tr>
								  <th scope="row">Ingeniero Preventa</th>
								  <td>
										- Luis Gonzales<br>
										- Alvaro Cabrera
								  </td>
								</tr>
							
								<tr>
								<th scope="row">Ejecutivo de servicio</th>
								  <td>- Edwin Sanjines</td>
								</tr>
								
						 <?php } ?>
						 
					<?php } ?>	 
						<tr>
                          <th scope="row">Dirección</th>
                          <td><?php echo $r['DIRECCION'] ?></td>
                        </tr>
						<tr>
                          <th scope="row">Repr. 1</th>
                          <td><?php echo $r['NOMBRE_REPRESENTANTE1'] ?></td>
                        </tr>
						<tr>
                          <th scope="row">Repr. 2</th>
                          <td><?php echo $r['NOMBRE_REPRESENTANTE2'] ?></td>
                        </tr>
						
						
						
						<?php if( !isset($r['NOMBRE_TITULAR_360']) ){ ?>
								<tr>
								  
								  <td colspan="2">
								  <br>
								  Falta Registrar Titularidad. 
								  
								  <a id="reg_tit" href="#" class="btn btn-success" style="padding: 0px 12px; font-size: 11px; margin-top: -2px;"> Registrar</a>
								  </td>
								</tr>
						<?php }else{ ?>
								<tr>
								  <th scope="row">Titular </th>
								  <td><?php echo $r['NOMBRE_TITULAR_360'] ?>
								  <br>
								  <i class="fa fa-phone"></i> <?php echo ($r['TELEFONO_TITULAR_360']==''? '(Sin teléfono)' :$r['TELEFONO_TITULAR_360'] ) ?>
								  <br>
								  <i class="fa fa-envelope-o"></i> <?php echo ($r['CORREO_TITULAR_360']==''? '(Sin Email)':$r['CORREO_TITULAR_360'] ) ?>
								  </td>
								</tr>
								
								
						<?php } ?>
						<?php $today = date("Y-m-d H:i:s");
							$expire = "2022-08-15 14:45:00";

							$today_time = strtotime($today);
							$expire_time = strtotime($expire);

							//if ($today_time < $expire_time) { ?>
						<tr>
							<th scope="row">Formulario On Demand: </th>
							<td>
								<?php if(isset($file->adjunto)){ ?>
										<a id="upload_on_demand" href="#" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Ver Respuesta</a>
								<?php }else{ ?>
										<a id="upload_on_demand" href="#" class="btn btn-danger"><i class="fa fa-upload" aria-hidden="true"></i> Confirmar Lista Negra</a>
								<?php } ?>
								
								<?php if(isset($file->acepta) && $file->acepta=='NO'){ ?>
										<span class="error" style="white-space: nowrap;">NO ACEPTÓ</span>
								<?php } ?>
							</td>
						</tr>
						<tr>
							<th scope="row">Historico: </th>
							<td>
								<a id="view_history" href="#" class="btn btn-primary"><i class="fa fa-history" aria-hidden="true"></i> Ver Historico</a>
							</td>
						</tr>
						<?php //} ?>
                      </tbody>
                    </table>
					
					
					
					<table id="tbl-vista" class="table table-striped nmb" style="background:#fff;font-size: 11px; border: 1px solid #ccc;">
					  <colgroup>
						 <col /><col /><col /><col /><col />
					  </colgroup>
					  <thead>
						  <tr style="      background: #ddd !important; color: #000; ">
							  <th>Servicios Contratados</th>
							  <!--<th class="r">Revenue</th>-->
							  <th class="r">TBM Contratada</th>
							  <th class="r">RGU/Lineas</th>
						  </tr>
					  </thead>
					  <tbody>
					  
					  <?php $tbm_movil=0; ?>
					  <?php for($i=0; $i<count($arr);$i++){ ?>
					  
					    <?php if ($arr[$i]['PRODUCTO']=='MOVIL') $tbm_movil=$arr[$i]['TBM'] / 6.91; ?>
					  
						<tr>
						  <th><?php echo $arr[$i]['PRODUCTO'] ?></th>
						  <!--<td class="r"><?php echo $arr[$i]['REVENUE'] ?> $</td>-->
						  <td class="r"><?php echo $arr[$i]['TBM'] ?> Bs</td>
						  <td class="r"><?php echo $arr[$i]['RGU'] ?> </td>
						</tr>

					  <?php } ?>
						
						<tr>
						  <th>Total Servicios Contratados</th>
						  <!--<th class="r"><?php echo $arr2[0]['REVENUE'] ?> $</td>-->
						  <th class="r"><?php echo $arr2[0]['TBM'] ?> Bs</td>
						  <th class="r"><?php echo $arr2[0]['RGU'] ?> </td>
						</tr>
						
					  </tbody>
					</table>
	
	
	<div class="list-group-item  active" style="text-align: center; padding: 4px;">
					<h4 class="list-group-item-heading nmb" style="font-size:12px">
					Subsidio Entregado $USD <?php echo $subsidio[0]['SUBSIDIO_USD'] ?>
					</h4>
				</div>


				<div id="div_subsidio" class="list-group-item " style="height:70px;padding:0px;cursor:pointer;">
					<?php //echo $subsidio ?>
					<div id="chart-subsidio" style="margin-top: -8px;margin-left: -50%;">
					
					</div>
					<div style="position: absolute; width: 50%; right: 0;top:0;">
						<table id="tbl-subsidio" class="table table-striped nmb" style="background:#fff;font-size: 11px; border: 1px solid #ccc;">
						  <colgroup>
							 <col><col><col><col><col>
						  </colgroup>
						  <tbody>
							
							<tr>
							  <td style="padding: 0px 3px;">Sub. vs<br>TBM en Comodato: <b class="pull-right"> <?php echo $subsidio[0]['PORCENTAJE_ENTREGADO'] ?>%</b></td>
							</tr>
							<tr>
							  <?php  
							     
								if($tbm_movil>0){
									$subsidio[0]['PORCENTAJE_ENTREGADO2'] =	100*($subsidio[0]['SUBSIDIO_USD'] / ($tbm_movil *18));  
						        }else{ 
									$subsidio[0]['PORCENTAJE_ENTREGADO2'] =	0;  
								}
								$subsidio[0]['PORCENTAJE_ENTREGADO2'] =round($subsidio[0]['PORCENTAJE_ENTREGADO2'], 0);   
							  
							  
							  ?>
							  <td style="padding: 0px 3px;color:#20579b">Sub. vs<br>TBM Total Móvil: <b class="pull-right"> <?php echo $subsidio[0]['PORCENTAJE_ENTREGADO2'] ?>%</b></td>
							</tr>
						  </tbody>
						</table>
					</div>
					
				</div>
				
				<div class="list-group-item  active" style="text-align: center; padding: 4px;">
					<h4 class="list-group-item-heading nmb" style="font-size:12px">
					Transacción
					</h4>
				</div>
				<div id="div_transaccion" class="list-group-item " style="height:70px;padding:0px;cursor:pointer;">
					<div class="col-md-6"><br><h4 class="list-group-item-heading nmb" style="font-size:12px">Registrar Transacción:</h4></div> 					  
					<div class="col-md-6"><br><a id="reg_trans" href="#" class="btn btn-success" style="padding: 0px 12px; font-size: 11px; margin-top: -2px;"> Registrar</a></div>
				</div>
	
	
	
	</div>
	

	
	<?php if( count($arr_bolsa)>0){ ?> 
	
	<div class="list-group-item npl npr npt npb " style="margin-top: 12px;
    overflow: hidden;
    background-color: #fdfdfd;
    box-shadow: 0px 0px 2px 1px #aae;
    border-radius: 4px;
	">
				  
		<div class="list-group-item  active" style="text-align: center; padding: 4px;">
			<h4 class="list-group-item-heading nmb" style="font-size:12px">
				TBM Bolsa Empresa: <?php echo $arr_bolsa[0]['TBM'] //deberia ser sumatoria movil y hfc ?> Bs
			</h4>
		</div>
		<table id="tbl-bolsa" class="table table-striped nmb" style="background:#fff;font-size: 11px; border: 1px solid #ccc;">
		
		  <tbody>
			<tr style="background: #f8f8ff;">
			  <th style="border-left: 1px solid #ccc;padding: 1px;text-align: center;"></th>
			  <th style="border-left: 1px solid #ccc;padding: 1px;text-align: center;">TBM </td>
			  <th style="border-left: 1px solid #ccc;padding: 1px;text-align: center;">RGU </i></td>
			  <th style="border-left: 1px solid #ccc;padding: 1px;text-align: center;" rowspan="3">
			  
			  <a id="detalle_bolsa" href="#" class="btn btn-success" style="    padding: 5px 8px;
    font-size: 11px;
    margin-top: 11px;" disabled> Ver Detalle</a>
			  
			  </td>
			</tr>
			
			<tr style="background: #f8f8ff;">
			  <th>Móvil<i class="fa fa-caret-right pull-right" style="color:#bbb"></i></th>
			  <th style="text-align:right;border-left: 1px solid #ccc;background: #fff;"><?php echo $arr_bolsa[0]['TBM'] ?> Bs</td>
			  <th style="text-align:right;border-left: 1px solid #ccc;background: #fff;"><?php echo $arr_bolsa[0]['RGU'] ?></td>
			</tr>
			<tr style="background: #f8f8ff;">
			  <th>HFC<i class="fa fa-caret-right pull-right" style="color:#bbb"></th>
			  <th style="text-align:right;border-left: 1px solid #ccc;background: #fff;">0 Bs</td>
			  <th style="text-align:right;border-left: 1px solid #ccc;background: #fff;">0</td>
			</tr>
			
			<tr style="background: #f8f8ff; color: #070;">
		
			  <th class="r" colspan="4">Condición Bolsa Empresa: TBM Total >= 750 Bs</td>
			</tr>
		  </tbody>
		</table>
	
	</div>
	
	
	<?php } ?> 
	
	
	
	
				</div>
			</div>
	


	
	
		
			





	
	
	
	
	
	<div class="col-md-12 style-4" style="min-height:360px;max-height:360px;overflow-y:scroll;display:none;">
		
	</div>
	
	<div id="transaccion-dialogo" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm" style="width:500px">
			<div class="modal-content">
				<div class="modal-header" style="padding: 7px;padding-bottom: 3px;background-color: #337ab7;border-radius: 2px;color: #fff;">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" >Datos</h4>
				</div>
				<div id="transaccion-body" class="modal-body" style="padding:1px">
				  
				</div>
			</div>
		</div>
	</div>
	
    <div id="transaccion-dlg-sino" class="modal fade"  role="dialog">
	  <div class="modal-dialog" style="width:400px">
		<div class="modal-content modal-naranja">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -11px;"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<p id="dlg-sino-msg"></p>
		  </div>
		  <div class="modal-footer">
			<button id="confirmar-si" type="button" class="btn btn-default" data-dismiss="modal">Si</button>
			<button id="confirmar-no" type="button" class="btn btn-default" data-dismiss="modal">No</button>
		  </div>
		</div>
	  </div>
	</div>

	
</div>
<?php //echo print_r($r); ?>

<script>
    
	
    $('.unificado-row').click(function(){
		if($('#unificado-det').is(':visible')){
			$('#unificado-det').fadeOut()
			$('#uni-up').hide()
			$('#uni-down').show()
			
		}else{
			$('#unificado-det').fadeIn()
			$('#uni-up').show()
			$('#uni-down').hide()
			
		}
		
	})
	
	var productos=[
	
		<?php for($i=0; $i<count($arr);$i++){ ?>
			'<?php echo $arr[$i]['PRODUCTO'] ?>',
		<?php } ?>
	];				
				
				
				
	  var images =  [
						<?php for($i=0; $i<count($arr);$i++){ ?>
							'<?php img('img/t-'.$arr[$i]['PRODUCTO'].'.png') ?>',
						<?php } ?>
				    ];
  
	
	
	function armarPie(){
		Highcharts.getOptions().colors =['#63aae7','#63aae7','#63aae7'],
		Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
			return {
				radialGradient: {cx: 0.5,cy: 0.3,r: 0.7},
				stops: [
					[0, color],
					[1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
				]
			};
		});
	
		chart360 = Highcharts.chart('gr', {
			chart: {  
				type: 'pie',
				backgroundColor:'transparent',
				events: {
					load: function () {
						var chart = this,
							points = chart.series[0].points,
							shape, r, ang, posX, posY,
							cX = chart.series[0].center[0],
							cY = chart.series[0].center[1] + chart.plotTop;

						chart.customImgs = [];

						$.each(points, function (i, p) {
							shape = p.shapeArgs;
							r = shape.r;
							ang = (shape.end - shape.start) / 2 + shape.start;
							posX = cX + (r * 0.8) * (Math.cos(ang));
							if((-.3) < Math.cos(ang) && Math.cos(ang) <.2){
								var cal=.06;
								posX = cX + (r * 0.7) * (Math.cos(ang) + cal)
							}
							var angle =(shape.end - shape.start)*360/Math.PI;
							posY = cY + (r * 0.7) * Math.sin(ang);
							var r1 = 2*(shape.end - shape.start)/Math.PI;
							r1= r1>1 ? 1 : r1;
							r= r*r1;
							if(angle>25)
							chart.customImgs.push(chart.renderer.image(
								images[i],
								posX + (p.labelPos[6] === 'right' ? (1) :(-1)) * (r / 8)      ,
								posY - r / 4, r / 4, r / 2)
								.attr({
								zIndex: 4,opacity:0.08,width:'70px',
									'pointer-events': 'none'
							})
								.add());
						});
					},
					redraw: function () {
						var chart = this,
							points = chart.series[0].points,
							shape, r, ang, posX, posY,
							cX = chart.series[0].center[0],
							cY = chart.series[0].center[1] + chart.plotTop;

						$.each(points, function (i, p) {
							shape = p.shapeArgs;
							r = shape.r;
							ang = (shape.end - shape.start) / 2 + shape.start;
							posX = cX + (r * 0.7) * Math.cos(ang);
							if((-.3) < Math.cos(ang) && Math.cos(ang) <.2){
								var cal=.1;
								posX = cX + (r * 0.7) * (Math.cos(ang) + cal)
							}
							posY = cY + (r * 0.7) * Math.sin(ang);

							if (chart.customImgs[i]) {
								chart.customImgs[i].attr({
									x: posX + (p.labelPos[6] === 'right' ? (1) : (-1)) * (r / 8),
									y: posY - r / 4,
								});
							}
						});
					}
				}
			
			
			
			},
			title: null,//{text:'<?php echo $cliente ?>'}, 
			credits: false ,  
			plotOptions: {  
				pie: {  
					innerSize: 80, 
					cursor: 'pointer', 
					dataLabels: { 
					    enabled: true, 
						distance: -70, 
						style:{"color": "contrast", "fontSize": "14px", "fontWeight": "normal" },
						formatter:function(){
							return this.key /*+'<br><span style="font-size:10px;color:#ffffcc">Revenue: 1.061</span>'
							               +'<br><span style="font-size:10px;color:#ffffcc">TBM: 1.061</span>'
										   +'<br><span style="font-size:10px;color:#ffffcc">RGU: 1.061</span>'*/
						} 
						
					},
					
					showInLegend: false,
				}, 
			},
			tooltip:{enabled:false},
			series: [{
				point:{
					  events:{
						  click: function (event) {
								var sel=event.point.selected || false
									sel = !sel
									
							    if(productos[this.x] == 'MOVIL'){
									var rect =menu3.getBoundingClientRect();
									//rect.top, rect.right, rect.bottom, rect.left
									var con=gr.getBoundingClientRect();
									$('#gr').fadeOut(250)
									$('#efect').css('top',con.top+'px')
												.css('width','400px')
												.css('height','400px')
												.css('left',(con.left-20)+'px')
												//.show()
												.animate({'width':'0px','height':'0px','top':rect.top+20+'px'},400,function(){$('#menu3').click()})
									
							    }else{
									
									if(sel){
										//$('#tbl-vista').hide()
										$('#tbl-prod tbody tr').hide()
										$('#tbl-prod tbody tr[data-prod="'+productos[this.x]+'"]').show()
										$('#tbl-prod').hide()
										setTimeout(function(){$('#tbl-prod').show()},50)
									}else{
										$('#tbl-prod').hide()
										//$('#tbl-vista').show()
										
									}
									
								}
							
						  }
					  }
				  }  ,  
				shadow:true,
				borderWidth: 3,
				allowPointSelect: true,
				name: 'Cantidad',
				data: [
				
				<?php for($i=0; $i<count($arr);$i++){ ?>
				
		['<?php echo $arr[$i]['PRODUCTO'] ?>' //+'<br><span style="font-size:10px;color:#ffffdd">Revenue: <?php echo $arr[$i]['REVENUE'] ?> $</span>'
							               +'<br><span style="font-size:10px;color:#ffffdd">TBM: <?php echo $arr[$i]['TBM'] ?> Bs</span>'
										   +'<br><span style="font-size:10px;color:#ffffdd">RGU: <?php echo $arr[$i]['RGU'] ?></span>',1],

		  <?php } ?>
				
				
				
				]
			}]
		});
		
	
	}

	//armarPie()
	
	
  
  
	Highcharts.getOptions().colors =['#00377b','#aaaaaa']
  

	
	Highcharts.chart('container1', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text: '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN PROPIO') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'PROPIO',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: 'PA',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
			<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN PROPIO'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',   <?php echo ($TOT_CUENTAS_EN_PROPIO - $arr_cue[$i]['CANT'] ) ?> ],
				<?php } ?>
			
			<?php } ?>
			
			]
		}]
	});

	  
    Highcharts.chart('container2', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text: '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN TP') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'TP',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN TP'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_TP - $arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	  Highcharts.chart('container3', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text: '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN MO MOVIL') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'MO',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN MO MOVIL'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_MO_MOVIL - $arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	  Highcharts.chart('container4', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text:  '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS SIN CHIP LTE') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'SIN CHIP LTE',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "8px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS SIN CHIP LTE'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_SIN_CHIP_LTE -$arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	  Highcharts.chart('container5', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text:  '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN MO FIJO') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'MO FIJO',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN MO FIJO'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_MO_FIJO - $arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	  Highcharts.chart('container6', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text: '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN SR') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'SR',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN SR'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_SR-$arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	  	  
  Highcharts.chart('container7', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text:  '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN COBERTURA HFC') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'COBERTURA HFC',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN COBERTURA HFC'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_COBERTURA_HFC - $arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	
	
	Highcharts.chart('container8', {
		chart: { plotBackgroundColor: null,  plotBorderWidth: 0, plotShadow: false,backgroundColor:'transparent',  },
		title: {
			text: '<?php for($i=0;$i<count($arr_cue);$i++){ if($arr_cue[$i]['TIPO']=='CUENTAS EN PA') echo $arr_cue[$i]['CANT'] ; } ?>',
			style:{ "color": "#333333", "fontSize": "10px" },
			align: 'center', verticalAlign: 'middle',
			y: 14
		},
		/*subtitle:{
			text:'PA',
			align: 'center', verticalAlign: 'middle',
			style:{ "color": "#333333", "fontSize": "10px" },
			y: -12
		},*/
		tooltip: { enabled:false },
		plotOptions: { pie: { dataLabels: { enabled: false, }, startAngle: 0, endAngle: 360, center: ['50%', '75%']  }    },
		credits:false,
		series: [{
			type: 'pie',innerSize: '50%',
			name: ' ',
			style:{ "color": "#333333", "fontSize": "10px" },
			data: [
				<?php for($i=0;$i<count($arr_cue);$i++){ ?>
	
				<?php if($arr_cue[$i]['TIPO']=='CUENTAS EN PA'){ ?>
					[' ',  <?php echo $arr_cue[$i]['CANT'] ?> ],
					[' ',  <?php echo ($TOT_CUENTAS_EN_PA - $arr_cue[$i]['CANT'] ) ?> ],
		
				
				<?php } ?>
			
			<?php } ?>
			]
		}]
	});

	
	
	
	

			 
			<?php if($CANT_CUENTAS_EN_MO_MOVIL==0){ //3 ?> 
			$('#container3').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont3 .detalle').remove()
			$('.cont3').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_PROPIO==0){ //1 ?>
			$('#container1').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont1 .detalle').remove()
			$('.cont1').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_SR==0){ //6 ?> 
			$('#container6').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont6 .detalle').remove()
			$('.cont6').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_SIN_CHIP_LTE==0){ //4 ?>
			$('#container4').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont4 .detalle').remove()
			$('.cont4').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_TP==0){ //2 ?> 
			$('#container2').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont2 .detalle').remove()
			$('.cont2').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_COBERTURA_HFC==0){ //7 ?>
			$('#container7').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont7 .detalle').remove()
			$('.cont7').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_PA==0){ //8 ?>
			$('#container8').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont8 .detalle').remove()
			$('.cont8').css('cursor','default')
			
			<?php } ?>
			<?php if($CANT_CUENTAS_EN_MO_FIJO==0){ //5 ?>
			$('#container5').html('<i class="fa fa-circle-o" style="font-size: 36px;color: #ccc;margin-top: 22px;"></i>');
			$('.cont5 .detalle').remove()
			$('.cont5').css('cursor','default')
			
			<?php } ?>
			
			
		$('#reg_tit').click(function(e){
			e.preventDefault()
			$('#menu4').click()
		})	
			
		$('#reg_trans').click(function(e){
			e.preventDefault()
			var cta=$('#CUENTA').val();
			$('#transaccion-dialogo').modal('show');
			$('#transaccion-body').load(url2+'Transacciones/agregar?cta='+cta);
		})	
		
		$('#upload_on_demand').click(function(e){
			e.preventDefault()
			var cta=$('#CUENTA').val();
			var cta_uni=$('#CUENTA_UNIFICADA').val();
			cta_uni = cta_uni.replace('#',';');
			cta_uni = cta_uni.replace('+','>');
			cta_uni = cta_uni.replace(/\u00A0/, "");
			cta_uni = encodeURI(cta_uni);
			$('#transaccion-dialogo').modal('show');
			$('#transaccion-body').load(url2+'OnDemand/agregar?cta_uni='+cta_uni);
		})

		$('#view_history').click(function(e){
			e.preventDefault()
			var cta=$('#CUENTA').val();
			var cta_uni=$('#CUENTA_UNIFICADA').val();
			cta_uni = cta_uni.replace('#',';');
			cta_uni = cta_uni.replace('+','>');
			cta_uni = cta_uni.replace(/\u00A0/, "");
			cta_uni = encodeURI(cta_uni);
			$('#transaccion-dialogo').modal('show');
			$('#transaccion-body').load(url2+'Inicio/historico?cta_uni='+cta_uni);
		})
			
			
	$('#p5').click(function(){
		$('#titulo-prod span').html('HFC')
		mostrar_producto(true,'HFC')
	})
	$('#p6').click(function(){
		$('#titulo-prod span').html('CLOUD')
		mostrar_producto(true,'CLOUD')
	})
	$('#p2').click(function(){
		$('#titulo-prod span').html('SIP')
		mostrar_producto(true,'SIP')
	})
	$('#p7').click(function(){
		$('#titulo-prod span').html('VPN')
		mostrar_producto(true,'VPN')
	})
	$('#p4').click(function(){
		$('#titulo-prod span').html('OFFICE')
		mostrar_producto(true,'OFFICE')
	})
	$('#p8').click(function(){
		$('#titulo-prod span').html('INTERNET')
		mostrar_producto(true,'INTERNET')
	})
	$('#p3').click(function(){
		$('#titulo-prod span').html('MANUAL')
		mostrar_producto(true,'MANUAL')
	})

    $('#p1').click(function(){
	/*	var rect =menu3.getBoundingClientRect();
		//rect.top, rect.right, rect.bottom, rect.left
		var con=comp360.getBoundingClientRect();
		//$('#gr').fadeOut(250)
		$('#efect').css('top',con.top+'px')
					.css('width','400px')
					.css('height','400px')
					.css('left',(con.left-20)+'px')
					//.show()
					.animate({'width':'0px','height':'0px','top':rect.top+20+'px'},400,function(){})
					*/
	$('#comp360').addClass('zoomOutLeft');
	  setTimeout( function(){
		 $('#menu3').click() 
	  },1000) 
	})
	$('#div_subsidio').click(function(){
		$('#menu3').click()  
	})


	function mostrar_producto(sel,p){

		if(sel){
			//$('#tbl-vista').hide()
			
			//$('#tbl-prod').show()
			$('#comp360').animate({'height':'220px'});
			
			$('#tbl-prod tbody tr').hide()
			$('#tbl-prod tbody tr[data-prod="'+p+'"]').show()
			 $('.detpie').hide()
			//$('#tbl-prod').hide()
			setTimeout(function(){$('#prod-cont,#titulo-prod').show()},50)
		}else{
				$('#comp360').animate({'height':'370px'});
			$('#prod-cont,#titulo-prod').hide()
			//$('#tbl-vista').show()
			
		}
	}
    $('#cerrar-prod').click(function(){
			$('#comp360').animate({'height':'370px'});
			$('#prod-cont,#titulo-prod').hide()
			//$('#tbl-vista').show()
			 $('.detpie').show()
	})
			
	$('#descfijo').click(function(){
		var cta=$('#CUENTA_UNIFICADA').val();
		cta=encodeURI(cta)
		
		
		cta=cta.replace('#',';')
		cta=cta.replace('&',':')
		cta=cta.replace('Á','(')
		cta=cta.replace('É',')')
		cta=cta.replace('Í','[')
		cta=cta.replace('Ó',']')
		cta=cta.replace('Ú','{')
		
		
		cta=cta.replace('+','>')
		
		window.open('<?php echo url2('') ?>Inicio/descargar_fijo?cta='+cta);	
	})
	$('#descmovil').click(function(){
		var cta=$('#CUENTA_UNIFICADA').val();
		cta=encodeURI(cta)	
		
		
		
		cta=cta.replace('#',';')
		cta=cta.replace('&',':')
		cta=cta.replace('Á','(')
		cta=cta.replace('É',')')
		cta=cta.replace('Í','[')
		cta=cta.replace('Ó',']')
		cta=cta.replace('Ú','{')
		
		cta=cta.replace('+','>')
		
		window.open('<?php echo url2('') ?>Inicio/descargar_movil?cta='+cta);		
	})
	$('#saldos').click(function(){
		var cta=$('#CUENTA_UNIFICADA').val();
		cta=encodeURI(cta)	
		
		
		
		cta=cta.replace('#',';')
		cta=cta.replace('&',':')
		cta=cta.replace('Á','(')
		cta=cta.replace('É',')')
		cta=cta.replace('Í','[')
		cta=cta.replace('Ó',']')
		cta=cta.replace('Ú','{')
		
		cta=cta.replace('+','>')
		
		window.open('<?php echo url2('') ?>Inicio/descargar_saldos?cta='+cta);		
	})	
	
	$('#deschfc').click(function(){
		var cta=$('#CUENTA_UNIFICADA').val();
		cta=encodeURI(cta)	
		
		
		
		cta=cta.replace('#',';')
		cta=cta.replace('&',':')
		cta=cta.replace('Á','(')
		cta=cta.replace('É',')')
		cta=cta.replace('Í','[')
		cta=cta.replace('Ó',']')
		cta=cta.replace('Ú','{')
		
		
		cta=cta.replace('+','>')
		
		window.open('<?php echo url2('') ?>Inicio/descargar_hfc?cta='+cta);		
	})			
	
	
	
	
	$('.busc-num').click(function(){
		
		$('#CUENTA').val($(this).html())
	$('#menu1').click()
	})
	
	
	
	$('.exportar-lst').click(function(){
		$this=$(this)
		var d=$this.next()

		selectText(d)
		document.execCommand("copy");
		clearSelection()
		
		$('span',$this).html('Copiado')
		
		$('i',$this).animate({'transform':'rotate(360deg)'},1000)
		
		$this.addClass('copiado')
		
		
		
		
		setTimeout(function(){
			$this.removeClass('copiado')
			$('span',$this).html('Copiar al portapapeles')
		},1000)
	})
	
	function copyToClipboard(elemento) {
	  var $temp = $("<div></div>")
	  $("body").append($temp);
	  $temp.html(elemento.html())
	  
	  selectText(elemento)
	  
	  document.execCommand("copy");
	  clearSelection()
	  $temp.remove();
	}
	
	function selectText(elemento) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(elemento[ 0 ]);
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(elemento[ 0 ]);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
        }
    }
	function clearSelection(){
		 if (window.getSelection) {window.getSelection().removeAllRanges();}
		 else if (document.selection) {document.selection.empty();}
	}
	
	
	
	
	
		
	    var alto   = 100
		var valor1 = <?php echo $subsidio[0]['PORCENTAJE_ENTREGADO'] ?>;
		var valor2 = <?php echo $subsidio[0]['PORCENTAJE_ENTREGADO2'] ?>;
		
		if(valor1>100)valor1=100;
		if(valor2>100)valor2=100;
		
		var minimo = 0;
		var maximo = 100;
		
		var franjas=[
				{from: 0, to: 20, color: '#17fa05' ,  innerRadius: '100%', outerRadius: '115%'},	
				{from: 20, to: 35, color: '#f2f53e' ,  innerRadius: '100%', outerRadius: '115%'},
				{from: 35, to: 100, color: '#ff2222' ,  innerRadius: '100%', outerRadius: '115%'},
				
				]
        
	setTimeout(function(){	
		$('#chart-subsidio').highcharts( { 
		//Highcharts.chart('container', {

			chart: {
				type: 'gauge',
				plotBorderWidth: 0,
				plotBackgroundImage: null,
			
				height: alto
			},
			title: {text: ''},
			pane: [{
				startAngle: -90,
				endAngle: 90,
				background: null,
				center: ['50%', '80%'],
				size: alto * 0.8
			},],

			tooltip: { enabled: false },

			yAxis: [{
				minorTickInterval: 5,
				minorTickWidth: 0.8,
				minorTickLength: 6,
				
				minorTickColor: '#ddd',
				
				tickInterval:10,
				tickPixelInterval: 30,
				tickWidth: 1,
			
				tickLength: 6,
				tickColor: '#aaa',
				
		
				min: minimo,
				max: maximo,
				minorTickPosition: 'outside',
				tickPosition: 'outside',
				labels: {
					rotation: '',
					distance: 14,
					style:{fontSize:'8px'}
				},
				plotBands: franjas,
				title: { y: alto * (-0.04) }
				
			}],

			plotOptions: {
				gauge: {
					animation:(true?{duration:1000}:false),
					dataLabels: { enabled: false },
					dial: {radius: '100%' },
				 
				}
			},
            credits: false,
			series: [{ data: [
			
			{
					id: 'sub1',
					y: valor1,
					color:'#00FFFF',
					
					dial: {
						radius: '96%',
						baseWidth: 4,
						/*baseLength: '95%',
						rearLength: 4,*/
						backgroundColor:'#000'
					}
				}
			
			,{
					id: 'sub2',
					y:valor2,
					color:'#00FFFF',
					
					dial: {
						radius: '96%',
						baseWidth: 4,
						/*baseLength: '95%',
						rearLength: 8,*/
						backgroundColor:'#20579b'
					}
				}
				] } ]

			
		},
		);	
	},700)
	
	
	
	
	/*function copyToClipboard(text) {
		navigator.clipboard.writeText(text)
	}*/
	
	$('#copiar-cliente').click(function(){
		copyTextToClipboard($('#texto-a-copiar').val())
		
		$('#copiar-cliente').html('&nbsp; <i class="fa fa-cog fa-spin"></i>')
		setTimeout(function(){
			$('#copiar-cliente').html('Copiar')
		},200)
	})
	
	
	function copyTextToClipboard(text) {
  var textArea = document.createElement("textarea");

  //
  // *** This styling is an extra step which is likely not required. ***
  //
  // Why is it here? To ensure:
  // 1. the element is able to have focus and selection.
  // 2. if element was to flash render it has minimal visual impact.
  // 3. less flakyness with selection and copying which **might** occur if
  //    the textarea element is not visible.
  //
  // The likelihood is the element won't even render, not even a
  // flash, so some of these are just precautions. However in
  // Internet Explorer the element is visible whilst the popup
  // box asking the user for permission for the web page to
  // copy to the clipboard.
  //

  // Place in top-left corner of screen regardless of scroll position.
  textArea.style.position = 'fixed';
  textArea.style.top = 0;
  textArea.style.left = 0;

  // Ensure it has a small width and height. Setting to 1px / 1em
  // doesn't work as this gives a negative w/h on some browsers.
  textArea.style.width = '2em';
  textArea.style.height = '2em';

  // We don't need padding, reducing the size if it does flash render.
  textArea.style.padding = 0;

  // Clean up any borders.
  textArea.style.border = 'none';
  textArea.style.outline = 'none';
  textArea.style.boxShadow = 'none';

  // Avoid flash of white box if rendered for any reason.
  textArea.style.background = 'transparent';


  textArea.value = text;

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    //console.log('Copying text command was ' + msg);
  } catch (err) {
    //console.log('Oops, unable to copy');
  }

  document.body.removeChild(textArea);
}

			  
</script>

