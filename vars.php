<?php
    function postParam($value){
        if (!empty($_POST['$value'])) {
            return $_POST['$value'];
        }
    }

    $firstName = postParam('firstName');
    $lastName = postParam('lastName');
    $pass = postParam('password');

    $firstName = "dafef";
    $lastName = "fesf";
    $pass = "sgsg"
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>testing</title>
</html>
<body>
    <form method="post">
        <input type="text" name="firstName" value="<?php echo $firstName ?>"><br><br>
        <input type="text" name="lastName" value="<?php echo $lastName ?>"><br><br>
        <input type="text" name="password" value="<?php echo $pass ?>"><br><br>
        <input type="submit" name="submit" value="Log in">
    </form>
</body>