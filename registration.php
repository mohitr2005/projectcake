<?php
    include("database.php");
    $mname = $mlname = $mmno = $mdob = $mg = $memail = $musername = $mpassword = $mcity = "";
    $error = 0;
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $mno=$_POST["mno"];
        $dob=$_POST["dob"];
        $g=$_POST["g"];
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $city=$_POST["city"];

        if($name=="")
        {
            $mname = "Please Enter your Name !!";
            $error++;
        }
        else{
            $names = "/^[A-Za-z]+$/";
            if(!preg_match($names,$name))
            {
                $mname = "Please Enter valid Name !!";
                $error++;
            }
        }
        if($mno=="")
        {
            $mmno = "Please Enter your Mobile Number !!";
            $error++;
        }
        else{
            $mnos = "/^[0-9]+$/";
            if(!preg_match($mnos,$mno))
            {
                $mmno = "Please Enter valid Mobile No. !!";
                $error++;
            }
            else{
                $mnolen = strlen($mno);
                if($mnolen<10)
                {
                    $mmno = "It required minimum 10 Digits !!";
                    $error++;
                }
                elseif($mnolen>10)
                {
                    $mmno = "It required maximum 10 Digits !!";
                    $error++;
                }
            }
        }
        if($dob=="")
        {
            $mdob = "Please Enter your Date of Birth !!";
            $error++;
        }
        if($g=="")
        {
            $mg = "Please Select your Gender !!";
            $error++;
        }
        if($email=="")
        {
            $memail = "Please Enter your E-mail Id !!";
            $error++;
        }
        else{
            $emails = "/^[a-z0-9]@[a-z].[a-z]+$/";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $memail = "Please Enter valid E-mail Id !!";
                $error++;
            }
        }
        if($username=="")
        {
            $musername = "Please Enter your Username !!";
            $error++;
        }
        else{
            $usernames = "/^[A-Za-z0-9]+$/";
            if(!preg_match($usernames,$username))
            {
                $musername = "Combination of [A-Z],[a-z] and [0-9] !!";
                $error++;
            }
        }
        if($password=="")
        {
            $mpassword = "Please Enter your Password !!";
            $error++;
        }
        else{
            $passwords = "/^[A-Za-z0-9]+$/";
            if(!preg_match($passwords,$password))
            {
                $mpassword = "Combination of [A-Z],[a-z] and [0-9] !!";
                $error++;
            }
            else
            {
                $passwordlen = strlen($password);
                if($passwordlen<8)
                {
                    $mpassword = "It required minimum 8 character !!";
                    $error++;
                }
                elseif($passwordlen>12)
                {
                    $mpassword = "It require maximum 12 character !!";
                    $error++;
                }
            }
        }
        if($city=="")
        {
            $mcity = "Please Enter your City !!";
            $error++;
        }
        else{
            $cities = "/^[A-Za-z]+$/";
            if(!preg_match($cities,$city))
            {
                $mcity = "Please Enter valid City Name !!";
                $error++;
            }
        }

        if($error==0)
        {
            $sql = "select * from registration where username = '$username' and password = '$password' or email = '$email' and password = '$password'";
            $result = mysqli_query($conn,$sql);
            $check = mysqli_num_rows($result);
            
            if($check==1)
            {
                echo "<script>";
                echo "alert('User already Registered')";
                echo "</script>";
            }
            else{
                $sql = "insert into registration values(id,'$name',$mno,'$dob','$g','$email','$username','$password','$city')";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    echo "<div class='success' id='s'>";
                    echo "Registration Successfull"."<br>";
                    echo "<input type='button' name='successok' value='OK' id='sok' class='successok'>";
                    echo "</div>";
                }
                else{
                    echo "<div class='unsuccess' id='u'>";
                    echo "Registration Unsuccessfull"."<br>";
                    echo "<input type='button' name='unsuccessok' value='OK' id='uok' class='unsuccessok'>";
                    echo "</div>";
                }
    
            }
            
        }
    }
        
?>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="css\registration.css"></link>
    </head>
    <body class="registerbody">
        <form method="post">

            <div class="registerflex">
                <div class="imagediv">
                    <img src="images/cake.webp" class="regimage"></img>
                    <label class="signinlabel">Already have an Account? <a class="signinlink" href="loginr.php">Sign in</a></label>
                </div>
                <hr class="hr">
                <div class="mainform">
                
                    <div class="form1div">
                    <label class="reglabel">Registration Form</label><br>
                        <label class="label">Name<b class="red">*</b> </label><br>
                        <input type="text" name="name" placeholder="Enter your Name" class="reginput">
                        <br><label class="red"><?php echo $mname; ?></label>
                        <br>

                        <label class="label">Mobile No.<b class="red">*</b> </label><br>
                        <input type="text" name="mno" placeholder="Enter your Mobile Number"class="reginput">
                        <br><label class="red"><?php echo $mmno; ?></label>
                        <br>

                        <label class="label">Date of Birth<b class="red">*</b> </label><br>
                        <input type="date" name="dob" class="reginput">
                        <br><label class="red"><?php echo $mdob; ?></label>
                        <br>

                        <label class="label">Gender<b class="red">*</b> </label><br>
                        <input type="radio" name="g" value="Male" checked>Male
                        <input type="radio" name="g" value="Female">Female
                        <br><label class="red"><?php echo $mg; ?></label>
                        <br>

                    </div>
                        
                    <div class="form2div">

                        <label class="label">E-mail<b class="red">*</b> </label><br>
                        <input type="text" name="email" placeholder="Ex - abc123@gmail.com" class="reginput">
                        <br><label class="red"><?php echo $memail; ?></label>
                        <br>

                        <label class="label">Username<b class="red">*</b></label><br>
                        <input type="text" name="username" placeholder="Enter your Username" class="reginput">
                        <br><label class="red"><?php echo $musername; ?></label>
                        <br>

                        <label class="label">Password<b class="red">*</b> </label><br>
                        <input type="password" name="password" id="password" placeholder="Enter your Password" class="reginput"> <a id="show" class="show">Show</a>
                        <br><label class="red"><?php echo $mpassword; ?></label>
                        <br>

                        <label class="label">City<b class="red">*</b> </label><br>
                        <input type="text" name="city" placeholder="Enter your City"class="reginput">
                        <br><label class="red"><?php echo $mcity; ?></label><br>
                        
                        <input type="submit" name="submit" value="Submit" id="sub" class="submit"> <input type="reset" value="Reset" class="reset"><br>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
<script src="javascript/registration.js"></script>