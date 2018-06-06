<html>
    
    <head>
    </head>
        <title> Proba encoding
    </title>
    
    <body style= "background-color: black; color: white;" >
    
        
		<?php
		
			print_r($_GET);
			
			$name = $_GET['name'];
			$lastn = $_GET['lastname'];
			
			echo "<br />";
			echo "<Br />";
			
			echo "{$name}"; echo "<Br />";
			echo "{$lastn}"; 
		
		$proba = "Stefan Aleksic";
		
		echo "<br />";
		echo urlencode("$proba"); echo "<Br />";
		echo rawurlencode("$proba");
		
		
		?>
       

        
        
        
        
        
     
        
    </body>


</html>