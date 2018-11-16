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
      <!-- Boostrap 4 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                                    $nombre= $Header_Presupuesto[0]['Nombre'];
                                    $proyecto= $Proyecto[0]['Nombre'];
                                    $valor= $Header_Presupuesto[0]['Valor'];                                                                                                 
                                ?>                                 
                                <h4 class="box-title">
                                    <span>Presupuesto: <?php echo  $nombre?></span>
                                    <span>, Proyecto: <?php echo  $proyecto?></span>
                                    <span>, Valor : $<?php echo  $valor?></span>  
                                </h4>                                
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body padding-t-0" id="Custom-Table-Grocery">
                                    <div class="col-lg-2 btn-blue-general" data-toggle="modal" data-target=".modal-new-detalle">Agregar Item</div>
                                        <div>
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Categoria</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Un</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Subtotal</th>
                                                <th scope="col">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php                                                 
                                                    foreach($Detalles as $detalle) 
                                                    {
                                                        $Row = "<tr>";
                                                        $Row .= "<th scope='row'>".$detalle['IdDetalle']."</th>";
                                                        $Row .= "<td>".$detalle['Categoria']."</td>";
                                                        $Row .= "<td>".$detalle['Item']."</td>";
                                                        $Row .= "<td>".$detalle['Medida']."</td>";
                                                        $Row .= "<td>".$detalle['ValorUnitario']."</td>";
                                                        $Row .= "<td>".$detalle['Cantidad']."</td>";
                                                        $Row .= "<td>".$detalle['Cantidad']*$detalle['ValorUnitario']."</td>";                                                     
                                                        $Row .= "<td>";
                                                        $Row .= "<div class='stat-icon dib flat-color-1'>";
                                                        $Row .= "<i class='pe-7s-plus font-sise-24 font-bold'></i>";
                                                        $Row .= "</div>";
                                                        $Row .= "<div class='stat-icon dib flat-color-4'>";
                                                        $Row .= "<i class='pe-7s-close-circle font-sise-24 font-bold'></i>";
                                                        $Row .= "</div>";
                                                        $Row .= "</td>";
                                                        $Row .= "</tr>";
                                                        echo $Row;
                                                    }                                                
                                                ?>

                                            </tbody>
                                            </table>
                                            <!-- Modal de nuevo registro -->
                                            <div class="modal fade modal-new-detalle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Ingresar Item a presupuesto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>                                                            
                                                            <th scope="col">Categoria</th>
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Un</th>
                                                            <th scope="col">Valor</th>
                                                            <th scope="col">Cantidad</th>
                                                            <th scope="col">Subtotal</th>                                                           
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!--Categorias-->                                                                
                                                                <td scope="col-md-2">
                                                                    <select class="form-control" id="DrowCategoria"> 
                                                                        <option Value="" >Selecione...</option>                                                                                                                                 
                                                                        <?php                                                 
                                                                            foreach($Categorias as $categoria) 
                                                                            {
                                                                                $Select = "<option value=".$categoria['Id'].">";
                                                                                $Select .= "".$categoria['Nombre']."</option>";
                                                                                echo $Select;
                                                                            }                                                
                                                                        ?>
                                                                    </select>
                                                                </td>
                                                                <!--Items--> 
                                                                <td scope="col-md-2">
                                                                    <select class="form-control" id="DrowItem"> 
                                                                                                                                                                                                    

                                                                    </select>
                                                                </td>
                                                                <!--Unidad de Medida-->
                                                                <td scope="col-md-1" id="Input-Un">Un</td>
                                                                <!--Unidad de Valor-->
                                                                <td scope="col-md-2">
                                                                    <input type="number" id="Input-Valor" class="form form-control" value="0">
                                                                </td>
                                                                <!--Cantidad-->
                                                                <td scope="col-md-1">
                                                                    <input type="number" id="Input-Cantidad" class="form form-control" value="0">
                                                                </td>
                                                                <!--Total-->
                                                                <td scope="col-md-2">
                                                                    <input type="number" id="Input-Total" class="form form-control" placeholder="0" readonly="readonly">
                                                                </td>                                                           
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-primary">Guardar</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php  echo base_url() ?>/assets/Admin/js/underscore.js"></script>
    <script src="<?php  echo base_url() ?>/assets/Admin/js/presupuestos.js"></script>
    <script>
       
    </script>
 

</body>
</html>
