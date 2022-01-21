<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mid3</title>
</head>
<body>
    <form action="" method="post">
    ค่านํ้า : <input type="number" name="pay" min="1" minlength="10" maxlength="10" placeholder="Number only">
    <br><br>
    <button type="submit"> ค่าน้ำ </button>
    </form>
    <?php
    error_reporting(0);//ปิด error
    $a = $_POST["pay"] ;
    if (($a>=1) && ($a<=50)) { 
        $b = $a * 4.25 ;
        echo "<br>" ;
        echo "ค่านํ้า = $b" ;
    }
    else if (($a>=51) && ($a<=100)) { 
        $b = $a * 3.25 ;
        echo "<br>" ;
        echo "ค่านํ้า =$b" ;
    }
    else { 
        $b = $a * 2.25 ;
        echo "<br>" ;
        echo "ค่านํ้า =$b" ;
    }
    ?>