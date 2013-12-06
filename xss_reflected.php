<?php 

    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
     ?>

<br><h1 style="font-size:30px">XSS Reflected</h1><br>
<table border="1">
    <tr>
 <td><b>NOT:</b>&nbsp XSS Reflected saldırgan, sunucudaki açıklığı kullanarak bir link oluşturur. 
     Daha sonradan kullanıcı linke tıklar, sunucu da isteğe uygun web sayfası içeriği hazırlayıp kullanıcıya yollar. 
     Bu cevapta saldırganın hazırladığı URL nedeniyle kötü amaçlı kodlar vardır. 
     Kullanıcının tarayıcısında dönen sayfa çalıştığında yetkisiz kod çalıştırılır.</td>
    </tr>
 </table><br><br>
            <p><form name="broken_auth" action="xss_reflected.php" method="GET">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbspName:&nbsp&nbsp<input type="text" name="name">&nbsp&nbsp<br/>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp<input class="btn btn-primary btn-large" type="submit" value="Submit">           
            </form></p>                
                <?php
                  $name=$_GET['name'];
                  if($_GET){
                    if(isset($name) and $name!=""){
    
                       echo "<pre>";
                       echo "Hello ".$name."<br>";
                       echo "</pre>";
                    }
                    else
                       echo "Lütfen boş kutucukları doldurunuz.";
                  }
                ?>

          </div>         
        </div><!--/span-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

