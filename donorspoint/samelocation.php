<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>

    <link href="css/default1.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>


<body><div align="center">






<?php
/**
 * Created by PhpStorm.
 * User: ratish tuladhar
 * Date: 2/12/2016
 * Time: 9:01 PM
 */

session_start();

if( $_SESSION['locheck']!= "true"){
    header('location:index.php');

}
$con=mysql_connect("localhost","root","root");
if(!$con)
    die("could not connect" .mysql_error());
mysql_select_db("donorspoint",$con);

$userloc = $_SESSION['Userlocation'];


$result2 = mysql_query ("select * from user1 WHERE u_location = '$userloc'");?>
<div align="center"><br><br>
    <br><br><br><br><h1>List of Donors Of Your location</h1><?php

    echo "<table border='1'>
  <tr><th>First Name</th>
  <th>Last Name</th>
  <th>location</th>
  <th>City</th>
  <th>Zone</th>
  <th>Blood Group</th>
  <th>Gender</th>
  <th>Phone</th>
  <th>optional phone</th></tr>";
    while($row = mysql_fetch_array($result2))
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

    <input type="submit" name="cancel" value="Back" onclick="history.go(-1)"></div></body></html>