# Sistema de Registro de Clientes

## Descripción del proyecto

El Sistema de Registro de Clientes es una aplicación web desarrollada como parte de la actividad integradora de Programación de Sistemas Web.

El proyecto permite registrar y consultar información de clientes mediante una interfaz web.

La aplicación será desarrollada utilizando PHP, MySQL, HTML5, CSS3 y JavaScript, aplicando una estructura basada en el patrón MVC (Modelo - Vista - Controlador).

## Objetivo

Desarrollar una aplicación web que permita almacenar y consultar información de clientes en una base de datos MySQL, manteniendo una correcta separación entre la interfaz, la lógica de procesamiento y el acceso a los datos.

## Tecnologías utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- Bootstrap
- Git
- GitHub

## Arquitectura MVC

El proyecto utiliza una estructura basada en el patrón MVC:

### Modelo

Los modelos serán responsables de realizar las operaciones relacionadas con la base de datos MySQL.

Entre sus funciones estarán:

- Insertar clientes.
- Consultar clientes.
- Ejecutar operaciones sobre la base de datos.

### Vista

Las vistas serán responsables de mostrar la información al usuario.

Incluirán:

- Formularios.
- Tablas.
- Botones.
- Mensajes.
- Elementos de navegación.

### Controlador

Los controladores serán responsables de recibir las acciones realizadas por el usuario y coordinar la comunicación entre las vistas y los modelos.

## Flujo de funcionamiento

La aplicación seguirá el siguiente flujo:

Vista → Controlador → Modelo → Base de datos

Cuando el usuario registre un cliente:

1. El usuario completa el formulario.
2. JavaScript valida la información.
3. La vista envía los datos al controlador.
4. El controlador procesa la solicitud.
5. El modelo realiza la operación en MySQL.
6. La información queda almacenada en la base de datos.
7. La vista muestra el resultado al usuario.

## Estructura del proyecto

```text
integradora/
│
├── config/
│   └── database.php
│
├── controllers/
│   └── ClienteController.php
│
├── models/
│   └── Cliente.php
│
├── views/
│   ├── clientes/
│   │   ├── crear.php
│   │   └── listar.php
│   │
│   └── layouts/
│       └── header.php
│
├── public/
│   ├── css/
│   │   └── style.css
│   │
│   └── js/
│       └── validaciones.js
│
├── index.php
│
└── integradora.sql