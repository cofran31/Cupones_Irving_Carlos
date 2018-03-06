function menu() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var data = JSON.parse(xmlhttp.responseText);
            var estado = "";
            estado = data.success;
            if (estado == true)
            {
                var output = '<ul class="nav navbar-nav nav_1">';
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
                    output += '<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>';
                    output += '<div class="agile_top_brand_left_grid1">';
                    output += '<figure>';
                    output += '<div class="snipcart-item block" >';
                    output += '<div class="snipcart-thumb">';
                    output += '<a href="single.html"><img title=" " alt=" " src="images/1.png" /></a>';
                    output += '<p>fortune sunflower oil</p>';
                    output += '<h4>$7.99 <span>$10.00</span></h4>';
                    output += '</div>';
                    output += '<div class="snipcart-details top_brand_home_details">';
                    output += '<form action="checkout.html" method="post">';
                    output += '<fieldset>';
                    output += '<input type="hidden" name="cmd" value="_cart" />';
                    output += '<input type="hidden" name="add" value="1" />';
                    output += '<input type="hidden" name="business" value=" " />';
                    output += '<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />';
                    output += '<input type="hidden" name="amount" value="7.99" />';
                    output += '<input type="hidden" name="discount_amount" value="1.00" />';
                    output += '<input type="hidden" name="currency_code" value="USD" />';
                    output += '<input type="hidden" name="return" value=" " />';
                    output += '<input type="hidden" name="cancel_return" value=" " />';
                    output += '<input type="submit" name="submit" value="Add to cart" class="button" />';
                    output += '</fieldset>';

                    output += '</form>';

                    output += '</div>';
                    output += '</div>';
                    output += '</figure>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/>';



                });

                $(".top-brands").html(output);
            } else {
                alert("Algo Salio Mal, Si el problema persiste contactese con el Administrador.");
            }
        }
    };
    xmlhttp.open("GET", "http://localhost/Cupones_Irving_Carlos/servidor/main.php?opcion=productos&id_categoria=" + id_categoria, true);
    xmlhttp.send();

}