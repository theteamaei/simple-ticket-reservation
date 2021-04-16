<?php   
        require_once "connect.php";

        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['age']) && isset($_POST['dob'])) {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $c_password = $_POST['confirm-password'];
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $age = $_POST['age'];
            $dob = $_POST['dob'];
            $query = "INSERT INTO accounts (email_address, password, c_password, first_name, last_name, gender, address, age, date_of_birth) VALUES('$username', '$password', '$c_password', '$first_name', '$last_name', '$gender', '$address', '$age', '$dob');";
            $result = mysqli_query($connection, $query);
            $_POST = array();
            if ($result) {
                header ('Location: ' . 'admin.html');
            }
        };

?> 

