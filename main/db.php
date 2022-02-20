<?php
    session_start();

    $db = new mysqli('localhost','root','1234','cozysleep');
    $db->set_charset('utf8');

    function msq($sql){
        global $db;
        return $db->query($sql);
    }
?>