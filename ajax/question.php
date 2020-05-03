<?php
    if(isset($_POST['name'])){
        $cookie_name = "cookie_name";
        $cookie_value = $_POST['name'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }