<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Clientes</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                Sistema de Registro de Clientes
            </span>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container py-5">

        <!-- Encabezado -->
        <div class="text-center mb-5">
            <h1>Registro de Clientes</h1>
            <p class="text-muted">
                Sistema web desarrollado con PHP, MySQL y MVC
            </p>
        </div>

        <!-- Tarjetas principales -->
        <div class="row justify-content-center">

            <!-- Registrar cliente -->
            <div class="col-md-5 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body text-center">

                        <h3 class="card-title">
                            Registrar Cliente
                        </h3>

                        <p class="card-text">
                            Permite ingresar la información de nuevos clientes.
                        </p>

                        <button class="btn btn-primary">
                            Nuevo Cliente
                        </button>

                    </div>
                </div>
            </div>

            <!-- Consultar clientes -->
            <div class="col-md-5 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body text-center">

                        <h3 class="card-title">
                            Consultar Clientes
                        </h3>

                        <p class="card-text">
                            Permite consultar los clientes registrados en el sistema.
                        </p>

                        <button class="btn btn-outline-primary">
                            Ver Clientes
                        </button>

                    </div>
                </div>
            </div>

        </div>

    </main>

    <!-- Pie de página -->
    <footer class="bg-light text-center py-3">
        <p class="mb-0">
            Actividad Integradora 3 - Programación de Sistemas Web
        </p>
    </footer>

</body>
</html>