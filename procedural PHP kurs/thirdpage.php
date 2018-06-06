<html>
    
    <head>
    </head>
        <title> Second page
    </title>
    
    <body style= "background-color: black; color: white;" >
    
       <?php
        
            print_r($_GET); //prvo ispisujemo vrednosti iz arrzaya iz linka
            
            $id = $_GET['id']; //pravimo varijablu $id i sa GET metodom povlacimo podatke iz linka, tj. id-a 
            $name = $_GET['name']; //pravimo varijablu $id i sa GET metodom povlacimo podatke iz linka, tj. name-a
        
            echo "<br />";
            echo "<strong> " . $id . "</strong>";  //ispisujemo vrednost iz varijable $id
            echo "<Br />";
            echo "<strong>" . $name . "</strong>"; //ispisujemo vrdnost iz varijable $name
        
        ?>
        
        <br />
        
        <?php
        
        $string = "Petar Petrovic"; //pravimo varijablu $string sa vrednostima Petar Petrovic
        echo urlencode("$string"); echo "<br />"; //pomocu super globalne funkcije urlencode zelimo da vidimo kako ce ispisati vrednosti iz varijable $string i razmak u izvarijable je definisan kao +
        echo rawurlencode("$string"); echo "<br />"; //super globalnom funkcijom rawurlencode() zelimo da vidimo @sirov@ prikaz vrednosti iy varijable $string
        
        
        ?>
        

        
        
        
        
        
     
        
    </body>


</html>