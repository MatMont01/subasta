<style>


.titulo{
	text-shadow: 1px 1px 6px rgba(110, 110, 110, 0.8);
    font-size: 18px;
    color: #557;
}
.tbm{
	    text-shadow: 1px 1px 6px rgba(110, 110, 110, 0.6);
    font-size: 16px;
    color: #5a5;
}
.bloque{
	border: 2px solid #ddd;
	padding: 17px 10px;
	background-color: #fefefe;
    box-shadow: 4px 6px 23px -8px rgba(90,90,90,1);
    margin-bottom: 10px;
    border-radius: 10px;
	min-height:445px;
	
	/*background: rgba(255,255,255,1);
	background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 13%, rgba(221,221,221,1) 90%, rgba(221,221,221,1) 100%);
	background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(13%, rgba(246,246,246,1)), color-stop(90%, rgba(221,221,221,1)), color-stop(100%, rgba(221,221,221,1)));
	background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 13%, rgba(221,221,221,1) 90%, rgba(221,221,221,1) 100%);
	background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 13%, rgba(221,221,221,1) 90%, rgba(221,221,221,1) 100%);
	background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 13%, rgba(221,221,221,1) 90%, rgba(221,221,221,1) 100%);
	background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 13%, rgba(221,221,221,1) 90%, rgba(221,221,221,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#dddddd', GradientType=1 );*/
}
.bloque img{
	width:100%
}
center{
	text-shadow: 1px 1px 6px rgba(110, 110, 110, 0.8);
    font-size: 18px;
        font-weight: bold;
    color: #338;
}

div.cuadro_up{
	background-color: #137;
    border-radius: 5px;
	padding: 2px 10px;
}

div.cuadro_down{
    /*border: 1px solid #c5c5c5;
    border-radius: 12px;*/
    margin-top: 6px;	
	padding:0px;
}
table.cuadro{
	font-size:10px;
	width:100%;
}



</style>

<div class="row bounceInDown">
<div class="col-md-12">
<div class="row">

	<div class="col-md-12" style="margin-bottom:5px">

	   
		<div class=" bloque" >
		    <center id="zona">Zona</center> 
		
		
			<div class="cuadro_down">
			<div id="mapita" style="height:375px"></div>
				
			
			</div>
			
		</div>
	
	</div>
	
	
	</div>
</div>


	

</div>

	
<script>
    
	
	
	
		<?php if($map[0]['LATITUDE']!="0.0000000000"){ ?>
		
				var uluru = {lat: <?php echo $map[0]['LATITUDE'] ?> , lng:  <?php echo $map[0]['LONGITUDE'] ?> };
				var map = new google.maps.Map(document.getElementById('mapita'), {
				  zoom: 16,
				  center: uluru
				});
				var marker = new google.maps.Marker({
				  position: uluru,
				  map: map
				});
				$('#zona').html(' <?php echo $map[0]['ZONA'] ?>')
				
		<?php }else{ ?>
			
				$('#zona').html('No tiene cobertura HFC')
	
		<?php	} ?>
	
      
	
	
</script>


