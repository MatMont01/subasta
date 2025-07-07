<style>

	#pdf:hover{opacity:1 !important}
	</style>
	
	
	<div class="bounceInUp" style="background-image:url(<?php echo img("img/conv4/conv-bg9.png") ?>);
	
	
    height: calc(100vh - 130px);
    width: 100%;
    border: 0.8px solid #ccc;
    background-size: 100% 100%;
    min-height: 486px;
    box-shadow: 0px 0px 9px #777;
	
	" >
	
	
			<div id="centro" class="pulse" style="background-image:url(<?php echo img("img/conv4/conv-bg-centro.png") ?>);
			border-radius: 45px;
			background-size: 100% 100%;
			position: absolute;
			width: 17%;
			height: 28%;
			left: 37%;
			top: 31.5%;
			display:none;
			" >
			
			</div>
			
			
			
			
			
			
			<div id="p1" class="flipInX" style="background-image:url(<?php echo img("img/conv4/_1_xx.png") ?>);
    position: absolute;
    width: 11%;
    height: 13.5%;
    left: 42.6%;
    top: 8%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			<div id="p2" class="flipInX" style="background-image:url(<?php echo img("img/conv4/2_2.png") ?>);
    position: absolute;
       width: 11.6%;
    height: 18%;
    left: 69.3%;
    top: 11%;
    background-size: 100% 100%;
	display:none;
			" >
			
			</div>
			
			<div id="p3" class="flipInX" style="background-image:url(<?php echo img("img/conv4/_3_5.png") ?>);
    position: absolute;
    width: 12%;
    height: 11%;
    left: 79%;
    top: 38.3%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p4" class="flipInX" style="background-image:url(<?php echo img("img/conv5/planes_bundle_convergente.jpg") ?>);
    position: absolute;
    width: 18%;
    height: 22%;
    left: 76%;
    top: 62%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p5" class="flipInX" style="background-image:url(<?php echo img("img/conv5/planes_bbi_convergente.jpg") ?>);
			
    position: absolute;
  width: 13%;
    height: 17%;
    left: 54.5%;
    top: 68.8%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
				<div id="p5_5" class="flipInX" style="background-image:url(<?php echo img("img/conv4/10.png") ?>);
			
    position: absolute;
   width: 11.6%;
    height: 14%;
    left: 34.5%;
    top: 66.8%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p6" class="flipInX" style="background-image:url(<?php echo img("img/conv4/_6_8.png") ?>);
    position: absolute;
        width: 23.0%;
    height: 30.5%;
    left: 4.0%;
    top: 55.2%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
				
			<div id="p7" class="flipInX" style="background-image:url(<?php echo img("img/conv4/_7_7.png") ?>);
    position: absolute;
    width: 12.5%;
    height: 22%;
    left: 4.6%;
    top: 23.4%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
				<div id="p8" class="flipInX" style="background-image:url(<?php echo img("img/conv4/8_1.png") ?>);
											position: absolute;
											width: 12.5%;
											height: 18%;
											left: 21.2%;
											top: 13.4%;
											background-size: 100% 100%;
											display:none;
										" >
			</div>
			
			
			
	<img id="pdf" class="" src="<?php echo img("img/descargar-en-pdf.png") ?>" style="position: absolute; 
    right: 8px;
    top: 12px;
    height: 34px;display:none;
    cursor: pointer; opacity: 0.7;">
	
	
	
	<button id="cotizar" type="submit" class=" tada btn btn-primary " style="position: absolute;
    right: 17px;
    bottom: 11px;
    font-size: 15px;display:none;">Cotizar Bolsa</button>
	
	</div>
	
	
	
	<script>
	    setTimeout(function(){
			$('#centro').fadeIn()
		},800)
		
		var xx=600
		var au=90
		
		setTimeout(function(){$('#p1').fadeIn()},xx+au*5)
		setTimeout(function(){$('#p2').fadeIn()},xx+au*9)
		setTimeout(function(){$('#p3').fadeIn()},xx+au*7)
		setTimeout(function(){$('#p4').fadeIn()},xx+au*4)
		setTimeout(function(){$('#p5').fadeIn()},xx+au*1)
	    setTimeout(function(){$('#p5_5').fadeIn()},xx+au*6)
		setTimeout(function(){$('#p6').fadeIn()},xx+au*3)
		setTimeout(function(){$('#p7').fadeIn()},xx+au*8)
		setTimeout(function(){$('#p8').fadeIn()},xx+au*2)
		
		setTimeout(function(){$('#cotizar').show()},2800)
		
		$('#cotizar').click(function(){
			$('#menu41').click()
		})
		
		$('#pdf').click(function(){
			SaveToDisk(RAIZ+'/files/download/bolsa_convergente.pdf', 'bolsa_convergente.pdf') 
		})
		
		
	</script>