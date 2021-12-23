<?php
// array [Ex.1]
$cars=array("Volvo","BMW","Toyota","Honda");
echo "I like" . $cars[0] . "," . $cars[1] . "and"
. $cars[2] . ".";
echo ("<br>");
echo "I like $cars[0] , $cars[1] and $cars[2] .";
echo "<br>";
for ($i=0;$i<count($cars);$i++){
    echo ("$cars[$i]<br>");
}

//Multidimensional Arrays [EX.2]
$cars1 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

//Sort Array [Ex.3]
sort($cars);
for ($i=0;$i<count($cars);$i++){
    echo ("$cars[$i]<br>");
}
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
for ($i=0;$i<count($numbers);$i++){
    echo ("$numbers[$i] ,");
}

//Sort [Ex.4]
echo "<br>";
$color = array("เขียว","ดำ","แดง");
sort($color);

for($i = 0; $i < count($color); $i++) {
echo $color[$i];
echo "<br>";
}
//rsort
echo "<br>";
$color = array("เขียว","ดำ","แดง");
rsort($color);

for($i = 0; $i < count($color); $i++) {
echo $color[$i];
echo "<br>";
}
//asort
echo "<br>";
$color = array("เขียว"=>"1", "ดำ"=>"2", "แดง"=>"3");
asort($color);

foreach($color as $i => $i_value) {
echo "สี=" . $i . ", ค่า=" . $i_value;
echo "<br>";
}
//ksort
echo "<br>";
$color = array("เขียว"=>"1", "ดำ"=>"2", "แดง"=>"3");
ksort($color);

foreach($color as $i => $i_value) {
echo "สี=" . $i . ", ค่า=" . $i_value;
echo "<br>";
}
//arsort
echo "<br>";
$color = array("เขียว"=>"1", "ดำ"=>"2", "แดง"=>"3");
arsort($color);

foreach($color as $i => $i_value) {
echo "สี=" . $i . ", ค่า=" . $i_value;
echo "<br>";
}
//krsort
echo "<br>";
$color = array("เขียว"=>"1", "ดำ"=>"2", "แดง"=>"3");
krsort($color);

foreach($color as $i => $i_value) {
echo "สี=" . $i . ", ค่า=" . $i_value;
echo "<br>";
}
?>