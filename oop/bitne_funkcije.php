KORISNE FUNKCIJE:

1. preg_replace('/[\$,]/', '', $val); //vom funkcijom se zasticujemo da izbacimo karaktere koji nam nisu potreebni u $val
2. floatval($val) - da ne bude decimalni broj
3.  trigger_error('Price must be greater than 0', E_USER_NOTICE); //ova funkcija radi kao pop-up u jquery
4. number_format($val, 2) - ova funkcija sluzi za formatiranje brojeva, u prvi deo se unosi properti koji zelimo da formatiramo, a u drugi na koju decimalu da ide
5. is_a() - proveriti ovu funkciju cemu slui do kraja
6. implode() - pretvara niz u string
7. explode() - pretvarra string u niz
8. get_class_methods('Student'); //pravi niz elemenata metoda koje su definisane unutar klase Student
9. is_a() - proveriti kako radi ova funkcija
10. method_exists('Student', 'save_world') - proveravamo da li postoji navedena metoda u navedenoj klasi
11. class_parents($c) - proveravamo koja klasa je parent podklase $c
12. is_subclass_of($u, 'User') - proveravamo da li je navedena instanca podklasa navedene klase
13. get_class() - proverava u kojoj je klasi napravljena metoda
14. get_called_class() - proverava iz koje je klase pozvana metoda 