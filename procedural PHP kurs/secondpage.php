<html>
    
    <head>
    </head>
        <title> Second page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
       <?php
        
            print_r($_GET); //ispisuju se vrednosti iz arraza is URL-a
            
            $id = $_GET['id']; //pravimo promenjivu $id koja ce da izvuce vrednosti id iz URL-a pomocu GET metode
            $name = $_GET['name']; // pravimo promenjivu $name koja ce izvici vrednosti iz URL-a pomocu GET metode
        
            echo "<br />";
            echo "<strong> " . $id . "</strong>";
            echo "<Br />";
            echo "<strong>" . $name . "</strong>";
        
        ?>
        
        <br />
        
        <?php
        
        $string = "Petar Petrovic"; //pravimo varijablu $string
        echo urlencode("$string"); echo "<br />"; //pomocu super globalne funkcije urlencode se ispisuju vrednost iz varijable $string
        echo rawurlencode("$string"); echo "<br />"; //pomo0cu super globalne funkcije rawurlencode se ispusuje "sirove" vrednosti iz URL-a
        
        
        ?>
        

        
        
        
        
        
     
        
    </body>


</html>