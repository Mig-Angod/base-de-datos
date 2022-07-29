function pregunta1(){
    fetch('listar.php',{
        method:'GET'
    })
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function ordenar(campo) {
    fetch("listar.php?orden=" + campo)
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function formeditar(id)
{
    
    fetch("form_editar.php?id=" + id,{
        method:'GET'
    })
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
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
    .then(data => resultado.innerHTML=data)
    .catch(error => console.log(error));
}
function pregunta2(){
    document.getElementById('resultado').innerHTML = "Pregunta 2 DOM en Javascrip";
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "sumas.html", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}
function obtener(){
    var numero=document.getElementById('numero').value;
    var html="";
    var acum1=0;
    for (var i =1; i<=numero;i++){
        html+=`<input type="text" value=${i}></br>`;
        acum1+=i;
    }
    html+=`<button onclick="sumar(${acum1})">+</button>`;
    document.getElementById('contenido').innerHTML=html;
}
function sumar(acum1){
    document.getElementById('resultado').innerHTML=acum1;
}