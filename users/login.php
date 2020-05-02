<?php 
include '../includes/header.php';
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name=check_input($_POST['user_name']);
    
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$user_name)) {
        $_SESSION['sign_msg'] = "Username should not contain space and special characters!"; 
        header('location: sign_up.php');
    }
    else{
        
    $username=$user_name;
    
    $password = check_input($_POST['password']);
    $md5_password=md5($password);
    
    $check_query="select * from `users` where user_name='$username' and password='$md5_password'";
   
    $check_conn = mysqli_query($conn, $check_query);

   if(mysqli_num_rows($check_conn) == 0){
            $_SESSION['msg'] = "Login Failed, Invalid Input!";
           header('location: ../index.php');
  
        }
        else{
            $row=mysqli_fetch_array($check_conn);
            if ($row['user_type'] == 1){
                $_SESSION['user_type']=$row['user_type'];
                $_SESSION['user_id'] = $row['user_id'];
              
                ?>
                <script>
                    window.alert('Login Success, Welcome Admin!');
                    window.location.href='../admin/chat_room.php';
                </script>
                <?php
            }
            else{
               $_SESSION['user_name'] = $username;   
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_type']=$row['user_type'];         
                ?>
                <script>
                    window.alert('Login Success, Welcome <?php echo $_SESSION['user_name'] ?> !');
                    window.location.href='chat_room.php';
                </script>
                <?php
            }
        }
        
        }
    }
?>
