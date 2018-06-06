<html>
    
    <head>
    </head>
        <title> For each loops </title>
    
    <body style= "background-color: black; color: white;" >
    
        
        <?php
        
            $ages = array(4, 8, 15, 16, 23, 42);
        
        ?>
        
        <?php
        //ova vrsta petlje radi samo sa array i nakon posttavljanja expretions u kome dodajemo novu varijablu koja ce predtavljati elemente u okviru arraya i koristimo je za neki statement koji se nalazi unutar petlje
            foreach($ages as $age){
                echo $age . ", ";
            }
        
        ?>
        
        <br />
        
        <?php
        //primer foreach petlje za asocijativni array
            foreach($ages as $position => $age){
                echo $position . ": " . $age. "<br />";            }
        //u ovom slucaju korstimo foreach petlju da bi napravili asocilativni arazyy od obicnog arraya, trako sto kljucu asocijativnog arraya dodeljujemo poziciju i u okviru statementa odradimo nesto sa kljucem i value, value je u ovom slucaju privremena varijabla $age koja predstavlja nas element
        ?>
        
        

        
    </body>


</html>