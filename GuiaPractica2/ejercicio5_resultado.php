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
        if (isset($_POST["cantidad_numeros"])) {
            $pago = $_POST["pago"];
            $cantidad_numeros = $_POST["cantidad_numeros"];
            $horas_totales = 0;
            $pago_total = 0;
            $c =1;
            do {
                $numero = $_POST["numero" . $c];
                $horas_totales = $horas_totales + $numero;
               $pago_total = $horas_totales * $pago;
                
               $c++;
            } while ($c <= $cantidad_numeros);
            
            echo $horas_totales;
            echo '<br>';
            echo $pago_total;
        }
        ?>
    </div>

</body>

</html>