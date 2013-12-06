<?php 
    include 'include/db.php';
    include 'include/head.php';
    include 'include/header.php';
    include 'include/menu.php'; 
    include 'include/container.php';
     ?>
<br><h1 style="font-size:30px">CSRF</h1><br>
<p><form name="csrf" action="CSRF.php" method="GET">
<table border="1">
    <tr>
 <td><b>NOT:</b>&nbsp CSRF saldırısına neden olan zaafiyetin temelinde geliştiricilerin uygulamayı 
     geliştirme aşamasında, istemci tarafından gelen her isteğin gerçekten kullanıcıdan geldiğini 
     düşünmelerinden dolayıdır. Genellikle form doğrulamalarında POST’larda ve GET’lerde görülebilir.
</table><br>                
                Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="title"><br>
                Message:&nbsp<input type="text" name="message" style='color:black;width: 200px; height:100px; background-color:white'><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="hidden" value=<?php $encryptwithsalted.=randomsalted(mt_rand(1,10));                             
                                                 echo "$encryptwithsalted";
                                                     function randomsalted($rnd){ 
        $char="1234567890";
        for ($k=1;$k<=$rnd;$k++) 
        { 
        $h=substr($char,mt_rand(0,strlen($char)-1),2); 
        $random.=$h; 
        } 
        return $random; 
    } ?> name="CSRFToken"><br>
                <input class="btn btn-primary btn-large" type="submit" value="Submit">           
            </form></p>
                <?php 
                    if($_GET){
                    $title=$_GET['title'];
                    $message=$_GET['message'];
                    echo "Title: ".$title."<br>";
                    echo "Message: ".$message;
                    }
                ?>                    
          </div>         
        </div>