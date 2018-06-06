<html>
    
    <head>
        <title> Array </title>
    </head>
    
    <body>
    
        
        

    <?php
         
        $array1 = array(4, 8, 15, 16, 23, 42);
        $array2 = array(6, "fox", "dog", array("x", "y", "z") );
        $array3 = array(6, "fox", "dog", array("x", "y", array(1, 2, 5) ) );
        
            echo $array2[2]; echo "<br />"; //pirkazace treci element u nizu, sto je "dog"
        echo $array2[3][2]; echo "<br />"; //prikazace trci element u nizu unutar drugog arraya
        echo $array2[3][2]; echo "<br />"; 
        echo $array3[3][2][1]; echo "<br />"; //prikazuje se drugi element unutar drugog podskupa unutar reda
        echo $array2[3] = "cat"; echo "<br />"; //zamenjen je treci element u array2
        echo $array2[3]; //prikazuje se zamenjen element u array2, a to je uradjeno u prethodnoj liniji koda
		
        
        
        
   
        ?> 
        
        <br />
        
        <?php
        
            $array4 = array("first_name" => "Stefan", "last_name" => "Aleksic"); //napravljen je novi array4
        
        echo $array4["first_name"]; echo "<br />"; //ispisuje se ime navedeno u pretodnoj liniji koda
        echo $array4["last_name"]; echo "<br />"; //ispisuje se prezime u prethodnoj liniji koda
        echo $array4["first_name"] . " " . $array4["last_name"]; echo "<br />";/**/ //ispisuje se ima i prezime sa razmakom
        
        ?>
        <br />
		
		<?php
			
			$array5 = array( "ime" =>"Masa", "prezime" => "Aleksic" ); echo "<br />";
			
			echo $array5["ime"]; echo "<Br />";
			echo $array5["prezime"]; echo "<Br />";
			
		?>
		
        <br />
        
        <pre>
        <?php
        
            print_r($array2);
        
        ?>
        
        </pre>
		
		<br />
		
		<pre>
		<?php
		print_r($array5);
		?>
		
		
		</pre>
     
        
    </body>


</html>