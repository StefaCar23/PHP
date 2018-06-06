<?php 
    session_start(); //pokrecemo session(), uvek ide na vrh koda
?>
<html>
    
    <head>
    </head>
        <title> Session
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        <?php
        
        $_SESSION['name'] = "Stefan"; //dajemo vrednosti prvoj sesiji name i vrednost je Stefan 
        $_SESSION['lastname'] = "Aleksic"; //dajemo vrednost drugoj sesiji i vrednost je Aleksic
        ?>
        
        <?php
            
        $name = $_SESSION['name'] . " " . $_SESSION['lastname'] ; //pravimo varijablu kojasadrzi vrednosti iz obe sesije
        echo $name; //printamo varijablu i ispisjue vrednosti iz obe sesioje Stefan Aleksic
        
        
        ?>
        
        

       

        
        
        
        
        
     
        
    </body>


</html>