<html>
    
    <head>
    </head>
        <title> Switch </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        

    <?php
        
        $a = 1;
		$b = 5;
     
     
       ?> 
        
        <?php
        
            switch($a){
                case 0 : 
                    echo "a je jednako 0"; 
                    break;
                case 1 :
                    echo "a je jednako 1";
                    break;
                case 2 :
                    echo "a je jednako 2";
                    break;
                default :
                    echo "a nije nista od ponudjenih";
                    break;
            }
        
        //koristi se za proveru jednog statmenta u vise slucajeva, moze se navest default na kraju, ukoliko nijedan nije tacan da se dobije ispis
        ?>
		
		<?php
		
			switch($b){
				case 0: echo "b je vece od nule"; break;
				case 1: echo "b je jednako 5"; break;
				case 1: echo "b je manje od 100"; break;
			}
		
		?>
        
        
    </body>


</html>