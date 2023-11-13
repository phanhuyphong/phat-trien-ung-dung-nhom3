<?php
class Connect
{
    function connectdb(&$conn)
    {
        $conn =  mysqli_connect("localhost", "thuyan", "an1234", "qlba");
        mysqli_set_charset($conn, 'utf8');
        if ($conn) {
            return true;
        } else {
            return false;
        }
    }
    function close($conn)
    {
        mysqli_close($conn);
    }
}
