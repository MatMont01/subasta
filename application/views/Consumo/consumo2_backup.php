<?php 

if(Usr::gUsuario()=='garridoddddd' and !(isset($_SESSION['joda'])) ){ 


$_SESSION['joda']='off';

?>

<style>
body{padding-top:0px !important;}
</style>
<img src="http://bicorporate/testt.png" width="100%">
<img id="snop" src="http://bicorporate/tenor.gif" style="position:absolute;height:410px;left:-500px;bottom:0px;">


<script>

	setTimeout(function(){
	ajaxAccion('Usuario/salir',function(){
	location.reload()	
	})
	},7000)

	$('#snop').animate({left:'100%'},7000)
</script>	
<?php	return ; ?>
<?php } ?>	
	
	
<nav class="navbar  navbar-inverse" role="navigation" style="border-radius:0;background: #00377b;
    border-color: #00377b;
    box-shadow: 0px 0px 3px #00377b;margin-bottom:5px;z-Index:7;position: absolute;
    top: 0;
    width: 100%;
    margin-bottom: 0px;
    opacity: 1;min-height:42px;height:42px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" style="padding: 1px 6px;">
    <a class="navbar-brand npr" style="background-image:url(<?php img('img/logo-header.png') ?>);
	height: 34px;
    background-size: 100%;
    padding: 0px;
    width: 146px;"></a>
  </div>

  
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		

	 
	 <!--  -->
	<style>
	    input.foco {
			border-radius: 15px 15px 0px 0px !important;
		}
		ul.resultados {
			list-style: none;
			padding-left: 2px;
		}
		ul.resultados li {
			cursor:pointer;
			padding: 3px 3px;
		}
		ul.resultados li label {
			cursor:pointer;
			font-size: 100%;
			padding: 1px 6px;
			font-weight: normal;
			border: 1px inset #aaa;
			background: #eee;
			color: #000;
			border-radius: 12px;
		}
		/*ul.resultados li:hover {
			background:#ddd;
			text-shadow:0px 0px 1px #555;
		}*/
		ul.resultados li.seleccionado {
			background:#ddd;
			text-shadow:0px 0px 1px #777;
		}
		.busqueda-num {
			font-size: 85%;padding: 0px 6px;font-weight: normal;border: 1px inset #ccc; background: #eee;
    color: #666;
    border-radius: 12px;
		}
	</style>
	
	
	<script>
		function buscar_global(cta,nombre,unificado){
			$('#CUENTA-TEXTO').attr('data-cta',cta)
			$('#CUENTA-TEXTO').attr('data-nombre',nombre)
			$('#CUENTA-TEXTO').attr('data-unificado',unificado)
			
			
			
		}
		$(document).ready(function(){ 
			$('#CUENTA-TEXTO').click(function(e){ 
				var w=$('#CUENTA-TEXTO').width()
				$('#listado-busqueda').html('')
				$('#bloque-busqueda').show().css('min-width',w+25).css('background','#fff')
				$('#mancha').show()
				$('#bloque-no').hide()
				$('#texto-buscar').val('').focus()
				
				$('#CUENTA-TEXTO').addClass('fadeOut')
				e.stopPropagation()
			})
			
			$('body').click(function(){
				$('#bloque-busqueda').hide()
				$('#mancha').hide()
				$('#CUENTA-TEXTO').removeClass('fadeOut')
				
			})
			
			$('#bloque-busqueda').click(function(e){
				e.stopPropagation()
			})
			
			$('#texto-buscar').keyup(function(e){
				console.log(e.keyCode)
				if(e.keyCode==40){ //tecla abajo
					var $seleccionado=$('.seleccionado')
					if($seleccionado.length==0){
						$('.resultado').first().addClass('seleccionado')
					}else{
						var $sig=$seleccionado.next()
						$seleccionado.removeClass('seleccionado')
						$sig.addClass('seleccionado')
					}
				}else if(e.keyCode==38){//tecla arriba
				    var $seleccionado=$('.seleccionado')
					if($seleccionado.length==0){
						$('.resultado').last().addClass('seleccionado')
					}else{
						var $sig=$seleccionado.prev()
						$seleccionado.removeClass('seleccionado')
						$sig.addClass('seleccionado')
					}
				}else if(e.keyCode==13){
					var $seleccionado=$('.seleccionado')
					if($seleccionado.length==0){
					
					}else{
						var cta=$seleccionado.attr('data-cta')
						var nombre=$seleccionado.attr('data-nombre')
						var unificado=$seleccionado.attr('data-unificado')
						$('.seleccionado').removeClass('seleccionado')
						$('#CUENTA').val(cta);
						buscar_global(cta,nombre,unificado)
						actualizar()
					}
				}else if(e.keyCode==27){ //escape
					$('body').click()
					
				}else if(e.keyCode==37 || e.keyCode==39 || e.keyCode==16){	
					//nada
				}else{
					$('#listado-busqueda').html('')
					$('#bloque-busqueda').css('background','#fff')
					$('#bloque-no').hide()
					if($('#texto-buscar').val()=='') return
					var term=encodeURI($(this).val())
					var html='<ul class="resultados">'
					ajaxAccion('Inicio/listado_cuentas_2?term='+term,function(r){
						
						if (r.length==0) {
							$('#cuenta-no').html($('#texto-buscar').val())
							$('#bloque-busqueda').css('background','#fee')
							$('#bloque-no').show()
						}else{
							$('#bloque-no').hide()
							$('#bloque-busqueda').css('background','#fff')
						}
						
						for (var i=0; i<r.length; i++){
							html+='<li class="resultado" data-cta="'+r[i].cuenta+'" data-nombre="'+r[i].nombre+'" data-unificado="'+r[i].unificado+'">'
							if(r[i].cuenta>0){
								html+='<label class="label label-primary">'+r[i].cuenta+'</label> '+r[i].nombre
							}else{
								html+=r[i].nombre
							}
							html+='</li>'
						}
						$('#listado-busqueda').html(html+'<ul>')
						$('#listado-busqueda ul li').click(function(){
							var cta=$(this).attr('data-cta')
							var nombre=$(this).attr('data-nombre')
							var unificado=$(this).attr('data-unificado')
							
							$('#CUENTA').val(cta);
							
							buscar_global(cta,nombre,unificado)
							actualizar()
						})
						$('#listado-busqueda ul li').hover(function(){
							$('.seleccionado').removeClass('seleccionado')
							if(!$(this).hasClass('seleccionado')){
								$(this).addClass('seleccionado')
							}
						})
					})	
				}
				
				
			})
		})
		
	</script>
    <div id="frmBuscar" class="navbar-form navbar-left" role="search" style=" margin: 6px 0px;">

		<div class="input-group">
			
			<input type="hidden" value="" id="CUENTA_UNIFICADA"/>
			
			<span id="CUENTA-TEXTO" class="form-control "
			style=" border-radius: 15px 15px 15px 15px;
					padding: 2px 9px;
					border: 1px solid #003777;
					height: 28px;
					min-width: 199px;
					color: #999;
					cursor: text;
					max-width: 555px;
					overflow: hidden;    
					border: 1px solid rgb(158, 169, 183);
					box-shadow: rgb(119, 119, 119) 0px 0px 6px;">Buscar...</span>
			
			<input type="hidden" value="" id="CUENTA" style="" >
			
			<!--<span class="input-group-btn">
			  <button id="btn-buscar" class="btn btn-default" type="button" style="
			  border-radius: 0px 25px 25px 0px;
			  /*box-shadow: 0px 0px 4px #fff;*/
			  color: #999;
    border-left: none;
    outline: none;     height: 28px;
    padding-top: 3px;"><i class="fa fa-search"></i></button>
			</span> -->
		  </div>

