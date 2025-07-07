<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
	
	
	<meta http-equiv='cache-control' content='no-cache, must-revalidate'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>




	<link rel="icon" type="image/png" href="<?php img('img/favicon.jpg') ?>" />
    <title>Cliente B2B</title>

    <!-- Font Awesome -->
    <?php //css('vendors/font-awesome/css/font-awesome.min.css') ?>
	<?php css('awesome/css/font-awesome.min.css') ?>
	
	<!-- Bootstrap -->
	<?php css('vendors/bootstrap/dist/css/bootstrap.min.css') ?>
	
	<?php css('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>
	<?php css('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>
	<?php css('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>
	<?php css('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>
	<?php css('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>
	<?php css('vendors/jquery-ui/jquery-ui.min.css') ?>
	
	
		<?php css('vendors/chosen/chosen.css') ?>
		<?php css('vendors/select2/dist/css/select2.min.css') ?>
	
	
	
	<?php css('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>
	
	<?php css('vendors/jquery-timepicker-1.3.5/jquery.timepicker.min.css') ?>
	
	
	<script 
 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDhMVFrnJsU7EEiQ65ZaZp9Qkf0oCiWF8"> 
    </script>

  <!-- leaftlet -->
  <?php css('vendors/leaflet/leaflet.css') ?>    
  <?php css('vendors/leaflet-search/leaflet-search.min.css') ?>

  </head>
 
<script>
    var url ='<?php echo url('') ?>';
    var url2='<?php echo url2('') ?>';
	var RAIZ='<?php echo RAIZ ?>';
</script>

  <body class="nav-md inverse" style="background-color: #f8f8f8; 
  
  overflow: auto; padding-top:46px;
     background-color:#fff !important;
  ">
    
    <!-- jQuery -->
	<?php script('vendors/jquery/dist/jquery.min.js') ?>
	<?php script('vendors/jquery/dist/jquery-ui.min.js') ?>
    <!-- Bootstrap -->
	<?php script('vendors/bootstrap/dist/js/bootstrap.min.js') ?>

	<?php script('vendors/moment/min/moment.min.js') ?>
	<?php script('vendors/moment/locale/es.js') ?>
	
	<?php script('vendors/datatables.net/js/jquery.dataTables.min.js') ?>
	<?php script('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>
	<?php script('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>
	<?php script('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>
	<?php script('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>
	<?php script('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>
	<?php script('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>
	<?php script('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>
	<?php script('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>
	<?php script('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>
	
	<?php script('vendors/chosen/chosen.jquery.js') ?>
	<?php script('vendors/select2/dist/js/select2.min.js') ?>
	<?php //script('vendors/jquery-ui/jquery-ui.min.js') ?>
	<?php script('vendors/jquery-validation-1.19.3/dist/jquery.validate.min.js') ?>

	<?php script('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>
	
	<?php script('vendors/jquery-timepicker-1.3.5/jquery.timepicker.min.js') ?>

	<?php script('vendors/pivottable/papaparse.min.js') ?>
	<?php script('vendors/pivottable/dist/pivot.js') ?>
	
	
	
	
	
	<?php script('vendors/pivottable/plotly/plotly-basic-latest.min.js') ?>
	<?php script('vendors/pivottable/plotly/plotly_renderers.js') ?>
	<?php script('vendors/pivottable/plotly/export_renderers.js') ?>
	
	
	
	
	
	
	
	
	
	<?php css('vendors/pivottable/dist/pivot.min.css') ?>
	
	


	<?php script('vendors/highcharts/highcharts.js') ?>
	<?php script('vendors/highcharts/highcharts-more.js') ?>

	
	
<!--<script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/highcharts-more.js"></script>-->   

	
	
<?php //script('vendors/highcharts/sunburst.js') ?>






	<?php script('vendors/highcharts/drilldown.js') ?>
	
	<?php script('vendors/pupload/plupload.full.min.js') ?>
	<?php //script('vendors/rotate/jQueryRotate.js') ?>
	
  <?php script('vendors/leaflet/leaflet.js') ?>
  <?php script('vendors/leaflet-search/leaflet-search.min.js') ?>
	
	  <!-- NProgress -->
	<?php //script('vendors/jqvmap/dist/jquery.vmap.js') ?>
	<?php //script('vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') ?>
	
	<?php css('custom.css?v=1.1') ?>
	
	<?php script('custom.js') ?>
  <?php script('myapp.js') ?>
  <?php script('map_vendor_b2b.js') ?>

	
	<!--<div id="bg-op" style=""></div> -->
  </body>
  <style>
  
	.botonfoot:hover img{ 
		-webkit-animation-name: pulse; 
		animation-name: pulse; 
		-webkit-animation-duration: 1s; 
		animation-duration: 1s; 
		-webkit-animation-fill-mode: both; 
		animation-fill-mode: both; 
	}
	.botonfoot:hover span{ 
		text-decoration:underline;
		    color: #ffd;
	}
	
	.botonfoot{    
		float:left;
		width: 65px;
		margin-left: 12px;
		margin-right: 2px;
		cursor: pointer;
		margin-top: -8px;
		position:relative;
	}
	.botonfoot img{
		width: 51px;
    margin-left: 6px;
	}
	
	.botonfoot span{
		position: absolute;
    bottom: 1px;
    width: 85px;
    font-size: 9px;
    color: #fff;
    text-align: center;
    line-height: 1;
    left: -10px;
	}
  
  
   
  
  
  
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
	.shake {
		-webkit-animation-name: shake;
		animation-name: shake;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
	}
  @-webkit-keyframes shake {
  0%, 100% {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  }
  10%, 30%, 50%, 70%, 90% {
  -webkit-transform: translate3d(-10px, 0, 0);
  transform: translate3d(-10px, 0, 0);
  }
  20%, 40%, 60%, 80% {
  -webkit-transform: translate3d(10px, 0, 0);
  transform: translate3d(10px, 0, 0);
  }
  }
  @keyframes shake {
  0%, 100% {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  }
  10%, 30%, 50%, 70%, 90% {
  -webkit-transform: translate3d(-10px, 0, 0);
  transform: translate3d(-10px, 0, 0);
  }
  20%, 40%, 60%, 80% {
  -webkit-transform: translate3d(10px, 0, 0);
  transform: translate3d(10px, 0, 0);
  }
  } 
  
  .flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes flipInY {
  0% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
  transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
  opacity: 0;
  }
  40% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
  transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
  }
  60% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
  transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
  opacity: 1;
  }
  80% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }
  100% {
  -webkit-transform: perspective(400px);
  transform: perspective(400px);
  }
  }
  @keyframes flipInY {
  0% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
  transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
  opacity: 0;
  }
  40% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
  transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
  }
  60% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
  transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
  opacity: 1;
  }
  80% {
  -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }
  100% {
  -webkit-transform: perspective(400px);
  transform: perspective(400px);
  }
  } 
  
  
  .bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
  transform-origin: center bottom;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  }
  40%, 43% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -30px, 0);
  transform: translate3d(0, -30px, 0);
  }
  70% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -15px, 0);
  transform: translate3d(0, -15px, 0);
  }
  90% {
  -webkit-transform: translate3d(0,-4px,0);
  transform: translate3d(0,-4px,0);
  }
  }
  
  @keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  }
  40%, 43% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -30px, 0);
  transform: translate3d(0, -30px, 0);
  }
  70% {
  -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
  -webkit-transform: translate3d(0, -15px, 0);
  transform: translate3d(0, -15px, 0);
  }
  90% { -webkit-transform: translate3d(0,-4px,0); transform: translate3d(0,-4px,0);
  }
  } 
  
  
  
  
  
  .zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes zoomOutLeft {
  40% {
  opacity: 1;
  -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }
  100% {
  opacity: 0;
  -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
  transform: scale(.1) translate3d(-2000px, 0, 0);
  -webkit-transform-origin: left center;
  transform-origin: left center;
  }
  }
  @keyframes zoomOutLeft {
  40% {
  opacity: 1;
  -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }
  100% {
  opacity: 0;
  -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
  transform: scale(.1) translate3d(-2000px, 0, 0);
  -webkit-transform-origin: left center;
  transform-origin: left center;
  }
  } 

  
  
   .zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes zoomOutUp {
  40% {
  opacity: 1;
  -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
  transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
  -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }
  100% {
  opacity: 0;
  -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
  transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom;
  -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
  }
  @keyframes zoomOutUp {
  40% {
  opacity: 1;
  -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
  transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
  -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }
  100% {
  opacity: 0;
  -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
  transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom;
  -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
  } 
  
  
  
  
   .swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes swing {
  20% {
  -webkit-transform: rotate3d(0, 0, 1, 15deg);
  transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
  -webkit-transform: rotate3d(0, 0, 1, -10deg);
  transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
  -webkit-transform: rotate3d(0, 0, 1, 5deg);
  transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
  -webkit-transform: rotate3d(0, 0, 1, -5deg);
  transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
  -webkit-transform: rotate3d(0, 0, 1, 0deg);
  transform: rotate3d(0, 0, 1, 0deg);
  }
  }
  @keyframes swing {
  20% {
  -webkit-transform: rotate3d(0, 0, 1, 15deg);
  transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
  -webkit-transform: rotate3d(0, 0, 1, -10deg);
  transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
  -webkit-transform: rotate3d(0, 0, 1, 5deg);
  transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
  -webkit-transform: rotate3d(0, 0, 1, -5deg);
  transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
  -webkit-transform: rotate3d(0, 0, 1, 0deg);
  transform: rotate3d(0, 0, 1, 0deg);
  }
  }
  
  
		
		
		.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
    
    background-color: #00377b !important;
	 border-color: #00377b !important;
	
		}

  #bg-op{
   
	content: "";
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    background-image:url(<?php echo RAIZ ?>/application/assets/img/bg3.png);
    width: 100%;
    opacity: 0.06;
    z-index: -1;
    background-size: 100%;
    height: 100%;
}




