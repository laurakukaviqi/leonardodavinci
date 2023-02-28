<?php
    session_start();
    session_destroy();
    echo file_get_contents('index.html');
?>