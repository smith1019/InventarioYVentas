const formulario = document.querySelector('form');

formulario.addEventListener('submit', (evento)=>{
    const correo = document.getElementById('correo').value;
    const contrasena = document.getElementById('contrasena').value;

    if (correo.trim() === '' || contrasena.trim() === '') {
        evento.preventDefault();
        alert('Por favor completa todos los campos.');
    }

})