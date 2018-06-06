<html>
    
    <head>
        <title> Array functions </title>
    </head>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
         
        $array1 = array(4, 8, 15, 16, 23, 42);
        $array2 = array(6, "fox", "dog", array("x", "y", "z") );
        $array3 = array(6, "fox", "dog", array("x", "y", array(1, 2, 5) ) );
        
    
        ?>
        
        Count: <?php echo count($array1); ?> <br /> <!-- broji elemente unutar array-->
        Max valude: <?php echo max($array1); ?> <br /> <!-- najveca vrednost unutar arRAYA -->
        Min value: <?php echo min($array1); ?> <br /> <!-- NAJMANJA VREDNOST UNUTTAR ARRAYA -->
        Sort: <?php  sort($array1); print_r($array1); ?> <br /> <!-- printa po redu od najmanje vrednosti unutar arraya, ka najvecoj -->
        Reversew sort: <?php  rsort($array1); print_r($array1); ?> <br /> <!-- printa vrednosti unutar arraya od njvece do najmanje-->
        Implode: <?php  echo $string1 = implode(" * ", $array1); ?> <br /> <!-- od arraya pravi string -->
        Explode: <?php  print_r(explode(" * ", $string1) ); ?> <br /> <!-- pretvara string u array -->
        
        <?php $string2 = "1, 2, 3, 4, 5";  ?> <br />
        Explode: <?php print_r(explode(", ", $string2) ); ?> <br /> <!-- probba -->
        
        In array: <?php echo in_array(4555, $array1); ?> <br /> 
    
     
        
    </body>


</html>