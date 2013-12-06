<?php 

    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
     ?>
<br><h1 style="font-size:30px">Using Components with Known Vulnerabilities</h1><br>
<table border="1" style="font-size:14px;">
<tr>
<td><b>NOT:</b>&nbsp Uygulamalara her erişildiğinde sunucu üzerinde erişim kontrolleri gerçekleştirmek gerekir.
    Eğer ki doğrunlanma kabul edilmezse, saldırgan türlü yollar deneyerek yetkisiz erişim hakkı kazanabilir.
</td>
</tr>
</table><br>
            <p><form name="broken_auth" action="Using_Components_with_Known_Vulnerabilities.php" method="GET">
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
        </div>