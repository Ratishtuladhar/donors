<?php
@session_start();
if( $_SESSION['locheck']!= "true"){
    header('location:index.php');

}
if($_SESSION['checktype'] == "register"){
$con=mysql_connect("localhost","root","root");
if(!$con)
    die("could not connect" .mysql_error());
mysql_select_db("donorspoint",$con);
$phone = $_SESSION['phone'];
$result = mysql_query ("select u_id from user1 WHERE u_ph = '$phone'");
while($row = mysql_fetch_array($result)){
    $_SESSION['id'] = $row['u_id'];

}
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="css/default1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body>

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a> Welcome <?php echo $_SESSION['UserFname']; ?> (<?php echo $_SESSION['role']; ?>)</a></h1>

			<div id="menu">
				<ul>
					
					<li><a href="profile.php" accesskey="1" title="">My Profile</a></li>
					<li><a href="updateinfo.php" accesskey="2" title="">Update Info</a></li>


                    <?php
                    if(isset($_SESSION['role'])){
                      if($_SESSION['role'] == 'Admin'){
                        ?>
                    <li><a href="delete.php" accesskey="1" title="">Delete User</a></li>
                    <?php
                      }
                      }
                    ?>



					<li><a href="index.php" accesskey="4" title="">Sign Out</a></li>



					
				</ul>
                <form action="samecity.php" name="samecity" >

                    <input type="submit" value="Donors to my city"></form>

                <form action="samelocation.php" name="sameloc" >

                    <input type="submit" value="Donors to my location"></form>






                <form action="search.php" method="post">

                    <div >

                        <select name="bloodgrp">
                            <option>Search Blood
                            </option>
                            <option value="A+">'A+'</option>
                            <option value="B+">'B+'</option>
                            <option value="AB+">'AB+'</option>
                            <option value="O+">O+</option>
                            <option value="O-">'O-'</option>
                            <option value="AB-">'AB-'</option>
                            <option value="A-">'A-'</option>
                            <option value="B-">'B-'</option>
                        </select></div>

                    <input type="submit" value="Search"></form>



			        </div>
            </div>
        </div>

    </div>

                <div id="page-wrapper">
                    <div id="welcome" class="container">


		                <div align="center">

                                   <?php require('display.php');?>
		                </div>
	                </div>
                </div>

</div>
<div id="copyright" class="container">
    <a>Copyright created by Ratish</a>
</div>
</body>
</html>
