<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    include('connection.php');

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
    
    $check_user = mysqli_query($link, "SELECT * FROM sign_up WHERE email='".$email."' ");
    $user_row = mysqli_num_rows($check_user);
    if ($user_row==0) {

          $query = "INSERT INTO sign_up (name,email,pass) VALUES ('$name','$email', md5('$pass'))";

            if(mysqli_query($link,$query))
                {
                 echo "<script>alert('SUCCESSFULLY REGISTER PLEASE LOGIN');</script>";
                 header('Location: final_signup.php');
                }
            else
                 {
                    echo "<script>alert('FAILED TO REGISTER');</script>";
                 }

         }

    else{
         echo '<script language="javascript" type="text/javascript"> 
                alert("message successfully Inserted");
                window.location = "final_signup.php";
        </script>';

         }
             
    
    // Close connection
    mysqli_close($link);
?>
