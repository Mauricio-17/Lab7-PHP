<!DOCTYPE html>
<html lang="es-Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 3 NUMEROS AL AZAR 
    $num1 = random_int(1, 6);
    $num2 = random_int(1, 6);
    $num3 = random_int(1, 6);
    $list = array($num1, $num2, $num3);

    $count = 0;

    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] == 6) {
            $count++;
        }
    }

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

</body>

</html>