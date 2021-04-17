<?php

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)){
    if (!empty($email)){
        if (!empty($name)){
            if (!empty($password)){
                $host = "localhost";
                $dbusername = "id16610149_login";
                $dbpassword = "Gang12345678!";
                $dbname = "id16610149_beehubs";
        
                //create connection
                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()){
                    die('Connect Error ('.mysqli_connect_errno().')' . mysqli_connect_error());
                }
                else{
                    $sql = "INSERT INTO register (username, email, name, password) values ('$username', '$email', '$name', '$password')";
                    if ($conn->query($sql)){
                        header("Location: /html/login.html")
                    }
                    else{
                        echo "Error: ". $sql . "<br>". $conn->error;
                    }
                    $conn->close();
                }
            }
            else{
                echo "Password should not be empty";
                die();
            }
        }
        else{
            echo "Name should not be empty";
            die();
        }
    }
    else{
        echo "Email should not be empty";
        die();
    }
}
else{
    echo "Username should not be empty";
    die();
}

?>