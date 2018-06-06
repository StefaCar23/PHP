<html>
    
    <head>
    </head>
        <title> Fifth page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <?php
        
        $url_page = 'php/created/page/url.php';
        $param1 = 'This is string';
        $param2 = ' "bad" / <character$>';
        $linktext = "<click> and you will see";
        ?>
        
        <?php
        
            $url = "http://localhost/";
            $url .= rawurlencode($url_page);
            $url .= "?param1=" . urlencode($param1);
            $url .= "&$param2=" . urlencode($param2);
        ?>
        
        <a href="<?php echo htmlspecialchars($url); ?> "> <?php echo htmlspecialchars($linktext); ?> </a>

       

        
        
        
        
        
     
        
    </body>


</html>