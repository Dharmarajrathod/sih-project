<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        $age = $fetch_info['age'];
        if($age =< "12"){
            header('Location: chome.php')
        }else{
            header('Location: home.php')
        }
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="Prof/style.css">
    
    <title>Landing Page Design Using HTML & CSS</title>
</head>

<body>

<div class="music-container" id="music-container">
    <div class="music-info">
      <h4 id="title"></h4>
      <div class="progress-container" id="progress-container">
        <div class="progress" id="progress"></div>
      </div>
    </div>

    <audio src="music/ukulele.mp3" id="audio"></audio>

    <div class="img-container">
      <img src="images/ukulele.jpg" alt="music-cover" id="cover" />
    </div>
    <div class="navigation">
      <button id="prev" class="action-btn">
        <i class="fas fa-backward"></i>
      </button>
      <button id="play" class="action-btn action-btn-big">
        <i class="fas fa-play"></i>
      </button>
      <button id="next" class="action-btn">
        <i class="fas fa-forward"></i>
      </button>
    </div>
  </div>

    <div class="container">
        <div class="header">

            <nav>
                <ul>
                    <button class="btn" id="btn2"><a href="Todolist/index.php">To do List</a></button>
                    <button class="btn" id="btn4">Questions</button>
                    <button class="btn btn3" id="btn2"><a href="#">Music</a></button>
                    <button class="btn" id="btn2"><a href="Category_page/demo.html">Category</a></button>
                </ul>
            </nav>
            <button class="btn" id="btn2"><a href="logout-user.php">Log out</a></button>
        </div>
        <div class="content">
            <div class="text">
                <h1>Welcome <br><span><?php echo $fetch_info['name'] ?></span></h1>
                <p>You have completed your task <br>Originally created and developed your strenghth in life <br>
                <button class="btn3">Next Task</button>
            </div>
            <div class="video">
                <video src="/Untitled design.mp4" controls width="400px" height="200px"></video>
            </div>
        </div>
    </div>

    <script src="./JS/music.js"></script>
</body>

</html>