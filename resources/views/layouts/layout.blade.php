<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>rentCar</title>
</head>

<style>
</style>
<body>

    <div id="container">
        
        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="../img/rentcar.png" alt="Coche Logo">
                <a href="/menu">
                    rentCar
                </a>
            </div>
        </header>

        
        <!-- MENU -->
        <nav id="menu">
            <ul>
                
                <li> <a href="/menu">Inicio</a> </li>
                <li> <a href="/brand/audi">Audi</a> </li>
                <li> <a href="/brand/bmw">BMW</a> </li>
                <li> <a href="/brand/mercedes">Mercedes</a> </li>
                <li> <a href="/brand/range_rover">Range Rover</a> </li>  
            </ul>
        </nav>
        <div id="content">
            <!-- ASIDE -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Menú</h3>
                    <ul>
                        <li><a href="/type/car">Coches</a></li>
                        <li><a href="/type/motorbike">Motos</a></li>
                        <li><a href="/type/truck">Camiones</a></li>
                        <li><a href="#">Fechas disponibles</a></li>
                        <li><a href="#">Otras funcionalidades</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <!-- CENTER CONTENT -->
            @yield('content')

        <!-- FOOTER -->
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