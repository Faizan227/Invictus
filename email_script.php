<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: registration.php");
    exit;
}

if (isset($_GET['send_email'])) {
    send_email();
}

function send_email() {
    // Code to send an email
    // ...
}
=======
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: registration.php");
    exit;
}

if (isset($_GET['send_email'])) {
    send_email();
}

function send_email() {
    // Code to send an email
    // ...
}
>>>>>>> 002b8ed74864ef0650d0fcc36f9b36dd68162220
?>