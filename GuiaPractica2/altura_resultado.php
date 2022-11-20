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
        <h2> Se requiere obtener la estatura promedio de un grupo de personas,
            cuyo número de miembros se desconoce, el ciclo debe efectuarse
            siempre y cuando se tenga una estatura registrada.</h2>
        <hr>
        <h3>NÚMEROS</h3>
        <?php
        $promedio = 0.0;
        //si $_POST["tipo"] tiene valor, se enviaron los datos
        if (isset($_POST["cantidad_numeros"])) {
            # tomar los datos enviados
            $cantidad_numeros = $_POST["cantidad_numeros"];

            //inicializar el acumulador en 0
            $total = 0.0;
            // repetir el proceso de la suma
            for ($i = 1; $i <= $cantidad_numeros; $i++) {
                # pedir el dato con js
                $numero = $_POST["numero" . $i];
                echo $numero . "<br>";
                #usar el acumulador para sumar
                $total = $total + $numero;
            }
          
            $promedio = $total / $cantidad_numeros;
            echo "<h1>El promedio es: " . round($promedio,2) . "</h1>";
        }
        ?>
        </div>
        
    </body>

</html>