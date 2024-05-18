<?php
require_once "./db_connection.php";
$head="This is heading h1";
$name="Kowshik";
$email="kowshik@test.com";
$pass="1122";
$query= "INSERT INTO userinfo(name, email, password) VALUES ('$name','$email','$pass')";
mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="custom">
        <?php echo $head; ?>
    </h1>
        <?php echo "<h6>HI</h6>"; ?>


    <?php
    echo "<table style=\"border:1px solid black;\"> <tr> <td>";
    for ($i=0; $i<=10;$i++ ){
    echo " <tr> <td style=\"border:1px solid black;\">";
    echo "Table Data $i";
    echo "</td> </tr> ";
}
    echo " </table>";
    ?>
</body>
</html>

1. Form to database data insert
