<html>
<head>
 <title>Delete Record</title>
 <style>
    body {
        text-align:center;
    }
</style>
</head>
<body>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "project_web";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //get input value
 $patch=$_POST['patch'];
 // sql to delete a record
 $sql = "DELETE FROM tips WHERE patch='$patch'";
 if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
 }
 else {
 echo "Error deleting record: " . $conn->error;
 }
 //close connection
 $conn->close();

 echo '<p><a href="admin_page.php"><button>Return to Admin page</button></a></p>';
?>

</body>
</html>