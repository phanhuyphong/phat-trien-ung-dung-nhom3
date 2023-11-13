<?php
include_once("mconnect.php");
class mUser
{
    function Login($username)
    {
        $p = new Connect();
        $res = $p->connectdb($con);
        if ($res) {
            $query = "select username,password from TaiKhoan where username ='" . $username . "'";
            $tbl = mysqli_query($con, $query);
            $p->close($con);
            return $tbl;
        } else {
            return false;
        }
    }
}
