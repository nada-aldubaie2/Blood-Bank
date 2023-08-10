
<?php
include("connection.php");

if ($_POST) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = @mysqli_query($con, "SELECT * FROM usersignin WHERE name='$name' AND password='$password'");

    if (mysqli_num_rows($sql) > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div>Incorrect name or password. Please try again.</div>";
        header("Refresh: 2; url=login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>