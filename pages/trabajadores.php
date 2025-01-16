<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css" as="style">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

    <header class="hero">
        <h1 class="titulo">TE<span>ACOMPAÑO</span></h1>
    </header>
    
    <nav id="nav" class="navegacion-principal">
        <a href="../index.php">INICIO</a>
        <a href="pacientes.php">Pacientes</a>
        <a href="trabajadores.php">Trabajadores</a>
        <a href="AdministrarPagos.php">Administrar pagos</a>
        <a href="AdministrarTurnos.php">Administrar turnos</a>
    </nav>

    <hr>

    <main class="logistica">
        <section class="agregar">
            <div class="imagen1">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /></svg>
                </svg>
            </div>
            <button onclick="window.location.href='agregarTrabajador.php'" type="submit">Agregar Trabajador</button>
        </section>

        <section class="eliminar">
            <div class="imagen2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="40" height="40" stroke-width="1.5">
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                    <path d="M22 22l-5 -5"></path>
                    <path d="M17 22l5 -5"></path>
                </svg>
            </div>
            <button onclick="window.location.href='eliminarTrabajador.php'" type="submit">Eliminar Trabajador</button>
        </section>

        <section class="buscar">
            <div class="imagen3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="40" height="40" stroke-width="1.5">
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
            </div>
            <button onclick="window.location.href='busquedaTrabajador.php'" type="submit">Buscar Trabajador</button>
        </section>


       
    </main>

    <footer class="footer">
        <p>&copy; 2025 - Sistema de Gestión</p>
    </footer>

    <script src="js/scripts.js"></script>



</body>
</html>
