<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>
            Una empresa tiene el registro de las horas que trabaja diariamente un
            empleado durante la semana (seis días) y requiere determinar el total
            de éstas, así como el sueldo que recibirá por las horas trabajadas.
        </h2>
        <hr>
        <?php

        $cantidad_numeros = 6;

        echo '<hr><h3>Ingrese los datos requeridos</h3><form action="ejercicio5_resultado.php" method="post"><input type="hidden" name="cantidad_numeros" value="' . $cantidad_numeros . '">';
        echo '<label for ="pago">Cantidad de pago por horas </label> <input type="numeric" name="pago" id="pago" placeholder="escriba el pago por hora"><br><br>';
        for ($i = 1; $i <= $cantidad_numeros; $i++) {
            echo '<label for="dias' . $i . '">dia ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '" placeholder="escriba las horas del dia ' . $i . '"><hr>';
        }
        echo '<input type="submit" value="Calcular promedio"></form>';
        ?>
</body>

</html>