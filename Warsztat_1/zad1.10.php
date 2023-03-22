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
    function gwiazdki($gw){
    
    // drukowanie 1 czesci wzoru
    for($i=1; $i<=$gw; $i++) {
        for($j=1; $j<=$i; $j++) # petla drukujaca spacje
        {
        echo '*';
        }
        echo '<br>';
        }
    // drukowanie 2 czesci wzoru
    for($i=1; $i<=$gw; $i++) {
        for($j=3; $j>=$i; $j--) # petla drukujaca spacje
        {
        echo '*';
        }
        echo '<br>';
        }
    // drukowanie 3 czesci wzoru    
    for($i=1; $i<=$gw; $i++) {
        for($j=1; $j<$i; $j++) # petla drukujaca spacje
        {
        echo '&nbsp;&nbsp;'; # &nbsp - spacja nielamliwa
        }
            for($k=3; $k>=$i; $k--) #petla drukujaca gwiazdki
            {
            echo '*';
            }
            echo '<br>';
            }
    // drukowanie 4 czesci wzoru       
    for($i=1; $i<=$gw; $i++) {
        for($j=$gw; $j>$i; $j--)  # petla drukujaca spacje
            {
            echo '&nbsp;&nbsp;';
            }
        for($k=1; $k<=$i; $k++)  # petla drukujaca gwiazdki
            {
            echo '*';
            }
            echo '<br>';
            }
    }

    gwiazdki(3);

    ?>   
</body>
</html>