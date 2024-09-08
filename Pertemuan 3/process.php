<?php
    session_start();

    /* sanitize data */
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = $email = $perguruanTinggi = $programStudi = "";
    $usernameErr = $emailErr = $perguruanTinggiErr = $programStudiErr = $passErr = "";
    $errMessage;

    $hobi = [];

    function validate_input($name, &$valueVar, &$errMsgVar, $cannotEmpty, $emptyErrMsg, $regex, $regMismatchMsg) {
        if ($cannotEmpty && empty($_POST[$name])) {
            $errMsgVar = $emptyErrMsg;
        } else {
            $valueVar = test_input($_POST[$name]);
            if ($regex && !preg_match($regex, $valueVar)) {
                $errMsgVar = $regMismatchMsg;
            }
        }
        global $errMessage;
        $errMessage .= $errMsgVar;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        validate_input(
            "fusername", $username, $usernameErr, 
            true, "Username tidak boleh kosong.\n",
            "/^[a-zA-Z-']+$/", "username tidak boleh mengandung angka.\n"
        );

        validate_input(
            "femail", $email, $emailErr,
            true, "Email tidak boleh kosong.\n",
            "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", "Email harus mengandung @ diikuti nama domain.\n"
        );

        validate_input(
            "fperguruanTinggi", $perguruanTinggi, $perguruanTinggiErr,
            true, "Perguruna Tinggi tidak boleh kosong.\n",
            "", ""
        );

        validate_input(
            "fprodi", $programStudi, $programStudiErr,
            true, "Program Studi tidak boleh kosong.\n",
            "", ""
        );

        if (isset($_POST["fhobi"])) {
            $hobi = $_POST["fhobi"];
        }

        // if everything valid, move to details page
        if ($errMessage == "") {
            // $errMessage = "Form submitted successfully.";
            header("Location: success.php");
            // echo '<script> alert("Form submitted successfully") </script>';
        } else {
            // call js error alert
            $escapedMessage = json_encode($errMessage);
            echo '<script>
                alert('.$escapedMessage.')
                </script>';
        }

    }
?>