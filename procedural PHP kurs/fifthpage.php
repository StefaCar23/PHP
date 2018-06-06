<html>
    
    <head>
    </head>
        <title> Fifth page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  
    <?php 
        $linktext = "<click> And you will see";
        ?>
  <a href="secondpage.php?name=<?php echo urlencode("petar petrovic");?>&id=23" ><?php echo htmlspecialchars($linktext) ?> </a> 
  <!-- pomocu htmlspecialchars() globalne funkcije smo uspeli da specijalne karakere iz varijable $link napraviom da ih URL prepozna kao naslov linka
       

        
        
        
        
        
     
        
    </body>


</html>