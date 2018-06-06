<html>
    
    <head>
        <title> Casting and swithcing </title>
    </head>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
        
        $var1 = "2";
        $var1 += 3;
        
        echo $var1; //sabrao je vrednosti varijable $var1
        
        ?>
        
        <br />
        
        <?php
        
        $var1 = "two brow foxes";
        $var1 += 3;
        
        echo $var1; //ispisuje se samo broj, posto se ne mogu sabirati "babe" i "zabe"
        
        ?>
        
        <br />
        
        <?php
        
            echo gettype($var1);
        
        
        
        ?>
<br />
        <?php
        
        $var1 = "2 brow foxes";
        $var2 = 3;
        
        echo gettype($var1); echo "<br />"; //ispisuje koja je vrsta podatka
        echo gettype ($var2); echo "<br />"; //ispisuje koja je vrsta podatka
        
        
        ?>
        
        <?php
        
        settype($var2, "string"); echo "<br />";  //menja vrstu elementa u string
        settype($var1, int); echo "<br />"; // menja vrstu elementa u broj
        echo gettype($var1); echo "<br />"
        //echo ($var4 = $var1 . " " . $var2); echo "<br />";
        // $var3 = int($var1);
        //echo gettype($var3); echo "<br />";
        

        ?>
        <!-- proveravamo tacnost elemenata $var1 i i dobijamo da je broj (int) -->
        Is array: <?php echo is_array($var1); ?> <br /> 
        Is bool: <?php echo is_bool($var1); ?> <br />
        Is float: <?php echo is_float($var1); ?> <br />
        Is int: <?php echo is_int($var1); ?> <br />
        Is null: <?php echo is_null($var1); ?> <br />
        Is numeric: <?php echo is_numeric($var1); ?> <br />
        Is string: <?php echo is_string($var1); ?> <br />
    
     
        
    </body>


</html>