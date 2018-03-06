<?php
session_start();
if ($_POST['submit']) {

    $nombres = $_POST['name'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $array = $_SESSION['precios'];

    $indice = array_search($nombres, $_SESSION['nombre'], true);
    //print_r($indice);

    if ($indice > -1) {
        ?>
        <script>
            alert('Usted ya ingreso este articulo');
        </script>
        <?php
    } else {
        $_SESSION['nombre'][] = $nombres;
        $_SESSION['precio'][] = $precio;
        $_SESSION['cantidad'][] = $cantidad;
    }
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
        <!-- //font-awesome icons -->

        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <style>

        </style>
    </head>

    <body>

        <div class="checkout-left">	

            <div class="col-md-4 checkout-left-basket">
                <h4>Lista de Compras</h4>
                <ul>
                    <table style="width:100% !important" align="center">
                        <tr>
                            <td align="center" style="width:33% !important"><li>Producto</li></td>
                        <td align="center" style="width:33% !important"><li>Cantidad</li></td>
                        <td align="center" style="width:33% !important"><li>Precio</li></td>
                        </tr>
                        <?php
                        for ($i = 0; $i < count($_SESSION['precio']); $i++) {
                            echo '<tr>';
                            echo '<td align="center" style="width:33% !important"><li>' . $_SESSION['nombre'][$i] . '</li></td>';
                            echo '<td align="center" style="width:33% !important"><li>';
                            echo '<form action = "checkout.php" method = "post" >';
                            echo '<select onchange = "this.form.action = `checkout.php`; this.disabled = true; this.form.submit()" name="combo'.$i.'" style="widht:60px">';
                            echo '<option value = "1" >1</option>';
                            echo '<option value = "2" >2</option>';
                            echo '<option value = "3" >3</option>';
                            echo '<option value = "4" >4</option>';
                            echo '<option value = "5" >5</option>';
                            echo '<option value = "6" >6</option>';
                            echo '<option value = "7" >7</option>';
                            echo '<option value = "8" >8</option>';
                            echo '<option value = "9" >9</option>';
                            echo '<option value = "10" >10</option>';
                            echo '</select>';
                           
                            echo '</li></td>';
                            echo '<td align="center" style="width:33% !important"><li><input type="hidden" name="input'.$i.'" >' . $_SESSION['precio'][$i] * 1 . '</li></td>';
                            echo '</tr>';
                             echo '</form>';
                        }
                        echo '<tr><td colspan=2 align="center">Total </td align="center"><td> total</td>';
                        echo '<tr><td colspan=2 align="center">Descuento de Cupon </td align="center"><td> total</td>';
                        echo '<tr><td colspan=2 align="center">Total </td align="center"><td> total</td>';
                        ?>
                    </table>
                </ul>
<br/><br/>
                <h5>Ingrese su Codigo de Cupon:</h5>
                <input type="text" name="cupon" id="cupon" value=""/>
                <input type="button" name="cupon" id="cupon" value="Verificar"/>
            </div>



            <div class="clearfix"> </div>

        </div>


    </body>
</html>
<?php
//session_destroy()
?>