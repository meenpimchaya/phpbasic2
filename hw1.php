<?php

    $a=1;
    $b=1;
    if ($a = $b){
        echo "Hello";
    }

    echo("<br>");
    if($a>=$b){
        echo "Happy";
    }else {
        echo "Sad";
    }

    echo("<br>");
    if($a>$b){
        echo "Wow!";
    }elseif($a<$b) {
        echo "Yahoo!";
    }else{
        echo "hahaha";
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <litle></litle>
    </head>
    </body>
    <center>
        <?php

date_default_timezone_set("Asia");
        echo date('H');
        ?>
    </center>
    </body>
</html>