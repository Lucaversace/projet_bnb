<?php
    $cx_server = "localhost";
    $cx_login = "projet_bnb";
    $cx_pwd = "root";
    $cx_dbname ="root";

    function get_default_connection()
    {
        global $cx_server, $cx_login, $cx_pwd, $cx_dbname;
        return array("cx_server" => $cx_server, "cx_login" => $cx_login, "cx_pwd" => $cx_pwd, "cx_dbname" => $cx_dbname);
    }