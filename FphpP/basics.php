<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class = "container">
        <?php
          $languages = array('python', 'java', 'php');
          echo $languages[2];
          echo "<br>";
          echo count($languages); 

          $a = 0;
          while($a < count($languages)){
            echo "<br>The value of languages : ";
            echo $languages[$a];
            $a++;
          }

         foreach ($languages as $key => $value) {
            echo "<br> the value by for each is ";
            echo $value;
         }



        ?>
    </div>
    
</body>
</html>