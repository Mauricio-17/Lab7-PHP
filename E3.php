<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA DE COMPUTO</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <div class="container mx-10">
        <form action="E3.php" method="post" class="row">
            <div class="mb-3 col-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre del artículo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="PC" name="txtnombre">
            </div>
            <div class="mb-3 col-3">
                <label for="exampleFormControlInput2" class="form-label">Precio</label>
                <input type="number" class="form-control" id="exampleFormControlInput2" name="txtprecio">
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">PLAN</label>
                <select class="form-select mb-3" aria-label="Default select example" name="cboplan">
                    <option value="plan1" selected>PLAN 1</option>
                    <option value="plan2">PLAN 2</option>
                    <option value="plan3">PLAN 3</option>
                    <option value="plan4">PLAN 4</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary mb-3 col-4">CALCULAR</button>

        </form>

        <?php

        if ($_POST) {

            // class Venta
            // {
            //     public $nombre;
            //     public $precio;
            //     public $cuotas;
            //     public $plan;
            //     public $montoFinal;
            //     public $precioCuota;
            //     public $porcentaje;

            //     function __construct()
            //     {
            //     }
            // }

            $nombre = $_POST['txtnombre'] ;
            $precio = $_POST['txtprecio'] ;
            $contado = 0;
            $porcentaje = 0.0;
            $plan = $_POST['cboplan'] ;
            $montoFinal = 0;
            $cuotas = 0;

            //PLANES :: DA ERROR
            // function primerPlan()
            // {
            //     $porcentaje = 0.1;
            //     $descuento = $precio * $porcentaje;
            //     $montoFinal = $precio - $descuento;

            //     echo "<h5>Nombre del Producto: $nombre</h5>";
            //     echo "<h5># Cuotas: $cuotas </h5>";
            //     echo "<h5>Precio de Lista: $precio </h5>";
            //     echo "<h5>Pago contado: $montoFinal </h5>";
            // }
            // function segundoPlan()
            // {
            // }
            // function tercerPlan()
            // {
            // }
            // function cuartoPlan()
            // {
            // }
        }



        ?>
        <hr>
        <div class="row">
            <div class="col-4 mx-auto text-primary">
                <?php
                echo "<h2>FACTURA</h2>";
                if ($_POST) {
                    switch ($plan) {
                        case "plan1":
                            $porcentaje = 0.1;
                            $descuento = $precio * $porcentaje;
                            $montoFinal = $precio - $descuento;

                            echo "<h5>Nombre del Producto: $nombre</h5>";
                            echo "<h5># Cuotas: $cuotas </h5>";
                            echo "<h5>Precio de Lista: $ $precio </h5>";
                            echo "<h5>Pago contado: $ $montoFinal </h5>";
                            break;
                        case "plan2":
                            $cuotas = 3;
                            $porcentaje = 0.1;
                            $aumento = $precio * $porcentaje;
                            $montoFinal = $precio + $aumento;
                            $contado = round(($montoFinal * 0.5), 2);
                            $restoAPagar = round(($montoFinal - $contado) / ($cuotas - 1), 2);

                            echo "<h5>Nombre del Producto: $nombre</h5>";
                            echo "<h5># Cuotas: $cuotas </h5>";
                            echo "<h5>Precio de Lista: $ $montoFinal </h5>";
                            echo "<h5>1° CUOTA: $ $contado </h5>";
                            echo "<h5> " . ($cuotas - 1) . " CUOTAS: $ $restoAPagar </h5>";

                            break;
                        case "plan3":
                            $cuotas = 4;
                            $porcentaje = 0.15;
                            $aumento = $precio * $porcentaje;
                            $montoFinal = $precio + $aumento;
                            $contado = round(($montoFinal * 0.25), 2);
                            $restoAPagar = round(($montoFinal - $contado) / ($cuotas - 1), 2);

                            echo "<h5>Nombre del Producto: $nombre</h5>";
                            echo "<h5># Cuotas: $cuotas </h5>";
                            echo "<h5>Precio de Lista: $ $montoFinal </h5>";
                            echo "<h5>1° CUOTA: $ $contado </h5>";
                            echo "<h5> " . ($cuotas - 1) . " CUOTAS: $ $restoAPagar </h5>";
                            break;
                        case "plan4":
                            $cuotas = 8;
                            $porcentaje = 0.25;
                            $aumento = $precio * $porcentaje;
                            $montoFinal = $precio + $aumento;
                            $primeras4 = round(($montoFinal * 0.60), 2);
                            $segundas4 = round(($montoFinal - $primeras4), 2);

                            echo "<h5>Nombre del Producto: $nombre</h5>";
                            echo "<h5># Cuotas: $cuotas </h5>";
                            echo "<h5>Precio de Lista: $ $montoFinal </h5>";
                            echo "<h5>4 PRIMERAS CUOTAS: $ " . (round($primeras4 / 2, 2)) . " </h5>";
                            echo "<h5>4 SEGUNDAS CUOTAS: $ " . (round($segundas4 / 2, 2)) . " </h5>";
                            break;
                            break;
                        default:
                            echo "";
                            break;
                    }
                }


                ?>
            </div>
        </div>
    </div>


</body>

</html>