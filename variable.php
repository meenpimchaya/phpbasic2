<?php
    print("hello");
    print("hello");
    print("hello");
    print("hello");
    echo("hello");
    $name = "pimchaya";
    $age = 21;
    $relation = true;
    echo ($name);
    define("PROVINCE","Bangkok");
    echo PROVINCE;
    echo("<br>");
    define ("SALARY",15000);
    echo SALARY;
    echo("<br>");
    $a=1;
    $b=1.0;
    
    if ($a === $b){
        echo ('true');
    }else{
        echo ('false');
    }

    
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <! -- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <litle>variable</litle>
    </header>
    <body>
        <?php
            print("<h1>hello</h1>");
        ?>
    </body>
</html>