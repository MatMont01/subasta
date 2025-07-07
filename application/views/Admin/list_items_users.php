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
                                <h1>Lista de Adjudicaciones</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Compras y Subastas</a></li>
                                    <li class="breadcrumb-item active">Lista de Adjudicaciones</li>
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

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Mis Adjudicaciones</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="row">ID</th>
                                                    <th scope="row">ITEM</th>
                                                    <th scope="row">MARCA</th>
                                                    <th scope="row">TIPO</th>
                                                    <th scope="row">PLACA</th>
                                                    <th class="">MODELO</th>
                                                    <th class="">COLOR</th>
                                                    <!--<th class="">CIUDAD</th>-->
                                                    <!--<th class="">KILOMETRAJE</th>-->
                                                    <th class="">BASICO</th>
                                                    <th class="">OFRECIDO</th>
                                                    <th class="">NOMBRE</th>
                                                    <th class="">IMAGEN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i=0; $i<count($table);$i++){ ?>
                                                <tr>
                                                    <td scope="row" class="" data-cod="<?php echo $table[$i]['ID'] ?>"><?php echo $table[$i]['ID'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['ITEM'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['MARCA'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['TIPO_MODELO'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['PLACA_DETALLE'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['MODELO_DIMENSION'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['COLOR'] ?></td>
                                                    <!--<td scope="row" ><?php echo $table[$i]['CIUDAD'] ?></td>-->
                                                    <td scope="row" ><?php echo $table[$i]['PRECIO_BASE'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['MONTO'] ?></td>
                                                    <td scope="row" ><?php echo $table[$i]['NOMBRE_COMPLETO'] ?></td>
                                                    <td scope="row" ><button id="item<?php echo $table[$i]['ID'] ?>" type='button' class='btn btn-secondary btn-sm text-nowrap' data-id="<?php echo $table[$i]['ID'] ?>" data-img="<?php //echo $table[$i]['NRO_IMAGEN']+1; ?>" data-toggle="modal" data-target="#image_Modal">Ver Imagenes</button></td>
                                                </tr>
                                                <?php } ?>	
                                            </tbody>					
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
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

        <div id="image_Modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ver Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

            <form method="post" action="" id="myform">

                <div class="modal-body" id="load_items">
            
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="item_active" value="0">
                    <input type="hidden" id="nro_img" value="0">
                    <input type="hidden" name="adjunto" id="adjunto" value=""/>
                    <div class="container">
                        <!--<div class="row">
                            <div class="col-md-12">
                                <button id="adjuntar-boton" type="submit" class="btn btn-primary float-left">Subir imagen</button>
                                <span id="adjuntar-mensaje" style="display:none">Subiendo archivo...</span>
                                <a id="adjuntar-borrar" style="display:none" href="">Eliminar y subir otro archivo</a>
                                <button type="button" id="delete_image" class="btn btn-warning float-right">Eliminar imagen</button>
                            </div>
                        </div>
                        <hr>-->
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-default btn-secondary float-left left" data-dismiss="modal">Cerrar</button>
                                <!--<button id="save_image" type="button" class="btn btn-primary float-right right">Guardar imagen</button>-->
                            </div>
                        </div>
                    </div>
                </div>

            </form>
                
                </div>
            </div>
        </div>

        <!-- page script -->
        <script>
            $(document).ready(function () {

                /*$('.carousel').carousel({
                    pause: true,
                   interval: false,
                });
                $('.carousel').data('interval','false');
                $('.carousel').attr('data-interval','false');
                $('.carousel').carousel('pause');*/

                $('#example1 tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
                });

                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                    "initComplete": function () {
                        // Apply the search
                        this.api().columns().every(function () {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function () {
                                if (that.search() !== this.value) {
                                    that
                                            .search(this.value)
                                            .draw();
                                }
                            });
                        });
                    },
                    "language": {
                        url: "<?php echo base_url(); ?>plugins/datatables/Spanish.json"
                    }
                });
                /*$('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
                 "responsive": true,
                 });*/

                 $('#importar-msg-ok').hide()
                $('#importar-msg-err').hide()

                var uploader = new plupload.Uploader({
                    runtimes : 'html5',
                    browse_button : 'adjuntar-boton',
                    url : base_url +'index.php/Archivo/subir',
                    chunk_size : '1mb',
                    unique_names : false,
                    
                    filters : {
                        max_file_size : '2mb'
                        /*,mime_types: [
                            {title : "Image files", extensions : "jpg"},
                        ]*/
                    },
                    // Post init events, bound after the internal events
                    init : {
                        PostInit: function() {	},
                        StateChanged: function(up) { },
                        UploadProgress: function(up, file) {
                            $('#adjuntar-mensaje').html('Subiendo archivo: '+file.name+' ('+file.percent+'%)')
                        },
                        FilesAdded: function(up, files) {
                            $('#adjuntar-boton').hide()
                            $('#adjuntar-mensaje').html('Subiendo archivo...').show()
                            $('#guardar').hide()
                            $('#adjuntar-borrar').html('Cancelar').show()
                            uploader.start();
                        },
                        FileUploaded: function(up, file, info) {
                            // Called when file has finished uploading
                            $('#adjuntar-borrar').html('Eliminar y subir otro archivo').show()
                            $('#adjuntar-mensaje').html('Archivo subido: '+file.name)
                            $('#adjunto').val(file.name)
                            $('#guardar').show()
                            //cargar_archivo()
                            var item_active = $('#item_active').val();
                            var nro_img = $('#nro_img').val();
                            var adjunto = $('#adjunto').val();
                            $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+item_active+'&nro_img='+nro_img+'&adjunto='+adjunto );
                        },
                        UploadComplete: function(up, files) {
                            // Called when all files are either uploaded or failed
                            //log('[UploadComplete]');
                        },
                        Error: function(up, args) {
                            // Called when error occurs
                            $('#adjuntar-boton').show()
                            $('#adjuntar-mensaje').html('No se puede subir el archivo').show()
                            $('#guardar').show()
                            $('#adjunto').val('')
                        },
                        BeforeUpload: function (objUploader, file) {
                            var item_active = $('#item_active').val();
                            var nro_img = $('#nro_img').val();
                            var dir_name = 'item_' + item_active;
                            objUploader.settings.multipart_params = {dir_name: dir_name}
                            file.name = 'img_' + nro_img + '.' + file.name.substring(file.name.lastIndexOf('.')+1, file.name.length); //file.name;
                        }
                    }
                });

                uploader.init();
                
                $('#adjuntar-borrar').click(function(e){
                    e.preventDefault()
                    if($(this).html()=='Cancelar'){
                        uploader.stop()
                        uploader.splice()
                    }
                    $('#adjuntar-boton').show()
                    $('#adjuntar-borrar').hide()
                    $('#adjuntar-mensaje').html('').hide()
                    $('#guardar').show()
                    $('#adjunto').val('')
                    
                    $('#tbl-imp').hide()
                    $('#importar-guardar').hide()
                    var item_active = $('#item_active').val();
                    $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+item_active);
                })

                $('#image_Modal').on('shown.bs.modal', function (event) {
                    //$('#myInput').trigger('focus')
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var id = button.data('id')
                    var img = button.data('img')
                    console.log('open',id, img);
                    $('#item_active').val(id);
                    $('#nro_img').val(img);
                    //var cta=$('#CUENTA').val()
                    $('#image_Modal').modal('show');
                    $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+id);
                })

                $('#save_image').click(function() {
                    var item_active = $('#item_active').val();
                    var nro_img = $('#nro_img').val();
                    var adjunto = $('#adjunto').val();
                    
                    console.log('save_image',item_active,nro_img,adjunto);
                    if(adjunto.length > 0){
                        $('#save_image').hide();
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: base_url + "index.php/Inicio/save_images?item="+item_active+"&nro_img="+nro_img+"&adjunto="+adjunto,
                        }).done(function (r) {
                            //var r = JSON.parse(msg);
                            //console.log(r);
                            $('#nro_img').val(parseInt(r)+1);
                            //$('#item'+item_active).data('id',parseInt(r)+1);

                            $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+item_active);
                            $('#adjuntar-boton').show();
                            $('#adjuntar-borrar').hide();
                            $('#adjuntar-mensaje').html('').hide();
                            $('#save_image').show();
                            $('#adjunto').val('');
                        })
                    }
                });

                $('#delete_image').click(function() {
                    var img_active = $('.carousel-item.active>img');
                    var item_active = img_active.data('item');
                    var nro_img = img_active.data('img');
                    var adjunto = img_active.data('adjunto');
                    console.log('delete',item_active,nro_img,adjunto);
                    //$('#delete_image').hide();
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: base_url + "index.php/Inicio/delete_images?item="+item_active+"&nro_img="+nro_img+"&adjunto="+adjunto,
                    }).done(function (r) {
                        //var r = JSON.parse(msg);
                        //console.log(r);
                        //$('#nro_img').val(parseInt(r)+1);
                        //$('#item'+item_active).data('id',parseInt(r)+1);

                        $('#load_items').load(base_url + 'index.php/Inicio/load_items?item='+item_active);
                        $('#delete_image').show();
                    })
                });
            });
        </script>
    </body>
</html>
