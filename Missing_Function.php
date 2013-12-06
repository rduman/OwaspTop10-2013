<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
   ?>
<br><h1 style="font-size:30px">Missing Function Level Access Control</h1><br>
<table border="1">
<tr>
<td><b>NOT:</b>&nbsp Kullanıcının sayfasına veya admin paneline herhangi bir kontrol olmadan da girilebilir.
Admin paneline izinsiz giriş yapılırsa eğer güvenlik seviyelendirmesinde bir sorun olduğunun göstergesidir. Bu sayede çeşitli payloadlarla giriş yapılabilir.
</td>
</tr>
</table><br>
<form name='Missing_Func' action='Missing_Function.php' method='GET'>
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
                      }
                          else {                               
                                echo "Login failed.";
                            }
                       }
                       if(isset($_SESSION["username"])){
                              echo "You are logged in as ".$_SESSION['username'];
                              echo "<textarea disabled style='color:black;width:725px; height:600px; background-color:white'>";  
 
                           
                       }
                    ?>  
    </form>
          </div>         
        </div>