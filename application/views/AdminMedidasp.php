<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Grupo Diamante - Medidas Presupuestos</title>
      <?php include("Layouts/Admin_Head.php");?>

      <!-- Estilos de las tablas CrudGrocery -->
      <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/Admin/css/CustomCrudGrocery.css">

        <?php 
  if (isset($css_files)) {
    foreach ($css_files as $rutacss) {
        ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $rutacss;?>">
        <?php
    }
  }

  ?>


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
                                <h4 class="box-title">Administración de Medidas</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body" id="Custom-Table-Grocery">
                                       
                                              <!--  CREA LA TABLA  -->
                                                <?php echo $tabla;?>            
 
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

    <?php
    if (isset($js_files)) {
        foreach ($js_files as $rutajs) {
            ?>
<script type="text/javascript" src="<?php echo $rutajs;?>"></script>            
            <?php
        }
    }

?>


</body>
</html>
