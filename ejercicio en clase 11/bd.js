function autenticar() {
            let datos = new FormData();
        datos.append("correoelectronico", correoelectronico.value);
        datos.append("password", password.value);
        fetch('autenticar.php', {
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
            .then(({ success }) => {
                if (success === 1) {
                    location.href = 'menu.html';
                } else {
                    mensaje.innerHTML="datos incorrectos";
                }
            });
}

function cargar(url) {
    fetch(url,{
        method:'GET'
    })
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}

function ordenar(campo) {
    fetch("listar.php?orden=" + campo)
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}
function buscar() {
    var buscar = document.getElementById("buscar").value;
    fetch("listar.php?buscar=" + buscar)
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}
function insertar() {
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);
    fetch('insertar.php',{
        method:'POST',
        body:parametros
    })
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}
function formeditar(id)
{
    fetch("form_editar.php?id=" + id,{
        method:'GET'
    })
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));

}
function editar()
{
    var formulario=document.getElementById("form-editar");
    var parametros = new FormData(formulario);
    fetch('editar.php',{
        method:'POST',
        body:parametros
    })
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}
function eliminar(id)
{
    fetch("eliminar.php?id=" + id)
    .then(response => response.text())
    .then(data => operacion.innerHTML=data)
    .catch(error => console.log(error));
}