.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInDown {
  0% {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  }
  @keyframes slideInDown {
  0% {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  } 
  
  
  
  
  
  
.tada {
  -webkit-animation-name: tada;
  animation-name: tada;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes tada {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  10%, 20% {
  -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }
  30%, 50%, 70%, 90% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }
  40%, 60%, 80% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  }
  @keyframes tada {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  10%, 20% {
  -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }
  30%, 50%, 70%, 90% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }
  40%, 60%, 80% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  } 
  .bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  20% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
  -webkit-transform: scale3d(.9, .9, .9);
  transform: scale3d(.9, .9, .9);
  }
  60% {
  opacity: 1;
  -webkit-transform: scale3d(1.03, 1.03, 1.03);
  transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
  -webkit-transform: scale3d(.97, .97, .97);
  transform: scale3d(.97, .97, .97);
  }
  100% {
  opacity: 1;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  }
  @keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  20% {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
  -webkit-transform: scale3d(.9, .9, .9);
  transform: scale3d(.9, .9, .9);
  }
  60% {
  opacity: 1;
  -webkit-transform: scale3d(1.03, 1.03, 1.03);
  transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
  -webkit-transform: scale3d(.97, .97, .97);
  transform: scale3d(.97, .97, .97);
  }
  100% {
  opacity: 1;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  } 
  </style>
</html>

