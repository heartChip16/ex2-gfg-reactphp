<?php

    header('Access-Control-Allow-Origin: http://localhost:5175');
    $user = $_POST['name'];
    echo ("Hello from server: $user"); //activated only after submit button is pressed in App.jsx
?>