<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function trojkat($a, $b, $c){

    if (($a+$b>$c) && ($a+$c>$b) && ($b+$c>$a))
    {
      if (($a*$a+$b*$b==$c*$c) || ($a*$a+$c*$c==$b*$b) || ($c*$c+$b*$b==$a*$a)) echo "Jest to trójkąt prostokątny";
      else echo "To nie jest trójkąt prostokątny";
    }
    else echo "Nie można zbudować trójkąta";
}

    echo trojkat(3,4,5), '<br/>';
    echo trojkat(5,2,3), '<br/>';
    echo trojkat(4,5,8);

    ?>
    
</body>
</html>