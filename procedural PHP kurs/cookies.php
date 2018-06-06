<html>
    
    <head>
    </head>
        <title> Cookies
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
  <?php
        
        setcookie('test', 23, time()+(7*24*60*60) ); //sintaksa za pozivanje cookie-a, mora da se da ime, vrednost i trajanje, tj. vremenski interval u sekundama koliko zleimo da nam traje cookie
        
        ?>
        
        <?php
        
        //    setcookie('test', 0, time()-(60*60*24*7) ); ovako ubijamo COOKIE
        
        ?>
        
        

       

        
        
        
        
        
     
        
    </body>


</html>