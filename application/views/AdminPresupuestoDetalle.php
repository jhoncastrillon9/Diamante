<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Grupo Diamante - Presupuestos</title>
      <?php include("Layouts/Admin_Head.php");?>

      <!-- Estilos de las tablas CrudGrocery -->
      <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/Admin/css/CustomCrudGrocery.css">
      <!-- Estilos de las tablas Main General -->
      <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/Admin/css/MainGeneral.css">

</head>

<body>
	<?php include("Layouts/Admin_left_panel.php");?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
		<?php include("Layouts/Admin_Header.php");?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">               
				<?php include("Layouts/Admin_Widgets.php");?>                

                <!--  CONTENIDO DE CADA PAGINA  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php 
                                    $nombre= $Header_Presupuesto[0]['Nombre'];
                                    $proyecto= $NombreProyecto[0]['Nombre'];
                                    $valor= $Header_Presupuesto[0]['Valor'];                                                                                                 
                                ?> 
                                <h4 class="box-title">
                                    <span><?php echo  $nombre?></span>
                                    <span>, Proyecto: <?php echo  $proyecto?></span>
                                    <span>, Valor : $<?php echo  $valor?></span>  
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body" id="Custom-Table-Grocery">

                                        <div>
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Categoria</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Un</th>
                                                <th scope="col">Valor U.</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                <div class="stat-icon dib flat-color-1">
                                                    <i class="pe-7s-plus font-sise-24"></i>
                                                </div>
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="pe-7s-close-circle font-sise-24"></i>
                                                </div>
                                                </td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>          
 
                                    </div> <!-- /.card-body -->
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>                
                <div class="clearfix"></div> 
                <!--  FIN CONTENIDO DE CADA PAGINA  -->


            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php include("Layouts/Admin_Footer.php");?>
        
    </div>
    <!-- /#right-panel -->
    <?php include("Layouts/Admin_Scripts.php");?>

</body>
</html>
