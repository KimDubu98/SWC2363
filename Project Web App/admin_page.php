<?php
$servername="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$dbName="project_web"; // Database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tips";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin_page.css">
</head>
<body>
    <br><br><br>
    <form method="post" action="admin.php">
        <table align="center" border="1">
            <tr>
            <th colspan="2">Add Patch Notes</th>
            </tr>
            <tr>
            <th width="104">Title</td>
            <td width="350"><select id="title" name="title"><option value="Original Server">Original Server</option><option value="Advanced Server">Advanced Server</option></select></td>
            </tr>
            <tr>
            <th width="104">Patch Updates</td>
            <td width="350"><input type="text" name="patch" size="30"></td>
            </tr>
            <tr>
            <th width="104">Details</td>
            <td width="350"><input type="text" name="updates" size="50"></td>
            </tr>
            <tr>
                <td class="troll" width="454" colspan="2"><input class="button" type="submit" name="submitBtn" value="Submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="button" type="reset" name="resetBtn" value="Clear"></td>
            </tr>
        </table>       
    </form>
    <br><br>
    <div class="content">
    <table class="patch">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Patch Updates</th>
            <th>Details</th>
        </tr>
        <?php
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <td><?php echo $rows['bil'];?></td>
            <td><?php echo $rows['title'];?></td>
            <td><?php echo $rows['patch'];?></td>
            <td><?php echo $rows['updates'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <br><br>
    <h3>Delete a Record</h3>
    <form action="deleteRecord.php" method="post">
        Patch Updates : <input type="text" name="patch" size="30">
        <input class="button" type="submit" name="submit" value="Delete">
    </form>
    <br><br>
    <a href='main2.php'><button class="button">Back to Home Page</button></a> 
    </div>
</body>