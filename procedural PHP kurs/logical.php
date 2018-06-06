<html>
    
    <head>
    </head>
        <title> Logical </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
        
        $a = 3;
        $b = 4;
        $c = 1;
        $d = 28;
        
        if(($a > $b) && ($c > $d)){
            echo "a je vece od b i ";
            echo "c je vece od d";
        }

        //moze se ispitati vise statementa unutar if-a
        ?>
        
        <br />
        
        <?php
        
        if(($a > $b) || ($c > $d) ){
            echo "a je vece od b, ili ";
            echo "c je vece od d.";
        }
        else{
            echo "a nije vece od b ili ";
            echo "c nije vece od d";
        }
        //isto kao u prethodnom slucaju, samo ukoliko nije tacan statement is if-a, ehovace se statement is else-a
        ?>
        
        <!-- 
     
        
    </body>


</html>