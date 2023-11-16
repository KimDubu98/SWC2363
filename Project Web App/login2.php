<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","project_web");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo"<div style='text-align:center;'>";
                echo "<br><br><h2>Login Successful";
                echo "<br><br><a href='main2.php'><button>Go to Main page</button></a>";
                echo "</div>";
            }else {
                echo"<div style='text-align:center;'>";
                echo "<br><br><h2>Invalid Email or Password</h2>";
                echo "<br><br><a href='login2.html'><button>Back to Login page</button></a>";
                echo "</div>";
            }
        } else {
            echo"<div style='text-align:center;'>";
            echo "<br><br><h2>Invalid Email or Password</h2>";
            echo "<br><br><a href='login2.html'><button>Back to Login page</button></a>";
            echo "</div>";
        }
    }

?>