<?php
    if(isset($_POST['question'])){
        $cookie_name = "cookie_question";
        $cookie_value = $_POST['question'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

        echo $_POST['question'];
    }