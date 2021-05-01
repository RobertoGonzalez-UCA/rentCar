<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>rentCar</title>
</head>

<style>
</style>
<body>

    <div id="container">
        
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="img/rentcar.png" alt="Coche Logo">
                <a href="index.php">
                    rentCar
                </a>
            </div>
        </header>

        
        <!-- MENÚ -->
        <nav id="menu">
            <ul>
                
                <li> <a href="">Inicio</a> </li>
                <li> <a href="">Audi</a> </li>
                <li> <a href="">BMW</a> </li>
                <li> <a href="">Mercedes</a> </li>
                <li> <a href=""></a> </li>
                <li> <a href="">Range Rover</a> </li>
            </ul>
        </nav>

        <div id="content">
            <!-- BARRA LATERAL -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Menú</h3>
                    <ul>
                        <li>Bienvenid@ {{ $LoggedUserInfo->name }}{{$LoggedUserInfo->surname}}, tu email es: {{$LoggedUserInfo->email }}</li>
                        <li><a href="#">Coches disponibles</a></li>
                        <li><a href="#">Fechas disponibles</a></li>
                        <li><a href="#">Otras funcionalidades</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <!-- CONTENIDO CENTRAL -->
            <div id="central">
                <h1>Más solicitados</h1>
                <div class="product">
                    <img src="img/a3.jpeg" alt="">
                    <h2>Audi A3</h2>
                    <p>100€/día</p>
                    <a href="" class="button">Alquilar</a>
                </div>
                <div class="product">
                    <img src="img/bmw_cla.jpg" alt="">
                    <h2>Mercedes CLA</h2>
                    <p>150€/día</p>
                    <a href="" class="button">Alquilar</a>
                </div>
            </div>
        </div>

        
    </div>

        <!-- PIÉ DE PÁGINA -->
        <footer id="footer">
            <div>
                <p class="p-center">Desarrollado por:</p> <br> 
                <p class="p-left">► Rafael Rodríguez Calvente 
                </p>
                <p class="p-left">► Roberto González Álvarez 
                </p>
                <p class="p-left">► Juan Carlos Camacho Carribero 
                </p>
                <br>
                <p class="p-center">
                &copy; 
                <?= date('Y'); ?>
                </p>
                
            </div>

        </footer>
</body>
</html>