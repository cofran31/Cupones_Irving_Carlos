function menu() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var data = JSON.parse(xmlhttp.responseText);
            var estado = "";
            estado = data.success;
            if (estado == true)
            {
                var output = '<ul class="nav navbar-nav nav_1"><li><a href="index.php">Todos los Productos </a></li>';
                $.each(data.response, function (key, value) {
                    output += '<li><a href="javascript:productos_categorias(' + value["id"] + ')">' + value["category_name"] + '</a></li>';
                });
                output += '</ul>';
                $("#bs-megadropdown-tabs").html(output);
            } else {
                alert("Algo Salio Mal, Si el problema persiste contactese con el Administrador.");
            }
        }
    };
    xmlhttp.open("GET", "http://localhost/Cupones_Irving_Carlos/servidor/main.php?opcion=menu", true);
    xmlhttp.send();
}
function productos_categorias(id_categoria) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var data = JSON.parse(xmlhttp.responseText);
            var estado = "";
            estado = data.success;
            var output = '';
            if (estado == true)
            {
                $.each(data.response, function (key, value) {
                    output += '<div class="col-md-3 top_brand_left">';
                    output += '<div class="hover14 column">';
                    output += '<div class="agile_top_brand_left_grid">';
                    output += '<div class="tag"><img src="images/' + value["id"] + '.png" alt=" " class="img-responsive" /></div>';
                    output += '<div class="agile_top_brand_left_grid1">';
                    output += '<figure>';
                    output += '<div class="snipcart-item block" >';
                    output += '<div class="snipcart-thumb">';
                    output += '<a href="single.html"><img title=" " alt=" " src="images/' + value["id"] + '.png" /></a>';
                    output += '<p>' + value["product_name"] + '</p>';
                    output += '<h4>$' + value["base_price"] + ' </h4>';
                    output += '</div>';
                    output += '<div class="snipcart-details top_brand_home_details">';
                    output += '<form action="checkout.php" method="POST" target="nucleo" name="carlitos">';
                    output += '<fieldset>';
                    output += '<input type="hidden" name="name" value="' + value["product_name"]+ '" />';
                    output += '<input type="hidden" name="id" value="' + value["id"]+ '" />';
                    output += '<input type="hidden" name="precio" value="' + value["base_price"]+ '" />';
                    output += '<input type="hidden" name="id_categoria" value="' + value["product_category_id"]+ '">';
                    output += '<input type="hidden" name="cantidad" value="1">';
                    output += '<input type="submit" name="submit" value="Add to cart" class="button" />';
                    output += '</fieldset>';
                    output += '</form>';
                    output += '</div>';
                    output += '</div>';
                    output += '</figure>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                });
                output += '<div class="clearfix"> </div>';
                $(".agile_top_brands_grids").html(output);
            } else {
                alert("Algo Salio Mal, Si el problema persiste contactese con el Administrador.");
            }
        }
    };
    xmlhttp.open("POST", "http://localhost/Cupones_Irving_Carlos/servidor/main.php?opcion=productos&id_categoria=" + id_categoria, true);
    xmlhttp.send();

}
function todos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var data = JSON.parse(xmlhttp.responseText);
            var estado = "";
            estado = data.success;
            if (estado == true)
            {
                var output = '';
                $.each(data.response, function (key, value) {
                    output += '<div class="col-md-3 top_brand_left">';
                    output += '<div class="hover14 column">';
                    output += '<div class="agile_top_brand_left_grid">';
                    output += '<div class="tag"><img src="images/' + value["id"] + '.png" alt=" " class="img-responsive" /></div>';
                    output += '<div class="agile_top_brand_left_grid1">';
                    output += '<figure>';
                    output += '<div class="snipcart-item block" >';
                    output += '<div class="snipcart-thumb">';
                    output += '<img title=" " alt=" " src="images/' + value["id"] + '.png" />';
                    output += '<p>' + value["product_name"] + '</p>';
                    output += '<h4>$' + value["base_price"] + ' </h4>';
                    output += '</div>';
                    output += '<div class="snipcart-details top_brand_home_details">';
                    output += '<form action="checkout.php" method="POST" target="nucleo" name="carlitos">';
                    output += '<fieldset>';
                    output += '<input type="hidden" name="name" value="' + value["product_name"]+ '" />';
                    output += '<input type="hidden" name="id" value="' + value["id"]+ '" />';
                    output += '<input type="hidden" name="precio" value="' + value["base_price"]+ '" />';
                    output += '<input type="hidden" name="id_categoria" value="' + value["product_category_id"]+ '">';
                    output += '<input type="submit" name="submit" value="Add to cart" class="button" />';
                    output += '</fieldset>';
                    output += '</form>';
                    output += '</div>';
                    output += '</div>';
                    output += '</figure>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                });
                output += '<div class="clearfix"> </div>';
                $(".agile_top_brands_grids").html(output);
            } else {
                alert("Algo Salio Mal, Si el problema persiste contactese con el Administrador.");
            }
        }
    };
    xmlhttp.open("GET", "http://localhost/Cupones_Irving_Carlos/servidor/main.php?opcion=todos", true);
    xmlhttp.send();
}