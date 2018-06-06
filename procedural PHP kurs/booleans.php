<html>
    
    <head>
        <title> Booleans </title>
    </head>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
         
       $bool1 = true;
        $bool2 = false;
        
        
        
    
        ?>
        
        Bool1: <?php echo $bool1; ?> <br />
        Bool2: <?php echo $bool2; ?> <br />
        
        <?php
        
        $var1 = 3;
        $var2 = 1;
        
        
            
        ?>
        
        $var1: <?php echo isset( $var1 ); ?> <br /> <!--ispitujemo da li su tacni iskazi i ovaj je acan  -->
        $var2: <?php echo isset( $var2 ); ?> <Br /> <!--i ovo je acno -->
        $var3: <?php echo isset( $var3 ); ?> <Br /> <!-- $var3 nije definisan i zato ovaj kod nije tacan -->
        Unset $var1: <?php unset( $var1 ); ?> <br /> <!-- unsetovali smo $var1 -->
                $var1: <?php echo isset( $var1 ); ?> <br /> <!-- posto smo u prethodnoj liniji koda unsetovali $var1, sad nam prikazuje da je $var1 netacno, tj da ne postoji -->
        $var2: <?php echo isset( $var2 ); ?> <Br /> <!-- isto sve ostaje -->
        $var3: <?php echo isset( $var3 ); ?> <Br /> <!-- isto je sve ostalo -->
        
        Null: <?php $var6 = NULL;  ?> <br /> <!-- $var6 je definisan kao prazna varijable, -->
        <?php echo $var6; ?> <!-- nista se ne ispisuje -->
        O
    
     
        
    </body>


</html>