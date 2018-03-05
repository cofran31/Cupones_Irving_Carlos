<?php

class Book {

    private $categoria1;
    private $categoria2;
    private $categoria3;
    private $categoria4;
    private $categoria5;
    private $categoria6;
    private $categoria7;
    private $categoria8;
    private $categoria9;
    private $categoria10;
    private $categoria11;
    private $categoria12;
    private $categoria13;
    private $categoria14;
    private $categoria15;

    function __construct($categoria1_in, $categoria2_in, $categoria3_in, $categoria4_in, $categoria5_in, $categoria6_in, $categoria7_in, $categoria8_in, $categoria9_in, $categoria10_in, $categoria11_in, $categoria12_in, $categoria13_in, $categoria14_in, $categoria15_in) {
        $this->categoria1 = $categoria1_in;
        $this->categoria2 = $categoria2_in;
        $this->categoria3 = $categoria3_in;
        $this->categoria4 = $categoria4_in;
        $this->categoria5 = $categoria5_in;
        $this->categoria6 = $categoria6_in;
        $this->categoria7 = $categoria7_in;
        $this->categoria8 = $categoria8_in;
        $this->categoria9 = $categoria9_in;
        $this->categoria10 = $categoria10_in;
        $this->categoria11 = $categoria11_in;
        $this->categoria12 = $categoria12_in;
        $this->categoria13 = $categoria13_in;
        $this->categoria14 = $categoria14_in;
        $this->categoria15 = $categoria15_in;
    }

    function getCategoria1() {
        return $this->categoria1;
    }

    function getCategoria2() {
        return $this->categoria2;
    }

    function getCategoria3() {
        return $this->categoria3;
    }

    function getCategoria4() {
        return $this->categoria4;
    }

    function getCategoria5() {
        return $this->categoria5;
    }

    function getCategoria6() {
        return $this->categoria6;
    }

    function getCategoria7() {
        return $this->categoria7;
    }

    function getCategoria8() {
        return $this->categoria8;
    }

    function getCategoria9() {
        return $this->categoria9;
    }

    function getCategoria10() {
        return $this->categoria10;
    }

    function getCategoria11() {
        return $this->categoria11;
    }

    function getCategoria12() {
        return $this->categoria12;
    }

    function getCategoria13() {
        return $this->categoria13;
    }

    function getCategoria14() {
        return $this->categoria14;
    }

    function getCategoria15() {
        return $this->categoria15;
    }

}

class BookCategoriaDecorator {

    protected $book;
    protected $categoria1;
    protected $categoria2;
    protected $categoria3;
    protected $categoria4;
    protected $categoria5;
    protected $categoria6;
    protected $categoria7;
    protected $categoria8;
    protected $categoria9;
    protected $categoria10;
    protected $categoria11;
    protected $categoria12;
    protected $categoria13;
    protected $categoria14;
    protected $categoria15;

    public function __construct(Book $book_in) {
        $this->book = $book_in;
        $this->resetCategoria1();
        $this->resetCategoria2();
        $this->resetCategoria3();
        $this->resetCategoria4();
        $this->resetCategoria5();
        $this->resetCategoria6();
        $this->resetCategoria7();
        $this->resetCategoria8();
        $this->resetCategoria9();
        $this->resetCategoria10();
        $this->resetCategoria11();
        $this->resetCategoria12();
        $this->resetCategoria13();
        $this->resetCategoria14();
        $this->resetCategoria15();
    }

    function resetCategoria1() {
        $this->categoria1 = $this->book->getCategoria1();
    }

    function resetCategoria2() {
        $this->categoria2 = $this->book->getCategoria2();
    }

    function resetCategoria3() {
        $this->categoria3 = $this->book->getCategoria3();
    }

    function resetCategoria4() {
        $this->categoria4 = $this->book->getCategoria4();
    }

    function resetCategoria5() {
        $this->categoria5 = $this->book->getCategoria5();
    }

    function resetCategoria6() {
        $this->categoria6 = $this->book->getCategoria6();
    }

    function resetCategoria7() {
        $this->categoria7 = $this->book->getCategoria7();
    }

    function resetCategoria8() {
        $this->categoria8 = $this->book->getCategoria8();
    }

    function resetCategoria9() {
        $this->categoria9 = $this->book->getCategoria9();
    }

    function resetCategoria10() {
        $this->categoria10 = $this->book->getCategoria10();
    }

    function resetCategoria11() {
        $this->categoria11 = $this->book->getCategoria11();
    }

    function resetCategoria12() {
        $this->categoria12 = $this->book->getCategoria12();
    }

    function resetCategoria13() {
        $this->categoria13 = $this->book->getCategoria13();
    }

    function resetCategoria14() {
        $this->categoria14 = $this->book->getCategoria14();
    }

    function resetCategoria15() {
        $this->categoria15 = $this->book->getCategoria15();
    }

    function showCategoria1() {
        return $this->categoria1;
    }

