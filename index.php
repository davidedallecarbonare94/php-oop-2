<?php 

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie
 per creare uno shop online; ad esempio, 
 ci saranno sicuramente dei prodotti da acquistare 
 e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere degli utenti premium 
che hanno diritto a degli sconti esclusivi, 
oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: 
ad esempio, l'utente dello shop inserisce una carta di credito... */

class Product{
    public $name;
    public $desc;
    public $price;
    public $genre;


    function __construct(string $name, string $desc, int $price, string $genre){
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->genre = $genre;

    }


}

$pizza = new Product("Regina", "Pizza Regina", 2.99, "food");
$seaSalad = new Product("Re del Mare", "Insalata di Mare", 5.99, "food");
$speaker = new Product("JBL", "Bluetooth Speaker", 16.99, "hi-tec");
$vape = new Product("Vape", "Ammazza Zanzare", 3.99, "life-saver");
$bandAid = new Product("Band-Aid", "Cerotti primo soccorso", 4.49, "life-saver");
$mixer = new Product("Parkside", "Tritatutto", 14.99, "hi-tec");

//var_dump($pizza);

class User{
    public $firstName;
    public $lastName;
    public $age;


    function __construct(string $firstName, string $lastName,  int $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

    }

}

$mario = new User("Mario", "Rossi", 28);
$luigi = new User("Luigi", "Bianchi", 55);
$franco = new User("Franco", "Verdi", 77);
$luigia = new User("Luigia", "Gialli", 17);



class Premium extends User{
    function __construct($firstName, $lastName, $age, bool $premium){
        parent::__construct($firstName, $lastName, $age);
        $this->premium = $premium;
    }
}


$erualdo = new Premium("Erualdo", "Benestanti", 43, true);
$ginevra = new Premium("Ginevra", "Ramazzotti", 66, false);
$miranda = new Premium("Miranda", "Tartufello", 23, true);


?>