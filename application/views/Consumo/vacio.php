
<style>
  body{
	  background-color:#f3f3f3 !important;
  }
</style>

<div class="row">
		
		
		<div class="col-md-2" >
		
		
		</div>
		
		<div class="col-md-8" style="min-height:410px" >
		
		<center style="margin-top:53px">
		<!--<img id="img-vacio" src="<?php //img('img/vacio.png') ?>" />-->
		</center>
		</div>
		
		<div class="col-md-2" >
		
		
		</div>
		
		
		
	
</div>


<script>
    
	/*$('#img-vacio').fadeOut(0,function(){
		$('#img-vacio').fadeIn(800)
	})*/
	
	
	frmAccion2('#dlg-formulario',function(){ // antes
	        $('#guardar').hide()
			$('#LINEA').show()
			$('#msg-ok,#msg-err').hide()
	    },function(r) { // Despues
			if(r.ok) {
				$('#msg-ok').show()
			}else{
				$('#msg-err').show()
			}
			setTimeout(function(){ $('#msg-ok,#msg-err').fadeOut() },2000)
			setTimeout(function(){ $('#guardar').show()},2500)
			$('#LINEA').hide()
	    })
	
</script>

