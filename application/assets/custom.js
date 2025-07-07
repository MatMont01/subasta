

function frmAccion(frm,callback){
	$(frm).submit(function(){
		var f = $(this)
		var data = f.serialize()
		$.ajax({
			type: "POST",
			dataType: "json",
			url: f.attr('action'),
			//headers: {'X-Requested-With': 'XMLHttpRequest'},
			data: data,
			success: function(data) {
				callback(data)
			},
			beforeSend: function(jqXHR, settings) {
				jqXHR.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			}
		});
		return false;
	});
	
}

function frmAccion2(frm,before,callback) {
	
	$(frm).submit(function(){
		before()
		var f = $(this)
		var data = f.serialize()
		$.ajax( {
			type: "POST",
			dataType: "json",
			url: f.attr('action'),
			data: data,
			beforeSend: before,
			success: function(data) {
				callback(data)
			}
		});
		return false;
	}); 
	
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

function ajaxAccionParam(accion,param,callback){
	$.ajax({
		type: "POST",
		dataType: "json",
		data:param,
		url: url2 + accion,
		success: function(res) {
			callback(res)
		}
	});
	return false;
}

function msgError(msg){
	$('#dlg-msg .modal-content').removeClass('modal-rojo').removeClass('modal-verde').addClass('modal-rojo')
	$('#dlg-msg-body').html(msg)
	$('#dlg-msg').modal('show')
}

function msgInfo(msg){
	$('#dlg-msg .modal-content').removeClass('modal-rojo').removeClass('modal-verde').addClass('modal-verde')
	$('#dlg-msg-body').html(msg)
	$('#dlg-msg').modal('show')
}

function msgYesNo(m,si,no){
	$('#dlg-sino-msg').html(m)
	$('#dlg-sino').modal('show')
	$('#confirmar-si').unbind('click').click(si)
	$('#confirmar-no').unbind('click').click(no)
	
}

function dlgFrm(accion,ancho){
	$('#dlg-frm .modal-dialog').css('width',(ancho || 600)+'px')
	$('#dlg-frm-body').html('<i id="cargando" class="fa fa-refresh fa-spin"></i> Cargando...')
	$('#dlg-frm-body').load(url2+accion) //
	
	$('#dlg-frm').modal('show')
}

function dlgErr(msg){
	$('#dlg-error').remove()
	var div='<div id="dlg-error" class="alert alert-danger alert-dismissible fade in " role="alert" style="margin-bottom:5px;padding:1px 25px;">'
	div += '<button type="button" class="close" data-dismiss="alert"><span>×</span> </button>'
	div += '<span id="error"> </span>'
    div += '</div>'
	$(div).insertAfter($('#dlg-tit'))
	
	$('#error').html(msg);
}

function setDataTable(t){
	$(t).dataTable( {
		"sPaginationType": "full_numbers",
		"oLanguage":{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		}
	});
}


function setDataTable2(t){
	var tbl=$(t).dataTable({
		bPaginate:false,
		sDom: 't',
		oLanguage:{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {"sFirst": "Primero","sLast": "Último","sNext": "Siguiente","sPrevious": "Anterior"},
			"oAria": {"sSortAscending":  ": Activar para ordenar la columna de manera ascendente","sSortDescending": ": Activar para ordenar la columna de manera descendente"}
		},
		bSort:true,
		fixedHeader: true
	})
	
}



function seleccionar(obj){
	if (window.getSelection) { 
		var sel = window.getSelection();
		var range = document.createRange();
		range.selectNodeContents(obj);
		sel.removeAllRanges();
		sel.addRange(range);
	} 
	else if (document.selection) { 
		document.selection.empty();
		var range = document.body.createTextRange();
		range.moveToElementText(obj);
		range.select();
	}
}

function cls(sel,clase_agregar,clase_quitar){
	$(sel).removeClass(clase_quitar)
	if(!$(sel).hasClass(clase_agregar))$(sel).addClass(clase_agregar)
}


var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

//Function to convert rgb color to hex format
function rgb2hex(rgb) {
 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function hex(x) {
  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
 }

