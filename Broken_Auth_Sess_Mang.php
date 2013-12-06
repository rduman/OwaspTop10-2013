<?php 
    session_start();
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
       ?>
<br><h1 style="font-size:30px">Broken Authentication and Session Management</h1><br>
<table border="1">
    <tr>
 <td><b>NOT:</b>&nbsp Uygulamanın zaman aşımı düzgün ayarlanmamış ise kullanıcı siteye erişmek için ortak bir bilgisayar kullanıyor olabilir.
     Kullanıcı sadece tarayıcı sekmesini kapatır ve gider. 
     Saldırgan, bir saat sonra aynı tarayıcıyı kullanarak oturumu açabilir.
 </td>
    </tr>
</table><br>
     <p><form name="broken_auth" action="Broken_Auth_Sess_Mang.php" method="GET">
         <?php          
         if($_SESSION['login']!="true" && !isset($_SESSION['login'])){
         echo "Username: &nbsp&nbsp&nbsp<input name='username' type='text' class='input username'  onfocus='this.value=''' /><!--END USERNAME-->
               <br>Password: &nbsp&nbsp&nbsp&nbsp<input name='password' type='password' class='input password' onfocus='this.value=''' /><!--END PASSWORD-->
               <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <input class='btn btn-primary btn-large' type='submit' name='submit' value='Login' class='button' />
 ";
         }?>
           </form></p>
                    <?php
                     header('Content-type:text/html; charset=utf-8');
                      if($_GET)
                      {
                            $username=$_GET["username"];
                            $password=md5($_GET["password"]);
                            $sql_check = $db->query("select * from users where username='".$username."' and password='".$password."'");
                            if($row=$sql_check->fetch(PDO::FETCH_ASSOC)){                             
                              $_SESSION["username"]=$username;
                              $_SESSION['login']="true";
                              header("Location:index.php");
                          }
                          else {                               
                                echo "Login failed.";
                            }
                       }   
                    ?>
          </div>         
        </div>