<?php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '12345678!');
     define('DB_NAME', 'reservation');
     $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

     if($connection === false) {
         die('error');
     }
?>