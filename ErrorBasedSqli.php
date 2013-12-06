<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
   ?>
<br><h1 style="font-size:30px">Error Based Sql Injection</h1><br>
<table border="1">
 <tr>
 <td><b>NOT:</b>&nbsp Database den verilerin hata mesajlarını göz önünde bulundurarak verilerin çekilmesidir.</td>
 </tr>
</table><br>
            <p><form name="errorbasedsqli" action="ErrorBasedSqli.php" method="GET">
                User ID:&nbsp<input type="text" name="userid">&nbsp&nbsp
                <input class="btn btn-primary btn-large" type="submit" value="Submit">           
            </form></p>
                <?php
                session_start();
                $userid=$_GET['userid'];
                $query=$db->query("SELECT * from users WHERE id='". $userid ."'");
                if(!$query){
                    echo "<pre>"; \print_r($db->errorInfo()); echo "</pre>";
                }
                else {
                    while($result=$query->fetch(PDO::FETCH_ASSOC)) {
                        $name=$result['first_name'];
                        $data.= '<pre>';
                        $data .= 'ID: ' . $userid . '<br>First name: ' . $name . '<br>Username: ' . $_SESSION["username"];
                        $data .= '</pre>';
                    }
                }
                echo $data;
                ?>                    
          </div>         
        </div>