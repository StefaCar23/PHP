<html>
    
    <head>
    </head>
        <title> Pointers
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
     
        $ages = array(4, 8, 15, 16, 23, 42);
        
        
        
   ?>
        
    <?php
 
        echo "1: " . current($ages) . "<Br />";    
        next($ages);
        echo "2: " . current($ages) . "<br />";
        reset($ages);
        echo "3: " . current($ages) . "<br />";
        
        ?>
          
        <br />
        
        <?php
       /* 
            while($age = current($ages) ){
                echo $age . ", ";
                if($age == 8){
                    continue;
                }
                next($ages);
            }
        ovde smo slucajno napravili beskonacnu petlju, kojom smo 8 napravili kao svaku sledecu vrednost i ehovali je
        */
        ?>
        
        <br />
        
        <?php
        
        while($age = current($ages) ){
            echo $age . ", ";
            next($ages);
        
        }
        
        //na ovaj nacin smo iskoristili petlju i ispisali sve vrednosti iz arrsaz $ages, a funkcijom next($ages), prelazili na sledeci element array-a
        
        ?>
     
        
    </body>


</html>