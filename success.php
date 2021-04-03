<!-- PATRICK AVIEL PERALTA -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <h3>fakeBook</h3>
    <div class="main-container">
        
        <h3>👋Welcome!</h3>
<?php
        if(isset($_SESSION['first_name'])){
            echo "<h1>{$_SESSION['first_name']}!</h1>";
            echo "<h3 class='email'>{$_SESSION['email']}</h3>";
        }
?>
        <p>
            Chuck cow shoulder, brisket filet mignon corned beef doner ground round biltong. 
            Prosciutto short ribs boudin frankfurter porchetta tenderloin landjaeger ribeye pork 
            chop picanha. Rump ribeye landjaeger pastrami. Brisket short ribs ham cow shoulder. 
            Porchetta beef ribs fatback shoulder, t-bone sausage kielbasa tenderloin pork.
        </p>
        <a href="process.php">Log Out</a>
    </div>
</body>
</html>