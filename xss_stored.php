<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
     ?>
<br><h1 style="font-size:30px">XSS Stored</h1><br>
<table border="1">
    <tr>
 <td><b>NOT:</b>&nbsp XSS Stored ile sunucu bazlı ataklar yapılabilir. 
     Bu durum sunucu bazlı olduğu için bütün kullanıcıları etkiler. Çeşitli javascript kodlarıyla zafiyeti istismar edebilirsiniz.</td>
    </tr>
 </table><br>
 <form name="broken_auth" action="xss_stored.php" method="GET">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbspName:&nbsp&nbsp<input type="text" name="name">&nbsp&nbsp<br/>
                Type your message:&nbsp&nbsp<input type="text" name="message" maxlenght="150" style="height:188px; width:190px">
                 <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 <input class="btn btn-primary btn-large" type="submit" value="Submit">           
            </form>                
                <?php
                  $query=$db->query("SELECT name,comment from comment");
                  while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                       echo "<pre>";
                       echo "Name: ".$row['name']."<br>";
                       echo "Message: ".$row['comment'];
                       echo "</pre>";
                  }
                  if($_GET){
                    if(isset($_GET['message']) and isset($_GET['name']) and $_GET['message']!="" and $_GET['name']!=""){
                       $db->exec("INSERT INTO comment (name,comment) values ('".$_GET['name']."','".$_GET['message']."')");
                       echo "<pre>";
                       echo "Name: ".$_GET['name']."<br>";
                       echo "Message: ".$_GET['message'];
                       echo "</pre>";
                    }
                    else
                       echo "Lütfen boş kutucukları doldurunuz.";
                  }
                ?>
          </div>         
        </div>