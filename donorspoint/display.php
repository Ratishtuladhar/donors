<?php
@session_start();

$con=mysql_connect("localhost","root","root");
if(!$con)
    die("could not connect" .mysql_error());
mysql_select_db("donorspoint",$con);
$result = mysql_query ("select * from user1");
$userid = $_SESSION['id'];
$result2 = mysql_query ("select * from user1 WHERE u_id = $userid");
?>

<div align="left"><h1>My Information</h1>
    <?php

while($row = mysql_fetch_array($result2))
{
    echo "<table border='30'>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<td>" .$row['u_fname']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Last Name</th>";
    echo "<td>" .$row['u_lname']."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Point location</th>";
    echo "<td>" .$row['u_location']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Phone</th>";
    echo "<td>" .$row['u_ph']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Optional Phone</th>";
    echo "<td>" .$row['u_optph']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Gender</th>";
    echo "<td>" .$row['u_gender']."</td>";
    echo "</tr>";



    echo "<tr>";
    echo "<th>city</th>";
    echo "<td>" .$row['u_city']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>zone</th>";
    echo "<td>" .$row['u_zone']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Blood group</th>";
    echo "<td>" .$row['u_bldgrp']."</td>";
    echo"</tr>";
}
echo"</table>";
    ?>
</div>
<div  align="center"><h1>List of Donors</h1>
<?php

echo "<table border='4'>
  <tr><th>First Name</th>
  <th>Last Name</th>
  <th>location</th>
  <th>City</th>
  <th>Zone</th>
  <th>Blood Group</th>
  <th>Gender</th>
   <th>phone</th>
   <th>optional phone</th></tr>";
while($row = mysql_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" .$row['u_fname']."</td>";
    echo "<td>" .$row['u_lname']."</td>";
    echo "<td>" .$row['u_location']."</td>";
    echo "<td>" .$row['u_city']."</td>";
    echo "<td>" .$row['u_zone']."</td>";
    echo "<td>" .$row['u_bldgrp']."</td>";
    echo "<td>" .$row['u_gender']."</td>";
    echo "<td>" .$row['u_ph']."</td>";
    echo "<td>" .$row['u_optph']."</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>
</div>