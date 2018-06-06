<?php

class Nekretnina{
    var $zemlja;
    var $grad;
    var $deo_grada;
    var $kvadratura;
    var $uknjizeno = true;
    var $provizija = true;
    var $dodatni_opis;
    
    function opis_nekretnine(){
        return $this->zemlja . ", " . $this->grad . ", " . $this->deo_grada . ", " . $this->kvadratura . " m1, uknjizeno " . $this->uknjizeno . ", provizija " . $this->provizija;
    }
    
    function dodatno(){
        return $this->dodatni_opis;
    }
}

class Stan extends Nekretnina{
    var $broj_soba;
    var $podrum = true;
    var $vrsta_grejanja;
    var $terasa = true;
	var $adresa;
    var $dodatni_opis;
    
    function opis_stana(){
         //dodaj za somaci
		 echo "Osnovne karakteristike stana: " . "<br />";
		 echo "Lokacija: " . $this->grad . ", " . $this->deo_grada . "<br />";
		 echo "Broj soba: " . $this->broj_soba . "<br />";
		 //echo "Ostale karakteristike: " . "<br />";
		 echo "Vrsta grejanja: " . $this->vrsta_grejanja . "<br />";
		 echo "Podrum: " . $this->podrum . "<br />";
		 echo "Terasa: " . $this->terasa . "<br />";
		 echo "Napomena: " . $this->dodatni_opis;
    }
    
}

class Kuca extends Nekretnina{
    var $broj_spratova;
    var $okucnica = true;
    //dodati jos propertisa
	var $broj_soba;
	var $dvoriste = true;
	
	function kuca_function(){
		echo "Opisa kuce: " . "<br />";
		echo "Lokacija: " . $this->grad . ", " . $this->deo_grada . "<br />";
		echo "Broj soba: " . $this->broj_soba . "<br />";
		echo "Okucnica: " . $this->okucnica . "<br />";
		echo "Dvoriste: " . $this->dvoriste . "<br />";
		echo "Kvadratura: " . $this->kvadratura . "<br />";
		echo "Napomena: " . $this->dodatni_opis . "<br />";
	}
	
}

class Zemljiste extends Nekretnina{
    var $gradjevinska_dozvola = true;
    var $klasa_zemljista;
    //dodati jos propertisa
	
	
}

//pravimo subklase STANA

class Garsonjera extends Stan{
    var $odvojena_kuhinja = true;
    //dodati jos propertisa
	
	function garsonjera_function(){
		echo "Iznajmljujem garsonjeru u " . $this->grad . "u, na " . $this->deo_grada . "u. ";
		echo "Garsonjera ima " . $this->kvadratura . ". ";
		
	}
	
	function kirija($x, $y){
		//return "Cena rente garsonjere je " . $x . ", a komunalije su " . $y . ". Zajedno sve iznosi " . $x+$y . ". ";
		echo "Cena kirije je " . $x . ", akomunalije iznose " . $y . ". Sve zajenod, na mesecnom nivou, iznosi " ;
		echo $x + $y . " evra."; 
	}
}

class Studio extends Stan{
    var $zvucna_izolacija;
    //dodati jos propertisa
}

//ovde dodajemo podklase za zemljiste

class PoljoprivrednoZemljiste extends Zemljiste{
    var $gradjevinska_dozvola = false;
    
}

class GradjevinskiPlac extends Zemljiste{
    var $gradjevinska_dozvola = true;
}

/*
 1. dodati propertise i metode u klase
 2. napraviti objekte
 3. isprintati ih sa smislom
 4. u skripti naci function expend_class, prilagoti je i ubaciti u svaki primer
 * */
 
	$stan = new Stan;
	$stan->grad = 'Beograd';
	$stan->deo_grada = 'Banovo brdo';
	$stan->broj_soba = 4; 
    $stan->podrum = 'Ne';
    $stan->vrsta_grejanja = 'Centralno';
    $stan->terasa = 'Da';
    $stan->dodatni_opis = "Stan gleda na Adu ciganliju i nalazi se na juznoj stranic zgrade";
	
	$kuca = new Kuca;
	$kuca->grad = 'Beograd';
	$kuca->deo_grada = 'Zemun';
	$kuca->broj_soba = 5;
	$kuca->dvoriste = 'Da';
	$kuca->dodatni_opis = 'Kuca se nalazi na sjajnoj lokaciji u mirnom delu Zemuns.';
	$kuca->kvadratura = '120m2';
	
	$garsonjera = new Garsonjera;
	$garsonjera->grad = 'Beograd';
	$garsonjera->deo_grada = 'Dorcol';
	$garsonjera->kvadratura = '24m2';
	
	
	echo $stan->opis_stana() . "<br />";
	echo "<br />";
	echo $kuca->kuca_function() . "<br />";
	echo $garsonjera->garsonjera_function(). "<br />";
	echo $garsonjera->kirija(280, 120) . "<br />";
 









