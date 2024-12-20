<?php
include "connect.php";
ob_start();

  $em=NULL;
  $em_error=NULL;
  $pass=NULL;
  $pass_error=NULL;
  $success=NULL;
  $success_error=NULL;

  if(isset($_POST["submit"]))
  {
    $em=$_POST["em"];
    $pass=$_POST["pass"];

   if($em and $pass != NULL)
   {
     
            $email =  "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
            
            if (!preg_match($email, $em))
            {
              $em_error="Please Enter valid E-mail Id!!"; 
            }
            else
            {
              if (strlen($pass) >= 8) 
              {
           
                  $pass_error="Password must be at least 8 characters long.";
                  
              }
              else
              {
                $query="select * from ragi where email='$em' and passw='$pass'";
                $result=mysqli_query($con,$query);
                $row=mysqli_num_rows($result);
                if($row==1)
                {
                  $query="select * from ragi where email='$em'";
                  $data=mysqli_query($con,$query);
                  $user=mysqli_fetch_assoc($data);

                /*  $id = $user["id"]; 
                  $_SESSION["userid"]=$id;
                  */
                  $success="Login Sucessfull";
                //    header(location:home.php);
                }
                else
                {
                  $success_error="PLZ...Try Agin..!";
                }
              }
            }
         
           
      
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Fill all data Email and Password");
    </script>
    <?php
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css\login_page.css">
</head>
<body>
  <div class="container">
    <div class="left">
      <h2>Login</h2>
      <form method="POST">
        <div class="input-box">
          <label for="email">
             Enter your email
          </label>

          <input type="text" id="email" name="em" placeholder="Enter your email" >
          <p style="color:red">
          <?php echo $em_error ?>
          </p>
          </div>

        <div class="input-box">
          <label for="password">
            Enter your password
          </label>
          <input type="password" id="password" name="pass" placeholder="Enter your password">
          <p style="color:red">
          <?php echo $pass_error ?>
          </p>
        </div>

        <a href="#" class="forgot-password">Forgot password?</a>

        <button type="submit" class="btn" name="submit">Login</button>

        <p>Don't have an account? <a href="registration.php">Signup now</a></p>
      </form>
    </div>
    <div class="right">
      <img src="image/cake.webp" width="250px" height="200px">
      <p>Every new friend is a new adventure.</p>
      <p>Let's get connected</p>
      <p>&#128521</p>
    </div>
  </div>
</body>
</html>