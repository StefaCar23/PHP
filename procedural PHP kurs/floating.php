<html>
    
    <head>
		
        <title> Numbers floating </title>
    </head>
    
    <body style="background-color: black; color: white;">
    
        
        

    <?php
        
        $var1 = 3;
        $var2 = 4;
        $var3 = "Ovo je test sabiranja";
        $var4 = strlen($var3);
        
    ?>
        
        Basic math: <?php echo ( (1 + 2 + $var1) * $var2 ) / 2 - 5;  ?> <br />
        Test: <?php echo $var1 + $var4; ?> <br />
        += method: <?php $var2 += 4; echo $var2; ?> <br />
        -= method: <?php $var2 -= 4; echo $var2; ?> <br />
        *= method: <?php $var2 *= 4; echo $var2; ?> <br />    
        /= method: <?php $var2 /= 4; echo $var2; ?> <br />

        <br />
        
        Floating point: <?php echo $var2 = 3.123; ?> <br />
        Round: <?php echo round($var2, 2); ?> <br />
        Ceiling: <?php echo ceil($var2); ?> <br />
        Floor: <?php echo floor($var2); ?> <br />
        
        
        <br />
        
        Exponential: <?php echo pow(2, 10); ?> <br />
        Square root: <?php echo sqrt(100); ?> <br />
        Random any: <?php echo rand(); ?> <br />
        Random min/max: <?php echo rand(10, 55); ?> <br /> 
        
   
        
     
        
    </body>


</html>