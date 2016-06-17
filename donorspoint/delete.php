
<html>
<head>
    <title>delete</title>
    <script language="JavaScript">

        function validateForm2()
        {
            var p=document.myform2.number.value;





            if(p==null||p=="")
            {

                alert("Phone Number must be filled out!");

                return false;
            }




        }

    </script>

    <link rel="stylesheet" href="css/style_login.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>

    <link href="css/default1.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<section class="container">

    <div class="login">

        <h1>Enter User Number To Discharge </h1>

        <form method="get" action="delete.php" name="myform2" onsubmit="return validateForm2()">



            <p><input type="text" name="number" placeholder="Phone Number"></p>

            <p class="submit">
                <input type="submit" name="submit" value="Delete">
                <input type="button" name="cancel" value="Cancel" onclick="history.go(-1)">

            </p>

        </form>


    </div>
</section>

</div>


</body>

</html>
<?php
session_start();

if( $_SESSION['locheck']!= "true"){
    header('location:index.php');

}

$con=mysql_connect('localhost','root','root');

if(!mysql_select_db("donorspoint",$con))
{
    die("cannot connect".mysql_error());
}


if(isset($_GET['number']))
{
    $sql_query="DELETE FROM user1 WHERE u_ph=".$_GET['number'];
    mysql_query($sql_query);
    header("Location: profile.php");
}
?>







