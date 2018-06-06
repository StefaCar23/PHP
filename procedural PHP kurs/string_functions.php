<html>
    
    <head>
        <title> String functions </title>
    </head>
    
    <body>
    
        
        

    <?php
        
        $var1 = "The quick brown fox";
        $var2 = " jumped over lazy dog.";
        
        $var3 = $var1;
        $var3 .= $var2;
        echo $var3;
        
        ?>
        <br />
        
            Lowercase: <?php echo strtolower($var3); ?> <br /> <!-- funcija strtolower pretvara sva velika slova u mala -->
            Uppercase: <?php echo strtoupper($var3); ?> <br /> <!-- pretvara sva slova u velika slova-->
            Uppercase first letter: <?php echo ucfirst($var3); ?> <br /> <!-- Prvo slovo u stringu nacini velikim -->
            Uppercase word: <?php echo ucwords($var3); ?> <br /> <!-- funkcija ucword nacini da svako prvo slovo svake reci bude veliko -->
            
            
            <br />
        
            Lenght: <?php echo strlen($var3); ?> <br /> <!-- funkcija strlen() broji ukupan broj karaktera u stringu -->
            Trim: <?php echo $var4 = $var1 . trim ($var2); ?> <br /> <!-- funkcija trim() ne dozvoljava prazno mesto -->
            Find: <?php echo strstr($var3, "brown"); ?> <br /> <!-- strstr() funkcija nalazi kljucnu rec koja se trazi i ispisuje osatak teksta iz stringa -->
            Replace by string: <?php echo str_replace("brown" , "blue" , $var3); ?> <br /> <!-- menja navedene vrednosti u stringu -->
            
            <br /> 
        
            Repeat: <?php echo str_repeat($var3, 3); ?> <br /> <!-- ponavlja se string onoliko put koliko se navede u zagradi -->
            Make substring: <?php echo substr($var3, 5, 15); ?> <br /> <!-- od prvog navedenog broja karaktera printyas u ovom slucaju narednih 15-->
            Find position: <?php echo strpos($var3, "brown"); ?> <br /> <!-- prikazuje poziciju zeljene reci koja je navedena u zagradi -->
            Find caracters: <?php echo strchr($var3, "b"); ?> <br /><!-- zapocinje recenicu od slova koje je navedeno u zagradi -->
    
    </body>


</html>