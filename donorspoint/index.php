<?php
@session_start();
if(isset($_SESSION['alert'])){
    ?>
    <script>
        alert("<?php echo $_SESSION['alert'];?>");
    </script>
<?php
    unset($_SESSION['alert']);
}
$_SESSION['locheck']="false";
?>


<HTML>
<head>

    <title>index</title>
    <script language="JavaScript">

        function validateForm()
        {
            var x=document.myform.uname.value;

            var y=document.myform.password.value;

            if((x==null||x=="")&&(y==null||y==""))
            {

                alert("Username & password must be filled out!");

                return false;
            }


            if(x==null||x=="")
            {

                alert("Username must be filled out!");

                return false;
            }

            if(y==null||y=="")
            {
                alert("Password must be filled out!");

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
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="index.php">Nepal DonorsPoint</a></h1>
            <div id="menu">
                <ul>


                    <li><a href="reg.php" accesskey="2" title="">Register</a></li>
                    <li><a href="aboutus.php" accesskey="3" title="">About Us</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>



<section class="container">

    <div class="login">

        <h1>Login to DonorsPoint</h1>

        <form method="post" action="login.php" name="myform" onsubmit="return validateForm()">

            <p><input type="text"  name="phone"  placeholder="Phone number">
            </p>

            <p><input type="password" name="password"  placeholder="Password"></p>

            <p class="submit">
                <input type="submit" name="commit" value="Login">

            </p>

        </form>

    </div>




</section>
<div align="center">
    <a href="resetpw.php">Click here to reset password</a>
    </div>

<div id="copyright" class="container" align="center">
    <a>Copyright created by Ratish</a>
</div>


</body>

</html>
