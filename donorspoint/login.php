<?php




@session_start();

$con=mysql_connect('localhost','root','root');
if(!mysql_select_db("donorspoint",$con))
{
    die("cannot connect".mysql_error());
}

$valid=1;

$fph=$_POST['phone'];
$fpass=$_POST['password'];
$_SESSION['Role'] = "";


$result=  mysql_query("select * from user1");
while($row=mysql_fetch_array($result))
{

    $dbph=$row['u_ph'];
    $dbpass=$row['u_password'];
    if((strcmp($fph,$dbph)==0)&& (strcmp($fpass,$dbpass)==0))
    {
        $_SESSION['checktype'] = "login";
        $_SESSION['locheck'] = "true";
        $valid=0;
        $_SESSION['id']=$row['u_id'];
        $_SESSION['UserFname'] = $row['u_fname'];
        $_SESSION['UserCity'] = $row['u_city'];
        $_SESSION['Userlocation'] = $row['u_location'];
        $_SESSION['role'] = $row['role'];

        $_SESSION['role'] = $row['role'];

        header('location:profile.php');

    }

}
if($valid==1)
{


    $_SESSION['alert'] = "Not valid user";

   header('location:index.php');
}

?>