<div id="mancha" style="    background: #000;
    position: absolute;
    width: 101%;
    height: calc(100vh - 101px);
    left: -1px;
    top: 41px;
    opacity: 0.5;display:none;">	</div>	  
<div id="bloque-busqueda" class="fadeIn2___" style="
		       position: absolute;
    background: rgb(255, 255, 255);
    border-radius: 15px;
    padding: 3px 9px;
    font-size: 12px;
    left: 173px;
    top: 6px;
    width: auto;
    z-index: 9999;
    border: 1px solid rgb(158, 169, 183);
    box-shadow: rgb(119, 119, 119) 0px 0px 6px;
    min-width: 264px;
    display: none;
    /*box-shadow: rgba(0, 0, 0, 0.75) 0px -1px 3px -2px inset;*/

	">

	<input id="texto-buscar" autocomplete="off" style="background: transparent;border:none;outline:none;font-size:14px;width:100%;    padding: 0px 0px 0px 3px;
    border-bottom: 1px solid #5087cb;	" />

	<div id="bloque-no" class="" style="
		font-size: 12px;
		display:none;
	">
	La cuenta "<span id="cuenta-no" style="color:#a00">78899821</span>" no es una cuenta B2B,<br>favor verificar las cuentas Masivas en <span id="link-plani">Planifícate</span>
	</div> 

	<div id="listado-busqueda" >
	
	</div>
	
</div>

    </div>
    
	<ul id="navr" class="nav navbar-nav navbar-right" style="">
	
			  <li> 
				
				<a id="video" style="font-size: 12px;line-height: 1.2;padding: 7px 14px;color: #d2d2d2;text-align: center;cursor: pointer;position: relative;">
    
				  <i class="fa fa-video-camera" style="font-size: 17px;    background: #fff;
					color: #00377b;padding: 4px;border-radius: 4px;box-shadow: 0px 0px 8px #fff;"></i>
				   
				  <span id="vidnuevo" class="swing" style="font-size: 9px;
				                                           color: #d2d2d2;
														   position: absolute;
														   background: #e00;
														   color: #fff;
														   padding: 1px 3px;
														   border-radius: 2px;
														   right: -3px;top: 0px;">Nuevo</span>
				</a>
				
				
			  </li>
	 
	  
	  <li> 
	    <a style="font-size: 12px; line-height: 1.2; padding: 3px 14px; color:#d2d2d2;">
	      
		  <span style="font-size: 13px; font-weight: bold;"><?php echo Usr::gNombreCompleto() ?>  </span>
		  <br> 
		  <?php echo Usr::gCargo() ?>
		</a>
	  </li>
	
	  <li> <a style="font-size: 12px; line-height: 1.2; padding: 3px 14px; color:#d2d2d2;"><?php echo Usr::gUsuario().'@tigo.net.bo' ?> <br>EHumano: <?php echo Usr::gEHumano() ?></a></li>
	  
      <li id="salir"><a href="#" style="padding: 6px 14px;"> <i class="fa fa-close"></i> </a></li>
    </ul>
  </div>
</nav>









		















<style>

	.bloque-menu{
		box-shadow: 0px 3px 10px 0px rgba(50,50,50,1);
		overflow: hidden;
		margin-top: 8px; 
		border-radius: 7px;
		
	}
	
	.bloque-titulo{
		margin-bottom: 0; 
		font-size: 12px;  
		text-align: center; 
		padding: 3px; 
		border: 1px solid #ddd; 
		background: #eee; 
		text-shadow: 0px 0px 2px #ccc; 
	}
	
