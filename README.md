#  💠Scripts importados en el proyecto

Estos son los scripts importados en el proyecto para que sea correcta su funcionalidad.


## 🔺Bootstrap 4.6

### Descripción:
  Bootstrap es un marco de diseño (framework) front-end de código abierto que proporciona herramientas y estilos para el desarrollo web rápido y fácil.

### Funcionalidad:
  Facilita la creación de páginas web responsivas y atractivas mediante el uso de un conjunto de componentes predefinidos (como botones, formularios, navegación, etc.) y un sistema de rejilla flexible.

  
## 🔺 jQuery 3.5.1

### Descripción:
  jQuery es una biblioteca de JavaScript rápida y liviana.

### Funcionalidad:
  Simplifica la manipulación del DOM (Document Object Model) y la interacción con el usuario. Facilita tareas como animaciones, manipulación de eventos, peticiones AJAX, y otros aspectos que, en   JavaScript puro, podrían ser más complejos y verbosos.

  
## 🔺FontAwesome 5

### Descripción:
  Font Awesome es una biblioteca de iconos vectoriales (basados en fuentes) que puedes utilizar en tus proyectos web.

### Funcionalidad:
  Proporciona una amplia variedad de iconos listos para usar en formato de fuente o SVG. Font Awesome 5 es una versión actualizada que ofrece una colección extensa de iconos y funcionalidades adicionales, como la capacidad de personalizar tamaños, colores y estilos.

  
## 🔺TimeOut

### Descripción:
  TimeOut está diseñado para gestionar la inactividad del usuario en una página web. Monitorea la actividad del usuario y, si no hay interacción durante un tiempo específico, redirige al usuario a una página PHP para cerrar la sesión.

### Funcionalidad:

-  **Configuración del tiempo de inactividad:** Define la variable 'tiempoInactividad' que representa la cantidad de segundos antes de que se considere al usuario como inactivo.

-  **Temporizador de inactividad:** 'temporizadorInactividad' Variable que almacena el identificador del temporizador. 'reiniciarTemporizador()' Función que reinicia el temporizador cada vez que hay actividad del usuario. Si el temporizador se completa, redirige al usuario a la página PHP de cierre de sesión.

-  **Eventos para reiniciar el temporizador:** Estos eventos se encargan de reiniciar el temporizador cada vez que el usuario realiza una acción del ratón o presiona una tecla, indicando así actividad en la página.

-  **Iniciar el temporizador al cargar la pagina:** Llama a la función 'reiniciarTemporizador()' al cargar la página para iniciar el seguimiento de la inactividad desde el principio.


## 🔺Active

### Descripción: 
  Active se encarga de gestionar la clase 'active' en elementos HTML con la clase `caja-btn`. Al hacer clic en un elemento, se agrega la clase 'active' a ese elemento y se elimina de los demás elementos con la misma clase.

### Funcionalidad:

-  **Esperar a que el documento esté listo:** Utiliza jQuery para asegurarse de que el documento HTML esté completamente cargado antes de ejecutar el código.

-  **Manejo del click en elementos con la clase 'caja-btn':** Cuando se hace click en un elemento con la clase 'caja-btn', se elimina la clase 'active' de todos los elementos con esa clase. Luego, se agrega la clase 'active' solo al elemento que ha sido clicado, indicando visualmente que está activo.


## 🔺validatePW

### Descripción:
  `validatePW.js` es un archivo JavaScript que contiene una función llamada `validatePasswords`. Su objetivo principal es verificar la igualdad entre el texto introducido en los campos de contraseña y repetir contraseña.

### Funcionalidad:

- **Comparación de contraseñas:** La función toma los valores de los campos de contraseña (`password`) y repetir contraseña (`confirmPassword`).

- **Alerta en caso de no coincidencia:** Si las contraseñas no coinciden, se muestra una alerta indicando "Las contraseñas no coinciden".

- **Retorno de valor:** La función retorna `false` si las contraseñas no coinciden y `true` si son iguales.



# 💠 Descripción de archivos PHP en carpeta CORE


## 🔺conn.php

### Descripción:
  Este archivo contiene la configuración esencial para establecer una conexión con la base de datos "usuariosucoi" en PHP.

### Funcionalidad:
-   Establece la configuración de conexión con el servidor MySQL.
-   Crea una instancia de conexión utilizando la clase `mysqli`.
-   Verifica la conexión y muestra un mensaje de error si es fallida.


## 🔺login.php

### Descripción:
  Este archivo incluye todo lo necesario para iniciar sesión en otra página utilizando un usuario y contraseña. La contraseña se cifra con SHA-256, y se manejan caracteres especiales.

