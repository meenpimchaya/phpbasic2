<?php
$username =$_GET['username'];
$password =$_GET['password'];
?>

<!DOCTYPE html>
<html lang="en">
<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>ส่งข้อมูล get</title>
</header>
<body>
    <h1>ส่งข้อมูล Form(get)</h1>
        <form action = "getform.php" method="GET">
            Username : <input type="text" name="username"><br>
            Password : <input type="password" name="password"><br>
            <input type="submit" value="login"><br>
            <input type="reset" value="reset"><br>
        </form>

    </body>
</html>
<?php
if(isset($username)){
    echo "$username <br>";
    echo "$password <br>";
} else {
    echo "ไม่มีข้อมูล";
}
?>
[14:32]
==============
[14:32]
<?php
$username =$_POST['username'];
$password =$_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>ส่งข้อมูล post</title>
</header>
<body>
    <h1>ส่งข้อมูล Form(post)</h1>
        <form action = "postform.php" method="POST">
            Username : <input type="text" name="username"><br>
            Password : <input type="password" name="password"><br>
            <input type="submit" value="login"><br>
            <input type="reset" value="reset"><br>
        </form>

    </body>
</html>
<?php
if(isset($username)){
    echo "$username <br>";
    echo "$password <br>";
} else {
    echo "ไม่มีข้อมูล";
}
?>