<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ConversorPHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="#A7CFEE">
    <h1><center>Conversor de Temperatura</center></h1>
    <br>
    <br>
    <form action="conversor.php" method="post">
        <lable for="tipoConversao"><center> Tipo de conversão: 
            <select id="op" name="tipoTemp">
                <option value="1">ºC → ºF</option>
                <option value="2">ºF → ºC</option>
            </center></select>
        </lable><br><br>
        <label for="temperatura">Temperatura:</label>
        <input type="number" name="temp">
        <input type="submit">
        <style>
            h1{
                color: #4988B8;
            }
        </style>
    </form>
</body>
</html>