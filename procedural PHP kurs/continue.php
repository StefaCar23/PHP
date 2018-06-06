<html>
    
    <head>
    </head>
        <title> Continue </title>
    
    <body style= "background-color: black; color: white;" >
    
        
    <?php
        
        for($count = 0; $count <= 10; $count++){
            if($count == 5){
                continue; //preskace zeljeni uslov postvljen u IF
            }
            echo $count . ", ";
        }
        
        //continue sluzi da se ispita odredjeni statement i u tom slucaju preskoci glavni statement petlje
        // u nasem slucaju petlja ispituje brojeve od 1 do 10, mi kazemo ukoliko je pelja na broj 5 preskoci ga i nemoj da ga printas
        ?>
        
        
        <br />
        
        <!-- ovo je primer kad zelimo da stampamo sve brojeve od 0 do 10, izuzev 2 i 5 -->
        
        <?php
            
            for($count = 0; $count <= 10; $count++){
                if( ($count == 2) || ($count == 5) ){
                    continue;
                }
                echo $count . ", ";
            }
        
        //ovo je primer u kom smo zeleli da ne printamo brojeve 2 i 5
        //uslov smo postavili tako da ukoliko je count 2 ili count=5, odradimo continue i preskocimo njihovo printanje
        
        ?>
        
        

        
    </body>


</html>