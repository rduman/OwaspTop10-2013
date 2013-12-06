<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
       ?>
<br><h1 style="font-size:30px">Unvalidated Redirects and Forwards</h1><br>
<table border="1" style="font-size:14px;">
<tr>
<td><b>NOT:</b>&nbsp Saldırgan phishing gerçekleştirir ve malware yükleyen saldırgan, site kullanıcılarını yönlendiren zararlı bir URL'yi yaratır.
</table><br>
            <p><form name="Unvalidated" action="Unvalidated_Redirects_and_Forward.php" method="GET">     
          Yönlendirilecek site: &nbsp&nbsp&nbsp<br>
          http://&nbsp<input name="website" type="text" class="input username" style="width:300px"  onfocus="this.value=''" />
          <input class="btn btn-primary btn-large" type="submit" name="submit" value="Send" class="button" />
               </form>
            </p>
                    <?php
                        session_start();  
                        if($_GET){                      
                            $url=$_GET['website'];
                            $url="http://".$url;
                            //header("Location:$url");
                            echo "<script>window.location.replace(\"$url\");</script>";
                         }
                    ?>
          </div>         
        </div>
