<html>
    
    <head>
    </head>
        <title> For loops </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        <?php
        
            for($count = 0; $count <= 10; $count++){
                echo $count . ", ";
            }
        //sluzi isto kao while petlja, ali je sintaksa durgacija, imamo 3 expretiona, prvi setuje count, drugi je provera nekog iskaza, a treci je inkrement najcesce
        ?>
        
        <br />
        
        Count: <?php echo $count; ?>
        
        

        
    </body>


</html>