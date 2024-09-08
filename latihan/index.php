<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test</title>
</head>
<body>
    <?php
        require "process.php";
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table>
            <tr>
                <td>
                    <label for="fusername">Username</label>
                </td>
                <td>
                    <input type="text" id="fusername" name="fusername" value="<?php echo $username;?>">
                    <label for="fusername"><span><?php echo $usernameErr;?></span></label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>