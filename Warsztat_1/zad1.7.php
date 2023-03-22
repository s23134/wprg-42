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
        function month($number){

        switch($number)
        {
            case 1:
            echo("Styczeń - 31 dni");
            break;

            case 2:
            echo("Luty - 28 dni");
            break;
            
            case 3:
            echo("Marzec - 31 dni");
            break;

            case 4:
            echo("Kwiecień - 30 dni");
            break;

            case 5:
            echo("Maj - 31 dni");
            break;

            case 6:
            echo("Czerwiec - 30 dni");
            break;

            case 7:
            echo("Lipiec - 31 dni");
            break;

            case 8:
            echo("Sierpień - 31 dni");
            break;

            case 9:
            echo("Wrzesień - 30 dni");
            break;

            case 10:
            echo("Październik - 31 dni");
            break;

            case 11:
            echo("Listopad - 30 dni");
            break;

            case 12:
            echo("Grudzień - 31 dni");
            break;

            default:
            echo "BŁĄD";
            break;
            
        }
    }
            
    
    echo month(1), '<br/>';
    echo month(5), '<br/>';
    echo month(7), '<br/>';
    echo month(10), '<br/>';
    echo month(15), '<br/>';
    

    ?>
</body>
</html>