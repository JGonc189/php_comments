<?php

    // CREATE COMMENTS
    function setComments($conn) {
        if (isset($_POST['commentSubmit'])) {
            $user_id = $_POST['user_id'];
            $date = $_POST['date'];
            $message = $_POST['message'];

            $sql = "INSERT INTO comments (user_id, date, message) VALUES ('$user_id', '$date', '$message')";

            $result = mysqli_query($conn, $sql);
        }
    }

    // READ COMMENTS
    function getComments($conn) {
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='comment-box'><p>";
                echo $row['user_id']."<br /><br />";
                echo $row['date']."<br /><br />";
                echo nl2br($row['message']);
            echo "</p></div>";
        }
        
        
    }