<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barsa Inmuebles</title>
    <link rel="shortcut icon" href="..\BackEnd\Recursos\logo.png" />
    <link rel="stylesheet" href="..\BackEnd\estilos\estilos.css">

</head>

<body>
    <div class="barra">

        <ul>
            <img style="padding-top: 1%;" src="..\BackEnd\Recursos\logo.png">
            <li style="padding-left: 40%;"><a href="Index.php">Inicio</a></li>
            <li><a href="..\FrontEnd\somos.php">¿Quienes somos?</a></li>
            <li>
                <a onclick="mostrar()" href="#">Propiedades</a>
                
                <ul class="submenu" id="sub1">
                    <li>
                        <a href="#" onclick="mo()">Venta</a>
                        <script type="text/javascript">
                            function mo() {
                                var submenu = document.getElementById('sub2');
                                if (submenu.style.display == 'none') {
                                    submenu.style.display = 'block';
                                } else {
                                    submenu.style.display = 'none';
                                }
                            }
                        </script>
                        <ul class="submenu2" id="sub2">
                            <li><a href="#">Casas</a></li>
                            <li><a href="#">Departamentos</a></li>
                            <li><a href="#">Locales</a></li>
                            <li><a href="#">Oficinas</a></li>
                            <li><a href="#">Terreno</a></li>
                            <li><a href="#">Traspaso</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="mo2()">Renta</a>
                        <script type="text/javascript">
                            function mo2() {
                                var submenu = document.getElementById('sub3');
                                if (submenu.style.display == 'none') {
                                    submenu.style.display = 'block';
                                } else {
                                    submenu.style.display = 'none';
                                }
                            }
                        </script>
                        <ul class="submenu2" id="sub3">
                            <li><a href="#">Casas</a></li>
                            <li><a href="#">Departamentos</a></li>
                            <li><a href="#">Locales</a></li>
                            <li><a href="#">Oficinas</a></li>
                            <li><a href="#">Terreno</a></li>
                            <li><a href="#">Traspaso</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="..\FrontEnd\contacto.php">Contacto</a></li>
        </ul>
    </div>
    
</body>

</html>