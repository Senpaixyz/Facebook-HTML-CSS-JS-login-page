<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname . " " . $lname;
    $email = $_POST['email'];
    $password = $_POST['pswd']; // pdeng md5 for simple encryption
    $mm = $_POST['mm'];
    $dd = $_POST['dd'];
    $yyyy = $_POST['yyyy'];
    $birthday = $mm . " " . $dd . " "  . $yyyy;
    $gender = $_POST['gender'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link href='login.css' rel='stylesheet' type='text/css'>
    <link rel="icon" href="logo.png">
</head>
<body>
<div class="container">
        <div id="navwrapper">
                    <div id="navbar"> 
                        <center>
                        <h1 class="fblogo">Facebook</h1>
                        </center>
                    </div>
        </div>
        <div id="contentwrapper">
            <div id="content">
                <div class="fbbox">
                    <div class="warning">Your personal information</div>
                    <hr>
                    <div class="information">
                        <?php
                            echo "<div class='info'><b>Name</b>: ". $fullname . "</div>";
                            echo "<div class='info'><b>Email</b>: ". $email . "</div>";
                            echo "<div class='info'><b>Password</b>: ". $password . "</div>";
                            echo "<div class='info'><b>Birthday</b>: ". $birthday . "</div>";
                            echo "<div class='info'><b>Gender</b>: ". $gender . "</div>";
                        ?>
                    </div>
                    <div class="fbimage">
                        <img src="logo.png" width=250 height=250>
                    </div>
                </div>
                        <div class="create" style="font-size:7px;"><div class="link h">Create a Page</div> for a celebrity, band or business.</div>
                <hr>
            </div>
        </div>
</div>
</body>
</html>