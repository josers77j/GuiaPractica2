
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
            Se requiere determinar cuánto ahorrará una persona en un año, si al
            final de cada mes deposita variables cantidades de dinero; además,
            se requiere saber cuánto lleva ahorrado cada mes.
        </h2>
        <hr>
        <?php

        $cantidad_numeros = 12;

        echo '<hr><h3>Ingrese los datos requeridos</h3><form action="ejercicio3_resultado.php" method="post"><input type="hidden" name="cantidad_numeros" value="' . $cantidad_numeros . '">';

        for ($i = 1; $i <= $cantidad_numeros; $i++) {
            echo '<label for="persona' . $i . '">persona ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '"><hr>';
        }
        echo '<input type="submit" value="Calcular promedio"></form>';
        ?>
</body>

</html>