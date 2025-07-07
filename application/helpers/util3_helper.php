<?php

//###################################################
function fila_begin($paso,$texto,$col1=3,$col2=8) {
	echo '<div class="row">';
	if($paso!=''){
		if ($paso=='-')
			echo '';
	    else
			echo '<div class="col-md-1"><b>'.$paso.'</b></div>';
	}else
		echo '<div class="col-md-1"></div>';
	
	if ($texto!=''){
		echo '<div class="col-md-'.($col1).' npr npl borde-simple">'.$texto.'</div>';
		echo '<div class="col-md-'.($col2).' npr npl targetbg">';
	}else{
		echo '<div class="col-md-'.($col1+$col2).' npr npl targetbg">';
	}
}

function fila_begin2($paso,$texto,$style,$col1=3,$col2=8){
	echo '<div class="row">';
	if($paso!=''){
		if ($paso=='-')
			echo '';
	    else
			echo '<div class="col-md-1"><b>'.$paso.'</b></div>';
	}else 
		echo '<div class="col-md-1"></div>';
	
	if ($texto!=''){
		echo '<div class="col-md-'.($col1).' npr npl borde-simple" style="'.$style.'">'.$texto.'</div>';
		echo '<div class="col-md-'.($col2).' npr npl targetbg">';
	}else{
		echo '<div class="col-md-'.($col1+$col2).' npr npl targetbg">';
	}
}

function fila_end(){
	echo '</div>';
	echo '</div>';
}			

function fila_opcion_todas($id,$icono){
	return '<small id="'.$id.'" class="btn btn-small btn-default pull-right" style="padding:2px 1px 2px 0px"><i class="fa fa-fw '.$icono.'"></i></small>';
}
