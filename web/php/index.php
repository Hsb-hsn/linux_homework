<!DOCTYPE html>
<html>
<head>
  <title>PHP & MySQL Website</title>
</head>
<body background="images/bg.png" style="background-repeat:no-repeat background-attachment:fixed;background-size:100% 130%;text-align:center; ">

<?php require_once 'db_config.php'; ?>

<?php


// 处理表单提交的数据插入
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 连接数据库
    //require 'db_config.php';

    // 获取表单提交的数据
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

    // 插入数据到数据库
    $sql = "INSERT INTO users (name, age, email, phonenumber) VALUES ('$name', '$age','$email','$phonenumber')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<h2>Insert Data into Database</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    Email: <input type="text" name="email"><br>
    phonenumber: <input type="text" name="phonenumber"><br>
    <input type="submit" value="Submit">
</form>

<h2>Display</h2>
<?php
// 查询数据库中的数据并显示
$result = mysqli_query($conn, "SELECT * FROM users");
echo "<ul>";
while ($row = mysqli_fetch_array($result)) {
    echo "<li>" . $row['name'] . " - " . $row['age'] . " - " . $row['email'] . " - " . $row['phonenumber'] ."</li>";
}
echo "</ul>";

// 关闭数据库连接
mysqli_close($conn);
?>
</body>
</html>
