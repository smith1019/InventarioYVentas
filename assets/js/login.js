const formulario = document.querySelector('form');

formulario.addEventListener('submit', (evento)=>{
    const correo = document.getElementById('correo').value;
    const contraseña = document.getElementById('contraseña').value;

    if (correo.trim() === '' || contraseña.trim() === '') {
        evento.preventDefault();
        alert('Por favor completa todos los campos.');
    }

})