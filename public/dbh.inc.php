<?php 
    $conn = mysqli_connect('localhost', 'root', 'root', 'php_comments_example');

    if (!$conn) {
        die("Connection failed: " .mysql_connect_error());
    }
    
