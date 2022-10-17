<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>PROMEDIO DE NOTAS</h1>
        <form class="row" action="E2.php" method="post">
            <div class="col-4 my-2">
                <input type="number" class="form-control " name="nota1" placeholder="NOTA 1">
            </div>
            <div class="col-4 my-2">
                <input type="number" class="form-control " name="nota2" placeholder="NOTA 2">
            </div>
            <div class="col-4 my-2">
                <input type="number" class="form-control " name="nota3" placeholder="NOTA 1">
            </div>
            <div class="col-4 my-2">
                <input type="submit" class="btn btn-primary " value="CALCULAR">
            </div>

        </form>
        <hr>
        <h3> 
            PROMEDIO:
            <br>
            <?php
            if ($_POST) {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];

                $promedio = $nota1 + $nota2 + $nota3;
                $promedio = round($promedio / 3, 2);

                echo "$promedio ";

                if ($promedio <= 8) :
                    echo "ALUMNO INSUFICIENTE";
                elseif ($promedio <= 12) :
                    echo "ALUMNO PARA RECUPERACIÓN";
                elseif ($promedio <= 15) :
                    echo "ALUMNO REGULAR";
                elseif ($promedio <= 17) :
                    echo "ALUMNO BUENO";
                else :
                    echo "ALUMNO EXCELENTE";
                endif;
            }

            ?>
        </h3>
    </div>

</body>

</html>