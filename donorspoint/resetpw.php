
<html>
<head>
    <title>reset</title>
    <script language="JavaScript">

        function validateForm1()
        {
            var p=document.myform1.uname.value;

            var q=document.myform1.password.value;

            if((p==null||p=="")&&(q==null||q==""))
            {

                alert("Name & phone number must be filled out!");

                return false;
            }


            if(p==null||p=="")
            {

                alert("Name must be filled out!");

                return false;
            }

            if(y==null||y=="")
            {
                alert("Phone nuermb must be filled out!");

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

        <h1>Enter Name and number </h1>

        <form method="post" action="resetpw.php" name="myform1" onsubmit="return validateForm1()">

            <p><input type="text"  name="name"  placeholder="Name">
            </p>

            <p><input type="text" name="number" placeholder="Phone Number"></p>

            <p class="submit">
                <input type="submit" name="submit" value="Submit">
                <input type="submit" name="cancel" value="Cancel" onclick="history.go(-1)">

            </p>

        </form>

    </div>
    </section>
</body>

</html>
<?php
session_start();

if( $_SESSION['locheck']!= "true"){
    header('location:index.php');

}?>