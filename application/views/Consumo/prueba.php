
<style>
  body{
	  background-color:#f3f3f3 !important;
  }
</style>
<?php //script('vendors/jquery/dist/jquery.min.js') ?>
<?php //script('vendors/bootstrap/dist/js/bootstrap.min.js') ?>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<div class="row">
		
	<div class="col-md-12" >
		<form>
		  <div class="form-group">
			<label for="texto-buscar">Buscar</label>
			<input type="email" class="form-control" id="texto-buscar" aria-describedby="emailHelp" placeholder="Enter email"><span id="time"></span>
			<br>
			<small id="listado-busqueda" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
	</div>
	
</div>


<script>
    var url ='http://bicorporate/';
    var url2='http://bicorporate.tigo.net.bo/developer/index.php/';
	var RAIZ='http://bicorporate.tigo.net.bo/developer/';
	var startTime = false, endTime;
	var sw = true;
	var last_term = '';
	$(document).ready(function(){ 
		//$('#texto-buscar').one('focus',function(){
			//$(this).keypress(function(e){
			$('#texto-buscar').keyup(function(e){
			//$(this).on('keyup', (e) => {
				//e.preventDefault();
				//e.stopPropagation()
				startTime = $.now();
				endTime = $.now();
				//console.log(startTime);
				//console.log(e.keyCode)
				//console.log(e);
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
					if(term.length > 2){
						//console.log(endTime,startTime,endTime-startTime,e.key);
						stop();
						start(startTime, endTime, term);
					}
				}
				//return false;
			})/*.keydown(function( event ) {
			  if ( event.which == 13 ) {
				event.preventDefault();
			  }
			});	*/
		//});	
	});
	
var timer;
function start(startTime, endTime, term)
{
  timer=setTimeout(function()
  {
    //timeEl = timeEl + .1;
    //timeEnd = timeEl.toFixed(1);
    //document.getElementById("time").innerHTML = timeEnd;
	endTime = $.now();
	//console.log(endTime,startTime,endTime-startTime,key);
	if(endTime-startTime > 150){
		stop();
		html = '';
		search_timer(term);
	}else{
		document.getElementById("time").innerHTML = endTime-startTime;
		start(startTime, endTime, term);
	}
  }, 50);
}

function stop(){
	//document.getElementById("star").disabled=false;
	clearTimeout(timer);
}	
	
function ajaxAccion(accion,callback){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: url2 + accion,
		success: function(res) {
			callback(res)
		}
	});
	return false;
}	

function search_timer(term){
	/*if(sw){
		//sw=false;
		term=encodeURI($('#texto-buscar').val())
		var html='<ul class="resultados">'
		$.ajax({
			url:'listado_cuentas_2?term='+term,
			type:"get",
			//data:Form,
			processData:false,
			contentType:false,
			success: function(data){
				sw=true;
				var response=JSON.parse(data);
				console.log(response);
				html = html + 'Inicio/listado_cuentas_2?term='+term+'<br>';
				$('#listado-busqueda').append(html);
			}
		}); 
	}*/
	//term=encodeURI($('#texto-buscar').val());
	if(last_term !== term){
		console.log(last_term,term);
		//sw=false;
		last_term = term;
		ajaxAccion('Inicio/listado_cuentas_2?term='+term,function(r){
			sw=true;
			html = 'Inicio/listado_cuentas_2?term='+term+'<br>';
			console.log('Inicio/listado_cuentas_2?term='+term);
			$('#listado-busqueda').append(html);
			/*if (r.length==0) {
				$('#cuenta-no').text($('#texto-buscar').val())
				$('#bloque-busqueda').css('background','#fee')
				$('#bloque-no').show()
			}else{
				$('#bloque-no').hide()
				$('#bloque-busqueda').css('background','#fff')
			}
			
			for (var i=0; i<r.length; i++){
				html+='<li class="resultado" data-cta="'+r[i].cuenta+'" data-nombre="'+r[i].nombre+'" data-unificado="'+r[i].unificado+'">'
				if(r[i].cuenta>0){
					html+='<label class="label label-primary">'+r[i].cuenta+'</label> <label class="label label-primary">'+r[i].unificado+'</label> '+r[i].nombre
				}else{
					html+=r[i].nombre
				}
				html+=' <i class="fa fa-compress pull-right uni1" title="Unificar este cliente"></i></li>'
			}
			$('#listado-busqueda').html(html+'<ul>')
			
			
			$('#listado-busqueda ul li i').click(function(e){
				e.stopPropagation()
				var $li=$(this).parent()
				var cta=$li.attr("data-cta")
				var nombre=$li.attr("data-nombre");
				var unico=$li.attr("data-unificado")
				$("#tabla-unificar tbody").append("<tr><th class='cuenta'>"+cta+"</th><th class='unico'>"+unico+"</th><td class='nombre'>"+nombre+"</td></tr>")
				$('#listado-unificar').slideDown()
				$("#msg-uni,#msg-uni-ok").hide()
				$("#ok-uni,#cancel-uni").show()
			})
			
			
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
			})*/
		})	
	}
}
</script>

