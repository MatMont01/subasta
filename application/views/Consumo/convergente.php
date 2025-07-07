<style>

	#pdf:hover{opacity:1 !important}
	</style>
	
	
	<div class="bounceInUp" style="background-image:url(<?php echo img("img/conv2/conv-bg3.png") ?>);
	
	
    height: calc(100vh - 130px);
    width: 100%;
    border: 0.8px solid #ccc;
    background-size: 100% 100%;
    min-height: 486px;
    box-shadow: 0px 0px 9px #777;
	
	" >
	
	
			<div id="centro" class="pulse" style="background-image:url(<?php echo img("img/conv2/conv-bg-centro.png") ?>);
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
			
			
			
			
			
			
			<div id="p1" class="flipInX" style="background-image:url(<?php echo img("img/conv2/1.png") ?>);
			
    position: absolute;
   width: 11%;
    height: 10.5%;
    left: 36.5%;
    top: 6%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			<!--<div id="p2" class="flipInX" style="background-image:url(<?php echo img("img/conv2/2__.png") ?>);
			
    position: absolute;
       width: 12.5%;
    height: 19%;
    left: 69%;
    top: 8.5%;
    background-size: 100% 100%;display:none;
			" >
			
			</div> -->
			
			<div id="p3" class="flipInX" style="background-image:url(<?php echo img("img/conv2/3.png") ?>);
			
    position: absolute;
    width: 11%;
    height: 11%;
    left: 77%;
    top: 39%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p4" class="flipInX" style="background-image:url(<?php echo img("img/conv2/44.png") ?>);
			
    position: absolute;
    width: 18%;
    height: 22%;
    left: 68%;
    top: 62%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p5" class="flipInX" style="background-image:url(<?php echo img("img/conv2/55.png") ?>);
			
    position: absolute;
       width: 13%;
    height: 18%;
    left: 31%;
    top: 67.5%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			<div id="p6" class="flipInX" style="background-image:url(<?php echo img("img/conv2/6.png") ?>);
			
    position: absolute;
        width: 13.5%;
    height: 33%;
    left: 5.5%;
    top: 51.5%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
				
			<div id="p7" class="flipInX" style="background-image:url(<?php echo img("img/conv2/7.png") ?>);
			
    position: absolute;
    width: 12.5%;
    height: 23%;
    left: 13.5%;
    top: 19.8%;
    background-size: 100% 100%;display:none;
			" >
			
			</div>
			
			
			
	<img id="pdf" class="" src="<?php echo img("img/descargar-en-pdf.png") ?>" style="position: absolute; 
    right: 8px;
    bottom: 68px;
    height: 34px;
    cursor: pointer;    opacity: 0.7;">
	
	

	
	
			<button id="cotizar" type="submit" class=" tada btn btn-primary " style="position: absolute;
    right: 17px;
    bottom: 11px;
    font-size: 15px;display:none;">Cotizar Bolsa</button>
	
	</div>
	
	
	
	<script>
	    setTimeout(function(){
			$('#centro').fadeIn()
		},800)
		
		var xx=800
		var au=180
		
		setTimeout(function(){$('#p1').fadeIn()},xx+au*1)
		setTimeout(function(){$('#p2').fadeIn()},xx+au*2)
		setTimeout(function(){$('#p3').fadeIn()},xx+au*3)
		setTimeout(function(){$('#p4').fadeIn()},xx+au*4)
		setTimeout(function(){$('#p5').fadeIn()},xx+au*5)
		setTimeout(function(){$('#p6').fadeIn()},xx+au*6)
		setTimeout(function(){$('#p7').fadeIn()},xx+au*8)
		
		setTimeout(function(){$('#cotizar').show()},2800)
		
		$('#cotizar').click(function(){
			$('#menu41').click()
		})
		
		$('#pdf').click(function(){
			SaveToDisk(RAIZ+'/files/download/bolsa_convergente.pdf', 'bolsa_convergente.pdf') 
		})
		
		
	</script>