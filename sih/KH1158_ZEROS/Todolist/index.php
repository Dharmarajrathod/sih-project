<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-doList</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d561671068.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>Todo App</header>
        <div class="box">
            <input type="text" placeholder="What's your plan for today?">
            <button><i class="fa-solid fa-plus"></i></button>
            </div>
            <ul class="list">
       <li></li> <!-- data comes from local storage -->
            </ul>
            <div class="clearAll">
                <button><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
<script src="./script.js"></script>
</body>
</html>