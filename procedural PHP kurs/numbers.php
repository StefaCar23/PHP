<html>
    
    <head>
        <title> Numbers </title>
    </head>
    
    <body>
    
        
        

    <?php
        
        $var1 = 3;
        $var2 = 4;
        $var3 = "Ovo je test sabiranja";
        $var4 = strlen($var3);
        
    ?>
        
        Basic math: <?php echo ( (1 + 2 + $var1) * $var2 ) / 2 - 5;  ?> <br /> <!-- mogu se izvrsavati sve klasicne matematicke operacije -->
        Test: <?php echo $var1 + $var4; ?> <br /> <!-- sabira vrednost od $var1 koja je 3 i ukupan broj karaktera iz striga va $var3 -->
        += method: <?php $var2 += 4; echo $var2; ?> <br /> 
        -= method: <?php $var2 -= 4; echo $var2; ?> <br />
        *= method: <?php $var2 *= 4; echo $var2; ?> <br />    
        /= method: <?php $var2 /= 4; echo $var2; ?> <br />

        <br />
        
        Increment: <?php $var2++ ; echo $var2; ?> <br /> <!-- povecava vrednost vaijable za jedan -->
        <?php $var2++ ; echo $var2; ?> <br /> <!-- povecali smo ponovo $var2 ja jos jedan, posto je varijabla vec u prethodnom povecana za jedan ovde ce biti povecana za 2 u odnosu na prvobitnu vrednost-->
        <?php $var2++ ; echo $var2; ?> <br />
        <?php $var2++ ; echo $var2; ?> <br />
        
        Decrement: <?php $var2-- ; echo $var2; ?> <br /> <!-- smanjuje se vrednost za 1 -->
        <?php $var2-- ; echo $var2; ?> <br />
        <?php $var2-- ; echo $var2; ?> <br />
        <?php $var2-- ; echo $var2; ?> <br />
        
    </body>


</html>