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

<html>
    <head>
        <title>MLBB Tutorial</title>
        <link rel="stylesheet" href="main3.css"/>
    </head>
    <body>
        <header class="header">
            <img src="logo.jpeg" alt="mlbb logo" height="120" width="250">
            <div class="header-title">
                <h1>Welcome to the Land of Dawn</h1>
            </div>
            <div class="user_login"><a href="login2.html">Log out here &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></div>
        </header>
        
        <div class="tab">
            <button class="tablink" onclick="openPage('Home', this, 'gold')">Home</button>
            <button class="tablink" onclick="openPage('About Me', this, 'gold')">About Me</button>
            <button class="tablink" onclick="openPage('Guides', this, 'gold')">Guides</button>
            <a href="admin_login.html"><button class="tablink">Admin</button></a>
          </div>


            <!--Start of Home content-->    
            <div id="Home" class="tabcontent">
            <table class="meta-hero" aria-colspan="5">
                <tr>
                    <td colspan="5" align="center">
                        <h2>META HEROES</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Assets/jungler.jpeg">
                    </td>
                    <td>
                        <img src="Assets/exp.jpeg">
                    </td>
                    <td>
                        <img src="Assets/goldlane.jpeg">
                    </td>
                    <td>
                        <img src="Assets/roam.jpeg">
                    </td>
                    <td>
                        <img src="Assets/midlane.jpeg">
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Lancelot</li>
                            <li>Fredrinn</li>
                            <li>Fanny</li>
                            <li>Akai</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Yu Zhong</li>
                            <li>Lapu-Lapu</li>
                            <li>Terizla</li>
                            <li>X-borg</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Irithel</li>
                            <li>Bruno</li>
                            <li>Beatrix</li>
                            <li>Brody</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Mathilda</li>
                            <li>Khufra</li>
                            <li>Angela</li>
                            <li>Minotaur</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Novaria</li>
                            <li>Valentina</li>
                            <li>Gord</li>
                            <li>Faramis</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <br><br>
            <div class="pro_team" style="text-align:center;">
                <a href="https://www.gosugamers.net/mobile-legends/rankings" style="text-decoration:none; color:gold;"><h2>Pro team rankings here</h2></a>
            </div>
            </div>
            <!--End for Home-->   
    
            <!--Start for About-->
            <div id="About Me" class="tabcontent">
                <div class="intro">
                <h3>My MLBB ID   : 52341967</h3>
                <h3>Ingame Name  : Dubu.</h3>
                <h3>Highest Rank : Mythical Immortal</h3>
                <br><br><br>
                <h1 style="color: gold; text-align: center;">MY ESPORTS ACHIEVEMENTS</h1>
                <ul style="text-align: center;" class="achievement">
                    <li><strong>Mobile Legends</strong></li>
                    <ul>
                        <li>Champion of KUPTM MLBB Tournament</li>
                        <li>3x Champion of grouping stage in Moonton Student League</li>
                        <li>Top 8 in Moonton Student League Playoffs</li>
                        <li>Runner up of Reaperz Community Tournament</li>
                    </ul>
                    <br><br>
                    <li><strong>Pokemon Unite</strong></li>
                    <ul>
                        <li>Runner up of ESL Malaysian Open</li>
                        <li>Runner up of TTC Pokemon Unite</li> 
                    </ul>
                </ul>
                </div>
            </div>
            <!--End of About-->

            <!--Start of Guides-->
            <div id="Guides" class="tabcontent">
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
                <div class="video" style="text-align:center;">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/XqJGmbL6i7s"></iframe>
                </div>
            </div>
            <!--End of Guides-->


            <script>
                function openPage(pageName,elmnt,color) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablink");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].style.backgroundColor = "";
                  }
                  document.getElementById(pageName).style.display = "block";
                  elmnt.style.backgroundColor = color;
                }
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
    </body>
</html>