<?php 
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/replace_function.php';
session_start();

if(isset($_SESSION['user_name'])){
    $curent_user_name = $_SESSION['user_name'];
    echo 'Welcome '.$_SESSION['user_name'];
    echo '<a href="logout.php"> Log out</a><br>';
}


?>

<div class="col-lg-8">
   
    <div>
        <div class="panel panel-default" style="height: 400px;">
           
            <div style="height:10px;"></div>
            <div id="chat_area" style="margin-left:10px; max-height:400px; overflow-y:scroll;   display: flex;
  flex-direction: column-reverse;">
                <?php 

                $read_query = "SELECT * FROM `message` ORDER BY `message`.`id` DESC";
                $read_result = mysqli_query($conn,$read_query);
                while($row = mysqli_fetch_assoc($read_result)){
                    $message = $row['message'];
                    $user_name = $row['user_name'];
                   
                  
                    echo '<p style="color:red">'.$user_name. ' ' .$message.'</p>';
                    
                }
             ?>
            </div>
        </div>
       <form method="post" action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type message..." name="message" >
                <span class="input-group-btn">
                <button class="btn btn-success" type="submit" id="send_msg"  name = "">
                <span class="glyphicon glyphicon-comment"></span> Send
                </button>
                </span>
            </div>
      </form>
        
    </div>          
</div>

<?php 
if(isset($_POST['message'])){
    $message = $_POST['message'];
    $message =replace_to_emoji($message);
    $insert_messge = "INSERT INTO `message` (`message`, `user_name`) VALUES ('$message', '$curent_user_name')";
    $insurt_rezult = mysqli_query($conn, $insert_messge);
    header("Refresh:0");
}
?>