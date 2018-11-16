$(document).ready(function()
{
    $("#DrowCategoria").change(function()
    {
        var Cat_id = $(this).val();
        if (Cat_id != '') 
        {
            var base_url = window.location.origin; 
            //invocar ajax
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
                   
                },
                error:function(jqXHR, textStatus, errorthrown){
                    alert("Se ha presentado un error al consultar los items consulte al administrador");
                }

            });            
        } 
    
        
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
                },
                error:function(jqXHR, textStatus, errorthrown){
                    //No saca error no es necesario
                    //alert("Se ha presentado un error al consultar los items consulte al administrador");
                }

            });            
        } 
    
        
    });


});