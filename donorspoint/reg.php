
<html>
    <head>
        <title>DonorsPoint Registration Form</title>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>




        <script language="JavaScript">

           function validateForm1()
            {


                var a=document.regform.fname.value;
                var b=document.regform.lname.value;
                var c=document.regform.phone.value;
                var d=document.regform.location.value;
                var e=document.regform.city.value;
                var f=document.regform.zone.value;
                var g=document.regform.bloodgrp.value;
                var h=document.regform.email.value;
                var i=document.regform.password.value;
                var j=document.regform.gender.value;
                var atpos = h.indexOf("@");
                var dotpos = h.indexOf(".");



                if((a==null||a=="")&&(b==null||b=="")&&(c==null||c=="")&&(d==null||d=="")
                     &&(e==null||e=="")&&(f==null||f=="")&&(g==null||g=="")&&(h==null||h=="")&&(i==null||i=="")&&(j==null||j==""))
                   {

                    alert("All fields are empty");

                    return false;
                }


                if(a==null||a=="")
                {

                    alert("First Name must be filled out!");

                    return false;
                }
                if(b==null||b=="")
                {

                    alert("Last Name must be filled out!");

                    return false;
                }

                if(c==null||c=="")
                {
                    alert("Phone number must be filled out!");

                    return false;

                }

                if(d==null||d=="")
                {
                    alert("location is empty!");

                    return false;

                }

                if(e==null||e=="")
                {
                    alert("City field is empty!");

                    return false;

                }

                if(f==null||f=="")
                {
                    alert("Please select zone");

                    return false;

                }

                if(g==null||g=="")
                {
                    alert("Specify bloodgroup");

                    return false;

                }

                if(h==null||h=="")
                {
                    alert("Please leave your email");

                    return false;

                }
                //email valid
                if(atpos<1||dotpos<atpos+2||dotpos+2>= h.length)
                        {
                            alert("Not a valid email");
                            return false;

                }

                if(i==null||i=="")
                {
                    alert("choose password for your security");

                    return false;

                }

                if(j==null||j=="")
                {
                    alert("Please specify gender");

                    return false;

                }


            }
           </script>





    </head>

	<body>

	 <form action="form.php" class="register" method="post" name="regform" onsubmit="return validateForm1()">

		<h1>Registration Form</h1>
            <fieldset class="row2">
                <legend>Details
                </legend>


 <p>
                    <label>First Name
                    </label>
                    <input type="text"  name="fname" class="long" placeholder="eg.ratish"/>

  </p>

     <p>
         <label>last Name
         </label>
         <input type="text"  name="lname" class="long" placeholder="eg.tuladhar"/>

     </p>
                <p>
                    <label>Gender </label>
                    <select name="gender">
                        <option>
                        </option>
                        <option value=" "></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>

                </p>


<p>
                    <label>Phone
                    </label>
                    <input type="text" name="phone" maxlength="15" class="long" placeholder="+977-"/>

</p>


<p>
                    <label class="optional">Optional Phone
                    </label>
                    <input type="text" name="ophone" maxlength="15" class="long" placeholder="+977-"/>

</p>



<p>
                    <label>Point location
                    </label>
                    <input type="text" name="location" class="long"/>

 </p>


<p>
                    <label>City
                    </label>
                    <input type="text" class="long" name="city"/>


 </p>



<p>
                    <label>Zone
                    </label>
                    <select name="zone">
                        <option>
                        </option>
                        <option value="bagmati">Bagmati
                        </option>
                        <option value="Mechi">Mechi</option>
                        <option value="Koshi">Koshi</option>
                        <option value="Sagarmatha">Sagarmatha</option>
                        <option value="Janakpur">Janakpur</option>
                        <option value="Narayani">Narayani</option>
                        <option value="Gandaki">Gandaki</option>
                        <option value="Dhawalagiri">Dhawalagiri</option>
                        <option value="Lumbini">Lumbini</option>
                        <option value="Rapti">Rapti</option>
                        <option value="Beri">Beri</option>
                        <option value="Karnali">Karnali</option>
                        <option value="Seti">Seti</option>
                        <option value="Mahakali">Mahakali</option>





                    </select>


</p>





<p>
                    <label>Blood Group
                    </label>
                    <select name="bloodgrp">
                        <option>
                        </option>
                        <option value="A+">'A+'</option>
                        <option value="B+">'B+'</option>
                        <option value="AB+">'AB+'</option>
			            <option value="O+">O+</option>
			            <option value="O-">'O-'</option>
			            <option value="AB-">'AB-'</option>
                        <option value="A-">'A-'</option>
                        <option value="B-">'B-'</option>
                    </select>


</p>






<p>
                <label>Email
                </label>
                <input type="text" class="long" name="email"/>

</p>


                <p>
                    <label>Password
                    </label>
                    <input type="password"  class="long" name="password"/>

                </p>









		 </fieldset>
     <div ><button class="button" type="submit" >Register </button>
         <button type="button" class="button" name="cancel"  onclick="history.go(-1)">Cancel</button></div>

        </form>
     <div id="copyright" class="container" align="center">
         <a>Copyright created by Bini</a>
     </div>


    </body>
</html>