### Funcionalidad:
-   Inicia la sesión.
-   Incluye el archivo de conexión (`conn.php`).
-   Obtiene datos del formulario, realiza una consulta preparada para evitar inyección de SQL, y verifica las credenciales del usuario.
-   Si las credenciales son válidas, inicia sesión y redirige a la página principal (`../principal.php`).
-   Si las credenciales son inválidas, redirige a `../core/uci.php`.


## 🔺logout.php

### Descripción:
  Este archivo redirige a la página de inicio (`../index.php`), destruye la sesión activa y borra la cookie de sesión.

### Funcionalidad:
-   Inicia la sesión.
-   Destruye todas las variables de sesión.
-   Borra la cookie de sesión.
-   Destruye la sesión.
-   Redirige a la página de inicio.


## 🔺register.php

### Descripción:
  Este archivo se utiliza para insertar datos en la base de datos "usuariosucoi". La contraseña se cifra con SHA-256.

### Funcionalidad:
-   Verifica si se ha enviado el formulario.
-   Establece la conexión con la base de datos.
-   Obtiene datos del formulario.
-   Inserta datos en la base de datos.
-   Muestra mensajes de éxito o error.


## 🔺sesion.php

### Descripción:
  Este archivo verifica si hay una sesión activa. Si no hay sesión, redirige a la página de inicio de sesión (`index.php`).

### Funcionalidad:
-   Inicia la sesión.
-   Verifica si hay una sesión activa.
-   Si no hay sesión activa, redirige a la página de inicio.


## 🔺uci.php

### Descripción:
  Este archivo se utiliza en caso de que se introduzca incorrectamente el usuario o la contraseña. Muestra un mensaje de error y redirige a `index.php` después de 2 segundos.

### Funcionalidad:
-   Inicia un contador de 2 segundos.
-   Redirige a `index.php` después de 2 segundos.
-   Muestra un mensaje de usuario o contraseña incorrectos.


## 🔺verificarJS.php

### Descripción:
  Este archivo verifica si JavaScript está habilitado. Si lo está, no realiza ninguna acción; de lo contrario, redirige a `jsna.php`.

### Funcionalidad:
-   Verifica si JavaScript está habilitado.
-   Si JavaScript está deshabilitado, redirige a `jsna.php`.


## 🔺jsna.php

### Descripción:
  Este archivo se utiliza cuando JavaScript está deshabilitado. Muestra un mensaje indicando que JavaScript es necesario y redirige a `index.php` después de 5 segundos.

### Funcionalidad:
-   Inicia un contador de 5 segundos.
-   Redirige a `index.php` después de 5 segundos.
-   Muestra un mensaje indicando que JavaScript es necesario.


## 🔺sesionADMIN.php

### Descripción:
  Este archivo se utiliza para verificar si el usuario que intenta registrar nuevos usuarios en la base de datos tiene privilegios de administrador. Si no es un administrador, no podrá crear usuarios y solo tendrá funciones de usuario normal.

### Funcionalidad:
- **Inicio de sesión requerido:** El archivo verifica si hay una sesión activa.
- **Verificación de privilegios:** Se asegura de que el usuario tenga el campo `admin` establecido en 1 para tener privilegios de administrador.
- **Redirección en caso de falta de privilegios:** Si no hay una sesión activa o el usuario no es un administrador, redirige a la página de inicio de sesión (`index.php`).



# 💠 Campos en la base de datos "usuariosucoi" en mysql

## Tabla de usuarios de ejemplo

| id | username | email            | password      | admin |
|----|----------|------------------|---------------|-------|
| 1  | usuario1 | user1@email.com  | ************* | 0     |
| 2  | usuario2admin | user2admin@email.com  | ************* | 1     |
| 3  | usuario3 | user3@email.com  | ************* | 0     |
| 4  | usuario4admin | user4admin@email.com  | ************* | 1     |

## Descripción de campos

- **id:** Es un campo que se autoincrementa a la hora de insertar contenido a la base de datos utilizado para asignar un identificador único a cada usuario creado.

- **username:** Representa el nombre de usuario que se proporciona durante el registro.

- **email:** Corresponde a la dirección de correo electrónico asociada al usuario.

- **password:** Almacena la contraseña cifrada utilizando el algoritmo SHA-256.

- **admin:** Es un campo de tipo TINYINT en MySQL que funciona como una variable booleana. Se utiliza para definir si un usuario es administrador (1) o no (0). Además, en la página de registro, se utiliza para permitir que un usuario administrador pueda crear otros usuarios administradores mediante una casilla de verificación.


# 💠 La base de datos que se utilizará estara en formato SQL en la carpeta de proyecto.

- **Nombre:** usuariosucoi.sql