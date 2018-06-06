<html>
    
    <head>
    </head>
        <title> Switch_vezba </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
        
        $a = 15;
        $b = 22;
        $c = 8;
     
     
       ?> 
        
        <?php
        
            switch($a){
                case ($a > $b) : 
                    echo "a je vece od b"; 
                    break;
                case ($b > $c) :
                    echo "b je vece od c";
                    break;
                case ($a = $c) :
                    echo "a je jednako c";
                    break;
                default :
                    echo "a nije nista od ponudjenih";
                    break;
            }
        
        ?>
        
        
    </body>


</html>