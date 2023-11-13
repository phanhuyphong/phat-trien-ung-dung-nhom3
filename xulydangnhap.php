<?php
session_start();
include_once("Controller/cUser.php");
$p = new cUser();
if (isset($_REQUEST['btnLogin'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $tbl = $p->getLogin($username);
    if ($tbl) {
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_assoc($tbl)) {
                if ($row['username'] == $username && $row['password'] == md5($password)) {
                    header("Location:index.php");
                }
            }
        } else {
            echo "0 result";
        }
    } else {
        echo "Error";
    }
} else {
    echo "<script>alert('Dang nhap khong hop le')</script>";
}
