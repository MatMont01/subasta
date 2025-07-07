<div class="bounceInDown" style="    height:178px;
    background: #00f;
    background-image: url(http://bicorporate/test/application/assets/img/cabeza3.png);
    background-size: 100%;    position: relative;margin-bottom:5px;">
	
	
	
<nav class="navbar  navbar-inverse" role="navigation" style="border-radius:0;background: #00377b;
    border-color: #00377b;
    box-shadow: 0px 0px 3px #00377b;margin-bottom:5px;z-Index:7;position: absolute;
    bottom: 0;
    width: 100%;
    margin-bottom: 0px;
    opacity: 1;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" style="padding:5px;">
    <a class="navbar-brand npr" style="background-image:url(<?php img('img/logo-header.png') ?>);
	height: 41px;
    background-size: 100%;
    padding: 0px;
    width: 167px;"></a>
  </div>

  
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
	 
	<div id="bloque-no" class="shake" style="
    position: absolute;
    background: #ffd;
    box-shadow: 0px 2px 12px #333;
    border: 1px solid #eea;
    border-radius: 4px;
    padding: 3px 9px;
    font-size: 12px;
    /* display:none; */
    left:192px;
    top: 42px;
    width: 202px;
    z-index: 9999;
	display:none;
">

La cuenta "<span id="cuenta-no">78899821</span>" no es una cuenta B2B , favor verificar las cuentas Masivas en <span id="link-plani">Planifícate</span>

</div> 
	 
	 <!--  -->

    <form id="frmBuscar" class="navbar-form navbar-left" role="search">

		<div class="input-group">
			<input id="CUENTA" type="text" class="form-control"  placeholder="Nombre o Nro. Cuenta" style="border-radius: 25px 0px 0px 25px; width: 167px; box-shadow: 0px 0px 4px #fff;">
			<span class="input-group-btn">
			  <button id="btn-buscar" class="btn btn-default" type="button" style="border-radius: 0px 25px 25px 0px;box-shadow: 0px 0px 4px #fff;color: #999;
    border-left: none;
    outline: none;"><i class="fa fa-search"></i></button>
			</span>
		  </div>
		  

      </form>
    <ul id="navr" class="nav navbar-nav navbar-right" style="">
	  
	
			  <li> 
				
				<a id="video" style="font-size: 12px;line-height: 1.2;padding: 10px 14px;color: #d2d2d2;text-align: center;cursor: pointer;">
	      
				  <i class="fa fa-video-camera" style="font-size: 17px;"></i>
				  <br> 
				  <span style="font-size: 8px;color: #d2d2d2;">Video Tutorial</span>
				</a>
				
			  </li>
	 
	  
	  <li> 
	    <a style="font-size: 12px; line-height: 1.2; padding: 10px 14px; color:#d2d2d2;">
	      
		  <span style="font-size: 13px; font-weight: bold;"><?php echo Usr::gNombreCompleto() ?>  </span>
		  <br> 
		  <?php echo Usr::gCargo() ?>
		</a>
	  </li>
	
	  <li> <a style="font-size: 12px; line-height: 1.2; padding: 10px 14px; color:#d2d2d2;"><?php echo Usr::gUsuario().'@tigo.net.bo' ?> <br>EHumano: <?php echo Usr::gEHumano() ?></a></li>
	  
      <li id="salir"><a href="#"> <i class="fa fa-close"></i> </a></li>
    </ul>
  </div>
</nav>
</div>



    <div id="panel-izq" class="col-md-2 bounceInLeft npr">
		<div id="menuizq" style="">
		
		
		
			<?php if($VISTA_360) { ?>
			<?php //if(Usr::gUsuario()=='villarroeljr' or Usr::gUsuario()=='francoj') { ?>
				<div id="menu12" class="list-group-item elemenu menu-op active" style=" padding: 25px 42px !important;">
					<h4 class="list-group-item-heading" style="font-size: 18px;">
						<i class="fa fa-compass" style="animation: fa-spin 14s infinite linear;"></i> Vista 360
					</h4>
					<p class="list-group-item-text" >
						
					</p>
				</div>
			<?php //} ?>
			<?php } ?>
			
			
			
		
		
			
			
		<?php if($INFORMACION_CLIENTE) {  if($VISTA_360) $menu_activo=''; else $menu_activo='active'; ?>
		
			<div id="menu1" class="list-group-item elemenu menu-op <?php echo $menu_activo ?>">
				<h4 class="list-group-item-heading" >
					<i class="fa fa-info-circle"></i> Información Cliente
				</h4>
				<p class="list-group-item-text" >
					Plan y consumo del cliente
				</p>
			</div>
			
			<?php } ?>
			
			<?php if($PRODUCTOS_A_RECOMENDAR) { ?>
			<div id="menu2" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					<i class="fa fa-rss-square"></i> Productos a recomendar
				</h4>
				<p class="list-group-item-text" >
					Ofertar AddOn/Migración
				</p>
			</div>
			
			<?php } ?>
			
			<?php if($LINEAS_DEL_CLIENTE) { ?>
				<div id="menu3" class="list-group-item elemenu menu-op ">
					<h4 class="list-group-item-heading" >
						<i class="fa fa-tablet"></i> Líneas del cliente
					</h4>
					<p class="list-group-item-text" >
						Total de líneas del cliente
					</p>
				</div>
			<?php } ?>
			 
			<?php if($REGISTRAR_TITULARIDAD	) { ?>
			<div id="menu4" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					Registrar Titularidad
				</h4>
			</div>
			
			<?php } ?>
			
			
			
			<?php if($DATOS_CLIENTE_CENSO) { ?>
			<div id="menu11" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					Datos Cliente Censo
				</h4>
				<p class="list-group-item-text" >
					Productos en la competencia
				</p>
			</div>
			<?php } ?>
			
			
			
			
	
			
			
			
			<?php if($VER_COBERTURA	) { ?>
			<div id="menu8" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					&nbsp;<i class="fa fa-map-marker" style="color:#a00"></i> Ver Cobertura
				</h4>
			</div>
			<?php } ?>
			
			<?php if($CONTACTOS_DEL_CLIENTE	) { ?>
			<div id="menu9" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					<i class="fa fa-users" ></i> Contactos del Cliente
				</h4>
			</div>
			<?php } ?>
			
			<div id="menu15" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					<i class="fa fa-caret-down"></i> Funnel
				</h4>
			</div>
			
			<?php if($BITACORA_DEL_CLIENTE) { ?>
			<div id="menu10" class="list-group-item elemenu menu-op ">
				<h4 class="list-group-item-heading" >
					<i class="fa fa-history" ></i> Bitácora del Cliente
				</h4>
			</div>
			<?php } ?>
		</div>	
			
		<div id="menuizq2" style="    margin-top: 13px;
    border-top-left-radius: 7px;
  /*  overflow: hidden;*/
    border-top-right-radius: 7px;">	
			
			<?php if($CARGA_DE_BASE or $GESTION_DE_CARTERA) { ?>
			<div  class="">
					<h4 class="list-group-item-heading" style=" margin-bottom: 0; font-size: 12px;  text-align: center; padding: 3px; border: 1px solid #ddd; background: #eee; color: #447; text-shadow: 1px 1px #ccc;" >
						Gestión de Base
					</h4>
				
				</div>
			<?php } ?>	
			
			
			<?php if($CARGA_DE_BASE /*and Usr::gUsuario()=='villarroeljr'*/) { ?>
			
				<div id="menu14" class="list-group-item elemenu menu-op">
					<h4 class="list-group-item-heading" >
						Carga de Base
					</h4>
					<p class="list-group-item-text" >
						
					</p>
				</div>
			<?php } ?>	
			
			<?php if($GESTION_DE_CARTERA /*and Usr::gUsuario()=='villarroeljr'*/) { ?>
				<div id="menu13" class="list-group-item elemenu menu-op">
					<h4 class="list-group-item-heading" >
						Gestión de Cartera 
					</h4>
					<p class="list-group-item-text" >
						Ejecutivo de Negocio B2B
					</p>
				</div>
			<?php } ?>	

			
			
			
		</div>
    </div>
    <div id="panel-der" class="col-md-10" style="margin-bottom:70px;  /*overflow-y: scroll;height: calc(100vh - 120px);  */">
		<div id="body1">
		
		</div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="col-md-12 bounceInUp clearfix" style=" margin-top: 15px; /*position: fixed;*/ bottom: 0; padding: 0;    box-shadow: 0px -2px 8px #aaa;">
		<div class="col-md-12 clearfix npl npr" style="background: #fff;box-shadow: 0px 0px 3px #aaa;">
			<div class="col-md-12" style="color:#00377B;padding: 4px 18px;font-size: 10px;font-weight: bold;background: #d2d2d2;">
			    Para clientes Con ejecutivo ATENCION POR SAC Comunicar que cuenta con un Ejecutivo de cuentas asignado con el cual puede comunicarse marcando al *121 en horarios de oficina, ver video 
				<button id="link_1" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top:-8px; font-weight: bold;color:#20579B;">aquí</button>.
				
			</div>
			<div class="col-md-12 npl clearfix" style="/* background:#fff; */color:#848689;   ">
			    <div class="col-md-3 clearfix npl npr" style="display:none;">	
					<div class="col-md-6 npl npr">	
					
						<?php if($OFERTAS_B2B_MOVIL) { ?>
							<div id="menu5" class="col-md-12 list-group-item  elemenu menu-op " style=" height: 38px;border-radius: 0px;border: none; background: #f3f3f3;text-align: center; padding: 10px !important; color: #444;">
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
						<?php if($OFERTAS_B2B_FIJO) { ?>
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
				
				<div class="col-md-12 clearfix" style="text-align:center;background-color:#01387C; position:relative;padding-top:10px;padding-bottom:10px;">	
					
					<?php if($OFERTAS_B2B_MOVIL) { ?>
					<img id="menu5_tr" class="botonfoot" src="<?php img('img/bt/1.png') ?>" style="" />
					<?php } ?>
					
					<?php if($OFERTAS_B2B_FIJO) { ?>
						<img id="menu6_tr" class="botonfoot" src="<?php img('img/bt/2.png') ?>" style="" />
					<?php } ?>
					
					<img id="link_3" class="botonfoot" src="<?php img('img/bt/3.png') ?>" style="" />
					<img id="link_7" class="botonfoot" src="<?php img('img/bt/4.png') ?>" style="" />
					<img id="link_6" class="botonfoot" src="<?php img('img/bt/5.png') ?>" style="" />
					<img id="link_4" class="botonfoot" src="<?php img('img/bt/6.png') ?>" style="" />
					<img id="link_5" class="botonfoot" src="<?php img('img/bt/7.png') ?>" style="" />
					
					
					<!--
					<div class="col-md-12" style="line-height: 1;    padding-top: 3px;">	
						<button id="link_3" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top: 6px;font-size: 11px;color:#444; ">Web 3.0</button> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="link_4" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top: 6px;font-size: 11px;color:#444; ">Fundempresa</button>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="link_5" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top: 6px;font-size: 11px;color:#444; ">Impuestos</button> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="link_6" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top: 6px;font-size: 11px;color:#444;">Ver Total Cobertura Tigo Star</button> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button id="link_7" type="button" class="btn btn-link npl npr npt npb" style="height: 16px;margin-top: 6px;font-size: 11px; color:#444;">Derivador</button> 
					</div>
					-->
				</div>
				
				
				<div class="col-md-12 clearfix" style="text-align:center;">	
					<img src="<?php img('img/logo-footer2.png') ?>" style="border-radius: 7px;height:60px;">
					<br style="clear:both">
				</div>
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
    #video:hover{
		text-shadow: 0px 0px 24px rgba(255, 255, 255, 1);
	}
	#menuizq{
		box-shadow: 0px 8px 21px -8px rgba(0,0,0,1);
	}
    div.elemenu {
		cursor:pointer;
		padding: 5px 13px !important;
		text-align:left;
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
	}
	div.elemenu p{
		text-align:left;
		font-size:11px;
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
	
	#menu6.active,#menu5.active{
		color:#fff !important;
	}
	#menu6:hover,#menu5:hover{
		background:#eee ;
	}
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
		window.open('http://ov.impuestos.gob.bo/Paginas/Publico/CertificacionNoNIT.aspx')
	})
	$('#link_6').click(function(e){
		e.preventDefault()
		window.open('http://www.tigostar.com.bo/cobertura/hfc')
	})
	$('#link_7').click(function(e){
		e.preventDefault()
		window.open('http://derivcontactos.tigo.net.bo:8080/derivacion/login.seam')
	})
	
	$('#menu5_tr').click(function(e){
		$('#menu5').click()
	})
	$('#menu6_tr').click(function(e){
		$('#menu6').click()
	})
	
	
	/*
	setTimeout(function(){
		$('#menuizq').animate({'margin-left':'0px','margin-right':'0px'})
		$('#navr').animate({'margin-top':'0px'},400)
		
	},600)
	*/
	
    
    function actualizar(){
	    var cta=$('#CUENTA').val()
		var seccion=''
		
		if($('#menu1').hasClass('active')) seccion='Inicio/consumodet'
		if($('#menu2').hasClass('active')) seccion='Inicio/addon'
		if($('#menu3').hasClass('active')) seccion='Inicio/lineas'
		if($('#menu4').hasClass('active')) seccion='Inicio/titularidad'
		if($('#menu5').hasClass('active')) seccion='Inicio/ofertab2b'
		if($('#menu6').hasClass('active')) seccion='Inicio/ofertab2bfijo'
		if($('#menu8').hasClass('active')) seccion='Inicio/cobertura'
		if($('#menu9').hasClass('active')) seccion='Contactos/listado'
		if($('#menu10').hasClass('active')) seccion='Ofertas/listado'
		if($('#menu11').hasClass('active')) seccion='Competencia/listado'
		if($('#menu12').hasClass('active')) seccion='Inicio/vista360'
		if($('#menu13').hasClass('active')) seccion='Cartera/listado'
		if($('#menu14').hasClass('active')) seccion='Cartera/listadobase'
		if($('#menu15').hasClass('active')) seccion='Funnel/listado'
		
		
		$('#body1').html('<center style="padding-top: 30vh;font-size: 100px;opacity: 0.2;"><i class="fa fa-cog" style="animation: fa-spin 12s infinite linear;"></i></center>')
		$('#body1').load(url2+seccion+'?cta='+cta)
	}
    
	frmAccion2('#frmBuscar',function(){
		actualizar()
	})
	
	$('div.elemenu').click(function(){
		$('.menu-op').removeClass('active')
		$(this).addClass('active')
		actualizar()
	})
	
	actualizar()
	
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
	
	});
	
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
		window.open('http://172.31.82.28/Planificate.aspx')
	})
</script>


