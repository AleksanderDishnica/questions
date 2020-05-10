<?php
    if(isset($_POST['selected1'])){
        $cookie_name = "cookie_selected1";
        $cookie_value = $_POST['selected1'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
    }
    if(isset($_POST['selected2'])){
        $cookie_name = "cookie_selected2";
        $cookie_value = $_POST['selected2'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
    }