<!DOCTYPE html>
<html lang="es-Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANZAMIENTO DE DADOS</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
    <?php
    // 3 NUMEROS AL AZAR 
    $num1 = random_int(1, 6);
    $num2 = random_int(1, 6);
    $num3 = random_int(1, 6);

    // $dado1 = $_POST['DADO1'];



    $list = array($num1, $num2, $num3);

    $count = 0;

    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] == 6) {
            $count++;
        }
    }

    ?>

    <div class="container">
        <!-- <form action="E1.php" method="post" class="">
            <div class="col-4">
                <input type="submit" class="btn btn-primary mb-3" value="LANZAR DADOS">
            </div>
            <?php echo "cable" ?>
        </form> -->
        
            <div class="row">
                <div class="col-3">
                    <h4>DADO 1 : <?php echo $num1 ?></h4>
                </div>
                <div class="col-3">
                    <h4>DADO 2 : <?php echo $num2 ?></h4>
                </div>
                <div class="col-3">
                    <h4>DADO 3 : <?php echo $num3 ?></h4>
                </div>
            </div>

            <h2>
                <?php
                if ($count == 3) :
                    echo "ORO";
                elseif ($count == 2) :
                    echo "PLATA";
                elseif ($count == 1) :
                    echo "BRONCE";
                else :
                    echo "PERDIO";
                endif;
                ?>
            </h2>
    </div>


</body>

</html>