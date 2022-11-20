<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Sumar y promediar con FOR</title>
</head>

<body>

    <body>
        <h2>Se requiere un programa que sume N cantidad de números y m
            uestre el promedio de ellos.</h2>
        <hr>
        <h3>Ingrese la cantidad de números</h3>
        <form action="suma_promedio.php" method="post">
            <label for="cantidad">Cantidad: </label>
            <input type="text" name="cantidad" id="cantidad">
            <hr>
            <input type="submit" value="Calcular promedio">
        </form>

        <?php
        //si $_POST["tipo"] tiene valor se enviaron los datos
        if (isset($_POST["cantidad"])) {
            # tomar los datos enviados
            $cantidad_numeros = $_POST["cantidad"];

            echo '<hr><h3>Ingrese los datos requeridos</h3><form action="ejemploresultadopromedio.php" method="post"><input type="hidden" name="cantidad_numeros" value="' . $cantidad_numeros . '">';

            // construir el cuerpo del formulario

            //ciclo for
            // for ($i = 1; $i <= $cantidad_numeros; $i++) {
            //     echo '<label for="numero' . $i . '">Número ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '"><hr>';
            // }


            //while
            $i = 1;
            // while ($i <= $cantidad_numeros) {
            //     echo '<label for="numero' . $i . '">Número ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '"><hr>';
            //     $i++;
            // }

            //do while
            do {
                echo '<label for="numero' . $i . '">Número ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '"><hr>';
                $i++;
            } while ($i <= $cantidad_numeros);
            echo '<input type="submit" value="Calcular promedio"></form>';
        }
        ?>
        
    </body>
</body>

</html>