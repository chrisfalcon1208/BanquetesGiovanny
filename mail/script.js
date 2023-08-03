const evento = document.getElementById('send')
const enviarformulario =() => {
    let nombre = document.getElementById('name').value;
    let correo = document.getElementById('email').value;
    let telefono = document.getElementById('number').value;
    let eventob = document.getElementById('tipoeve').value;
    let ubicacion = document.getElementById('ubication').value;
    let paquete = document.getElementById('packageb').value;
    let fecha = document.getElementById('date').value;
    let invitacion = document.getElementById('invitation').value;
    let asunto = document.getElementById('subject').value;
    let mensaje = document.getElementById('message').value;
    let numero = 529971188317;

    var win= window.open(`https://wa.me/${numero}?text=Hola%20vengo%20del%20sitio%20web:%20Banquetes%20Giovanny,%20Asunto:%20${asunto},%20Nombre:%20${nombre},%20Correo:%20${correo},%20Tel%C3%A9fono:%20${telefono},%20Tipo%20de%20evento:%20${eventob},%20Ubicaci%C3%B3n%20del%20evento:%20${ubicacion},%20Paquete%20a%20solicitar:%20${paquete},%20Fecha%20del%20evento:%20${fecha},%20N%C3%BAmero%20de%20invitados:%20${invitacion},%20Comentarios:%20${mensaje}`,'_blank');
    
}

evento.addEventListener('click', enviarformulario);