    function showCategoria2() {
        return $this->categoria2;
    }

    function showCategoria3() {
        return $this->categoria3;
    }

    function showCategoria4() {
        return $this->categoria4;
    }

    function showCategoria5() {
        return $this->categoria5;
    }

    function showCategoria6() {
        return $this->categoria6;
    }

    function showCategoria7() {
        return $this->categoria7;
    }

    function showCategoria8() {
        return $this->categoria8;
    }

    function showCategoria9() {
        return $this->categoria9;
    }

    function showCategoria10() {
        return $this->categoria10;
    }

    function showCategoria11() {
        return $this->categoria11;
    }

    function showCategoria12() {
        return $this->categoria12;
    }

    function showCategoria13() {
        return $this->categoria13;
    }

    function showCategoria14() {
        return $this->categoria14;
    }

    function showCategoria15() {
        return $this->categoria15;
    }

}

class BookPrimeraLetraMayuscula extends BookCategoriaDecorator {

    private $btd;

    public function __construct(BookCategoriaDecorator $btd_in) {
        $this->btd = $btd_in;
    }

    function iniciarMayuscula() {
        $this->btd->categoria1 = ucwords($this->btd->categoria1, " ");
        $this->btd->categoria2 = ucwords($this->btd->categoria2, " ");
        $this->btd->categoria3 = ucwords($this->btd->categoria3, " ");
        $this->btd->categoria4 = ucwords($this->btd->categoria4, " ");
        $this->btd->categoria5 = ucwords($this->btd->categoria5, " ");
        $this->btd->categoria6 = ucwords($this->btd->categoria6, " ");
        $this->btd->categoria7 = ucwords($this->btd->categoria7, " ");
        $this->btd->categoria8 = ucwords($this->btd->categoria8, " ");
        $this->btd->categoria9 = ucwords($this->btd->categoria9, " ");
        $this->btd->categoria10 = ucwords($this->btd->categoria10, " ");
        $this->btd->categoria11 = ucwords($this->btd->categoria11, " ");
        $this->btd->categoria12 = ucwords($this->btd->categoria12, " ");
        $this->btd->categoria13 = ucwords($this->btd->categoria13, " ");
        $this->btd->categoria14 = ucwords($this->btd->categoria14, " ");
        $this->btd->categoria15 = ucwords($this->btd->categoria15, " ");
    }

}

$datosBook = new Book('articulos de marca', 'articulos de casa', 'vegetales y frutas', 'vegetales', 'frutas', 'cocina', 'articulos de auto', 'bebidas', 'gaseosas', 'jugos', 'comida de mascotas', 'comida congelada', 'bocadillos', 'comida entera', 'reposteria');

$decorator = new BookCategoriaDecorator($datosBook);
$iniciarDecorator = new BookPrimeraLetraMayuscula($decorator);
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
        <title>Store</title>
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
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
    </head>

    <body>
        <!-- header -->
        <div class="agileits_header">
            <div class="w3l_offers">
                <!--<a href="products.html">Las Mejores Ofertas !</a>-->


                <h4><a href="index.html"><span>Los Patrones</span> Market</a></h4>
                <!--<div class="w3ls_logo_products_left1">
            <ul class="special_items">
              <li><a href="events.html">Events</a><i>/</i></li>
              <li><a href="about.html">About Us</a><i>/</i></li>
              <li><a href="products.html">Best Deals</a><i>/</i></li>
              <li><a href="services.html">Services</a></li>
            </ul>
          </div> 
          <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
              <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
          </div>
          <div class="clearfix"> </div>-->

            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="Product" value="Buscar Productos..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Buscar Productos...';
                            }" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="product_list_header">  
                <form action="#" method="post" class="last">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <input type="submit" name="submit" value="Mis Compras" class="button" />
                    </fieldset>
                </form>
            </div>

            <div class="w3l_header_right1">
                <h2><a href="mail.html">Acerca de..</a></h2>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- hace efento sticky  -->
        <script>
            $(document).ready(function () {
                var navoffeset = $(".agileits_header").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".agileits_header").addClass("fixed");
                    } else {
                        $(".agileits_header").removeClass("fixed");
                    }
                });

            });
        </script>
        <!-- //script-for sticky-nav -->
        <!-- //header -->
        <!-- banner -->
        <br/><hr/>
        <div class="banner">
            <div class="w3l_banner_nav_left">
                <nav class="navbar nav_bottom">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="products.html"><?php $iniciarDecorator->iniciarMayuscula();
echo $decorator->showCategoria1()
?></a></li>
                            <li><a href="household.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria2()
?></a></li>
                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria3()
?><span class="caret"></span></a>        
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>  
                                            <li><a href="vegetables.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria4()
?></a></li>
                                            <li><a href="vegetables.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria5()
?></a></li>
                                        </ul>
                                    </div>                  
                                </div>        
                            </li>
                            <li><a href="kitchen.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria6()
