<?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        $cookie_name = "cookie_name";
        $cookie_value = $_POST['name'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", false);

        $cookie_name = "cookie_email";
        $cookie_value = $_POST['email'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", false);
    }