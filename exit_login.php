<?php
function exist_cookie () {
    setcookie("username", "", 0);
    header("location: /login.php");
}
exist_cookie ();
