	<html>
    
    <head>
    </head>
        <title> First page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <a href="secondpage.php?name=<?php echo urlencode("stefan&son")?>&id=23" >Second page</a> <!-- pomocu super globalne funnkcije URLencode() pravimo da znak "&" se prikazuje u svom obliku u URL-u-->
        <br />
  <a href="thirdpage.php?name=<?php echo urlencode("petar petrovic")?>&id=23" >Third page</a> 
  <!--unosimo novu vrdsnot "petar petrovic" u link -->
        <br />
    <?php 
        $linktext = "<click> And you will see";
        ?>
  <a href="fourthpage.php?name=<?php echo urlencode("petar petrovic");?>&id=23" <?php echo htmlspecialchars($linktext) ?> ></a>
  <!-- pomocu globalne funkcije htmlspecialchars() zelimo da omogucimo da se neki posebni karakteri, kao u nasem slucaju "<>" ispisuju u nazivu link -->
       

        
        
        
        
        
     
        
    </body>


</html>