<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Clientes</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                    <h1 class="fw-bold">Sistema de Registro de Clientes</h1>
                    <p class="text-muted">
                        Administra y consulta la información de los clientes registrados.
                    </p>
                </div>

<?php if (!empty($mensaje)): ?>
    <div class="alert alert-info text-center mb-4">
        <?php echo $mensaje; ?>
    </div>
<?php endif; ?>
<?php if (!empty($mensaje) && $mensaje === "Cliente registrado correctamente."): ?>
<script>
    document.getElementById("formularioCliente").reset();
</script>
<?php endif; ?>
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

                        <button class="btn btn-primary" type="button" id="btnNuevoCliente">
                            <i class="bi bi-person-plus"></i>
                            Nuevo Cliente
                        </button>

                    </div>
                </div>
            </div>
<div class="row justify-content-center mb-5 d-none" id="formularioRegistro">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">
                    <i class="bi bi-person-plus"></i>
                    Registrar nuevo cliente
                </h3>
                <form action="" method="POST" id="formularioCliente">
                    <div class="row">
                        <!-- Nombre -->
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">
                                Nombre
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Ingrese el nombre"
                            >
                        </div>
                        <!-- Apellido -->
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">
                                Apellido
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                id="apellido"
                                name="apellido"
                                placeholder="Ingrese el apellido"
                            >
                        </div>
                    </div>
                    <div class="row">
                        <!-- Correo -->
                        <div class="col-md-6 mb-3">
                            <label for="correo" class="form-label">
                                Correo electrónico
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                id="correo"
                                name="correo"
                                placeholder="ejemplo@correo.com"
                            >
                        </div>
                        <!-- Teléfono -->
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="form-label">
                                Teléfono
                            </label>
                            <input  type="text" class="form-control"   id="telefono"   name="telefono" placeholder="0999999999"  >
                        </div>
                    </div>
                    <div class="row">
                        <!-- Edad -->
                        <div class="col-md-6 mb-3">
                            <label for="edad" class="form-label">
                                Edad
                            </label>
                            <input  type="number"  class="form-control"  id="edad" name="edad"   placeholder="Ingrese la edad"  >
                        </div>
                    </div>
                    <!-- Botones -->
                    <div class="text-center mt-3">
                        <button
                            type="submit"
                            class="btn btn-primary px-4" >
                            Registrar cliente
                        </button>
                        <button
                            type="reset"
                            class="btn btn-secondary px-4">
                            Limpiar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            <!-- Consultar clientes -->
            <!-- Consultar clientes -->
            <div class="col-md-10 mb-4">
                <div class="card shadow">
                    <div class="card-body">

                        <h3 class="card-title text-center mb-4">
                            Clientes registrados
                        </h3>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Edad</th>
                                        <th>Fecha de registro</th>
                                    </tr>
                                </thead>

                                <tbody>

                                   <?php if (isset($clientes) && $clientes && $clientes->num_rows > 0): ?>

                                        <?php while ($cliente = $clientes->fetch_assoc()): ?>

                                            <tr>
                                                <td><?php echo $cliente['id']; ?></td>
                                                <td><?php echo $cliente['nombre']; ?></td>
                                                <td><?php echo $cliente['apellido']; ?></td>
                                                <td><?php echo $cliente['correo']; ?></td>
                                                <td><?php echo $cliente['telefono']; ?></td>
                                                <td><?php echo $cliente['edad']; ?></td>
                                                <td><?php echo $cliente['fecha_registro']; ?></td>
                                            </tr>

                                        <?php endwhile; ?>

                                    <?php else: ?>

                                        <tr>
                                            <td colspan="7" class="text-center">
                                                No existen clientes registrados.
                                            </td>
                                        </tr>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>

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
    
     <script src="public/js/validaciones.js"></script>
</body>
</html>