<html>
    
    <head>
    </head>
        <title> Cookies read
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <?php
        
        $var1 = 0; //definisali smo $var1 i dodelili joj vrdnost 0
        if(isset($_COOKIE['test']) ){
            $var1 = $_COOKIE['test']; 
        }
        
        
        
        echo $var1; //ispisuje se varjable sa vrednosti 0
        
        ?>
        
        

       

        
        
        
        
        
     
        
    </body>


</html>