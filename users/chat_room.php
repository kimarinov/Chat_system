
<?php 
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/replace_function.php';
session_start();
if(isset($_SESSION['user_name'])){
    $curent_user_name = $_SESSION['user_name'];
    echo 'Welcome '.$_SESSION['user_name'];
    echo '<a href="logout.php"> Log out</a><br>';
}
 $user_id = $_SESSION['user_id'];

?>

<div class="col-lg-8">
   
    <div>
        <div class="panel panel-default" style="height: 400px;">
           
            
            <div id="chat_area" style="margin-left:10px; max-height:400px; overflow-y:scroll;   display: flex;
  flex-direction: column-reverse;">
                <?php 
                $read_query = "SELECT m.msg_content, u.user_name, u.user_id, m.msg_id  FROM messages  m JOIN users u ON m.user_id = u.user_id WHERE `date_deleted` IS NULL ORDER BY m.msg_id DESC";
                $read_result = mysqli_query($conn,$read_query);
                while($row = mysqli_fetch_assoc($read_result)){
                    $message = $row['msg_content'];
                    $user_name = $row['user_name'];
                  ?>
                   <div class="input-group">
                        <?php  
                        if ($user_id == $row['user_id']) { 
                            echo "<span style='color:red'>you say: </span>";
                            echo "<span style='color:red'> $message</span>";
                            ?>  <a href="delete_msg.php?id=<?= $row['msg_id'] ?>" type="submit" title = "Delete"  class="glyphicon glyphicon-trash"></a><?php 
                        }
                        else{
                            echo "$user_name say:";
                            echo " $message";
                        }
                      ?>
                  </div>
                  <?php 
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
    $insert_messge = "INSERT INTO `messages` (`msg_content`, `user_id`) VALUES ('$message', '$user_id')";
    $insurt_rezult = mysqli_query($conn, $insert_messge);
    header("Refresh:0");
}


?>