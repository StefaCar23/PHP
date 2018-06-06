<html>
    
    <head>
    </head>
        <title> While loops </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
        
        $count = 0;
        
        while($count <= 10){
            echo $count . ", "; 
            $count++; 
        }
        
     //while petlja se koristi da se ispise tacnost unutar statmenta dokle god je on tacan imacemo ispis i povecavacemo broj za jedan da bismo proverili slede'u vreednost
     
       ?> 
        
        <br />
        
        Count: <?php echo $count; ?>
        
        <br />
        
        <?php
        
        $count = 0;
        
        while($count <= 10){
            if($count == 5){
                echo "Five" . ", " ;
            }
            else{
            echo $count . ", "; 
            }
            $count++; 
        }
        //unutar while petlje moze se ubaciti i bilo koji drugi uslov, u vom slucaju if...else, kojim umesto broja 5 ispisujemo FIVE
     
     
       ?> 
        
    </body>


</html>