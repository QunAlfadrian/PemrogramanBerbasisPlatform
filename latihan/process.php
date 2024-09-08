<?php
    session_start();
    
    /* sanitize data */
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usernameErr = "";
    $username = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fusername"])) {
            $usernameErr = "*username tidak boleh kosong";
            $_SESSION["username"] = "";
        } else {
            $username = test_input($_POST["fusername"]);
            $_SESSION["username"] = $username;
        }
    }

    if (empty($usernameErr)) {
        
    }
?>