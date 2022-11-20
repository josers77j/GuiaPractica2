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
    <h2>  Se requiere determinar, de N cantidades, cuántas son menores o 
iguales a cero y cuántas mayores a cero.</h2>
        <hr>
        <h3>Ingrese el numero de personas</h3>
        <form action="ejercicio4.php" method="post">
            <label for="cantidad">Cantidad: </label>
            <input type="text" name="cantidad" id="cantidad">
            <hr>
            <input type="submit" value="Obtener campos">
        </form>

        <?php
        //si $_POST["tipo"] tiene valor se enviaron los datos
        if (isset($_POST["cantidad"])) {
            # tomar los datos enviados
            $cantidad_numeros = $_POST["cantidad"];

            echo '<hr><h3>Ingrese los datos requeridos</h3><form action="ejercicio4_resultado.php" method="post"><input type="hidden" name="cantidad_numeros" value="' . $cantidad_numeros . '">';

            // construir el cuerpo del formulario

            //ciclo for
            for ($i = 1; $i <= $cantidad_numeros; $i++) {
                echo '<label for="numero' . $i . '">numero ' . $i . ': </label><input type="text" name="numero' . $i . '" id="numero' . $i . '"><hr>';
            }
            echo '<input type="submit" value="Calcular promedio"></form>';
        }
        ?>

    </div>
        
    
</body>

</html>