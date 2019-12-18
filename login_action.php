<?php
      include('connection.php');
        if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") 
        {
           redirect("admink.php");
           if (!$con)
            {
              die('Could not connect: ' . mysqli_error($con));
            }

            $title = "Login";
            $mode = $_REQUEST["mode"];
            if ($mode == "login")
             {
                  $username = trim($_POST['name']);
                  $pass = trim($_POST['pass']);

                   
                        $sql = "SELECT * FROM sign_up WHERE username = name AND password = pass";

                  try 
                  {
                    $stmt = $DB->prepare($sql);
                    $stmt->bindValue(":uname", $username);
                    $stmt->bindValue(":pass", $pass);
                    $stmt->execute();
                    $results = $stmt->fetchAll();
                    if (count($results) > 0) 
                      {
                       
                        header('Location: index.php');
                        
                      }
                      else
                      {
                        $_SESSION["errorType"] = "info";
                        $_SESSION["errorMsg"] = "username or password does not exist.";
                      }
               }
                catch (Exception $ex) {
                    $_SESSION["errorType"] = "danger";
                    $_SESSION["errorMsg"] = $ex->getMessage();
                }
            
            redirect("final_signup.php");
 }
        }
?>