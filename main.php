<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика ПХП </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/cat.gif" width="200" height="300">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> я научился создавать переменные </p>
                    <p> Изучил операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 4;
                        $b = 11;
                        $c = $a * $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?>	 <br> 
					
						<?php
						echo 'просто строка';
						echo ' "I\'ll be soon"';
						$b = 1;
						echo "$b";
						echo '$b';
					?>


            </div>

            <div class="article">
                <p class="text">
                    Здесь должна быть какая-то интересная цитата 
                    и она была бы очень интересной будь философом,
					но получилось как получилось
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
