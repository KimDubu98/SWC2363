<?php
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','project_web');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into registration(uname, email, password)
            values(?, ?, ?)");
        $stmt->bind_param("sss",$uname,$email,$password);
        $stmt->execute();
        echo "<div style='text-align: center;'>";
        echo "<br><br>Registration Succesful<br><br>";
        echo "<a href='login2.html'><button>Back to Login Page</button></a>";
        echo "</div>";
        $stmt->close();
        $conn->close();
    }
?>