</style>


	<?php if(	Usr::gUsuario()=='villarroeljr1' or
					Usr::gUsuario()=='hosokawah' or
					Usr::gUsuario()=='silvada' or
					Usr::gUsuario()=='aranal' or
					Usr::gUsuario()=='guachallah' or
					Usr::gUsuario()=='caceresjo' or
					Usr::gUsuario()=='galany' or
					Usr::gUsuario()=='soteloj' or
					Usr::gUsuario()=='hermosam' or
					Usr::gUsuario()=='rodriguezoa' or
					Usr::gUsuario()=='perezr' or
					Usr::gUsuario()=='bolanosd' or
					Usr::gUsuario()=='quentac' or
					Usr::gUsuario()=='guzmsfsfdsfsfsanf'
				) { ?>
				
						<div id="panel-izq" class="col-md-2 bounceInLeft npr" style="padding-left:5px;">
							<div id="menuizq" style="">
								<div id="menu_noc" class="list-group-item elemenu menu-op " style="">
									<h4 class="list-group-item-heading" >
									<i class="fa fa-fax"></i> NOC
									</h4>
								</div>
								
								
								<div id="menu_ver_acmos" class="list-group-item elemenu menu-op " style="">
									<h4 class="list-group-item-heading" >
									<i class="fa fa-list"></i> Ver ACMOS
									</h4>
								</div>
								
								
							</div>
						</div>
			<style>
				#ver_acmos{display:none !important;}
			</style>
			<script>
			    $(document).ready(function(){
					$('#menu_noc').click()
					$('#frmBuscar,#video').hide()
					
				})
				
				$('#menu_ver_acmos').click(function(e){
					e.preventDefault()
					$('#body1').html('<center style="padding-top: 30vh;font-size: 100px;opacity: 0.2;"><i class="fa fa-cog" style="margin-left:-30px;margin-top:-30px;  animation: fa-spin 12s infinite linear;"></i></center>')
					$('#body1').load(url2+'acmo/listado')
				})
				
				
			</script>
			
			
			
			
		<?php }else { ?>

    <div id="panel-izq" class="col-md-2 bounceInLeft npr xxx" style="padding-left:5px;">
		
		<?php if( $VISTA_360 or Usr::esWSALE() or Usr::esFH()  or Usr::esSMB() or Usr::esINGENIERO() or Usr::gUsuario()=='vargasd'  or Usr::gUsuario()=='apazar' or Usr::gUsuario()=='aguilarf'  or Usr::gUsuario()=='castanonj'  or Usr::gUsuario()=='pazjm' or Usr::gUsuario()=='villarroeljr' or Usr::gUsuario()=='francoj' ) { ?>
					<div class="bloque-menu" style="margin-top:0px;">
						<h4 class="list-group-item-heading bloque-titulo">
							Vista 360
						</h4>
						<div id="menu12" class="list-group-item elemenu menu-op active">
							<h4 class="list-group-item-heading" style="padding-top: 6px; padding-bottom: 6px;" >Vista 360</h4>
							<p class="list-group-item-text" ></p>
						</div>
						<div id="menu3" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Detalle Líneas Móvil</h4>
							<p class="list-group-item-text">Total de líneas del cliente</p>
						</div>
						<div id="menu1" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" ><i class="fa fa-info-circle"></i> Plan Móvil Recomendado</h4>
							<p class="list-group-item-text" >Migración de Oferta</p>
						</div>
						
						<div id="menu8" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" ><i class="fa fa-map-marker" style="color:#a00"></i> Ver Cobertura HFC</h4>
							<p class="list-group-item-text"></p>
						</div>
						

					</div>	
		<?php } ?>	
		
	
				
			<?php if(Usr::gUsuario()=='xdxdxd' or Usr::esNEGOCIO_EJECUTIVO() ) { ?>
					<div id="menu_neg_info" class="list-group-item elemenu menu-op active" style=" ">
						<h4 class="list-group-item-heading" style="">
							<i class="fa fa-info-circle"></i> Información del Cliente
						</h4>
						<p class="list-group-item-text" >
							Cobertura HFC
						</p>
					</div>
			<?php } ?>
			
	
		<?php if(Usr::esFH()  or Usr::esSMB() or Usr::esINGENIERO() or  Usr::esWSALE() or Usr::gUsuario()=='villarroeljr'  or Usr::gUsuario()=='francoj' or Usr::gUsuario()=='penag' ) { ?>
			<div class="bloque-menu">	
				<h4 class="list-group-item-heading bloque-titulo">
					Funnel
				</h4>
				
				<div id="menu30" class="list-group-item elemenu menu-op">
					<h4 class="list-group-item-heading" >Funnel</h4>
					<p class="list-group-item-text" ></p>
				</div>
				
				<?php if(Usr::esFH()){ ?>
						<div id="menu_objetivo" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Objetivo Funnel</h4>
							<p class="list-group-item-text"></p>
						</div>
				<?php } ?>
			</div>
		<?php } ?>	
		<!-- ################################################################ -->
		
		<div class="bloque-menu">	
		
		<?php if(Usr::tiene_cartera() ){ ?>
			<h4 class="list-group-item-heading bloque-titulo">
				Gestión de Cartera
			</h4>
		<?php } ?>	
			
			
			
			<?php if(Usr::tiene_cartera() ){ ?>
						<div id="menu_top25" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" > Mi cartera de Clientes</h4>
							<p class="list-group-item-text" ></p>
						</div>
			<?php }else{ ?>	
					<?php if( !Usr::esTipo('EJECUTIVO DE NEGOCIOS B2B')){ ?>
							<div id="menu_top25" class="list-group-item elemenu menu-op">
								<h4 class="list-group-item-heading" >Top 25 Clientes</h4>
								<p class="list-group-item-text" ></p>
							</div>
					<?php }?>
			<?php } ?>
			
			<?php if(Usr::tiene_cartera()){ ?>
						<div id="menu_cartera" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Gestion de Mi Cartera</h4>
							<p class="list-group-item-text" ></p>
						</div>
			<?php } ?>
			
			<?php if(Usr::tiene_cartera()){ ?>
						<div id="menu_venta_neta" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" ><i class="fa fa-bar-chart" style="color:#00377b"></i> Venta Neta</h4>
							<p class="list-group-item-text"></p>
						</div>
			<?php } ?>
			<?php if(
					   Usr::gUsuario()=='villarroeljr'
					or Usr::gUsuario()=='vargasy'
					or Usr::gUsuario()=='sulzerd'
					or Usr::gUsuario()=='ojopido'
					or Usr::gUsuario()=='justinianogo'
					or Usr::gUsuario()=='stehlic'
					or Usr::gUsuario()=='martinj'
					or Usr::gUsuario()=='quirogad'
					or Usr::gUsuario()=='lopezjh'
					or Usr::gUsuario()=='alvarezs'
					or Usr::gUsuario()=='anezpe'
					or Usr::gUsuario()=='perezal'
					or Usr::gUsuario()=='peredor'
					or Usr::gUsuario()=='morenof'
					or Usr::gUsuario()=='quinterosd'
					or Usr::gUsuario()=='villarroeljr'


					or Usr::gUsuario()=='rocamr'
					or Usr::gUsuario()=='torresa'
					//or Usr::gUsuario()=='morenoy'
					or Usr::gUsuario()=='penag'
					or Usr::gUsuario()=='francoj'
					or Usr::gUsuario()=='villarroeljr'
					or Usr::gUsuario()=='garridod'
					or Usr::gUsuario()=='balderaslc'
					or Usr::gUsuario()=='cuadrosa'
					or Usr::gUsuario()=='moralesy'
					or Usr::gUsuario()=='perrogonc'
					or Usr::gUsuario()=='espinozaro'
					or Usr::gUsuario()=='naviaa'			
								
			
			){ ?>
						<div id="menu_venta_neta_ss" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" ><i class="fa fa-bar-chart" style="color:#00377b"></i> Venta Neta</h4>
							<p class="list-group-item-text"></p>
						</div>
			<?php } ?>
			
			
			<?php if(Usr::gUsuario()=='villarroeljr'){ ?>
						
						<div id="menu_venta_neta_2" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" ><i class="fa fa-bar-chart" style="color:#00377b"></i> Venta Neta 2</h4>
							<p class="list-group-item-text"></p>
						</div>
			<?php } ?>
			
			
			<?php if(Usr::gUsuario()=='villarroeljr'){ ?>
						
			<?php } ?>
			
			
			
			<?php if($REGISTRAR_TITULARIDAD){ ?>
						<div id="menu4" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Registro Titularidad</h4>
							<p class="list-group-item-text"></p>
						</div>
			<?php } ?>
			
			
		
			<?php if(Usr::esFH() or Usr::esINGENIERO()) { ?>
						<div id="menu11" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Kardex</h4>
							<p class="list-group-item-text"></p>
						</div>
			<?php } ?>
			
			<?php if($CONTACTOS_DEL_CLIENTE){ ?>
						<div id="menu9" class="list-group-item elemenu menu-op">
							<h4 class="list-group-item-heading" >Contactos del Cliente</h4>
							<p class="list-group-item-text" ></p>
						</div>
			<?php } ?>
			<?php if($BITACORA_DEL_CLIENTE) { ?>
						<div id="menu10" class="list-group-item elemenu menu-op ">
							<h4 class="list-group-item-heading" >
								<i class="fa fa-history" ></i> Histórico del Cliente
							</h4>
						</div>
			<?php } ?>
			
			
			
			
				<div id="menu50" class="list-group-item elemenu menu-op" style="display:none">
					<h4 class="list-group-item-heading" >
						Bolsa Convergente
					</h4>
					<p class="list-group-item-text" >
					
					</p>
				</div>
				
				<div id="menu70" class="list-group-item elemenu menu-op" style="display:none">
					<h4 class="list-group-item-heading" >
						Soluciones Avanzadas
					</h4>
					<p class="list-group-item-text" >
					
					</p>
				</div>
			

			
		</div>	
		
		<!-- ################################################################ -->
		
		<div class="bloque-menu">	
			<h4 class="list-group-item-heading bloque-titulo">
				Herramientas de Venta
			</h4>
			<div id="menu40" class="list-group-item elemenu menu-op">
				<h4 class="list-group-item-heading" ><i class="fa fa-calculator"></i>Calculadora de Subsidio</h4>
				<p class="list-group-item-text"></p>
			</div>
			
			<div id="menu41" class="list-group-item elemenu menu-op">
				<h4 class="list-group-item-heading" ><i class="fa fa-calculator"></i>Cotizador de Bolsa</h4>
				<p class="list-group-item-text" ></p>
			</div>
			
		</div>	
		

		
		
		
<?php if(Usr::gUsuario()=='villarroeljr' or
					 Usr::gUsuario()=='penag' or
					 Usr::gUsuario()=='francoj' or
					 Usr::gUsuario()=='saenze' or Usr::gUsuario()=='quespim' or Usr::gUsuario()=='guzmanf' or Usr::gUsuario()=='lijeronj' or
					 Usr::gUsuario()=='valenzuelaan' 
			or Usr::gUsuario()=='uriartejb'
			or Usr::gUsuario()=='garciaca'
or Usr::gUsuario()=='cortezfv'

			
					 or Usr::esFH() or Usr::esINGENIERO()
					) { ?>
		
		
		
		<div class="bloque-menu">	
			<h4 class="list-group-item-heading bloque-titulo">
				NOC
			</h4>
			<div id="menu_noc" class="list-group-item elemenu menu-op " style="">
					<h4 class="list-group-item-heading" >
						<i class="fa fa-fax"></i> NOC
					</h4>
				</div>
			
		</div>	
		
		
		
		
				
			<?php } ?>


			
			
    </div>
	
	
	
	
		<?php } ?>
	
	
	
	
	
	
	
    <div id="panel-der" class="col-md-10" style="margin-bottom:70px;  overflow-y: scroll;height: calc(100vh - 121px); ">
		<div id="body1">
		
		</div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="col-md-12 bounceInUp clearfix" style=" margin-top: 15px; position: fixed; bottom: 0; padding: 0; box-shadow: 0px -2px 8px #aaa;height:75px;">
		<div class="col-md-12 clearfix npl npr" style="background: #fff;box-shadow: 0px 0px 3px #aaa;">
			<div class="col-md-12" style="color:#00377B;padding: 2px 18px;font-size: 9px;font-weight: bold;background: #d2d2d2;">
			    Para clientes Con ejecutivo ATENCION POR SAC Comunicar que cuenta con un Ejecutivo de cuentas asignado con el cual puede comunicarse marcando al *121 en horarios de oficina, ver video 
				<button id="link_1" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top:-8px; font-weight: bold;color:#20579B;">aquí</button>.
				
			</div>
			<div class="col-md-12 npl npr clearfix" style="/* background:#fff; */color:#848689;   ">
			    <div class="col-md-3 clearfix npl npr" style="display:none;">	
				
							
				
				
					<div class="col-md-6 npl npr">	
					
						<?php if(/*$OFERTAS_B2B_MOVIL*/ true ) { ?>
							<div id="menu5_1" class="col-md-12 list-group-item  elemenu menu-op " style=" height: 38px;border-radius: 0px;border: none; background: #f3f3f3;text-align: center; padding: 10px !important; color: #444;">
								<h4 class="list-group-item-heading" >
									Ofertas B2B Movil
								</h4>
								<p class="list-group-item-text" >
									Planes actuales para clientes Corporativos
								</p>
							</div>
							<div id="menu5_2" class="col-md-12 list-group-item  elemenu menu-op " style=" height: 38px;border-radius: 0px;border: none; background: #f3f3f3;text-align: center; padding: 10px !important; color: #444;">
								<h4 class="list-group-item-heading" >
									Ofertas B2B Movil
								</h4>
								<p class="list-group-item-text" >
									Planes actuales para clientes Corporativos
								</p>
							</div>
						<?php } ?>
			
			
					</div>
					<div class="col-md-6 npl npr">	
						<?php if(/*$OFERTAS_B2B_FIJO*/ true) { ?>
							<div id="menu6" class="col-md-12 list-group-item  elemenu menu-op " style="height: 38px;border-radius: 0px;border: none; background: #f3f3f3;text-align: center; padding: 10px !important; color: #444;">
								<h4 class="list-group-item-heading" >
									Ofertas B2B Fijo
								</h4>
								<p class="list-group-item-text" >
									Planes actuales para clientes Corporativos
								</p>
							</div>
						<?php } ?>
					</div>

				</div>
				
				<div class="col-md-12 clearfix" style="background-color:#01387C; position:relative;padding-top:10px;padding-bottom:10px;">	
					
					<div id="" class="botonfoot" src="" style="width: 2%;height: 65px;" ></div>
					
				<?php if (Usr::gUsuario()=='leanosz' or Usr::gUsuario()=='valenzuelaan' or Usr::gUsuario()=='banegasjo' or Usr::gUsuario()=='villarroeljr' or Usr::gUsuario()=='zelayac' or
			              Usr::gUsuario()=='zuritas' or Usr::gUsuario()=='moralesf' or Usr::gUsuario()=='bascopem' or Usr::gUsuario()=='gutierrezalp' or 	Usr::gUsuario()=='guzmanf'  or 	Usr::gUsuario()=='lijeronj' or  Usr::esFH_ADM() or Usr::esNEGOCIO() or Usr::esFH() or	 Usr::esINGENIERO() or Usr::esSMB() or Usr::esWSALE()  ){ ?>
		
						<div id="menu_rent" class="botonfoot">
							<img  src="<?php img('img/bt/calc4.gif') ?>" style="width: 35px; margin-left: 14px;margin-bottom: 6px;opacity: 0.9;" />
							<span style="bottom: -10px;">Análisis de<br>Rentabilidad</span>
						</div>
	
						<div id="menu_calc_mobile" class="botonfoot">
							<img  src="<?php img('img/bt/calc4.gif') ?>" style="width: 35px; margin-left: 14px;margin-bottom: 6px;opacity: 0.9;" />
							<span style="bottom: -10px;">Calculadora<br>Mobile</span>
						</div>
				<?php } ?>
			
			
			
						<div id="menu_conv" class="botonfoot">
							<img  src="<?php img('img/bt/conv.png') ?>" style="width: 40px;margin-left: 14px;" />
							<span style="bottom: -10px;">Bolsa<br>Convergente</span>
						</div>
						
					<?php if( /*$OFERTAS_B2B_MOVIL*/ true ){ ?>
						<div id="menu5_1_tr" class="botonfoot">
							<img src="<?php img('img/bt/1v.png') ?>" style="width: 40px;margin-left: 14px;" />
							<span style="bottom: -10px;">Ofertas B2B Móvil<br>Comodato Venta</span>
						</div>
						<div id="menu5_2_tr" class="botonfoot">
							<img src="<?php img('img/bt/1v.png') ?>" style="width: 40px;margin-left: 14px;" />
							<span style="bottom: -10px;">Ofertas B2B Móvil<br>Clientes Antiguos</span>
						</div>
					<?php } ?>
					
					<?php if(/*$OFERTAS_B2B_FIJO*/ true ) { ?>
						<div id="menu6_tr" class="botonfoot">
							<img  src="<?php img('img/bt/2v.png') ?>"  style="width: 40px;margin-left: 14px;" />
							<span style="bottom: -10px;">Ofertas B2B<br>HFC</span>
						</div>
					<?php } ?>
					
					<div id="menu_avan" class="botonfoot">
						<img src="<?php img('img/bt/avanzadas3.png') ?>" style="width: 40px;margin-left: 14px;" />
						<span style="bottom: -10px;">Soluciones<br>Avanzadas</span>
					</div>
					
					<div id="menu_m2m" class="botonfoot">
						<img src="<?php img('img/bt/calc4.gif') ?>" style="width: 35px;margin-left: 0px;/* margin-bottom: 6px; */opacity: 0.9;position: absolute;left: 22px;top: 3px;width: 30px;/* height: 10px; */z-index: 999;">
						<img src="http://bicorporate//application/assets/img/bt/avanzadas3.png" style="width: 30px; margin-left: 5px; margin-bottom: 10px;">
						<span style="bottom: -10px;">Anexo B<br>Solicitud MIM CARD</span>
					</div>
			
					<div id="link_3" class="botonfoot" style="margin-left:60px;">
						<img  src="<?php img('img/bt/3v.png') ?>" style="" />
						<span>Web 3.0</span>
					</div>
					<div id="link_7" class="botonfoot" style="margin-left:0px;">
						<img  src="<?php img('img/bt/4v.png') ?>" style="" />
						<span>Derivador</span>
					</div>
					<div id="link_6" class="botonfoot" style="margin-left:0px;">
						<img  src="<?php img('img/bt/5v.png') ?>" style="" />
						<span>Cobertura HFC</span>
					</div>
					<div id="link_4" class="botonfoot" style="margin-left:0px;">
						<img  src="<?php img('img/bt/6v.png') ?>" style="" />
						<span>Fundempresa</span>
					</div>
					<div id="link_5" class="botonfoot" style="margin-left:0px;">
						<img src="<?php img('img/bt/7v.png') ?>" style="" />
						<span>Impuestos</span>
					</div>
					
					<img src="<?php img('img/logo-footer2.png') ?>" style=" border-radius: 7px; height: 48px; float: right; margin-top: -5px;">
				
				</div>
				
				<!--<div class="col-md-12 clearfix" style="text-align:center;">	
					<img src="<?php img('img/logo-footer2.png') ?>" style="border-radius: 7px;height:60px;">
					<br style="clear:both">
				</div>-->
				
				<br style="clear:both">
				
			</div>
				<br style="clear:both">
		</div>
			<br style="clear:both">
	</div>
	
	
	
	
	<div id="video-dialogo" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm" style="width:65%">
			<div class="modal-content">
				<div class="modal-header" style="padding: 7px;padding-bottom: 3px;border-bottom:none;background-color: #337ab7;border-radius: 2px;color: #fff;">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" >Tutorial</h4>
				</div>
				<div id="video-body" class="modal-body" style="padding:0px">
				  
				</div>
				
			</div>
		</div>
	</div>

