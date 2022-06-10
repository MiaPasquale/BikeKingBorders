<?php require('connect.php');?>
<?php include('header.php');?>

<?php
if(isset($_SESSION['login'])){
                ?>

                <!--welcome cookie-->
                <h1 id="welcome">Welcome, <script>document.write( getCookie("name"));</script></h1>
                <?php

                    if(isset($_POST['update_user'])){
                        $user_id    = $_POST['user_id']
                        $username   = $_POST['user_name'];
                        $password   = $_POST['user_password'];
                        $type   = $_POST['user_type']
                        $stmt=$conn->prepare("UPDATE users SET user_name=:user_name, user_password=:user_password WHERE user_id=:user_id");

                        $stmt->bindParam("user_id",$user_id);
                        $stmt->bindParam("username",$user_name);
                        $stmt->bindParam("password",$user_password);
                        $stmt->bindParam("type",$user_type);

                        if($stmt->execute()){
                            ?>
                            <div class="alert alert-success" role="alert">
                                Changes Made
                            </div>
                            <?php
                            
                        }
                        else{
                            ?>
                                <div class="alert alert-success" role="alert">
                                 Changes not made
                                </div>
                            <?php
                        }

                    }
                    ?>

                    <?php include('footer.php');?>