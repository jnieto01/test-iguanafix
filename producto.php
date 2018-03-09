<?php include("header.php");?>


<div class="container">

    <ul class="breadcrumb">
        <?php // los datos de las rutas estar cargados en el array
          $breadcrumbs = array ("CONTRATAR UN SERVICIO > INSTALACION DE AIRE ACONDICIONADO");  
        ?>


        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="#"><?php echo $breadcrumb; ?></a></li>
        <?php } ?>
    </ul>   

    <div class="row product">
        <?php  // carrusel de imagen del producto ?>
        <div class="col-md-2">
            <ul class="thumbnails" id="additionalPicture"></ul>
        </div>    
        <div class="col-md-4 main-picture">
            <img id="" src="" alt="" title="" class="img-responsive mainPicture"/>
        </div>

        <?php  // datos del producto ?>
        <div class="col-md-4" id="product-information">
            <div class="form-group">
                <?php // variable cargada con el titulo del producto 
                    $title = "Instalacion de aire acondicionado split."; 
                ?>    
                <h3><?php echo $title; ?></h3>
                <p class="price" id="price"></p>

                <?php // variable cargada con el el titulo del item
                    $itemCaption = "Frigorias"; 
                ?> 
                <div class="product-include"><?php echo $itemCaption ?></div>

                <?php /*
                <div class="dropdown item-select">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span id="itemSelect"></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" id="itemOthers"></ul>
                </div>

                    */ ?>

                <select id="itemOthers"></select>

                <div class="row">
                    <div class="col-md-5">    
                        <div class="item-number">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>                            
                                <input type="text" name="quant[1]" class="form-control input-number text-center" value="01" min="1" max="100" id="itemCantidad">                   
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 item-unit">    
                        <span id="itemUnit"></span>
                    </div>

                </div>

                <div class="visita">
                    <button type="button" id="button-visita" data-loading-text="Cargando..." class="btn btn-pink btn-lg ">PROGRAMAR VISITA</button>
                </div>

                <div class="product-include">Que incluye</div>

                <ul class="list-unstyled include-list">
                    <li><i class="fa fa-check"></i> Desinstalacion del equipo anterior.</li>
                    <li><i class="fa fa-check"></i> Colocacion de nuevo equipo: unidad interior y exterior.</li>
                    <li><i class="fa fa-check"></i> Colocacion de drenaje. </li>
                </ul>      
               
                <hr class="product-line"> 
            </div>    
        </div>
    </div>


    <div class="container-servicio center-block">

            <?php  // detalles del producto ?>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Detalles del servicio</a>
                </li>

                <li role="presentation">
                    <a href="#not-include" aria-controls="not-include" role="tab" data-toggle="tab">Que no incluye</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="details" class="tab-pane active" role="tabpanel">

                    <?php // Este segmento puede ser obtenido de la base de datos asociada
                      // a cada servicio para colocar dinamicamente la informacion
                      $itemContent = "<p> Colocacion del nuevo equipo: unidad interior (hasta 2,5 mts de altura, incluído el taparroyos) y exterior (en lugares 
                      accesibles, hasta 2,5 mts de altura). Colocacion de drenaje. Presuriazacion, vacio y control de carga. Ménsulas 
                       estandar. Caneria de interconexion hasta 3 mts (3 mts de cano de cobre 1/2 o 1/4, 3 mt_srand
                       de cable tipo taller - 5 1/2, 3 mts de manguera de desague para drenaje, cinta PVC, Kit de tornillos
                       y/o canos equivalentes segun el equipo). Prueba del equipo. Limpieza del lugar</p>
                       
                       <p> Colocacion del nuevo equipo: unidad interior (hasta 2,5 mts de altura, incluído el taparroyos) y exterior (en lugares 
                      accesibles, hasta 2,5 mts de altura). Colocacion de drenaje. Presuriazacion, vacio y control de carga. Ménsulas 
                       estandar. Caneria de interconexion hasta 3 mts (3 mts de cano de cobre 1/2 o 1/4, 3 mt_srand
                       de cable tipo taller - 5 1/2, 3 mts de manguera de desague para drenaje, cinta PVC, Kit de tornillos
                       y/o canos equivalentes segun el equipo). Prueba del equipo. Limpieza del lugar</p>";                          
                    ?>
                    
                    <?php echo $itemContent; ?>
                </div>

                <div id="not-include" class="tab-pane" role="tabpanel">
                   <p> Informacion de lo que no incluye este servicio</p>                       
               
                </div>
            </div>
            <br>
            <br>

            <?php  // productos relacionados ?>
            <div class="row" id="itemRelated"></div>
    </div> 

</div>

<?php  include("footer.php");?>


