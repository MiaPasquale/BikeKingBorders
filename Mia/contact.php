<?php require('connect.php');?>

<?php include('header.php')?>

    <!-- sign up for a new account -->
<?php
  if(isset($_POST['sign-up'])){
    //get info from form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $type = trim($_POST['type']);

    $salt ="anExtraBit";
    $password = md5($password.$salt);

    //query database
    $stmt=$conn->prepare("SELECT * FROM users WHERE user_name=:user_name");
    $stmt->bindParam("user_name",$username);
    $stmt->execute();
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){

      echo("Account Exists");
    }
    else {
      //insert record
      $stmt=$conn->prepare("INSERT INTO 
      users
      (user_name, user_password, user_type,user_active)
      VALUES
      (:user_name,:user_password,:user_type,1)");
      $stmt->bindParam("user_name",$username);
      $stmt->bindParam("user_password",$password);
      $stmt->bindParam("user_type",$type);

      $stmt->execute();    

    }
  }
?>

<!-- sign in to existing account -->
<?php

?>

<body>

    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create Account</a>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Login</button>
      </p>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <h4>Create Your Account</h4>
                <form class="create-account" action="" method="POST" name="sign-up">
                    <div class="row mb-3">
                      <label for="inputUsername" class="col-sm-2 col-form-label">Username:</label>  
                      <div class="col-sm-10">
                        <input type="username" class="form-control" name="username" id="inputUsername">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
            
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="inputPassword">
                      </div>
                    </div>
                        <select class="form-select mb-3" aria-label="user type" name="type">
                          <option selected>Choose User Type</option>
                          <option value="user">User</option>
                          <option value="staff">Staff</option>
                        </select>
                        <br>
                    <button type="submit" name="sign-up" class="btn btn-primary">Create</button>
                  </form> 
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <form class="login">
                    <h4>Login to your account</h4>
                    <div class="row mb-3">
                      <label for="inputUsername" class="col-sm-2 col-form-label">Username:</label>  
                      <div class="col-sm-10">
                        <input type="username" class="form-control" id="inputUsername">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
          
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                      </div>
                    </div>
                        <select class="form-select mb-3" aria-label="user type">
                          <option selected>Choose User Type</option>
                          <option value="user">User</option>
                          <option value="staff">Staff</option>
                        </select>
                        <br>
                    <button type="submit" name="sign-in" class="btn btn-primary">Sign in</button>
                  </form>               </div>
          </div>
        </div>
      </div>

      <?php include('footer.php');?>