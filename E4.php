<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE DIVISAS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <?php

    if ($_POST) {


        $limiteDolares = 500;

        $nombre = $_POST['txtnombre'];
        $tipoDivisa = $_POST['cbotipo'];
        $cantidad = $_POST['txtcantidad'];
        $resultado = 0;

        switch ($tipoDivisa) {
            case "SOLES":
                $resultado = round($cantidad / 3.85, 2);
                break;
            case "PESOS":
                $resultado = round($cantidad / 21, 2);
                break;
            default:
                break;
        }
    }
    ?>

    <div class="container">
        <form action="E4.php" method="post" class="row">

            <div class="mb-3 col-3">
                <label for="exampleFormControlInput3" class="form-label">NOMBRE</label>
                <input type="text" class="form-control nombre" id="exampleFormControlInput3" placeholder="EJEMPLO: CARLOS" name="txtnombre">
            </div>


            <div class="mb-3 col-3">
                <label for="exampleFormControlInput1" class="form-label">TIPO</label>
                <select class="form-select form-select-lg mb-3" aria-label="form-select-lg example" name="cbotipo">
                    <option value="SOLES" selected>SOLES</option>
                    <option value="PESOS">PESOS MEXICANOS</option>
                </select>
            </div>

            <div class="mb-3 col-4">
                <label for="exampleFormControlInput1" class="form-label">CANTIDAD</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Cantidad" name="txtcantidad">
            </div>


            <input type="submit" value="CALCULAR" class="btn btn-primary ">

        </form>
        <hr>
        <div class="mb-3 col-6 text-primary">
            <?php
            if ($resultado < 500 && $cantidad > 0) {
                echo  "<h1> DETALLES </h1>";
                echo  "<h3>NOMBRE: $nombre</h3>";
                echo  "<h3>TIPO DE DIVISA ENVIADA: $tipoDivisa </h3>";
                echo  "<h3>CANTIDAD EN " . (($tipoDivisa == "soles") ? "SOLES" : "PESOS") . ": $cantidad </h3>";
                echo  "<h3>CANTIDAD EN DOLARES: $ $resultado </h3>";
            } else {
                echo "<h3> NO SE PUEDE ENVIAR MAS DE 500 DOLARES NI ENVIAR VALORES NEGATIVOS</h3>";
            }

            ?>
        </div>

    </div>

</body>

</html>