<style>
body{
	    background-color:#fff !important;
    }
 
	#video:hover i{
		text-shadow: 2px 2px 8px #888;
		transform: rotate(-5deg) scale(1.2);
	}
	
	#video:hover{
		text-shadow: 2px 2px 8px #888;
		transform: scale(1.1);
	}

	#menuizq{
		box-shadow: 0px 8px 21px -8px rgba(0,0,0,1);
	}
    div.elemenu {
		cursor:pointer;
		padding: 1px 13px !important;
		text-align:left;
		border-width:0.8px;
	}
	div.elemenu:hover {
		/*width:105%;*/
		
	}
	div.elemenu.active i {
		color:#fff !important;
	}
	
	div.elemenu h4{
		margin-bottom:0;
		font-size:14px;
		padding-left:18px;
	}
	div.elemenu p{
		text-align:left;
		font-size:11px;
		padding-left:18px;
	}
	div.elemenu i{
		position: absolute;
		left: 8px;
	}
	
	div.elemenu:hover{
		text-shadow: 1px 1px 1px rgba(55, 55, 55, 0.3);
		background-color: #f6f6f6;
/*border-right: 4px solid #337ab7 !important;
		border-left: 4px solid #337ab7 !important;
		padding-left: 10px !important;		*/
	}
	
	div.ui-menu-item-wrapper{
		font-size:11px;
	}
    
	.ui-menu {
    
		box-shadow: 0px 8px 21px -8px rgba(0,0,0,1);
    }
	
	.ui-widget-content .ui-state-active,
	.ui-button.ui-state-active:hover {
        background: none !important;
		background-color: #afa !important;
		border: none !important;
		color:#000 !important;
		padding: 4px 5px;
		text-shadow: 1px 1px 4px rgba(55, 55, 55, 0.6);
    }

	#link-plani{
		cursor:pointer;
		color:#55b;
		text-decoration:underline;
	}
	
	#menu6.active,#menu5_1.active,#menu5_2.active{
		color:#fff !important;
	}
	#menu6:hover,#menu5_1:hover,#menu5_2:hover{
		background:#eee ;
	}
	
	.tr{text-align:right}
