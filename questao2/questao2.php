<?php
function redirecionamento()
{
    header("Location: http://www.google.com");
    exit();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
     redirecionamento();
} else if (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
     redirecionamento();
}
