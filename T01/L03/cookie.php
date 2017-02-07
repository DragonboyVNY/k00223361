<?php
$cookie_name = "user";
$cookie_value = ["name"];
setcookie($_POST['name'], $value, time()+3600);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<!-- http://www.w3schools.com/php/php_cookies.asp -->
<!-- adds Cookie key-value with 1 day expires -->