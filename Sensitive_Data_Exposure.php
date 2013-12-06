<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
   ?>
<br><h1 style="font-size:30px">Sensitive Data Exposure<h1><br><br>
<table border="1" style="font-size:14px;">
<tr>
<td><b>NOT:</b>&nbsp Pek çok web uygulamaları kredi kartlarını, kimlik doğrulama gibi hassas verileri korumakla görevlidir.
    Hassas veriler tarayıcı ile gönderileceği zaman özel trafik dışında ekstra şifrelemeyede gerek vardır.
</td>
</tr>
</table><br>  
<form  name="encrypt_with_salted" action="Sensitive_Data_Exposure.php" method="GET">
Password encrypt with salted:&nbsp&nbsp<input type="text" name="encryptwithsalted">
<input class="btn btn-primary btn-large" type="submit" value="Encrypt"><br><br>
<?php 
$encryptwithsalted=$_GET['encryptwithsalted'];
$salt="abcdefghijklmnoprstuwvyzqxABCDEFGHIJKLMNOPRSTUVWYZQX1234567890";
    if(isset($encryptwithsalted) && $encryptwithsalted!=""){    
        $encryptwithsalted.=randomsalted(mt_rand(1,10));
        $encryptwithsalted=md5($encryptwithsalted);
        echo '<pre>'."Password Encrypt With Salted: ".$encryptwithsalted.'</pre>';
    }
    function randomsalted($rnd){ 
        $char="abcdefghijklmnoprstuwvyzqxABCDEFGHIJKLMNOPRSTUVWYZQX1234567890";
        for ($k=1;$k<=$rnd;$k++) 
        { 
        $h=substr($char,mt_rand(0,strlen($char)-1),2); 
        $random.=$h; 
        } 
        return $random; 
    } 
?>    
</form>
<form name="encrypt_without_salted" action="Sensitive_Data_Exposure.php" method="GET">
Password encrypt with out salted:&nbsp&nbsp<input type="text" name="encryptwithoutsalted">
<input class="btn btn-primary btn-large" type="submit" value="Encrypt"> 
<?php 
    $encryptwithoutsalted=$_GET['encryptwithoutsalted'];
        if(isset($encryptwithoutsalted) && $encryptwithoutsalted!=""){    
            echo '<pre>'."Password Encrypt With Out Salted: ".md5($encryptwithoutsalted).'</pre>';
        }
?>   
</form>                    
          </div>         
        </div>