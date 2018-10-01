<?php
    date_default_timezone_set('America/New_York');

    include 'dbh.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="stylesheets/style.css">
    <title>Document</title>
</head>
<body>
    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
    </iframe>
    <?php 
        echo "<form method='POST' action='".setComments($conn)."'>
                <input type='hidden' name='user_id' value='Anonymous'>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br />
                <button name='commentSubmit' type='submit'>Comment</button>
            </form>";
    ?>
</body>
</html>