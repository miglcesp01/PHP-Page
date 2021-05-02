<?php

$name=$email = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>