<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <!-- Header Menu of the Page -->
    
    <head>  
        <title>Test for Alzheimer's disease</title>  
        <link rel= stylesheet href= "CSS/style_header.css">
        <link rel= stylesheet href= "CSS/style_test.css">
        <link rel= stylesheet href= "CSS/styless.css">
    </head>
    <body>
    <?php
    require_once 'dbconnect.php';
    date_default_timezone_set("Asia/Bangkok");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $detail = '
        SELECT firstname, lastname, age
        FROM information
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
        <form method=POST>
            <div class="container">
                <form id="survey-form">
                  <div class="form-group">
                    <h1 id="name-label" for="name">Thai Mental State Examination: TMSE TEST</h1></label>
                    <label id="name-label" for="name">Name</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      value="<?php echo $jobdetail['firstname']?> <?php echo $jobdetail['lastname']?>"
                    />
                  </div> 
                  <div class="form-group">
                    <label id="number-label" for="number">Age<span>(optional)</span></label
                    >
                    <input
                      type="number"
                      name="age"
                      class="form-control"
                      value="<?php echo $jobdetail['age']?>"
                    />
                  </div>

                  <!--attention-->
                  <div class="form-group">
                    <h1>Caution</h1>
                    <p>Read the numbers "7, 4, 2" and Read aloud in the reverse order of reading (change the numbers and repeat 3 times)</p>
                    <label>
                      <input
                        name="caution"
                        value="6"
                        type="radio"
                        class="input-radio"
                        checked
                      />I was able to do it 3 times</label>
                    <label>
                      <input
                        name="caution"
                        value="4"
                        type="radio"
                        class="input-radio"
                      />I was able to do it 2 times</label>
                    <label>
                      <input
                        name="caution"
                        value="2"
                        type="radio"
                        class="input-radio"
                      />I was able to do it 1 time</label>
                    <label>
                      <input
                        name="caution"
                        value="0"
                        type="radio"
                        class="input-radio"
                      />I was able to do it 0 time</label>
                  </div>

                  <!-- calculation -->
                  <div class="form-group">
                    <h1>Calculation</h1>
                    <p>Ask them to subtract 7 from 100 and answer verbally. Conduct 4 times.</p>
                    <label>
                      <input
                        name="calculation"
                        value="4"
                        type="radio"
                        class="input-radio"
                        checked
                      />I was able to do it 4 times</label>
                    <label>
                      <input
                        name="calculation"
                        value="3"
                        type="radio"
                        class="input-radio"
                      />I was able to do it 3 times</label>
                    <label>
                      <input
                        name="calculation"
                        value="2"
                        type="radio"
                        class="input-radio"
                      />I was able to do it 2 times</label>
                    <label>
                    <input
                      name="calculation"
                      value="1"
                      type="radio"
                      class="input-radio"
                    />I was able to do it 1 time</label>
                    <label>
                    <input
                      name="calculation"
                      value="0"
                      type="radio"
                      class="input-radio"
                    />I was able to do it 0 time</label>
                  </div>

                  <!-- memory -->
                  <div class="form-group">
                    <h1>Memory</h1>
                    <p>1. Remember the words you read (cherry blossoms, cats, trains) <br>
                        Have your read verbally.</p>
                    <label>
                      <input
                        name="memorySet1"
                        value="3"
                        type="radio"
                        class="input-radio"
                        checked
                      />I can say 3 words</label>
                    <label>
                    <input
                      name="memorySet1"
                      value="2"
                      type="radio"
                      class="input-radio"
                    />I can say 2 words</label>
                  <label>
                  <input
                    name="memorySet1"
                    value="1"
                    type="radio"
                    class="input-radio"
                  />I can say 1 word</label>
                  <label>
                  <input
                    name="memorySet1"
                    value="0"
                    type="radio"
                    class="input-radio"
                  />I can say 0 word</label>
                  </div>

                  <div class="form-group">
                    <p>2. Remember the words you read (plums, dogs, cars) <br>
                        Have your read verbally.</p>
                    <label>
                      <input
                        name="memorySet2"
                        value="3"
                        type="radio"
                        class="input-radio"
                        checked
                      />I can say 3 words</label>
                    <label>
                    <input
                      name="memorySet2"
                      value="2"
                      type="radio"
                      class="input-radio"
                    />I can say 2 words</label>
                  <label>
                  <input
                    name="memorySet2"
                    value="1"
                    type="radio"
                    class="input-radio"
                  />I can say 1 word</label>
                  <label>
                  <input
                    name="memorySet2"
                    value="0"
                    type="radio"
                    class="input-radio"
                  />I can say 0 word</label>
                  </div>                  

                  <!-- language -->
                  <div class="form-group">
                    <h1>Language</h1>
                    <p>1.Draw a clock pointing to 11:10</p>
                    <label>
                      <input
                        name="languageSet1"
                        value="5"
                        type="radio"
                        class="input-radio"
                        checked
                      />I was able to do it</label>
                    <label>
                      <input
                        name="languageSet1"
                        value="0"
                        type="radio"
                        class="input-radio"
                      />I didn't was able to do this</label>
                  </div>
                  <div class="form-group">
                  <img src="pic/sun.png"> <br><br>
                  <p>2. what is this ?</p>
                  <label>
                    <input
                      name="languageSet2"
                      value="0"
                      type="radio"
                      class="input-radio"
                      checked
                    />the star</label>
                  <label>
                    <input
                      name="languageSet2"
                      value="4"
                      type="radio"
                      class="input-radio"
                    />the sun</label>
                <label>
                    <input
                      name="languageSet2"
                      value="0"
                      type="radio"
                      class="input-radio"
                    />the moon</label>
                </div>
                <div class="form-group">
                <p>3.Read the sentences in 3 steps and follow them.</p>
                <p>1) pick up paper.</p>
                <p>2) fold paper.</p>
                <p>3) Lift the paper and close your eyes.</p>
                <label>
                  <input
                    name="languageSet3"
                    value="5"
                    type="radio"
                    class="input-radio"
                    checked
                  />I was able to do it</label>
                <label>
                  <input
                    name="languageSet3"
                    value="0"
                    type="radio"
                    class="input-radio"
                  />I didn't was able to do this</label>
              </div>                  
              
                  <div class="form-group">
                    <input type="submit" value="Submit" name="function" class="submit-button">
                    </button>
                  </div>
                </form>
              </div>
        <?php
        if($_POST['function'] == "Submit") {
          $name = $_POST['name'];
          $age = $_POST['age'];
          $caution = $_POST['caution'];
          $calculation = $_POST['calculation'];
          $memorySet1 = $_POST['memorySet1'];
          $memorySet2 = $_POST['memorySet2'];
          $languageSet1 = $_POST['languageSet1'];
          $languageSet2 = $_POST['languageSet2'];
          $languageSet3 = $_POST['languageSet3'];

          $sql = ' INSERT INTO TMSE values(NULL, "'.$name.'", "'.$age.'", "'.$caution.'",
                "'.$calculation.'", "'.$memorySet1.'", "'.$memorySet2.'", "'.$languageSet1.'",
                "'.$languageSet2.'", "'.$languageSet3.'", NULL)' ;
          $objQuery = mysqli_query($con, $sql) or die("Error Query [" . $sql . "]"); 
          
          header("Location: results.php");
        }
        ?>
        </main>

        <div class="footer">
            <p class="footer_text">© 2021 DHealth<p>
            <a href="https://github.com/eimingming/DHealth/tree/master"><img class="logo-git" src="pic/github-logo.png" alt="logo"/></a>
        </div>
    </body>
<?php
ob_end_flush();
?>
</html>
