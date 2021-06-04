<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <!-- Header Menu of the Page -->
    <head>  
        <title>Brain test results</title>  
        <link rel= stylesheet href= "CSS/style_header.css">
        <link rel= stylesheet href= "CSS/style_results.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <?php
    require_once 'dbconnect.php';
    date_default_timezone_set("Asia/Bangkok");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $caution = $_POST['caution'];
    $calculation = $_POST['calculation'];
    $memorySet1 = $_POST['memorySet1'];
    $memorySet2 = $_POST['memorySet2'];
    $languageSet1 = $_POST['languageSet1'];
    $languageSet2 = $_POST['languageSet2'];
    $languageSet3 = $_POST['languageSet3'];

    $detail = '
        SELECT *
        FROM TMSE
        ORDER BY id DESC
        ';
    $objQuery = mysqli_query($con, $detail) or die("Error Query [" . $detail . "]");
    $jobdetail = mysqli_fetch_array($objQuery);
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
                    <div class="contain" style="margin-left: 10%;">
                        <h1>Brain test results</h1>
                        <p1>Name : <?php echo $jobdetail['name']?></p1><br>
                        <p1>Age : <?php echo $jobdetail['age']?></p1><br><br><br>
                        <p1>You have the chance to be :</p1><br><br>
                        <p1>If your score is greater than 23, it's normal <br>
                            but if your score is less or equal to 23, you have a risk.</p1><br><br>
                        <div class="row_score">
                            <div class="score">
                                <p3>
                                    <?php
                                        $detail = '
                                        SELECT caution+calculation+memorySet1+memorySet2+languageSet1+languageSet2+languageSet3
                                        as total FROM TMSE 
                                        GROUP BY id
                                        ORDER BY id DESC limit 1
                                        ';
                                        $objQuery = mysqli_query($con, $detail) or die("Error Query [" . $detail . "]");
                                        $jobdetail = mysqli_fetch_array($objQuery);

                                        echo $jobdetail['total']
                                    ?>
                                </p3><p4>score</p4>
                            </div>
                        </div>
                        <p2>*To be sure, you should consult the doctor further.​</p2>
                    </div>
                </div>
                <div class="col2">
                    <div class="contain" style="margin-right: 10%;">
                        <img class="pic_result" src="pic/pic_result.png"/>
                        <h2>Instruction</h2>
                        <a href="https://www.alz.org/alzheimers-dementia/what-is-alzheimers">What is Alzheimer’s Disease?<i class="material-icons">touch_app</i></a></br>
                        <a href="https://www.alz.org/alzheimers-dementia/stages">Stages of Alzheimer's<i class="material-icons">touch_app</i></a>
                    </div>
                </div>
            </div>
        </div>

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