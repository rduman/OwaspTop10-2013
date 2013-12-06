<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
   ?>
<br><h1 style="font-size:30px">Blind Sql Injection</h1><br>
<table border="1">
  <tr>
     <td><b>NOT:</b>&nbsp Database in true veya false değer döndürmesine dayanan bir sql injection atak türüdür.
Bu atak türü database configüre edilirken kümesel genel hata mesajları vermesiyle oluşur.
     </td>
  </tr>
</table><br>
            <p><form name="sqlinjection" action="BlindSqli.php" method="GET">
                User ID:&nbsp<input type="text" name="userid">&nbsp&nbsp
                <input class="btn btn-primary btn-large" type="submit" value="Submit">           
            </form></p>
                <?php
                session_start();
                $userid=$_GET['userid'];
                $query=$db->query("SELECT * from users WHERE id='". $userid ."'");
                while($result=$query->fetch(PDO::FETCH_ASSOC)) {
                    $name=$result['first_name'];
                    $data.= '<pre>';
                    $data .= 'ID: ' . $userid . '<br>First name: ' . $name . '<br>Username: ' . $_SESSION["username"];
                    $data .= '</pre>';
                }
                echo $data;
                ?>                    
          </div>         
        </div>