<script type="text/javascript">
    $(document).ready(function(){ 
        var price; 
        var id;

        //--------- CONSULTA DE DATOS EXTERNOS -----------------      
        // imagen del producto
        $.ajax({
            type: "GET",
            url: "https://private-70cb45-aobara.apiary-mock.com/product/1/photos",				 
            success:function(data){
                // main picture
                $(".mainPicture").attr("src",data[0].url);
                $(".mainPicture").attr("id","img" + data[0].id);
                

                // additional picture
                $("#additionalPicture").html("");
                $.each( data, function( key, value ) {
                    if (key > 0){
                        $("#additionalPicture").append("<li><a class='thumbnail' href='#' title='' onclick='cambiarImg(" + value.id + ")'><img src='" + value.url +  "' title='' alt='' id='img" + value.id + "'/></a></li>");                   
                    }
                });
            }
        });

        // continuar cargando imagenes
        $.ajax({
            type: "GET",
            url: "https://private-70cb45-aobara.apiary-mock.com/product/2/photos",				 
            success:function(data){          
                // additional picture
                $.each( data, function( key, value ) {
                    $("#additionalPicture").append("<li><a class='thumbnail' href='#' title='' onclick='cambiarImg(" + value.id + ")'><img src='" + value.url +  "' title='' alt='' id='img" + value.id + "' /></a></li>");                   
                });
          }
        });

        // datos del productos
        $.ajax({
            type: "GET",
            url: "https://private-70cb45-aobara.apiary-mock.com/product/list",				 
            success:function(data){
                var items;

                id = data[0].id;
                price = data[0].unitPriceInCents / 100 ; // Inicializa data 
 
   
                items = '';
                $.each( data, function( key, value ) {
                //  items = items +  "<li><a href='#'>" + value.description + "</a></li>";
                    if (key === 0){
                         "<option value='" + value.description + "'>" + value.description + " selected </option>";
                    }
                    items = items +  "<option value='" + value.description + "'>" + value.description + "</option>";
                });


                $("#itemOthers").html(items);
                $("#itemCantidad").attr("min",data[0].minQuantity);
                $("#itemCantidad").attr("value",data[0].minQuantity);
                $("#itemUnit").html(data[0].unit);

                $("#price").html("$ " + (price * data[0].minQuantity)); 
          }
        });

        // productos relacionados
        $.ajax({
            type: "GET",
            url: "https://private-70cb45-aobara.apiary-mock.com/related-product/list",				 
            success:function(data){
                var cad = '';

                $("#itemRelated").html("");
                $.each( data, function( key, value ) {
  
                    cad = cad + "<div class='col-md-4'><div class='thumbnail'>"; 
                    cad = cad + "<a href=''><img src='" + value.pictureUrl  + "' alt='' title='' class='img-responsive' width='260' height='60' id='" + value.id + "'/></a>"; 
                    cad = cad + "<div class='caption'><h3>" + value.title  + "</h3>";
                    cad = cad + "<div class='related-pay'><i class='fa fa-credit-card'></i> desde $ " + value.fromPrice / 100 + "</div>";
                    cad = cad + "<p class='desc-related'>" + value.description + "</p>";
                    cad = cad + "<div class='button-related text-right'><input type='button' onclick='location.href=";
                    cad = cad + '"#"';
                    cad = cad + "' value='CONTRATAR'/></div></div></div>";
                    
                    $("#itemRelated").append(cad); 
                    cad = '';                   
                });

            }
        });

    //------------------- FUNCIONES INTERNAS  ---------------------------    

    //--envia al back end los datos para procesar la programacion de la visita
    /*
    $('#button-visita').on('click', function() {
	    $.ajax({
		    url: '',
		    type: 'post',
		    data: $(''),
		    dataType: 'json',
		    success: function(json) {

            }
	    });
    });
    */


    $('#itemOthers').change(function() {
        // datos del productos
        $.ajax({
            type: "GET",
            url: "https://private-70cb45-aobara.apiary-mock.com/product/list",				 
            success:function(data){
                var items;
                var tipo = $('#itemOthers').val();

                $.each( data, function( key, value ) {
                    if (tipo === value.description){
                        id = value.id;
                        price = value.unitPriceInCents / 100 ; // Inicializa data 
                        $("#itemCantidad").attr("min",value.minQuantity);
                        $("#itemCantidad").attr("value",value.minQuantity);

                        $("#price").html("$ " + (price * value.minQuantity)); 

                    }
                });
            }
        });

    });


    $('.btn-number').click(function(e){
        e.preventDefault();
    
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                    $("#price").html("$ " +  ((currentVal - 1) * price)); 
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }
            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                    $("#price").html("$ " +  ((currentVal + 1) * price)); 
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }
            }
        } else {
            input.val(1);
        }
    });

    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });

    $('.input-number').change(function() {
    
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
    
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

});	
</script>

<script>
function cambiarImg(id){
    
    var srcMain = $(".mainPicture").attr("src");
    var idMain = $(".mainPicture").attr("id"); 

    console.log(idMain);

    $(".mainPicture").attr("src",$("#img" + id).attr("src"));
    $(".mainPicture").attr("id","img" + id); 

    $("#img" + id).attr("src",srcMain);
    $("#img" + id).attr("id",idMain);
        
}
</script>