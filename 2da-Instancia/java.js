function inicio(){
    fetch('alumno.php')
        .then(response => response.text())
        .then(data => contenido.innerHTML = data)
        .catch(error => console.log(error));
}
function pregunta3(){
    var materia=document.getElementById('materia').value;
    console.log(materia);
    fetch("editar.php ?materia=" + materia)
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function calificar(){
    var id =document.getElementById('id').innerHTML;
    var nota=parseInt(document.getElementById('nota').value);
    fetch("calificar.php ?id=" + id + "&nota="+nota)
    .then(response => response.text())
    .then(data => contenido.innerHTML=data)
    .catch(error => console.log(error));
}
function introducirdatos(){
    var html="";
    html=`
    <div style="display: grid;
    align-content: center;
    justify-content: center; width: 300px">
    <div id="dato"></div>
    <input type="text" id="txtnumero">
    <button onclick="javascript:sumatoria()"> acumular</button>
</div>`;
document.getElementById('contenido').innerHTML=html;
}
function sumatoria(){
    var numero=document.getElementById('dato').innerHTML;
    var datos=parseInt( document.getElementById('txtnumero').value);
    console.log(numero);
    console.log(datos);
    var acum=datos+numero;
    document.getElementById('dato').innerHTML=acum;
}
function pregunta5(){
    var ajax = new XMLHttpRequest() 
	ajax.open("get", "formularioinforme.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenido.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}
function informe(){
    var mes=document.getElementById('mes').value;
    var s1=parseInt(document.getElementById('porcentaje256').value);
    var s2=parseInt(document.getElementById('porcentaje258').value);
    var s3=parseInt(document.getElementById('porcentaje406').value);
    html="";
    html=`<select name="materia" id="materia">
    <option value="SIS256">SIS256</option>
    <option value="SIS258">SIS258</option>
    <option value="SIS406">SIS406</option>
</select>`;
    fetch("informe.php ?mes=" + mes + "&p1="+s1+"&p2="+s2+"&p3="+s3)
    .then(response => response.text())
    .then(data => contenido.innerHTML=html)
    .catch(error => console.log(error));
}