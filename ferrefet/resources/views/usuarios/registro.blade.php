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

    <div class="grow">
        <div class="container">
            <h2>REGISTRO DE USUARIOS</h2>
        </div>
    </div>
    <!-- grow -->
    <!--content-->
    <div class=" container">
        <div class=" register">

            <form action="#" method="post">
                <div class="col-md-6 register-top-grid">
                    <h3>INFORMACION PERSONAL</h3>
                    <div>
                        <span>Primer Nombre</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Segundo Nombre</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Correo</span>
                        <input type="text">
                    </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" checked=""><i> </i>Iniciar con el boletin
                            informativo</label>
                    </a>
                </div>
                <div class="col-md-6 register-bottom-grid">
                    <h3>INFORMACION DE LA CUENTA</h3>
                    <div>
                        <span>Contraseña</span>
                        <input type="password">
                    </div>
                    <div>
                        <span>Confirmar contraseña</span>
                        <input type="password">
                    </div>
                    <input type="submit" value="Guardar">

                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
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
