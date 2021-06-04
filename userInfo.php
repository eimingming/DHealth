<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <!-- Header Menu of the Page -->
    <head>  
        <title>User information</title>  
        <link rel= stylesheet href= "CSS/style_header.css">
        <link rel= stylesheet href= "CSS/style_userInfo.css">
    </head>
    <body>
    <?php
    require_once 'dbconnect.php';
    date_default_timezone_set("Asia/Bangkok");
    ?>
        <header>
            <img class="logo" src="pic/logo6.png" alt="logo"/>
            <ul>
                <a class="button_home" href="home.html">Home</a>      
            </ul>
            <a HREF="userInfo.php"><button class="button_test"><span>Test </span></button></a>  
        </header>

        <div class="row">
                <div class="col1">
                    <img class="pic_main" src="pic/muti_doctor.png"/>
                </div>
                <div class="col2">
                    <div class="contain">
                        <form method="POST" class="form_card" style="width: 100%; margin-top: 5%;">
                            <div class="title">
                                <h1>User Information</h1>
                            </div>
                            <div class="row_form">
                                <div class="input_contain">
                                    <div class="input_form">
                                        <label for="name">First name</label><br>
                                            <input type="text" name="firstname" placeholder="Enter your first name" required >
                                    </div>
                                    <div class="input_form">
                                        <label for="lastName">Last name</label><br>
                                            <input type="text" name="lastname" placeholder="Enter your last name" required >
                                    </div>
                                </div>
                                <div class="input_contain">
                                    <div class="input_form">
                                        <label for="gender">Gender</label><br>
                                            <select class="gender_sec" name="gender" required >
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                                <option value="other" selected>Other</option>
                                            </select>
                                    </div>
                                    <div class="input_form">
                                        <label for="age">Age</label><br>
                                            <input type="number" name="age" min="10" placeholder="Enter your age" required >
                                    </div>
                                </div>
                                <div class="input_contain">
                                    <div class="input_form">                            
                                        <label for="email">E-mail</label><br>
                                            <input type="email" name="email" placeholder="Enter your email" required > 
                                    </div>
                                    <div class="input_form">  
                                        <label for="tel">Phone No.</label><br>
                                            <input type="tel" name="tel" placeholder="Enter your phone numbre" pattern="[0-9]{10}" required><br>
                                        <small>Format: 084xxxxxxx</small>
                                    </div>
                                </div>
                                <div class="input_containButtonSubmit">
                                    <input class="button_submit" type="submit" name="function" value="Submit">
                                </div>
                        </form>
                            <form method="POST">
                                <div class="input_containButtonBack">
                                    <input type="submit" value="Back" name="function" class="button_back">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if($_POST['function'] == "Submit") {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];

            $sql = ' INSERT INTO information values(NULL,"'.$firstname.'", "'.$lastname.'",
                    "'.$gender.'", "'.$age.'", "'.$email.'", "'.$tel.'")' ;
            $objQuery = mysqli_query($con, $sql) or die("Error Query [" . $sql . "]"); 
            
            header("Location: TMSE.php");
        }
        elseif($_POST['function'] == "Back"){
            header("Location: home.html");
        }
        ?>
        <div class="footer">
            <p class="footer_text">© 2021 DHealth<p>
            <a href="https://github.com/eimingming/DHealth/tree/master"><img class="logo-git" src="pic/github-logo.png" alt="logo"/></a>
        </div>  
    </body>
<?php
ob_end_flush();
?>
</html>



  <!--  Logo 
                <div id="logo">
                    <img src="images/logo.png" />
                </div> -->  