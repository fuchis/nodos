<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <style>
            .active{
                text-decoration: none;
                color: green;
            }
            a:link{
                text-decoration: none;
            }

            .error{
                color: red;
                font-size: 12px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <header>
            <?php function activeMenu($url){
                return request()->is($url) ? 'active' : '';
            } ?>
            <nav>
                <a class="{{activeMenu('/')}}" href="{{route("home")}}">
                    <img src="/descarga.jpg" alt="">
                </a>
                <a class="{{activeMenu('users.index')}}" href="{{route("users.index")}}">Usuarios</a>
                {{-- <a class="{{activeMenu('registro')}}" href="{{route("registro")}}">Registro</a> --}}
                <a href="">Cerrar Sesión</a>
            </nav>
        </header>
        @yield('contenido')
        <footer>Copyright {{ date('Y')}}</footer>
    </body>
</html>
