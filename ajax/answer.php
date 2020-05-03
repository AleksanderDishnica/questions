<?php
    if(isset($_POST['selected'])){
        $cookie_name = "cookie_selected";
        $cookie_value = $_POST['selected'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
    }