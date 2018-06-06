<html>
    
    <head>
    </head>
        <title> For example </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        <?php
        
            for($count = 0; $count <= 10; $count++){
                echo $count;
                if($count == 10){
                    break;
                }
                echo ", ";
            }
        
        ?>
        
        <br />
        
        Count: <?php echo $count; ?>
        
        

        
    </body>


</html>