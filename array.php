<?php
$cars = array("Volvo","BMW","Toyota","Honda");
echo ($cars[0]);
echo ("<br>");
echo ($cars[1]);
echo ("<br>");
echo ($cars[2]);
echo ("<br>");

for($i=0;$i<count($cars);$i=$i+1){
    echo ($cars[$i]);
    echo ("<br>");
}

?>
<!DOCTYPE html>
<html lang="en"> 
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </header>
    <body>
        <h1>กรอกข้อมูลสมาชิก</h1>
        <form>
            คำนำหน้าชื่อ : <input list="title"><br>
            <datalist id="title">
                <option>นาย</option>
                <option>น.ส.</option>
                <option>นาง</option>
            </datalist>
            ชื่อ : <input type="text" value="xx"> <equired/autofocus><br>
            <label for="male">ชาย</label>
            <input type="radio" name="gender" value="ชาย">
            <label for="Female">หญิง</label>
            <input type="radio" name="gender" value="หญิง"><br>
            รหัสผ่าน : <input type="password" value="" /><br>
            เบอร์โทร : <input type="text" value=""></placeholder="0xx-xxx-xxxx"><br>
            ค้นหา : <input type="search" value="" /><br>
            E-mail : <input type="email" value="" name="email"/><br>
            วันเกิด : <input type="date" value="" /><br>
            เวลาเกิด : <input type="time" value="" /><br>
            อายุ : <input type="number" value="" /><br>
            <select name="education">
                <option value="ปริญญาตรี">ปริญญาตรี</option>
                <option value="ปริญญาโท">ปริญญาโท</option>
            </select><br>
            สีที่ชอบ : <input type="color" value="" /><br>
            <progress value="20" max="100"></progress><br>
            <textarea rows="4" cols="30"
            placeholder="แสดงความเห็น"></textarea><br>
            <input type="checkbox" name="accept" 
            value="yes">ยอมรับเงื่อนไข<br>
            <input type="checkbox" name="subscribe" 
            value="no">ติดตามข่าวสาร<br>
                <input type="submit" value="สมัคร">
                <input type="reset" value="ยกเลิก">

        </form>
    </body>
</html>