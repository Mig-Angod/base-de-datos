function inicio(){
    document.getElementById('titulo1').innerHTML="Inicio";
    fetch('alumno.php')
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}
function seleccion1(){
    document.getElementById('titulo2').innerHTML="SIS256";
    document.getElementById('SIS256').style.backgroundColor='gray';
    document.getElementById('SIS258').style.backgroundColor='white';
    document.getElementById('SIS406').style.backgroundColor='white';
}
function seleccion2(){    
    document.getElementById('titulo2').innerHTML="SIS258";
    document.getElementById('SIS256').style.backgroundColor='white';
    document.getElementById('SIS258').style.backgroundColor='gray';
    document.getElementById('SIS406').style.backgroundColor='white';
}
function seleccion3(){
    document.getElementById('titulo2').innerHTML="SIS406";
    document.getElementById('SIS256').style.backgroundColor='white';
    document.getElementById('SIS258').style.backgroundColor='white';
    document.getElementById('SIS406').style.backgroundColor='gray';
}
function lista(){
    document.getElementById('titulo1').innerHTML="Lista";
    var html="";
    html=`
    <label for="cuadros">Nro de cuadros</label><br>
    <div style="display: grid;
    align-content: center;
    justify-content: center; width: 300px">
        <input type="number" name="numero" id="numero">
        <br>
        <button onclick="obtener()">obtener</button>
    </div>`;
document.getElementById('contenido').innerHTML = html;
}
function obtener(){
    var numero = parseInt(document.getElementById('numero').value);
    document.getElementById('contenido').innerHTML = numero;
}
function horarios(){
    document.getElementById('titulo1').innerHTML="Horarios";
    //var parametros = "SIS258";
    var parametros=document.getElementById('titulo2').innerHTML;
    console.log(parametros);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "horarios.php ?materia=" + parametros, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}
function calificaciones(){
    document.getElementById('titulo1').innerHTML="Calificaciones";
    var parametros=document.getElementById('titulo2').innerHTML;
    fetch("editarcalificaciones.php ?materia=" + parametros)
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function informes(){
    document.getElementById('titulo').innerHTML="Informes";
}