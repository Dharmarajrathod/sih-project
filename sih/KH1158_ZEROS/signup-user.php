<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .containe {
    position: relative;
    max-width: 81rem;
    width: 100%;
    margin: 0 auto;
    padding: 0 3rem;
    z-index: 10;
  }
  
  header {
    position: relative;
    z-index: 70;
  }
  
  header .containe {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .overlay {
    display: none;
  }
.logo {
    display: flex;
    align-items: center;
    cursor: pointer;
  }
  
  .logo img {
      width: 116px;
      margin-right: 2.6rem;
      margin-top: 1.0rem;
  }
  
  .logo h3 {
    margin-top: 1.0rem;

    position: relative;
    color: var(--darkTwo);
    font-size: 3.55rem;
    line-height: 1.2;
    font-weight: 700;
  }
    </style>
</head>
<body>
    <style>
        body{
    background: #b1c8c1;
    font-family: 'Poppins', sans-serif;
}
    </style>
    <header>
        <div class="containe">
            <div class="logo">
                <img src="logo.png" alt="Logo" />
                <h3>GetVision</h3>
            </div>
        </div>
    </header>
        <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="age" placeholder="Age" required value="<?php echo $age ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>