?></a></li>
                            <li><a href="short-codes.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria7()
?></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria8()
?><span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="drinks.html"><?php $iniciarDecorator->iniciarMayuscula();
                                                    echo $decorator->showCategoria9()
?></a></li>
                                            <li><a href="drinks.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria10()
?></a></li>
                                        </ul>
                                    </div>                  
                                </div>  
                            </li>
                            <li><a href="pet.html"><?php $iniciarDecorator->iniciarMayuscula();
                                    echo $decorator->showCategoria11()
?></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $iniciarDecorator->iniciarMayuscula();
                                                    echo $decorator->showCategoria12()
?><span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                    <div class="w3ls_vegetables">
                                        <ul>
                                            <li><a href="frozen.html"><?php $iniciarDecorator->iniciarMayuscula();
                                                    echo $decorator->showCategoria13()
?></a></li>
                                            <li><a href="frozen.html"><?php $iniciarDecorator->iniciarMayuscula();
                                                    echo $decorator->showCategoria14()
?></a></li>
                                        </ul>
                                    </div>                  
                                </div>  
                            </li>
                            <li><a href="bread.html"><?php $iniciarDecorator->iniciarMayuscula();
                                                    echo $decorator->showCategoria15()
?></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="w3l_banner_nav_right">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="w3l_banner_nav_right_banner">
                                    <h3>Make your <span>food</span> with Spicy.</h3>
                                    <div class="more">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l_banner_nav_right_banner1">
                                    <h3>Make your <span>food</span> with Spicy.</h3>
                                    <div class="more">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l_banner_nav_right_banner2">
                                    <h3>upto <i>50%</i> off.</h3>
                                    <div class="more">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- flexSlider SLIDER --> 
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
                <script defer src="js/jquery.flexslider.js"></script>
                <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
                </script>
                <!-- //flexSlider -->
            </div>
        </div>
        <div class="clearfix"> </div>
        <!-- top-brands -->
        <div class="top-brands">
            <div class="container">
                <h3>Hot Offers</h3>
                <div class="agile_top_brands_grids">
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/1.png" /></a>    
                                                <p>fortune sunflower oil</p>
                                                <h4>$7.99 <span>$10.00</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="checkout.html" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                        <input type="hidden" name="amount" value="7.99" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>

                                                </form>

                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        getProduct();
                    </script>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/3.png" /></a>    
                                                <p>basmati rise (5 Kg)</p>
                                                <h4>$11.99 <span>$15.00</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="basmati rise" />
                                                        <input type="hidden" name="amount" value="11.99" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a>
                                                <p>Pepsi soft drink (2 Ltr)</p>
                                                <h4>$8.00 <span>$10.00</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                                        <input type="hidden" name="amount" value="8.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img src="images/4.png" alt=" " class="img-responsive" /></a>
                                                <p>dogs food (4 Kg)</p>
                                                <h4>$9.00 <span>$11.00</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="dogs food" />
                                                        <input type="hidden" name="amount" value="9.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //top-brands -->
        <!-- fresh-vegetables -->


        <!-- //fresh-vegetables -->
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="w3agile_newsletter_left">
                    <h3>sign up for our newsletter</h3>
                </div>
                <div class="w3agile_newsletter_right">
                    <form action="#" method="post">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Email';
                                }" required="">
                        <input type="submit" value="subscribe now">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //newsletter -->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 w3_footer_grid">
                    <h3>information</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="events.html">Events</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="products.html">Best Deals</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="short-codes.html">Short Codes</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>policy info</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="faqs.html">FAQ</a></li>
                        <li><a href="privacy.html">privacy policy</a></li>
                        <li><a href="privacy.html">terms of use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>what in stores</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="pet.html">Pet Food</a></li>
                        <li><a href="frozen.html">Frozen Snacks</a></li>
                        <li><a href="kitchen.html">Kitchen</a></li>
                        <li><a href="products.html">Branded Foods</a></li>
                        <li><a href="household.html">Households</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>twitter posts</h3>
                    <ul class="w3_footer_grid_list1">
                        <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
                                eius modi tempora incidunt ut labore et
                                <a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                        <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
                                eius modi tempora incidunt ut labore et
                                <a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <div class="agile_footer_grids">
                    <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                        <div class="w3_footer_grid_bottom">
                            <h4>100% secure payments</h4>
                            <img src="images/card.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                        <div class="w3_footer_grid_bottom">
                            <h5>connect with us</h5>
                            <ul class="agileits_social_icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree_footer_copy">
                    <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
                            $(document).ready(function () {
                                $(".dropdown").hover(
                                        function () {
                                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                                            $(this).toggleClass('open');
                                        },
                                        function () {
                                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                                            $(this).toggleClass('open');
                                        }
                                );
                            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="js/minicart.js"></script>
        <script>
            paypal.minicart.render();

            paypal.minicart.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });

        </script>
    </body>
</html>
