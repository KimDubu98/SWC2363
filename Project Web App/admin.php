<html>
<head>
    <title>Creative Multimedia Competition 2020</title>
</head>
<body>
    <?php
    //get input values from form
     extract($_POST);
    ?>
    <h3>Patch Notes</h3>
    <table>
        <tr><td>Title</td>
        <td>:</td>
        <td><b><?php print($title) ?></b></td>
        </tr>
        <tr><td>Patch Updates</td>
        <td>:</td>
        <td><b><?php print($patch) ?></b></td>
        </tr>
        <tr><td>Details</td>
        <td>:</td>
        <td><b><?php print($updates) ?></b></td>
        </tr>
    </table>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_web";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error); }
    //create query
    $sql = "INSERT INTO tips (title, patch, updates) VALUES ('$title', '$patch', '$updates')";
    //execute query
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //close connection
    $conn->close();
    ?> 
    <br><br>
    <a href="admin_page.php"><button>Return</button></a>
</body>
</html>