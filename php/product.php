<?php

    include_once('connect.php');
    $query="select * from p_table";
    $result=mysqli_query($con,$query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././css/if1.css">
     <!-- fonts -->
     <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Orbitron:wght@900&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Monoton&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
 
     <!--Javascript-->
     <script src="../js/mainbtn.js"></script>
     <script src="../js/main.js"></script>

     <title>PRODUCTS</title>
    </head>
    

    <body>
        <div class="t-front">
            <a id="main-btn" onclick="move();" href="#">
                <span class="t-w">
                    PRODUCTS
                </span>
            </a>
            <br>
            <br>
            <h3 class="slogan"></h3>
        </div>
        <div class="holder" id="holdera">
            <table align="center" border="1px" style="width:600px; color:white;" >
                <tr>
                    <th>PRODUCT NAME</th>
                    <th>DESCRIPTION</th>
                </tr>
                <?php
                while($rows=mysqli_fetch_assoc($result))
                {
                ?>
                <tr>
                    <td> <?php echo $rows['p_name'] ;?></td>
                    <td> <?php echo $rows['p_description'] ;?></td>                
                </tr>   
                <?php

                }

                ?>

            </table>

        </div>
    </body>
    </html>