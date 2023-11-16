<?php
    $myusername = $_POST['myusername'];
    $mypassword = $_POST['mypassword'];

    $con = new mysqli("localhost","root","","project_web");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from admin where myusername = ?");
        $stmt->bind_param("s", $myusername);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['mypassword'] === $mypassword){
                echo"<div style='text-align:center;'>";
                echo "<br><br><h2>Login Successful";
                echo "<br><br><a href='admin_page.php'><button>Go to Admin page</button></a>";
                echo "</div>";
            }else {
                echo"<div style='text-align:center;'>";
                echo "<br><br><h2>Invalid Email or Password</h2>";
                echo "<br><br><a href='admin_login.html'><button>Back to Login page</button></a>";
                echo "</div>";
            }
        } else {
            echo"<div style='text-align:center;'>";
            echo "<br><br><h2>Invalid Email or Password</h2>";
            echo "<br><br><a href='admin_login.html'><button>Back to Login page</button></a>";
            echo "</div>";
        }
    }

?>