<!DOCTYPE html>
<html>

<head>
    <title>FERRE-FET</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".memenu").memenu();
        });
    </script>
    <script src="js/simpleCart.min.js"> </script>
</head>

<body>

    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form action="#" method="post">
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search"
                                    id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>

                    <!-- search-scripts -->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                    <!-- //search-scripts -->

                    <div class="ca-r">
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3>
                                    <div class="total">
                                        <span class="simpleCart_total"></span>
                                    </div>
                                    <img src="images/cart.png" alt="" />
                                </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Carrito</a></p>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="logo">
                    <h1><a href="{{ url('home') }}">FERREFET</a></h1>
                </div>
                <div class=" h_menu4">
                    <ul class="memenu skyblue">
                        <li><a class="color8" href="{{ url('home') }}">FERRE-FET</a></li>
                        <li><a class="color1" href="#">CATEGORIAS</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <ul>
                                                <li><a href="{{ url('hogar') }}">PARA EL HOGAR</a></li>
                                                <li><a href="{{ url('negocio') }}">PARA TU NEGOCIO</a></li>
                                                <li><a href="{{ url('trabajo') }}">PARA EL TRABAJO</a></li>
                                                <li><a href="{{ url('electronico') }}">ELECTRONICOS</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        </li>
                        <li><a class="color4" href="{{ url('loguin') }}">LOGUIN</a></li>
                        <li><a class="color6" href="{{ url('contacto') }}">CONTACTENOS</a></li>
                    </ul>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <script src="js/responsiveslides.min.js"></script>
            <script>
                $(function() {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>

                        <div class="banner-text">
                            <h3>En FERRE-FET </h3>
                            <p>Encontraras todo tipo de articulos para tu trabajo, hogar y sobre todo de muy alta
                                calidad</p>

                        </div>

                    </li>
                    <li>

                        <div class="banner-text">
                            <h3>LA MEJOR TECNOLOGIA </h3>
                            <p>Las mejores marcas para tus productos las encuentras en FERRE-FET, bajo una garantia de
                                hasta 1 año</p>


                        </div>

                    </li>
                    <li>
                        <div class="banner-text">
                            <h3>LOS MEJORES ESPECIALISTAS</h3>
                            <p>Contamos con los mejores especialistas a la hora de atendente y ofrecerte asesoria, solo
                                en FERRE-FET</p>


                        </div>

                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--content-->
    <div class="container">
        <div class="cont">
            <div class="content">
                <div class="content-top-bottom">
                    <h2>NUESTROS PRODUCTOS</h2>
                    <div class="col-md-6 men">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive"
                                src="images/t1.jpg" alt="">
                            <div class="b-wrapper">
                                <h3 class="b-animate b-from-top top-in   b-delay03 ">
                                    <span>PARA EL HOGAR</span>
                                </h3>
                            </div>
                        </a>


                    </div>
                    <div class="col-md-6">
                        <div class="col-md1 ">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                    class="img-responsive" src="images/t2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-top top-in1   b-delay03 ">
                                        <span>PARA TU NEGOCIO</span>
                                    </h3>
                                </div>
                            </a>

                        </div>
                        <div class="col-md2">
                            <div class="col-md-6 men1">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                        class="img-responsive" src="images/tra.jpg" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                            <span>PARA EL TRABAJO</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            <div class="col-md-6 men2">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                        class="img-responsive" src="images/elec.jpg" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                            <span>ELECTRONICOS</span>
                                        </h3>
                                    </div>
                                </a>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="content-top">
                    <h1>ALGUNOS DE NUESTROS PRODUCTOS</h1>
                    <div class="grid-in">
                        <div class="col-md-3 grid-top simpleCart_shelfItem">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                    class="img-responsive" src="images/pi.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>PRODUCTO 1</span>

                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">PPRODUCTO 1</a></p>
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                        <div class="col-md-3 grid-top simpleCart_shelfItem">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                    class="img-responsive" src="images/pro3.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>PRODUCTO 1</span>
                                    </h3>
                                </div>
                            </a>
                            <p><a href="single.html">PRODUCTO 2</a></p>
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                        <div class="col-md-3 grid-top simpleCart_shelfItem">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                    class="img-responsive" src="images/pro2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>PRODUCTO 2</span>
                                    </h3>
                                </div>
                            </a>
                            <p><a href="single.html">PRODUCTO 3</a></p>
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                        <div class="col-md-3 grid-top">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img
                                    class="img-responsive" src="images/pro1.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>PRODUCTO 3</span>
                                    </h3>
                                </div>
                            </a>
                            <p><a href="single.html">PRODUCTO 4</a></p>
                            <a href="#" class="item_add">
                                <p class="number item_price"><i> </i>$500.00</p>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!----->
        </div>
        <!---->
    </div>
    <div class="footer w3layouts">
        <div class="container">
            <div class="footer-top-at w3">

                <div class="col-md-3 amet-sed w3l">
                    <h4>MAS INFORMACION</h4>
                </div>
                <div class="col-md-3 amet-sed w3ls">
                    <h4>cCATEGORIAS</h4>
                    <ul class="nav-bottom">
                        <li><a href="#">PARA EL HOGAR</a></li>
                        <li><a href="#">PARA EL NEGOCIO</a></li>
                        <li><a href="#">PATRA EL TRABAJO</a></li>
                        <li><a href="#">ELECTRONICOS</a></li>
                    </ul>

                </div>
                <div class="col-md-3 amet-sed agileits">
                    <h4>BOLETIN INFORMATIVO</h4>
                    <div class="stay agileinfo">
                        <div class="stay-left wthree">
                            <form action="#" method="post">
                                <input type="text" placeholder="Escriba su correo " required="">
                            </form>
                        </div>
                        <div class="btn-1 w3-agileits">
                            <form action="#" method="post">
                                <input type="submit" value="Subscribirse">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <div class="col-md-3 amet-sed agileits-w3layouts">
                    <h4>CONTACTENOS</h4>
                    <p>BRAYAN FERNANDO LIZCANO</p>
                    <p>NEIVA-HUILA</p>
                    <p>TELEFONO: 3208642117</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>

</html>
