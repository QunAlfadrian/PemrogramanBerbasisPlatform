<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>
    <title>Formulir</title>
</head>

<body>
    <?php
        require 'process.php';
    ?>

    <div class="center">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="sso-form">
            <table class="form-table">
                <tr>
                    <td class="form-title" colspan="2">
                        <label for="">Student Sign On Form</label>
                    </td>
                </tr>

                <!-- username -->
                <tr>
                    <td>
                        <label for="fusername">Username</label>
                    </td>
                    <td>
                        <input type="text" name="fusername" id="fusername" size="40" value="<?php echo $username;?>">
                        <br><label><span class="error"><?php echo $usernameErr;?></span></label>
                    </td>
                </tr>
                
                <!-- email -->
                <tr>
                    <td>
                        <label for="femail">Email</label>
                    </td>
                    <td>
                        <input type="text" name="femail" id="femail" size="40" value="<?php echo $email;?>">
                        <br><label><span class="error"><?php echo $emailErr;?></span></label>
                    </td>
                </tr>
                
                <!-- perguruan tinggi -->
                <tr>
                    <td>
                        <label for="fperguruanTinggi">Perguruan Tinggi</label>
                    </td>
                    <td>
                        <input type="text" name="fperguruanTinggi" id="fperguruanTinggi" size="40" value="<?php echo $perguruanTinggi;?>">
                        <br><label><span class="error"><?php echo $perguruanTinggiErr;?></span></label>
                    </td>
                </tr>
                
                <!-- program studi -->
                <tr>
                    <td>
                        <label for="">Program Studi</label>
                    </td>
                    <td>
                        <label for="radioInformatika">
                            <input type="radio" id="radioInformatika" name="fprodi" value="informatika" <?php if (isset($programStudi) && $programStudi == "informatika") echo "checked"?>>
                            Informatika
                        </label><br>
                        <label for="matematika">
                            <input type="radio" id="matematika" name="fprodi" value="matematika" <?php if (isset($programStudi) && $programStudi=="matematika") echo "checked";?>>
                            Matematika
                        </label><br>
                        <label for="fisika">
                            <input type="radio" id="fisika" name="fprodi" value="fisika" <?php if (isset($programStudi) && $programStudi=="fisika") echo "checked";?>>
                            Fisika
                        </label><br>
                        <label for="kimia">
                            <input type="radio" id="kimia" name="fprodi" value="kimia" <?php if (isset($programStudi) && $programStudi=="kimia") echo "checked";?>>
                            Kimia
                        </label><br>
                        <label for="statistika">
                            <input type="radio" id="statistika" name="fprodi" value="statistika" <?php if (isset($programStudi) && $programStudi=="statistika") echo "checked";?>>
                            Statistika
                        </label><br>
                        <label for="biologi">
                            <input type="radio" id="biologi" name="fprodi" value="biologi" <?php if (isset($programStudi) && $programStudi=="biologi") echo "checked";?>>
                            Biologi
                        </label>
                        <br><label><span class="error"><?php echo $programStudiErr;?></span></label>
                    </td>
                </tr>
                
                <!-- hobi -->
                <tr>
                    <td>
                        <label for="">Hobi</label>
                    </td>
                    <td>
                        <label for="futsal">
                            <input type="checkbox" id="futsal" name="fhobi[]" value="futsal" <?php if (isset($hobi) && in_array("futsal", $hobi)) echo "checked"?>>
                            futsal
                        </label><br>
                        <label for="badminton">
                            <input type="checkbox" id="badminton" name="fhobi[]" value="badminton" <?php if (isset($hobi) && in_array("badminton", $hobi)) echo "checked"?>>
                            badminton
                        </label><br>
                        <label for="membaca">
                            <input type="checkbox" id="membaca" name="fhobi[]" value="membaca" <?php if (isset($hobi) && in_array("membaca", $hobi)) echo "checked"?>>
                            membaca
                        </label><br>
                        <label for="menulis">
                            <input type="checkbox" id="menulis" name="fhobi[]" value="menulis" <?php if (isset($hobi) && in_array("menulis", $hobi)) echo "checked"?>>
                            menulis
                        </label><br>
                        <label for="travelling">
                            <input type="checkbox" id="traveling" name="fhobi[]" value="travelling" <?php if (isset($hobi) && in_array("travelling", $hobi)) echo "checked"?>>
                            travelling
                        </label><br>
                    </td>
                </tr>

                <!-- password -->
                <tr>
                    <td>
                        <label for="fpassword">Password</label>
                    </td>
                    <td>
                        <input type="password" name="fpassword" id="fpassword" size="40" onchange="validatePassword();">
                        <br><label><span id="passwordWarning" class="error"></span></label>
                    </td>
                </tr>
                
                <!-- submit button -->
                <tr>
                    <td class="center-button" colspan="2">
                        <!-- <a class="submit-button" href="process.php">Submit</a> -->
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>