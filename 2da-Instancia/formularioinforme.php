<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 2px solid black; width: 300px; text-align: center;">
        mes <select name="mes" id="mes">
            <option value="enero">enero</option>
            <option value="febreero">febrero</option>
            <option value="marzo">marzo</option>
            <option value="abril">abril</option>
            <option value="mayo">mayo</option>
            <option value="junio">junio</option>
            <option value="julio">julio</option>
            <option value="agosto">agosto</option>
            <option value="septiembre">septiembre</option>
            <option value="octubre">octubre</option>
            <option value="noviembre">noviembre</option>
            <option value="diciembre">diciembre</option>
        </select>
        <br>
        <label for="materia" id="SIS256">SIS256</label>
        <input type="number" id="porcentaje256">
        <br>
        <label for="materia" id="SIS258">SIS258</label>
        <input type="number" id="porcentaje258">
        <br>
        <label for="materia" id="SIS406">SIS406</label>
        <input type="number" id="porcentaje406">
        <br>
        <button onclick="javascript:informe()">Registrar</button>
    </div>
    <script src="java.js"></script>
</body>
</html>