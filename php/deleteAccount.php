<?php
    require_once "connect.php";

    if (isset($_POST['account_id'])) {
        $query = "delete from accounts where account_id = '" . $_POST['account_id'] . "';";
        $result = mysqli_query($connection, $query);
        $_POST = array();
        if ($result) {
            header ('Location: ' . '../admin.html');
        }
    }
    

?>