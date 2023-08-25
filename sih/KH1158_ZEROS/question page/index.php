<?php require_once "../controllerUserData.php"; ?>
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
        if($status == "verified"){
            if($code != 0){
                header('Location: ../reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
    }
}else{
    header('Location: ../login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Questions Page</title>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="./logo.png" alt="Logo" />
        <h3>GetVision</h3>
      </div>
    </div>
  </header>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="question">
          <label for="" class="question-label">1.	What is your current mood?
          </label><br>

          <input type="radio" name="value-1" id="1" class="options">
          <label for="1" class="option-lable">Happy</label><br>
          <input type="radio" name="value-1" id="2" class="options">
          <label for="2" class="option-lable">Sad</label><br>
          <input type="radio" name="value-1" id="3" class="options">
          <label for="3" class="option-lable">Stressed</label><br>
          <input type="radio" name="value-1" id="4" class="options">
          <label for="4" class="option-lable">Neutral</label><br>
          <input type="radio" name="value-1" id="5" class="options">
          <label for="5" class="option-lable">Confused</label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">2.	What are the reasons for your current mood?
          </label><br>

          <input type="radio" name="value-2" id="1" class="options">
          <label for="1" class="option-lable">Academics</label><br>
          <input type="radio" name="value-2" id="2" class="options">
          <label for="2" class="option-lable">Social Interaction</label><br>
          <input type="radio" name="value-2" id="3" class="options">
          <label for="3" class="option-lable">Personal Devolepment</label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">3.	How productive your day was?
          </label><br>

          <input type="radio" name="value-3" id="1" class="options"><br>
          <label for="1" class="option-lable">Highly Productive</label>
          <input type="radio" name="value-3" id="2" class="options"><br>
          <label for="2" class="option-lable">Somewhat Productive</label>
          <input type="radio" name="value-3" id="3" class="options"><br>
          <label for="3" class="option-lable">Wasted the day</label>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">4.	How often do you come out of your Comfort zone?
          </label><br>

          <input type="radio" name="value-4" id="1" class="options">
          <label for="1" class="option-lable">Very often</label><br>
          <input type="radio" name="value-4" id="2" class="options">
          <label for="2" class="option-lable">Sometimes</label><br>
          <input type="radio" name="value-4" id="3" class="options">
          <label for="3" class="option-lable">Rarely or not at all<br>
          </label>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">5.	What do You think you need the most right now?
          </label><br>

          <input type="radio" name="value-5" id="" class="options">
          <label for="1" class="option-lable">Discipline</label><br>
          <input type="radio" name="value-5" id="2" class="options">
          <label for="2" class="option-lable">Focus</label><br>
          <input type="radio" name="value-5" id="3" class="options">
          <label for="3" class="option-lable">Growth</label><br>
          <input type="radio" name="value-5" id="4" class="options">
          <label for="4" class="option-lable">Balance</label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">6.	How many hours do you sleep?
          </label><br>

          <input type="radio" name="value-6" id="1" class="options">
          <label for="1" class="option-lable">9 or more Hours
          </label><br>
          <input type="radio" name="value-6" id="2" class="options">
          <label for="2" class="option-lable">7-9 Hours</label><br>
          <input type="radio" name="value-6" id="3" class="options">
          <label for="3" class="option-lable">Less than 7 Hours</label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">7.	What do you do in your free time?
          </label><br>

          <input type="radio" name="value-7" id="1" class="options">
          <label for="1" class="option-lable">Listen/Sing Music
          </label><br>
          <input type="radio" name="value-7" id="2" class="options">
          <label for="2" class="option-lable">Read Books
          </label><br>
          <input type="radio" name="value-7" id="3" class="options">
          <label for="3" class="option-lable">Creative Activity
          </label><br>
          <input type="radio" name="value-7" id="4" class="options">
          <label for="4" class="option-lable">Physical Activity
          </label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">8.	What is your exercise routine?
          </label><br>

          <input type="radio" name="value-8" id="1" class="options">
          <label for="1" class="option-lable">Daily
          </label><br>
          <input type="radio" name="value-8" id="2" class="options">
          <label for="2" class="option-lable">2-3 times in a week
          </label><br>
          <input type="radio" name="value-8" id="3" class="options">
          <label for="3" class="option-lable">Once in a week
          </label><br>
          <input type="radio" name="value-8" id="4" class="options">
          <label for="4" class="option-lable">Once in a week
          </label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">9.	Have you ever scheduled your daily tasks? If yes, did you follow it completely?
          </label><br>

          <input type="radio" name="value-9" id="1" class="options">
          <label for="1" class="option-lable">Never tried
          </label><br>
          <input type="radio" name="value-9" id="2" class="options">
          <label for="2" class="option-lable">Only made, never followed
          </label><br>
          <input type="radio" name="value-9" id="3" class="options">
          <label for="3" class="option-lable">Made, but couldn't follow completely
          </label><br>
          <input type="radio" name="value-9" id="4" class="options">
          <label for="4" class="option-lable">Made and followed it completely
          </label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">10. How are you at your Academics?
          </label><br>

          <input type="radio" name="value-10" id="1" class="options">
          <label for="1" class="option-lable">Excellent
          </label><br>
          <input type="radio" name="value-10" id="2" class="options">
          <label for="2" class="option-lable">Intermediate</label><br>
          <input type="radio" name="value-10" id="3" class="options">
          <label for="3" class="option-lable">Below Average</label><br>
        </div>
      </div>
      <div class="carousel-item">
        <div class="question">
          <label for="" class="question-label">11. Whom do you communicate when you're tensed?</label><br>

          <input type="radio" name="value-11" id="1" class="options">
          <label for="1" class="option-lable">Parents
          </label><br>
          <input type="radio" name="value-11" id="2" class="options">
          <label for="2" class="option-lable">Friends
          </label><br>
          <input type="radio" name="value-11" id="3" class="options">
          <label for="3" class="option-lable">Guide
          </label><br>
          <input type="radio" name="value-11" id="4" class="options">
          <label for="4" class="option-lable">None
          </label><br>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <a href="../home.php"> <input type="submit" class="btn btn-outline-dark btn-lg dark-btn" value="Submit"></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
</body>
</html>