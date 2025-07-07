<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lista
 *
 * @author marcelinux <marcelo.garcia@eldeber.com.bo>
 */
?>
<?php require('header.php'); ?>
<style>
#load_items, .carousel{ min-height: 300px; }
#load_items .img-size{
/* 	padding: 0;
	margin: 0; */
	height: auto;
	width: 100%;
	background-size: cover;
	overflow: hidden;
}
#load_items .modal-content {
   width: 100%;
  border:none;
}
#load_items.modal-body {
   padding: 0;
}

#load_items .carousel-control-prev-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
}
#load_items .carousel-control-next-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
	width: 30px;
	height: 48px;
}    

/*.img-fluid{ max-width: 300px; }*/
</style>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <?php require('navbar.php'); ?>

            <?php require('sidebar.php'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Vista de Subasta</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Compras y Subastas</a></li>
                                    <li class="breadcrumb-item active">Subasta Automóviles</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title w-100">Automoviles <span class="float-right"><span id="fecha_fin">Finaliza: <?php if(isset($table)) echo $table[0]['FECHA_FIN']->format('d-m-Y H:i:s'); ?></span></span></h4>
                                </div>
                                <div class="card-body">
                                <?php $sw=false; foreach ($table as $key => $valor) { ?>
                                    <div class="row border pt-2">
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!--<a href="https://picsum.photos/id/<?php echo $key; ?>/800/800" class="lightbox" data-toggle="lightbox" data-lightbox="photos" data-title="<?php echo $valor['MARCA'].' '.$valor['TIPO_MODELO'].' '.$valor['MODELO_DIMENSION'].' '.$valor['PLACA_DETALLE']; ?>">-->
                                                    <a href="#" data-toggle="modal" data-target="#items_Modal" data-id="<?php echo $valor['ID']; ?>"  data-title="<?php echo $valor['MARCA'].' '.$valor['TIPO_MODELO'].' '.$valor['MODELO_DIMENSION'].' '.$valor['PLACA_DETALLE']; ?>">
                                                    <?php if(isset($valor['URL_IMAGE'])){ ?>
                                                        <img src="<?php echo base_url(); ?>files/<?php echo $valor['URL_IMAGE']; ?>" class="img-fluid mb-2 thickbox" alt="Ver"/>
                                                    <?php }else{ ?>
                                                        <?php if($valor['TIPO_COMPRA'] == 'SUBASTA'){ ?>
                                                            <img src="https://loremflickr.com/300/300/cars?lock=<?php echo $key; ?>" class="img-fluid mb-2 thickbox" alt="Ver"/>
                                                        <?php }else{ 
                                                                $cad = strtolower($valor['ITEM']);
                                                                if(strtolower($valor['ITEM'])=='silla')
                                                                    $cad = 'chair';
                                                                if(strtolower($valor['ITEM'])=='mesa')
                                                                    $cad = 'table';
                                                                if(strtolower($valor['ITEM'])=='escritorio')
                                                                    $cad = 'desk';
                                                                if(strtolower($valor['ITEM'])=='estante')
                                                                    $cad = 'shelf';
                                                                if(strtolower($valor['ITEM'])=='credenza')
                                                                    $cad = 'dresser';
                                                            ?> 
                                                            <img src="https://loremflickr.com/300/300/<?php echo $cad; ?>?lock=<?php echo $key; ?>" class="img-fluid mb-2 thickbox" alt="Ver"/>
                                                        <?php } ?>   
                                                    <?php } ?>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Clase:</label> <?php echo $valor['ITEM']; ?><br>
                                                    <label>Marca:</label> <?php echo $valor['MARCA']; ?><br>
                                                    <label>Año:</label> <?php echo $valor['MODELO_DIMENSION']; ?><br>
                                                    <label>Tipo:</label> <?php echo $valor['TIPO_MODELO']; ?><br>
                                                    <label>Placa:</label> <?php echo $valor['PLACA_DETALLE']; ?><br>
                                                    <label>Color:</label> <?php echo $valor['COLOR']; ?><br>
                                                    <!--<label>Kilometraje:</label> <?php echo $valor['CONDICION_KILOMETRAJE']; ?><br>-->
                                                    <label>Precio Base:</label> <span id="precio_base"><?php echo $valor['PRECIO_BASE']; ?> Bs.</span><br>
                                                </div> 
                                            </div>   
                                        </div>
                                        <div class="col-sm-4">
                                            <?php if(isset($valor['OFRECIDO'])){ $sw=true; ?>
                                                <label>Mayor Puja:</label> <span id="mayor_puja_<?php echo $valor['ID']; ?>"><?php echo $valor['PUJA']; ?> Bs.</span><br>
                                                <label>Precio Ofrecido:</label> <span id="precio_ofrecido_<?php echo $valor['ID']; ?>"><?php echo $valor['OFRECIDO']; ?> Bs.</span><br>
                                                <label>Estado:</label> <?php if($valor['OFRECIDO'] >= $valor['PUJA']) echo '<span id="puja'.$valor['ID'].'" class="text-success">Ganando</span>'; else echo '<span id="puja'.$valor['ID'].'" class="text-danger">Perdiendo</span>'; ?><br>
                                            <?php } ?>
                                            <br>
                                            <button type="button" class="btn btn-primary btn_puja" data-toggle="modal" data-target="#subasta_Modal" data-id="<?php echo $valor['ID']; ?>" data-min="<?php echo $valor['PRECIO_BASE']; ?>">Pujar</button>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <?php require('footer.php'); ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <div class="modal fade" id="subasta_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_subasta">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Puja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="monto" class="col-form-label">Sugerencia Puja Bs.:</label>
                                    <input type="number" class="form-control" id="monto" name="monto" min="0">
                                </div>
                                <!--<div class="form-group">
                                    <label for="maximo" class="col-form-label">Sugerencia Puja:</label>
                                    <input type="number" class="form-control" id="mayor" disabled>
                                </div>-->
                                <div class="form-group">
                                    <div class="text-danger d-none" id="message"></div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary float-right">Enviar</button>
                            <input type="hidden" id="id_inventario" name="id_inventario">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="items_Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Imagenes Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" id="load_items">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- page script -->
        <script>
            /*$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true,
                    wrapping: false 
                });
            });*/

            $('#items_Modal').on('shown.bs.modal', function (event) {
                //$('#myInput').trigger('focus')
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id')
                var title = button.data('title');
                var modal = $(this)
                modal.find('.modal-title').text(title)
                //var cta=$('#CUENTA').val()
                $('#items_Modal').modal('show');
                $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+id );
                $('.carousel').data('interval',true);
            })

            $('#subasta_Modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var min = button.data('min') 
                var id = button.data('id') 

                var modal = $(this)
                //modal.find('.modal-title').text('New message to ' + recipient)
                
                modal.find('.modal-footer input#id_inventario').val(id);
                load_Mayor(id, modal);
            });

            function load_Mayor(id, modal){
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: base_url + "index.php/Inicio/load_mayor?id="+id,
                }).done(function (r) {
                    //var r = JSON.parse(msg);
                    //console.log(r);
                    //modal.find('.modal-body input#mayor').val(r+100);
                    modal.find('.modal-body input#monto').val(r+99);
                    modal.find('.modal-body input#monto').attr('min',r);
                })
            }

            $.validator.setDefaults({
                submitHandler: function (form, e) {
                    //alert( "Form successful submitted!" );
                    //e.preventDefault();
                    var formData = $(form).serialize();
                    //console.log(formData);
                    $('#message').addClass('d-none');
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: base_url + "index.php/Inicio/save_amount",
                        data: formData,
                        cache: false,             
                        processData: false
                    }).done(function (r) {
                        //var r = JSON.parse(msg);
                        console.log(r);
                        if(r.ok){
                            $('#message').removeClass('text-danger');
                            $('#message').addClass('text-success');
                            $('#message').html(r.msg);
                            location.reload();	
                        }else{
                            $('#message').removeClass('text-success');
                            $('#message').addClass('text-danger');
                            $('#message').html(r.msg);
                            load_Mayor($('#id_inventario').val(), $('#subasta_Modal'));
                        }
                        $('#message').removeClass('d-none');
                    })
                    return false;
                }
            });
            $('#form_subasta').validate({
                rules: {
                    monto: {
                        required: true
                    }
                },
                messages: {
                    monto: {
                        required: "El monto es requerido"
                    }
                },
                /*errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }*/
            });

            <?php if($sw){ ?>
            setInterval(function(){
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: base_url + "index.php/Inicio/update_info",
                }).done(function (result) {
                    //var r = JSON.parse(msg);
                    //console.log(result);
                    $.each(result,function(index, value){
                        //console.log(index, value);
                        $('#mayor_puja_'+value['ID_INVENTARIO']).html(value['PUJA']+' Bs.');
                        $('#precio_ofrecido_'+value['ID_INVENTARIO']).html(value['OFRECIDO']+' Bs.');
                        if(value['OFRECIDO'] >= value['PUJA']){
                            $('#puja'+value['ID_INVENTARIO']).html('Ganando...');
                            $('#puja'+value['ID_INVENTARIO']).removeClass('text-danger');
                            $('#puja'+value['ID_INVENTARIO']).addClass('text-success');
                        }else{
                            $('#puja'+value['ID_INVENTARIO']).html('Perdiendo...');
                            $('#puja'+value['ID_INVENTARIO']).removeClass('text-success');
                            $('#puja'+value['ID_INVENTARIO']).addClass('text-danger');
                            //$('#mayor_puja_'+value['ID_INVENTARIO']).fadeTo(1000, 0.1, function() { $(this).fadeTo(500, 1.0); });
                        }
                        
                    });
                    //modal.find('.modal-body input#mayor').val(r);
                    //modal.find('.modal-body input#monto').val(r);
                    //modal.find('.modal-body input#monto').attr('min',r);
                })
            },10000);
            <?php } ?>

            const fecha_fin = '<?php if(isset($table)) echo $table[0]['FECHA_FIN']->format('d-m-Y H:i:s'); ?>';
            const fecha_hora = fecha_fin.split(' ');
            const fecha_string = fecha_hora[0];
            const hora_string = fecha_hora[1];
            const fecha = fecha_string.split('-');
            const hora = hora_string.split(':');
            const dia = parseInt(fecha[0]);
            const mes = parseInt(fecha[1]);
            const anio = parseInt(fecha[2]);
            const hor = parseInt(hora[0]);
            const min = parseInt(hora[1]);
            const seg = parseInt(hora[2]);
            const fechaFinal = new Date(anio + "/" + mes + "/" + dia + " " + hor + ":" + min + ":" + seg);

            function updateTime() {
                var updateIt = function(){
                    /*var d = new Date;
                    var day = d.getDate();
                    var month = d.getMonth()+1;
                    var year = d.getFullYear();
                    var hours = d.getHours();
                    var mins = d.getMinutes();
                    var secs = d.getSeconds();*/
                    //console.log('-------');
                    //console.log(dia,mes,anio,hor,min,seg);
                    //console.log(day,month,year,hours,mins,secs);

                    var fechaInicio = new Date() ; //new Date(d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
                    var fechaResta = fechaFinal - fechaInicio;
                    //console.log(fechaResta);
                    if(fechaResta <= 0){
                        //console.log(fechaResta);
                        $('.btn_puja').hide();
                        $('.modal').modal('hide');
                        clearInterval(refreshIntervalId);
                    }else{
                        /*var ampm = 'AM';
                        if (hours >= 12) { ampm = 'PM'; }
                        if (hours > 12) { hours = hours - 12; }*/
                        formatted_time = 'Faltan: ' + parseInt((((fechaResta / 1000) / 60) / 60) / 24) + ' días ' + parseInt((((fechaResta / 1000) / 60) / 60) % 24) + ' hrs ' + parseInt(((fechaResta / 1000) / 60) % 60) + ' min ' + parseInt((fechaResta / 1000) % 60) + ' seg ';
                        //console.log(day,month,year,hours,mins,secs);
                        $("#fecha_fin").html(formatted_time);
                    }
                }
                var refreshIntervalId = setInterval(updateIt, 1000);
            }
            updateTime();

            /*var d = new Date();
            var fechaInicio = new Date(d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
            var fechaFinal = new Date(anio + "/" + mes + "/" + dia + " " + hor + ":" + min + ":" + seg);
            var fechaResta = fechaFinal - fechaInicio;
            console.log("Faltan: " + ((((fechaResta / 1000) / 60) / 60) / 24)/365 + " a&ntilde;os. &oacute;<br/>");
            console.log("Faltan: " + (((fechaResta / 1000) / 60) / 60) / 24 + " días. &oacute;<br/>");
            console.log("Faltan: " + (((fechaResta / 1000) / 60) / 60)  + " Horas.  &oacute;<br/>");
            console.log("Faltan: " + ((fechaResta / 1000) / 60)  + " Minutos.  &oacute;<br/>");
            console.log("Faltan: " + (fechaResta / 1000)  + " Segundos.");*/
            
        </script>
    </body>
</html>
