<html>
    
    <head>
    </head>
        <title> Prosec
    </title>
    
    <body style= "background-color: black; color: white;" >
    
       <?php
        //na ovoj stranici prrvo pravimo varijable i echojemo podatke koji su uneti na stranici koju smo povezali preko form-a
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        echo "{$username}: {$password}";
        
        
        ?>
        

        
        
        
        
        
     
        
    </body>


</html>