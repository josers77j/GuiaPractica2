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
        <h2> Se requiere determinar, de N cantidades, cuántas son menores o 
iguales a cero y cuántas mayores a cero.</h2>
        <hr>

        <?php
        $promedio = 0.0;

        if (isset($_POST["cantidad_numeros"])) {

            $cantidad_numeros = $_POST["cantidad_numeros"];


            $totalM=0;
            $totalm=0;
            for ($i = 1; $i <= $cantidad_numeros; $i++) {

                $numero = $_POST["numero" . $i];
                if ($numero > 0) {
                    $totalM++;
                }else {
                    $totalm++;
                }
                
            }
            echo '<p>numeros mayores a cero : ' . $totalM. '</p>';
            echo '<p>numeros menores o iguales a cero : ' . $totalm . '</p>';
                 

        }
        ?>
    </div>

</body>

</html>