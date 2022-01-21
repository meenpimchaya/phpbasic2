<!DOCTYPE html>
<html>
<style type="text/css">
input[type=number] {
    width: 50px;
    text-align: center;
}
</style>
<body>
<?php if(!$_POST) { ?>
<form method="post" action="">
    คู่ที่ 1 : <input type="number" name="k1_n1" required />
           <input type="number" name="k1_n2" required /><br>
    คู่ที่ 2 : <input type="number" name="k2_n1" required />
           <input type="number" name="k2_n2" required /><br>
    คู่ที่ 3 : <input type="number" name="k3_n1" required />
           <input type="number" name="k3_n2" required /><br>
  <input type="submit">
</form>
<?php } ?>
<?php
if(($_POST)) {
    echo "<b>ข้อมูล</b><br>";
    $kn[1][1] = isset($_POST["k1_n1"]) ? $_POST["k1_n1"] : 0;
    $kn[1][2] = isset($_POST["k1_n2"]) ? $_POST["k1_n2"] : 0;
    $kn[2][1] = isset($_POST["k2_n1"]) ? $_POST["k2_n1"] : 0;
    $kn[2][2] = isset($_POST["k2_n2"]) ? $_POST["k2_n2"] : 0;
    $kn[3][1] = isset($_POST["k3_n1"]) ? $_POST["k3_n1"] : 0;
    $kn[3][2] = isset($_POST["k3_n2"]) ? $_POST["k3_n2"] : 0;

    $k[1] = $kn[1][1] + $kn[1][2];
    $k[2] = $kn[2][1] + $kn[2][2];
    $k[3] = $kn[3][1] + $kn[3][2];

    for($i=1;$i<=3;$i++) {
        echo "คู่ที่ $i : ";
        for($j=1;$j<=2;$j++) {
            echo $kn[$i][$j];
            if($j==1) { echo " + "; }
        }
        echo " = ".$k[$i];
        echo "<br>";
    }
    echo "----------------------------------<br>";
    echo "<b>คู่ที่บวกกันได้มากที่สุดคือ</b><br>";
    echo "คู่ที่ ".array_search(max($k), $k).
         " บวกกันได้เท่ากับ ".max($k)."<br>";
    echo "----------------------------------<br>";
    echo "<b>คู่ที่บวกกันได้น้อยที่สุดคือ</b><br>";
    echo "คู่ที่ ".array_search(min($k), $k).
         " บวกกันได้เท่ากับ ".min($k);
}
?>
</body>
</html>