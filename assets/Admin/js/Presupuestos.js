$(document).ready(function()
{
    $("#DrowCategoria").change(function()
    {
        var Cat_id = $(this).val();
        if (Cat_id != '') 
        {
            var base_url = window.location.origin; 
            //invocar ajax // cuidado esta mala la url
            $.ajax({                        
                url : base_url + "/Diamante/index.php/AdminItemsp/GetItemsByCategory/" + Cat_id,
                type: "Get",
                dataType: "json",
                beforesend:function(){
                    //Antes de hacer de la peticion
                    $("#DrowItem").html("");
                },
                success:function(response){ 
                    var options = "" 
                    var ListItems = response.Items;
                    $("#DrowItem").html("");
                    //Recorremos cada item que es devuelto y creamos las opciones 
                    _.each(ListItems, function(Data){
                        options =options + "<option value='"+ Data.Id +"'>";
                        options =options + ""+ Data.Nombre +"</option>";
                    });                   
                    //insertamos opciones
                    $("#DrowItem").html(options);

                    //Recalcular total 
                    calculartotal();
                   
                },
                error:function(jqXHR, textStatus, errorthrown){
                    alert("Se ha presentado un error al consultar los items consulte al administrador");
                }

            });             

        } 
        
        //Recalcular total x seguridad
        calculartotal(); 

    });

    $("#DrowItem").change(function()
    {
        var Item_id = $(this).val();
        if (Item_id != '') 
        {
            var base_url = window.location.origin; 
            //invocar ajax
            $.ajax({                        
                url : base_url + "/Diamante/index.php/AdminItemsp/GetItemById/" + Item_id,
                type: "Get",
                dataType: "json",
                beforesend:function(){
                    //Antes de hacer de la peticion
                    //$("#DrowItem").html("");
                },
                success:function(response){                     
                    var ListItems = response.Item;
                    var Unidad = _.first(ListItems).NombreMedida;
                    var Valor = _.first(ListItems).ValorSugerido;                    
                    $('#Input-Valor').val(Valor);  
                    $('#Input-Un').html(Unidad);
                    //Recalcular total 
                    calculartotal();                   
                },
                error:function(jqXHR, textStatus, errorthrown){
                    //No saca error no es necesario
                    //alert("Se ha presentado un error al consultar los items consulte al administrador");
                }

            });               

        } 

        //Recalcular total x seguridad
        calculartotal(); 
        
    });

    $("#Input-Valor").on("keyup", function() {
        calculartotal();
    });

    $("#Input-Cantidad").on("keyup", function() {
        calculartotal();
    });

    $("#Input-Valor").change("keyup", function() {
        calculartotal();
    });

    $("#Input-Cantidad").change("keyup", function() {
        calculartotal();
    });

});


function calculartotal()
{
    $("#Input-Total").val(0);
    var cantidad = $("#Input-Cantidad").val();    
    var valor = $("#Input-Valor").val();

    if (cantidad >0 && valor>0) {
      subtotal =  eval((cantidad*valor));
      $("#Input-Total").val(subtotal);      
    }  

}

function agregar()
{
    //ejecutar ajax que agregue el Item y contabilice el total 
    //capturar ruta
    var ruta = $("#formapresupuesto").attr("action");
    //Capturar los parametros de envio
    parametros = {
      "idpresupuesto":$("#IdPresupuesto").val(),
      "categoria":$("#DrowCategoria").val(),
      "item":$("#DrowItem").val(),
      "valor":$("#Input-Valor").val(),
      "cantidad":$("#Input-Cantidad").val(),
      "total":$("#Input-Total").val()
    }

    if ($("#Input-Cantidad").val()=="" || $("#Input-Cantidad").val()==0 || $("#Input-Cantidad").val()=="0") {
        $("#mensaje").fadeIn(0);
        $("#mensaje").html(" <span role='alert' class='alert alert-danger'>El campo cantidad no puede estar vacio</span>");
        $("#mensaje").fadeOut(5000);
        return;
    }

    if ($("#Input-Valor").val()=="" || $("#Input-Valor").val()==0 || $("#Input-Valor").val()=="0") {
        $("#mensaje").fadeIn(0);
        $("#mensaje").html(" <span role='alert' class='alert alert-danger'>El campo Valor no puede estar vacio</span>");
        $("#mensaje").fadeOut(5000);
        return;
      }

    if ($("#DrowCategoria").val()=="") {
        $("#mensaje").fadeIn(0);
        $("#mensaje").html(" <span role='alert' class='alert alert-danger'>Debes selecionar una categoria</span>");
        $("#mensaje").fadeOut(5000);
        return;
    }

    if ($("#DrowItem").val()=="") {
        $("#mensaje").fadeIn(0);
        $("#mensaje").html("<span  role='alert' class='alert alert-danger'>Debes Selecionar un Item</span>");
        $("#mensaje").fadeOut(5000);
        return;
    }

    //invocar ajax
    $.ajax({
        data :parametros,
        url : ruta,
        type: "Post",
        beforesend:function(){
            $("#mensaje").show();
            $("#mensaje").html("<span role='alert' class='alert alert-info'>Procesando</span>");
            ContultarTotal()
            
        },
        success:function(response){
            $("#mensaje").show();    
            $("#total_presupuesto").html(response);
            $("#mensaje").html("<span role='alert' class='alert alert-success'>Agregado</span> ");    
            $("#mensaje").fadeOut(2000);  
            ContultarTotal();            
            Actualizar_Lista_Items();         
        },
        error:function(jqXHR, textStatus, errorthrown){

        }
    })
}

function eliminarDetalle(id)
{
    var ruta = $("#url_site").val() + "/AdminPresupuestos/eliminarDetalle";
    //Capturar los parametros de envio
    parametros = {
      "idregistro":id,
    }
    //invocar ajax
    $.ajax({
        data :parametros,
        url : ruta,
        type: "Post",
        beforesend:function(){
            ContultarTotal()

        },
        success:function(response){
            $("#mensajeGeneral").show();                
            $("#mensajeGeneral").html("<span role='alert' class='alert alert-success'>Item Eliminado</span> ");    
            $("#mensajeGeneral").fadeOut(2000);  
            ContultarTotal()
        },
        error:function(jqXHR, textStatus, errorthrown){

        }
    })
}

function ContultarTotal()
{
    parametros = {
        "idpresupuesto":$("#IdPresupuesto").val()
      }
    var ruta = $("#url_site").val() + "/AdminPresupuestos/TotalPresupuesto";

    //invocar ajax
    $.ajax({
        data :parametros,
        url : ruta,
        type: "Post",
        beforesend:function(){

        },
        success:function(response){                       
            $("#total_presupuesto").html(response);                
        },
        error:function(jqXHR, textStatus, errorthrown){

        }
    })
}

function Actualizar_Lista_Items()
{
    parametros = {
        "idpresupuesto":$("#IdPresupuesto").val()
      }
    var ruta = $("#url_site").val() + "/AdminPresupuestos/DetallesActualizados";

    //invocar ajax
    $.ajax({
        data :parametros,
        url : ruta,
        type: "Post",
        beforesend:function(){  

        },
        success:function(response){                       
            $("#content_table_items").html("");  
            $("#content_table_items").html(response);                
        },
        error:function(jqXHR, textStatus, errorthrown){

        }
    })
}

$(document).ready(function() {
    $('#table_items_presupuesto').DataTable(
        {
            language: {
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
        } 
    );
        
} );