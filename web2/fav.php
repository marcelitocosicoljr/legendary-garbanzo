<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {


              $name= $_POST["username"];

             if (isset($_POST["color"])){
                $color=$_POST["color"];
             }else{
                $color='';
             }


              $dish= $_POST["dish"];


              if (empty($name)) {
                echo "<p>Name is empty</p> <br />";
              } else {
                echo "<p>Thanks for your selection ". $name. "</p><br />";
              }

              if (empty($dish)) {
                echo "<p>Sharing your favourite dish is happy! :) </p><br />";
              } else {
                echo "<p>You really enjoyed ". $dish. "</p><br />";
              }

              if (empty($color)) {
                echo "<p>I guess you don't drink alcohol.. :)</p> ";
              } else {
                echo "<p>-especially with a nice ". $color. " wine </p><br />";
              }


              
              
              
        }
        
    ?>
</body>
</html>