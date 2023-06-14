
# README - Login PHP con Base de Datos PhpMyAdmin

Este es el README para el proyecto de Login en PHP, el cual utiliza una base de datos en PhpMyAdmin para autenticar a los usuarios.

## Descripción del proyecto

El proyecto de Login en PHP tiene como objetivo proporcionar un sistema de inicio de sesión seguro y robusto para aplicaciones web. Utiliza PHP para el backend y PhpMyAdmin para la gestión de la base de datos.

## Funcionalidades principales

El proyecto de Login en PHP ofrece las siguientes funcionalidades principales:

1. Registro de usuarios:
   - Permite a los usuarios crear una cuenta proporcionando información como nombre de usuario, correo electrónico y contraseña.
   - Verifica que el correo electrónico no esté previamente registrado en la base de datos.

2. Inicio de sesión:
   - Permite a los usuarios iniciar sesión con su correo electrónico y contraseña.
   - Verifica las credenciales ingresadas con los datos almacenados en la base de datos.

3. Protección de contraseñas:
   - Utiliza técnicas de hash y salting para almacenar las contraseñas de forma segura en la base de datos.
   - Verifica las contraseñas ingresadas al iniciar sesión.

4. Gestión de sesiones:
   - Mantiene la sesión del usuario activa mientras navega por la aplicación.
   - Permite cerrar sesión para finalizar la sesión actual.

5. Seguridad:
   - Implementa medidas de seguridad como protección contra ataques de inyección SQL y XSS (cross-site scripting).
   - Realiza validaciones de entrada para evitar datos maliciosos o incorrectos.

## Requisitos del sistema

Para ejecutar el proyecto de Login en PHP, se requiere lo siguiente:

- Un servidor web con soporte para PHP (por ejemplo, Apache o Nginx).
- PhpMyAdmin o un servidor de base de datos MySQL/MariaDB para gestionar la base de datos.

## Configuración del proyecto

Sigue estos pasos para configurar el proyecto:

1. Clona o descarga el repositorio del proyecto.
2. Configura la conexión a la base de datos en el archivo de configuración.
3. Importa el archivo SQL proporcionado en el repositorio en tu PhpMyAdmin para crear la estructura de la base de datos y los usuarios de prueba.
4. Configura la ruta y el acceso a la base de datos en los archivos relevantes.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar en el desarrollo del proyecto de Login en PHP, sigue estos pasos:

1. Realiza un fork del repositorio.
2. Crea una rama con un nombre descriptivo para tu contribución.
3. Realiza los cambios y mejoras en tu rama.
4. Envía un pull request para revisar tus cambios.

## Autores

El proyecto de Login en PHP fue desarrollado por:

- Luis Fernando Ramirez Rivas - Desarrollador principal - https://github.com/Fernando-droidx/php-login

