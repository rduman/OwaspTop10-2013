<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
   ?>
           <br> <h1 style="font-size:30px">Security Misconfiguration</h1><br>
<table border="1">
    <tr>
 <td><b>NOT:</b>&nbsp Dizin listeleme sunucu tarafından devre dışı bırakılmamış olabilir. Saldırgan bütün dizinleri
listeleyerek istediği sayfayı keşfedebilir.</td>
    </tr>
</table><br>           
            <p><form name="sqlinjection" action="Security_Misconfiguration.php" method="GET">
            <select name="listbox" size="1"> 
            <option >Seçim Yapınız</option> 
                  <?php 
                  if ($handle = opendir('../owasp/')) { 
                      while (($file = readdir($handle)) !== false) {                        
                          if ($file != '.' && $file != '..' ) { 
                              $fileName = str_replace('', '.php', $file);                              
                              if(pathinfo($fileName,PATHINFO_EXTENSION)=='php')
                                 echo '<option value="' . $file . '">' . $fileName . '</option>'; 
                          } 
                      } 
                      closedir($handle); 
                  }
                 ?> 
          </select> 
                <input class="btn btn-primary btn-large" type="submit" value="View">           
            </form> <br>              
                    <?php 
                    if($_GET){
                    $listfile=fopen($_GET['listbox'],"r");
                     while( !feof( $listfile ) )
                          $data.= fgets( $listfile ) . "\n";
                    echo "<textarea disabled maxlenght='500' style='color:black;width:725px; height:300px; background-color:white'>".$data."</textarea>";
                    }
                    ?>                     
          </div>         
        </div>