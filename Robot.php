<?php
    require_once 'connect.php';
?>

<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <link href="css/menu2.css" rel="stylesheet" /><title>Document</title><link href="./css/menu2.css" rel="stylesheet" />
        <title>Document</title></head>
        <body>
            <div class="container">
                <div class="left">
                    <div class="circle">R</div> 
                    <p class="robot">Robot</p>
                </div>  
                <div class="right">
                    <a href="menu.html"  ><img src="svg/menu2.svg"> </a>
                </div>
            </div> 
            <div id="info">
                <div class="r1">
                <table>
                      <?php
                          $robot =mysqli_query($connect, "SELECT * FROM `Robot` WHERE `Id`=0");
                          $robot=mysqli_fetch_all($robot);
                          foreach($robot as $robot) {
                              ?>
                              <tr>
                              <div class="r1_text"></div><td><?=$robot[1] ?></td>
                              </tr>
                              <?php
                          
                          }
                          
                      ?>
                      
                  </table>
                      </div>
                      <div class="r2">
                <table>
                      <?php
                          $robot =mysqli_query($connect, "SELECT * FROM `Robot` WHERE `Id`=1");
                          $robot=mysqli_fetch_all($robot);
                          foreach($robot as $robot) {
                              ?>
                              <tr>
                              <div class="r2_text"></div><td><?=$robot[2] ?></td>
                              </tr>
                              <?php
                          
                          }
                          
                      ?>
                      
                  </table>
                      </div>
                      <div class="r4">
                <table>
                      <?php
                      $uploadir='../images/';
                          $robot =mysqli_query($connect, "SELECT * FROM `Robot` WHERE `Id`=1");
                          $robot=mysqli_fetch_all($robot);
                          foreach($robot as $robot) {
                              ?>
                              <tr>
                              <div class="r3_text"></div><td><img width='400px' height=350px' src="<?echo $robot[4]?>"/ ></td>
                              </tr>
                              <?php
                          
                          }
                          
                      ?>
                      
                  </table>
                      </div>
                      <div class="r3">
                <table>
                      <?php
                          $robot =mysqli_query($connect, "SELECT * FROM `Robot` WHERE `Id`=1");
                          $robot=mysqli_fetch_all($robot);
                          foreach($robot as $robot) {
                              ?>
                              <tr>
                              <div class="r3_text"></div><td><?=$robot[3] ?></td>
                              </tr>
                              <?php
                          
                          }
                          
                      ?>
                      
                  </table>
                  
                </div>   
        </body>
        </html>