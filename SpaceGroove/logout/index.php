<?php
    session_start();
    session_destroy();
    echo "<h1> You're logged out! </h1> 
    <a href=../index.php> HOME </a>";
?>