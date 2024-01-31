const tiempoInactividad = 1800;

let temporizadorInactividad;

function reiniciarTemporizador() {
    clearTimeout(temporizadorInactividad);
    temporizadorInactividad = setTimeout(function() {
        // Redirigir a la página PHP cuando el usuario está inactivo
        window.location.href = './core/logout.php';
    }, tiempoInactividad * 1000); // Convertir segundos a milisegundos
}

// Agregar eventos para reiniciar el temporizador cuando hay actividad
document.addEventListener('mousemove', reiniciarTemporizador);
document.addEventListener('keydown', reiniciarTemporizador);

// Iniciar el temporizador cuando la página se carga
reiniciarTemporizador();