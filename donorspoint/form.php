<?php
@session_start();
$_SESSION['locheck'] = "true";
$con=mysql_connect("localhost","root","root");
if (!$con)
    echo"Could not connect";

$select=@mysql_select_db("donorspoint",$con);
if (!$con)
{
    echo"Could not connect";
}

$user = $_POST['fname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$loc = $_POST['location'];

$user1="insert into user1(u_fname,u_lname,u_ph,u_optph,u_location,u_city, u_zone, u_bldgrp, u_email, u_password, u_gender,role)
    VALUES ('$_POST[fname]','$_POST[lname]','$_POST[phone]','$_POST[ophone]','$_POST[location]','$_POST[city]','$_POST[zone]','$_POST[bloodgrp]',
    '$_POST[email]','$_POST[password]','$_POST[gender]','user')";

if(!mysql_query($user1,$con)){
    die("error".mysql_error());
}

$_SESSION['checktype'] = "register";
$_SESSION['UserFname'] = $user;
$_SESSION['phone'] = $phone;
$_SESSION['role'] ="user";
$_SESSION['UserCity'] = $city;
$_SESSION['Userlocation'] = $loc;

header('location:profile.php');


