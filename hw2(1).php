<?php
#1
    echo (" <br>");
    $birthYear = 2543;
    echo "ปีเกิดของนักกีฬา : $birthYear <br>";

    $currentYear = 2564;
    echo "ปีพ.ศ.ปัจจุบัน : $currentYear <br>";

    $age = $currentYear-$birthYear ;
    echo "อายุของนักกีฬา : $age <br>";

    if($age > 0){
        echo "กีฬารุ่นที่ 1<br>";
    }elseif($age > 20 && $age < 30){
        echo "กีฬารุ่นที่ 2<br>";
    }else{
        echo "กีฬารุ่นที่ 3<br>";
    }
    
    #2
    echo (" <br>");
    $A1 = 20;
    $A2 = 20;
    $A3 = 20;
    $A4 = 20;
    $total = $A1 + $A2 + $A3 + $A4;
    echo "คะแนนสอบทั้งหมด : $total คะแนน<br>";
    switch($total){
        case ($A1 > 25);
            echo "ครั้งที่1 มีคะแนนเกินนะคะ <br>";
            break;
        case ($A2 > 25);
            echo "ครั้งที่ 2 มีคะแนนเกินนะคะ <br>";
            break;
        case ($A3 > 25);
            echo "ครั้งที่3 มีคะแนนเกินนะคะ<br>";
            break;
        case ($A4 > 25);
            echo "ครั้งที่4 มีคะแนนเกินนะคะ <br>";
            break;
        case ($total >= 80 && $total <= 100 );
            echo "เกรด A นะคะ <br>";
            break;
        case ($total >= 75 && $total <= 79 );
            echo "เกรด B+ นะคะ <br>";
            break;
        case ($total >= 70 && $total <= 74 );
            echo "เกรด B นะคะ <br>";
            break;
        case ($total >= 65 && $total <= 69 );
            echo "เกรด C+ นะคะ <br>";
            break;
        case ($total >= 60 && $total <= 64 );
            echo "เกรด C นะคะ <br>";
            break;
        case ($total >= 55 && $total <= 59 );
            echo "เกรด D+ นะคะ <br>";
            break;
        case ($total >= 50 && $total <= 54 );
            echo "เกรด D นะคะ <br>";
            break;
        case ($total < 50);
            echo "เกรด F นะคะ <br>";
            break;
    }

    #3
    echo (" <br>");
    echo("for loop <br>");
        for($x = 1 ; $x <= 15 ; $x++){
        echo "จะเริ่มอีก : $x <br>";
        }

    #4
    echo (" <br>");
    echo("while loop <br>");
    $x=1;
    while($x<=15){
        echo "เดินหน้า : $x <br>";
        $x++;
    }

    #5
    echo (" <br>");
    echo("do while loop <br>");
    $y=0;
    do{
        echo "เพิ่มขึ้นทีละ : $y <br>";
        $y+=5; 
    }while($y<=15);

    #6
    echo (" <br>");
    echo("Continue <br>");
    for($a=0;$a<=15;$a++){
        if ($a == 2){
            continue;
        }
        echo "ตัวไหนหายไป : $a <br>";
    }

    #7
    echo (" <br>");
    echo("Break <br>");
    for($b=1;$b<10;$b++){
        if ($b == 8){
            break;
        }
        echo "ตัวสุดท้ายคือ : $b <br>";
    }
?>