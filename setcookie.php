<?php
    if(!isset($_COOKIE[$name])){
        $array_value = array("value" => time(), "count" => 1);
    }else{
        $count = unserialize($_COOKIE[$name])["count"] + 1;
        $array_value = array("value" => time(), "count" => $count);
    }
    setcookie($name, serialize($array_value));
?>