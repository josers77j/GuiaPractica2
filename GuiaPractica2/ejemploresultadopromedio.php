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
         <h2>Se requiere un programa que sume N cantidad de números y mu
             estre el promedio de ellos.</h2>
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
                // for ($i = 1; $i <= $cantidad_numeros; $i++) {
                //     # pedir el dato con js
                //     $numero = $_POST["numero" . $i];
                //     echo $numero . "<br>";
                //     #usar el acumulador para sumar
                //     $total = $total + $numero;
                // }
                $i = 1;
                // while ($i <= $cantidad_numeros) {
                //     $numero = $_POST["numero" . $i];
                //     echo $numero . "<br>";
                //     $total = $total + $numero;
                //     $i++;
                // }

                do {
                    $numero = $_POST["numero" . $i];
                    echo $numero . "<br>";
                    $total = $total + $numero;
                    $i++;
                } while ($i <= $cantidad_numeros);

                $promedio = $total / $cantidad_numeros;
                echo "<h1>El promedio es: " . $promedio . "</h1>";
            }
            ?>
     </body>
 </body>

 </html>