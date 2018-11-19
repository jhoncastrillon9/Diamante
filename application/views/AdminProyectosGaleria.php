<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Grupo Diamante - Proyecto Galeria</title>
      <?php include("Layouts/Admin_Head.php");?>

      <!-- Estilos de las tablas CrudGrocery -->
      <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/Admin/css/CustomCrudGrocery.css">
      <!-- Estilos de las tablas Main General -->
      <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>/assets/Admin/css/MainGeneral.css">
      <!-- Boostrap 4 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
        <link rel="stylesheet" href="<?php  echo base_url() ?>/assets/Admin/css/lightbox.min.css">
        <style>
                header{text-align:center;}
                article img{max-height:180px;}
                article p,footer p{text-align:center;}
        </style>

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
                            <div class="card-body padding-b-0">
                                <?php 
                                    $proyecto= $Proyecto[0]['Nombre'];                                                                                           
                                ?>                                 
                                <h2 class="box-title">                                   
                                    <span>Proyecto <?php echo  $proyecto?></span>                                    
                                </h2>
                               

                                    <div class="container galeria">
                                            <articles class="row">
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img1.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img1.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img2.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img2.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img3.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img3.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img4.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img4.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img5.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img5.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img6.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img6.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img7.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img7.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img8.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img8.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img9.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img9.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img10.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img10.jpg"></a>
                                                    <p>Regala</p>
                                                </article>
                                                <article class="col-md-3">
                                                    <a href="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img11.jpg" data-lightbox="example-set" data-title="Regala">
                                                    <img src="<?php  echo base_url() ?>/assets\uploads\Proyectos\Generales\img11.jpg"></a>
                                                    <p>Regala</p>
                                                </article>

                                            </articles>
                                    </div>


                                
                                <br/>                         
                                <br/>                         
                            </div>                           
  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php  echo base_url() ?>/assets/Admin/js/underscore.js"></script>

    <script src="<?php  echo base_url() ?>/assets/Admin/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'albumLabel': "Imagen %1 de %2"
        })
    </script>
    
 

</body>
</html>
