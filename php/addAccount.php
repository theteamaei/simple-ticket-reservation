<?php   
        require_once "connect.php";

        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['age'])) {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $gender = $_POST['gender'];
            // $address = $_POST['address'];
            $age = $_POST['age'];
            // $dob = $_POST['dob'];
            $query = "insert into accounts (email_address, password, first_name, last_name, gender, address, age, date_of_birth) values('$username', '$password', '$first_name', '$last_name', '$gender', 'test', '$age', 'test');";
            $result = mysqli_query($connection, $query);
            $_POST = array();
            if ($result) {
                echo "hotdog";
                // header ('Location: ' . 'admin.html');
            }

        }

        //  && isset($_POST['dob'])
?> 

