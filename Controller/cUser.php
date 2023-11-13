<?php
include_once("Model/mUser.php");
class cUser
{
    function getLogin($username)
    {
        $p = new mUser();
        $tbl = $p->Login($username);
        return $tbl;
    }
}
