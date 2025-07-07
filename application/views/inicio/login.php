<!DOCTYPE html>
<html lang="en" style="height:100%">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="icon" type="image/png" href="<?php img('img/favicon.png') ?>" />-->
	<link rel="icon" type="image/x-icon" href="<?php img('img/icono_coche.ico') ?>">
    <title>Subasta | Login</title>

    <!-- Bootstrap -->
	<?php css('vendors/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Font Awesome -->
    <?php css('vendors/font-awesome/css/font-awesome.min.css') ?>
    <!-- Animate.css -->
    <?php css('vendors/animate.css/animate.min.css') ?>
    <!-- Custom Theme Style -->
    <?php css('build/css/custom.css?v=1.0') ?>
  </head>

  <style>
     .bounceInRight {  -webkit-animation-name: bounceInRight;  animation-name: bounceInRight;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes bounceInRight {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(3000px, 0, 0);  transform: translate3d(3000px, 0, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(-25px, 0, 0);  transform: translate3d(-25px, 0, 0);  }  75% {  -webkit-transform: translate3d(10px, 0, 0);  transform: translate3d(10px, 0, 0);  }  90% {  -webkit-transform: translate3d(-5px, 0, 0);  transform: translate3d(-5px, 0, 0);  }  100% {  -webkit-transform: none;  transform: none;  }  }  @keyframes bounceInRight {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(3000px, 0, 0);  transform: translate3d(3000px, 0, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(-25px, 0, 0);  transform: translate3d(-25px, 0, 0);  }  75% {  -webkit-transform: translate3d(10px, 0, 0);  transform: translate3d(10px, 0, 0);  }  90% {  -webkit-transform: translate3d(-5px, 0, 0);  transform: translate3d(-5px, 0, 0);  }  100% {  -webkit-transform: none;  transform: none;  }  } 
		.bounceInLeft { -webkit-animation-name: bounceInLeft;  animation-name: bounceInLeft;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes bounceInLeft {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(-3000px, 0, 0);  transform: translate3d(-3000px, 0, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(25px, 0, 0);  transform: translate3d(25px, 0, 0);  }  75% {  -webkit-transform: translate3d(-10px, 0, 0);  transform: translate3d(-10px, 0, 0);  }  90% {  -webkit-transform: translate3d(5px, 0, 0);  transform: translate3d(5px, 0, 0);  }  100% {  -webkit-transform: none;  transform: none;  }  }  @keyframes bounceInLeft {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(-3000px, 0, 0);  transform: translate3d(-3000px, 0, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(25px, 0, 0);  transform: translate3d(25px, 0, 0);  }  75% {  -webkit-transform: translate3d(-10px, 0, 0);  transform: translate3d(-10px, 0, 0);  }  90% {  -webkit-transform: translate3d(5px, 0, 0);  transform: translate3d(5px, 0, 0);  }  100% {  -webkit-transform: none;  transform: none;  }  } 
		.bounceInUp {  -webkit-animation-name: bounceInUp;  animation-name: bounceInUp;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes bounceInUp {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(0, 3000px, 0);  transform: translate3d(0, 3000px, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(0, -20px, 0);  transform: translate3d(0, -20px, 0);  }  75% {  -webkit-transform: translate3d(0, 10px, 0);  transform: translate3d(0, 10px, 0);  }  90% {  -webkit-transform: translate3d(0, -5px, 0);  transform: translate3d(0, -5px, 0);  }  100% {  -webkit-transform: translate3d(0, 0, 0);  transform: translate3d(0, 0, 0);  }  }  @keyframes bounceInUp {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }  0% {  opacity: 0;  -webkit-transform: translate3d(0, 3000px, 0);  transform: translate3d(0, 3000px, 0);  }  60% {  opacity: 1;  -webkit-transform: translate3d(0, -20px, 0);  transform: translate3d(0, -20px, 0);  }  75% {  -webkit-transform: translate3d(0, 10px, 0);  transform: translate3d(0, 10px, 0);  }  90% {  -webkit-transform: translate3d(0, -5px, 0);  transform: translate3d(0, -5px, 0);  }  100% {  -webkit-transform: translate3d(0, 0, 0);  transform: translate3d(0, 0, 0);  }  }
		.bounceInDown {  -webkit-animation-name: bounceInDown;  animation-name: bounceInDown;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes bounceInDown {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }    0% {  opacity: 0;  -webkit-transform: translate3d(0, -3000px, 0);  transform: translate3d(0, -3000px, 0);  }    60% {  opacity: 1;  -webkit-transform: translate3d(0, 25px, 0);  transform: translate3d(0, 25px, 0);  }    75% {  -webkit-transform: translate3d(0, -10px, 0);  transform: translate3d(0, -10px, 0);  }    90% {  -webkit-transform: translate3d(0, 5px, 0);  transform: translate3d(0, 5px, 0);  }    100% {  -webkit-transform: none;  transform: none;  }  }    @keyframes bounceInDown {  0%, 60%, 75%, 90%, 100% {  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);  }    0% {  opacity: 0;  -webkit-transform: translate3d(0, -3000px, 0);  transform: translate3d(0, -3000px, 0);  }    60% {  opacity: 1;  -webkit-transform: translate3d(0, 25px, 0);  transform: translate3d(0, 25px, 0);  }      75% {  -webkit-transform: translate3d(0, -10px, 0);  transform: translate3d(0, -10px, 0); }  	90% { -webkit-transform: translate3d(0, 5px, 0); transform: translate3d(0, 5px, 0); }  	100% {  -webkit-transform: none;  transform: none;  }  } 

		.zoomIn { -webkit-animation-name: zoomIn; animation-name: zoomIn; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; } @-webkit-keyframes zoomIn {			0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); }			50% { opacity: 1; }		}		@keyframes zoomIn {			0% { opacity: 0; -webkit-transform: scale3d(.3, .3, .3); transform: scale3d(.3, .3, .3); }			50% { opacity: 1; }		} 
		.rotateIn { -webkit-animation-name: rotateIn; animation-name: rotateIn; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; }		@-webkit-keyframes rotateIn {			0% { -webkit-transform-origin: center; transform-origin: center; -webkit-transform: rotate3d(0, 0, 1, -200deg); transform: rotate3d(0, 0, 1, -200deg); opacity: 0; }			100% { -webkit-transform-origin: center; transform-origin: center; -webkit-transform: none; transform: none; opacity: 1; }		}		@keyframes rotateIn {	0% { -webkit-transform-origin: center; transform-origin: center; -webkit-transform: rotate3d(0, 0, 1, -200deg); transform: rotate3d(0, 0, 1, -200deg); opacity: 0; }		100% { -webkit-transform-origin: center; transform-origin: center; -webkit-transform: none; transform: none; opacity: 1; }		} 
		.pulse { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-fill-mode: both; animation-fill-mode: both; }		@-webkit-keyframes pulse {			0% {  -webkit-transform: scale3d(1, 1, 1);  transform: scale3d(1, 1, 1);  }			50% {  -webkit-transform: scale3d(1.05, 1.05, 1.05);  transform: scale3d(1.05, 1.05, 1.05);  }			100% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); }		}		@keyframes pulse {			0% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1);  }			50% { -webkit-transform: scale3d(1.05, 1.05, 1.05);  transform: scale3d(1.05, 1.05, 1.05);  }			100% { -webkit-transform: scale3d(1, 1, 1); transform: scale3d(1, 1, 1); }		} 
	
		.flipInX {  -webkit-backface-visibility: visible !important;  backface-visibility: visible !important;  -webkit-animation-name: flipInX;  animation-name: flipInX;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes flipInX {  0% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  -webkit-transition-timing-function: ease-in;  transition-timing-function: ease-in;  opacity: 0;  }  40% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  -webkit-transition-timing-function: ease-in;  transition-timing-function: ease-in;  }  60% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);  transform: perspective(400px) rotate3d(1, 0, 0, 10deg);  opacity: 1;  }  80% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);  transform: perspective(400px) rotate3d(1, 0, 0, -5deg);  }  100% {  -webkit-transform: perspective(400px);  transform: perspective(400px);  }  }  @keyframes flipInX {  0% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  -webkit-transition-timing-function: ease-in;  transition-timing-function: ease-in;  opacity: 0;  }  40% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  -webkit-transition-timing-function: ease-in;  transition-timing-function: ease-in;  }  60% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);  transform: perspective(400px) rotate3d(1, 0, 0, 10deg);  opacity: 1;  }  80% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);  transform: perspective(400px) rotate3d(1, 0, 0, -5deg);  }  100% {  -webkit-transform: perspective(400px);  transform: perspective(400px);  }  } 
		.flipOutX {  -webkit-animation-name: flipOutX;  animation-name: flipOutX;  -webkit-animation-duration: .75s;  animation-duration: .75s;  -webkit-backface-visibility: visible !important;  backface-visibility: visible !important;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes flipOutX {  0% {  -webkit-transform: perspective(400px);  transform: perspective(400px);  }  30% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  opacity: 1;  }  100% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  opacity: 0;  }  }  @keyframes flipOutX {  0% {  -webkit-transform: perspective(400px);  transform: perspective(400px);  }  30% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  transform: perspective(400px) rotate3d(1, 0, 0, -20deg);  opacity: 1;  }  100% {  -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  transform: perspective(400px) rotate3d(1, 0, 0, 90deg);  opacity: 0;  }  } 
		.fadeIn {  -webkit-animation-name: fadeIn;  animation-name: fadeIn;  -webkit-animation-duration: 1s;  animation-duration: 1s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both;  }  @-webkit-keyframes fadeIn {  0% {opacity: 0;}  100% {opacity: 1;}  }  @keyframes fadeIn {  0% {opacity: 0;}  100% {opacity: 1;}  } 

  </style>
  <body class="login" style=" /*background-image:url( <?php img('img/bg.png') ?> ) ; background-size: 100% 100%; overflow:hidden;*/ ">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper" style="/*margin-top:18%;*/">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" id="Formulario" action="<?php echo url2('usuario/acLogin') ?>"  style="margin-top:0;"  onsubmit="return false">
              <div class="fadeIn" style="
			  text-shadow: 1px 2px 4px rgba(55, 55, 55, 0.8);
	margin-top: 0;
    color: #fff;
    /* font-family: sans-serif; */
    font-weight: normal;
    letter-spacing: 2px;
    font-size: 34px;
	margin-bottom:10px;
	
	">Iniciar sesión</div>
              <div id="">
                <input id="usr" name="username" type="text" class="form-control pulse" style="   display: inline; border: 1px solid #dde;box-shadow: 1px 2px 12px rgba(55, 55, 55, 0.7);" placeholder="Usuario Windows" />
              </div>
              <div>
                <input id="pass" name="password" type="password" class="form-control pulse" placeholder="Contraseña"  style="   display: inline;border: 1px solid #dde;box-shadow: 1px 2px 12px rgba(55, 55, 55, 0.7);" />
              </div>
              <div>
                <button id="btn1" type="submit" class="btn btn-default  btn-flat" style="box-shadow: 1px 2px 12px rgba(55, 55, 55, 0.7)">Ingresar</button>
              </div>

              <div class="clearfix"></div>

              <!--<div class="separator">
               

                <div class="clearfix"></div>
               
                <div>
                  <h1 style="display:none">B2B</h1>
                  <p style="    font-size: 11px;">Tigo Bolivia Copyright © 2017. Bolivia Telecel S.A.<br>Todos los derechos reservados.</p>
                </div>
				<center style="border: 1px solid #ddd; background: #fff; padding: 2px; border-radius: 5px;">
				<img src="<?php img('img/tigo.png') ?>" style="width:183px" />
				</center>
              </div>-->
            </form>
          </section>
        </div>

      </div>
    </div>
	
	
	<div id="dialogo-modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" ></h4>
				</div>
				<div class="modal-body">
				  <p id="mensaje-error"></p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="dialogo-mantenimiento" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" >Mantenimiento</h4>
				</div>
				<div class="modal-body">
				  <p id="mensaje-mantenimiento">El sistema se encuentra en mantenimiento, por favor intentar mas tarde.</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
  </body>
  <?php script('vendors/jquery/dist/jquery.min.js') ?>
  <?php script('vendors/bootstrap/dist/js/bootstrap.min.js') ?>
  <?php script('custom.js') ?>
  <?php css('custom.css') ?>
</html>
<style>
  .mailto{
	  
	  padding-left: 14px;
    color: #00e;
  }
    
</style>
<script>
	
	
	
	
	$(document).ready(function(){
		frmAccion("#Formulario",function(res) {
			if(res.ok){
				console.log(res);
				location.reload();
			}else{
				$('#pass').val('')
				$('#dialogo-modal').modal('show')
				$('#mensaje-error').html(res.msg);
				//location.reload();
			}
			
		})
		
		setTimeout(function(){
			$('#usr').focus()
		},1000)
	});
	
	/*$('#btn1').click(function(e){
		e.preventDefault()
		$('#dialogo-mantenimiento').modal('show')
	});*/
</script>