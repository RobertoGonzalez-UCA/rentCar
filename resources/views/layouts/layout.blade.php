<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <li> <a href="/brand/audi"><img src="\img\logos\audi-logo.svg" width="35" height="35"></a></li>
                <li> <a href="/brand/bmw"><img src="\img\logos\bmw-logo.svg" width="35" height="35"></a></a></li>
                <li> <a href="/brand/mercedes"><img src="\img\logos\mercedes-logo.svg" width="35" height="35"></a></a></li>
                <li> <a href="/brand/volkswagen"><img src="\img\logos\volkswaguen-logo.svg" width="35" height="35"></a></li>  
                <li> <a href="/brand/kawasaki">Kawasaki</a></a></li>  
                <li> <a href="/brand/yamaha">Yamaha</a></a></li>  
            </ul>
        </nav>
        <div id="content">
            <!-- ASIDE -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Menú</h3>
                    <ul>
                    
                        <li class="main-menu"><a href="/type/car">Coches</a></li>
                        <li class="main-menu"><a href="/type/motorbike">Motos</a></li>
                        <li class="main-menu"><a href="/type/truck">Camiones</a></li>
                        <li class="main-menu"> <a href="/list">Mis alquileres</a></li>
                        
                        @if(isset($isAdminMenu))
                            @if($isAdminMenu)
                                <li><a href="/create_form/ad">Crear anuncio</a></li>
                                <li><a href="/update/ad">Modificar anuncios</a></li>
                                <li><a href="/delete_form/ad">Borrar anuncio</a></li>
                                <script>
                                    let $li = document.getElementsByClassName("main-menu");
                                    let i;
                                    for (i = 0; i < $li.length; i++) {
                                        $li[i].style.display = 'none';
                                    }
                                    
                                </script>
                            @endif       
                        @endif

                        @if(isset($isAdmin))
                            @if($isAdmin)
                                <li><a href="/admin">Gestionar Alquileres</a></li>
                            @endif
                        @endif
                        
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <!-- CENTER CONTENT -->
            @yield('content')
        </div>

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