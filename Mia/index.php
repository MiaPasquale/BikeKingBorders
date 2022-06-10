<?php require('connect.php');?>

     <!-- Bike king borders haeding --> 
     <div class="first"></div>
     <div class="second"></div>
     <div class="text" id="main-heading">
         <h1>
           <span class="main-header"> BIKE KING BORDERS </span>
          </h1>
     </div>

<?php include('header.php');?>

<body>
    <main>
        <!-- About -->
        <section class="about">
          <div class="about-container">
            
            <h3>About Us</h3>
              <p>
                  We are a quality bike shop in Scotland serving the whole UK for over
                  18 years. <br />We have a huge range of cycling essentials in stock
                  with home delivery available on top cycling brands. <br />At Bike
                  King Borders we do things simply. Our friendly atmosphere awaits you
                  where you can hire a bike, get your bike fixed or even buy a new
                  one. <br />Take a closer look at our various bikes and bike accessories.
                </p>
              </div>
            </div>
          </div>
        </section>
    

        <!-- sign up / login -->
        <?php
        if(isset($_POST['login'])){
          //get info from form
          $salt ="anExtraBit";
          $username = trim($_POST['loginBox']);
          $password = trim($_POST['passwordBox']);
          $password = md5($password.$salt);

          $stmt=$conn->prepare("SELECT * FROM users WHERE user_name=:user_name AND user_password=:user_password");
          $stmt->bindParam("user_name",$username);
          $stmt->bindParam("user_password",$password);
          $stmt->execute();
          $row=$stmt->fetch(PDO::FETCH_ASSOC);

          if($stmt->rowCount()>0){
            
            $_SESSION['login']    =      true;
            $_SESSION['type']     =      $row['user_type'];
            $_SESSION['username'] =      $row['user_name'];
            $_SESSION['password']  =   $row['user_password'];
            
            // new code added to move user to offers page
            if(password_verify($_POST['user_password'], $password))
            {
              ?>
              <div class="alert alert-success" role="alert">
                Login successful.
              </div>
              <?php
              header("Location: hhtp://localhost/Mia/offers.php");
              ?>
            }
            <?php
            else{
              ?>
            <div class="alert alert-danger" role="alert">
              Login unsuccessful, please try again.
            </div> 
            <?php 
            }
            ?>
            <?php
      }
    }         
                

      if(!isset($_SESSION['login']))
      {
          ?>
          <form name="login" action="" method="POST">                     
          <div class="mb-3">
            <label for="loginBox" class="form-label">Username</label>
            <input type="text" class="form-control" id="loginBox" name="loginBox">
          </div>
            
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="passwordBox">
          </div> 
            <button name="login" type="submit" value="login" class="btn btn-primary">Sign In</button>
          <p>Don't have an account? Sign up <a href="contact.php">here</a>
        </form>

        <?php
        }
        ?>

        <!-- displaying images from gallery -->
        <script>
        function showImage(imagePath)
        {
          window.location=""+imagePath
        }
        </script>
<?php include('footer.php');?>