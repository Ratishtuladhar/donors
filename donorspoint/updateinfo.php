<?php
@session_start();

if( $_SESSION['locheck']!= "true"){
    header('location:index.php');

}

if(isset($_POST['Updatename'])){

    $_SESSION['UserFname'] = $_POST['upname'];

    $con=mysql_connect('localhost','root','root');
    if(!mysql_select_db("donorspoint",$con))
    {
        die("cannot connect".mysql_error());
    }
    $username = $_POST['upname'];
    $userid = $_SESSION['id'];
    mysql_query("update user1 set u_fname = '$username' WHERE u_id = '$userid'");









}

if(isset($_POST['passwordupdate'])){

    $con=mysql_connect('localhost','root','root');
    if(!mysql_select_db("donorspoint",$con))
    {
        die("cannot connect".mysql_error());
    }
    $userpass = $_POST['uppas'];
    $userid = $_SESSION['id'];
    mysql_query("update user1 set u_password = '$userpass' WHERE u_id = '$userid'");












}

if(isset($_POST['phoneupdate'])){

    $con=mysql_connect('localhost','root','root');
    if(!mysql_select_db("donorspoint",$con))
    {
        die("cannot connect".mysql_error());
    }
    $userphone = $_POST['upphone'];
    $userid = $_SESSION['id'];
    mysql_query("update user1 set u_ph = '$userphone' WHERE u_id = '$userid'");











}

?>

<HTML>
<head>

    <title>index</title>
    <script language="JavaScript">

        function validateForm1()
        {
            var x=document.upname.upname.value;






            if(x==null||x=="")
            {

                alert("Username must be filled out!");

                return false;
            }



        }


        function validateForm2()
        {
            var x=document.uppas.uppas.value;
            var y=document.uppas.ruppas.value;




            if((x==null||x=="")&&(y==null||y==""))
            {

                alert("Both password must be filled out!");

                return false;
            }


            if(x==null||x=="")
            {

                alert("password must be filled out!");

                return false;
            }

            if(y==null||y=="")
            {
                alert("Retype Password");

                return false;

            }

            if(x!=y){

                alert("password must be Matched!");

                return false;

            }


        }




        function validateForm3()
        {
            var z=document.upph.upphone.value;






            if(z==null||z=="")
            {

                alert("Phone must be filled out!");

                return false;
            }




        }


    </script>

    <link rel="stylesheet" href="css/style_login.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>


    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />




</head>


<body>




<section class="container">

    <div class="login">

        <h1>Update your Information</h1>

        <form method="post" action="updateinfo.php" name="upname" onsubmit="return validateForm1()">

            <p><input type="text"  name="upname"  placeholder="Update Name">
            </p>
            <p class="submit">
            <div align="center">
                <input type="submit" name="Updatename" value="Update">
                </div>
            </p>
        </form>


        <form method="post" action="updateinfo.php" name="uppas" onsubmit="return validateForm2()">

            <p><input type="password"  name="uppas"  placeholder="Update Password">
            </p>
            <p><input type="password"  name="ruppas"  placeholder="Retype Password">
            </p>
            <p class="submit">
                <div align="center">
                <input type="submit" name="passwordupdate" value="update">
                </div>
            </p>





        </form>
        <form method="post" action="updateinfo.php" name="upph" onsubmit="return validateForm3()">

            <p><input type="text"  name="upphone"  placeholder="Update Phone">
            </p>

            <p class="submit">
            <div align="center">
                <input type="submit" name="phoneupdate" value="Update">
            </div>
            </p>






        </form>



    </div>






    </p>




<div align="center">
    <a href="profile.php" style="color: white">Done Update</a>
</div>
</section>

<div id="copyright" class="container" align="center">
    <a>Copyright created by Ratish</a>
</div>


</body>

</html>