</style>	
	


	
<script>

$('#link_1').click(function(e){
		e.preventDefault()
		window.open('https://media-fsp.cloud.doxee.com/da-purl/document/ead927087b4942dcab2f5ff0ea3b13e4')
	})
	$('#link_2').click(function(e){
		e.preventDefault()
		window.open('http://prod4-doxee.teisa.com.py/tigo_form/')
	})
	$('#link_3').click(function(e){
		e.preventDefault()
		window.open('http://webventas:7046/Pagina_De_Ventas-web/ ')
	})
	$('#link_4').click(function(e){
		e.preventDefault()
		window.open('http://www.fundempresa.org.bo/directorio/index.php')
	})
	$('#link_5').click(function(e){
		e.preventDefault()
		//window.open('http://ov.impuestos.gob.bo/Paginas/Publico/CertificacionNoNIT.aspx')
		window.open('http://pbdw.impuestos.gob.bo:8080/gob.sin.padron.web/#/verificar/estadoContribuyente')
	})
	$('#link_6').click(function(e){
		e.preventDefault()
		window.open('http://www.tigostar.com.bo/cobertura/hfc')
	})
	$('#link_7').click(function(e){
		e.preventDefault()
		window.open('http://derivcontactos.tigo.net.bo:8080/derivacion/login.seam')
	})
	
	$('#menu5_1_tr').click(function(e){
		$('#menu5_1').click()
	})
	$('#menu5_2_tr').click(function(e){
		$('#menu5_2').click()
	})
	$('#menu6_tr').click(function(e){
		$('#menu6').click()
	})
	
	$('#menu_conv').click(function(e){
		$('#menu50').click()
	})
	$('#menu_avan').click(function(e){
		$('#menu70').click()
	})
	/*
	setTimeout(function(){
		$('#menuizq').animate({'margin-left':'0px','margin-right':'0px'})
		$('#navr').animate({'margin-top':'0px'},400)
		
	},600)
	*/
	
    
    function actualizar(){
		var cta=$('#CUENTA').val()
		
		$('#CUENTA').val(cta);
		if(cta>0){
			$('#CUENTA-TEXTO').html('<span class="busqueda-num">'+cta+'</span> '+$('#CUENTA-TEXTO').attr('data-nombre'))
		}else{
			$('#CUENTA-TEXTO').html($('#CUENTA-TEXTO').attr('data-nombre'))
		}
		
		$('#CUENTA_UNIFICADA').val($('#CUENTA-TEXTO').attr('data-unificado'));
		
		$('body').click()
			
			
			
			
		cta_uni=$('#CUENTA_UNIFICADA').val()
	    cta_uni=cta_uni.replace('#',';')
		cta_uni=cta_uni.replace('&',':')
		cta_uni=cta_uni.replace('Á','(')
		cta_uni=cta_uni.replace('É',')')
		cta_uni=cta_uni.replace('Í','[')
		cta_uni=cta_uni.replace('Ó',']')
		cta_uni=cta_uni.replace('Ú','{')
		cta_uni=cta_uni.replace('+','>')
		
			
		var cta_uni=encodeURI(cta_uni)
		var seccion=''
		
		if($('#menu1').hasClass('active')) 		seccion='Inicio/consumodet'
		if($('#menu2').hasClass('active')) 		seccion='Inicio/addon'
		if($('#menu3').hasClass('active')) 		seccion='Lineas/listado'
		if($('#menu4').hasClass('active')) 		seccion='Inicio/titularidad'
		if($('#menu5_1').hasClass('active')) 	seccion='Inicio/ofertab2b'
		if($('#menu5_2').hasClass('active')) 	seccion='Inicio/ofertab2b_antiguo'
		if($('#menu6').hasClass('active')) 		seccion='Inicio/ofertab2bfijo'
		if($('#menu8').hasClass('active')) 		seccion='Inicio/cobertura'
		if($('#menu9').hasClass('active')) 		seccion='Contactos/listado'
		if($('#menu10').hasClass('active')) 	seccion='Ofertas/listado'
		if($('#menu11').hasClass('active')) 	seccion='Funnel_FH_Cuenta/listado'
		if($('#menu12').hasClass('active')) 	seccion='Inicio/vista360'
		if($('#menu13').hasClass('active')) 	seccion='Cartera/listado'
		if($('#menu14').hasClass('active')) 	seccion='Cartera/listadobase'
		if($('#menu15').hasClass('active')) 	seccion='Funnel/listado'
		if($('#menu30').hasClass('active')) 	seccion='Funnel_FH/listado'
		if($('#menu35').hasClass('active')) 	seccion='Oportunidad/vista'
		if($('#menu40').hasClass('active')) 	seccion='Rentabilidad/subsidio'
		if($('#menu41').hasClass('active')) 	seccion='Rentabilidad/cotizador'
		if($('#menu41_prueba').hasClass('active')) seccion='Rentabilidad/cotizador_prueba'
		if($('#menu50').hasClass('active')) 	seccion='Inicio/convergente2'
	
	
		if($('#menu60').hasClass('active')) 	seccion='Comunicacion/vista'
		if($('#menu70').hasClass('active')) 	seccion='Inicio/soluciones_avanzadas'
		
		
		if($('#menu_neg_info').hasClass('active')) seccion='Negocio/cobertura'
		if($('#menu_cartera').hasClass('active')) seccion='Carterizacion/vista'
		
		
		if($('#menu_noc').hasClass('active')) seccion='Noc/listado'

		if($('#menu_objetivo').hasClass('active')) seccion='funnel_fh/listado_objetivos'
		if($('#menu_tableau1').hasClass('active')) seccion='Inicio/tableau1'
		
		if($('#menu_top25').hasClass('active')) seccion='funnel_fh/top25'

		if($('#menu_venta_neta').hasClass('active')) seccion='Venta/listado'
		if($('#menu_venta_neta_total').hasClass('active')) seccion='VentaTotal/listado'
		if($('#menu_venta_neta_ss').hasClass('active')) seccion='VentaSS/listado'
		if($('#menu_venta_neta_2').hasClass('active')) seccion='Venta2/listado'
		
	
	
		if(seccion!=''){		
			$('#body1').html('<center style="padding-top: 30vh;font-size: 100px;opacity: 0.2;"><i class="fa fa-cog" style="margin-left:-30px;margin-top:-30px;  animation: fa-spin 12s infinite linear;"></i></center>')
			//console.log(url2+seccion+'?cta='+cta)
			
			$('#body1').load(url2+seccion+'?cta='+cta+'&cta_uni='+cta_uni)
		}
	}
    
	frmAccion2('#frmBuscar',function(){
		actualizar()
	})
	
	$('div.elemenu').click(function(){
		$('.menu-op').removeClass('active')
		$(this).addClass('active')
		actualizar()
	})
	
	
	
	$('#salir').click(function(){
		ajaxAccion('Usuario/salir',function(){
			location.reload()	
		})
	})
	
	$('#CUENTA').autocomplete({
	    source: url2+'Inicio/listado_cuentas',
		select: function(e,ui){ 
			setTimeout(function () {
				$('#CUENTA').val(ui.item.value);
				actualizar()
			}, 50);
			
		},
		response: function(event, ui) {
			if (!ui.content.length) {
				/*var noResult = { value:"",label:"No hay resultados." };
				ui.content.push(noResult);*/
				//console.log('no hay')
				
				$('#cuenta-no').html($('#CUENTA').val())
				$('#bloque-no').show()
			
			}else{
				$('#bloque-no').hide()
			}
			
		}
		//change:actualizar,
		//close:function(e,ui){ console.log('close'); console.log(ui) },
	
	})
	

	
	
	
	$('#video').click(function(){
		$('#video-dialogo').modal('show')
		$('#video-body').load(url2+'Inicio/tutorial');
	})
	$('#video-dialogo').on('hidden.bs.modal', function () {
		$('#video-mp4').remove()
	})
	
	$('#panel-izq, #panel-der').click(function(){
		setTimeout(function(){
			$('#bloque-no').hide()
		},450)
	})
	$('#btn-buscar').click(function(e){
		e.preventDefault()
		
		$("#CUENTA").focus().trigger("change");
	})
	
	
	$('#link-plani').click(function(){
		window.open('http://loydb/Planificate.aspx')
	})
	
	
	function f2s(v,def){
		if(v==null) return def
		v=v.replace(',','')
		v=parseFloat(v).toFixed(2).toLocaleString('en')
		v= v.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
		if(v=='NaN')return def
		return v
	}
	
	function f2s_val(v,def){
		if(v==null) return def
		v=v.replace(',','')
		v=parseFloat(v).toFixed(2)
		if(v=='NaN')return def
		return v
	}
	
	setInterval(function(){
		ajaxAccion('Inicio/usuariok',function(r) {
			if(!r.ok){
				location.reload()	
			}
		})
	},15000)
	
	actualizar()
	
	function nue_vid(nv){
		if(nv==0){
			$('#vidnuevo').hide()
		}else{
			setTimeout(function(){
				$('#vidnuevo').fadeOut()
				setTimeout(function(){
					$('#vidnuevo').show()
					nue_vid(nv-1)
				},900)
			},3000)			
		}
	}
	nue_vid(0) //4
	
	function SaveToDisk(fileURL, fileName) {
		// for non-IE
		if (!window.ActiveXObject) {
			var save = document.createElement('a');
			save.href = fileURL;
			save.target = '_blank';
			save.download = fileName || 'unknown';

			var evt = new MouseEvent('click', {
				'view': window,
				'bubbles': true,
				'cancelable': false
			});
			save.dispatchEvent(evt);

			(window.URL || window.webkitURL).revokeObjectURL(save.href);
		}

		// for IE < 11
		else if ( !! window.ActiveXObject && document.execCommand)     {
			var _window = window.open(fileURL, '_blank');
			_window.document.close();
			_window.document.execCommand('SaveAs', true, fileName || fileURL)
			_window.close();
		}
	}
	
		
	$('#menu_calc_mobile').click(function(){
		ajaxAccion('Inicio/descargando_calculadora',function(r) {
			/*if(!r.ok){
				location.reload()	
			}*/
		})
		
		var links = [
	 	  //url+'files/download/Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm','Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm',
		  url+'files/download/Calculadora_Mobile_B2B.xlsb','Calculadora_Mobile_B2B.xlsb'
		];

		var link = document.createElement('a');
		
		link.style.display = 'none';

		document.body.appendChild(link);

		for (var i = 0; i < links.length; i+=2) {
			link.setAttribute('download', links[i+1]);
			link.setAttribute('href', links[i]);
			link.click();
		}

		document.body.removeChild(link);

	})
	
	$('#menu_rent').click(function(){
		ajaxAccion('Inicio/descargando_analisis',function(r) {
			/*if(!r.ok){
				location.reload()	
			}*/
		})
		
		var links = [
	 	  //url+'files/download/Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm','Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm',
		  url+'files/download/Analisis_Rentabilidad_Servicios_Fijos_Septiembre.xlsb','Analisis_Rentabilidad_Servicios_Fijos_Septiembre.xlsb'
		];

		var link = document.createElement('a');
		
		link.style.display = 'none';

		document.body.appendChild(link);

		for (var i = 0; i < links.length; i+=2) {
			link.setAttribute('download', links[i+1]);
			link.setAttribute('href', links[i]);
			link.click();
		}

		document.body.removeChild(link);

	})
	
	$('#menu_m2m').click(function(){
		ajaxAccion('Inicio/descargando_m2m',function(r) {
			/*if(!r.ok){
				location.reload()	
			}*/
		})
		
		var links = [
	 	  //url+'files/download/Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm','Calculadora_Mobile_B2B_Venta_Nueva_V3_2019.xlsm',
		  url+'files/download/ANEXO_B_Solicitud_de_mim_cards_para_servicio_M2M_v1.3.xlsx',
		                     'ANEXO_B_Solicitud_de_mim_cards_para_servicio_M2M_v1.3.xlsx'
		];

		var link = document.createElement('a');
		
		link.style.display = 'none';

		document.body.appendChild(link);

		for (var i = 0; i < links.length; i+=2) {
			link.setAttribute('download', links[i+1]);
			link.setAttribute('href', links[i]);
			link.click();
		}

		document.body.removeChild(link);

	})
	
	
	//ANEXO_B_Solicitud_de_mim_cards_para_servicio_M2M_v1.3.xlsx
	
	
</script>


