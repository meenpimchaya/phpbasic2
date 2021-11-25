<?php
$a = "Hello";
echo ($a);
echo("<br>");
$b = "ตรวจสอบเกรดของคุณ";
echo ($b);
echo("<br");

$total = 65;
if($total >= "80") {
    echo "Grand A";
    }elseif ($total >= "70"){
    echo "Grand B";
    }elseif ($total >= "60"){
    echo "Grand C";
    }elseif ($total >= "50"){
    echo "Grand D";
    }else {
    echo "Grand F";
    }

echo("<br>");
$username = "Pimchaya";
$password = "123";

    if ($username == "Pimchaya" && $password == "123") {
        echo "Login succeeded.";
    }else {
        echo "Please input password again.";
    }

    ?>