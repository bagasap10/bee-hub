<?php

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username)){
    if (!empty($password)){
        $host = "localhost";
        $dbusername = "id16610149_login";
        $dbpassword = "Gang12345678!";
        $dbname = "id16610149_beehubs";
        
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno().')' . mysqli_connect_error());
        }
        else{
            //read data
            $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if($result){
                if ($result && mysqli_num_rows($result) > 0){
                    $userdata = mysqli_fetch_assoc($result);
                    header("Location: /html/welcome.html");
                    
                }else{
                    echo "Wrong Password!";
                }
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
    echo "Username should not be empty";
    die();
}


?>