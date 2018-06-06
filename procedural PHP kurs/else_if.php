<html>
    
    <head>
        <title> else_if statement </title>
    </head>
    
    <body style= "background-color: black; color: white;" >
    
        <!-- IF Else funkcija se moze koristiti za proverivanje tacnosti nekog statementa -->
        

    <?php
        
        $a = 3;
        $b = 4;
        
        if($a > $b){
            echo "a je vece od b!";
            
        }
        elseif($a == $b){
            echo "a je jednako b";
        }
        else{
            echo "a je manje od b";
        }

        
        ?>
     
        
    </body>


</html>