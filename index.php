<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
class Movie {
    public $nome;
    public $anno;
    public $genere;
    public $prezzo = 12;

    public function getPrice(){
        if ($this->anno < 1979){
            $this->prezzo = 5;
        }
    }

    function __construct($nome, $anno, $genere){
        $this->nome = $nome;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->getPrice();
    }
}


$film1 = new Movie('Shining ', 1980 , 'Thriller',);
$film2 = new Movie('Arancia Meccanica ', 1971 , 'Thriller');
$film3 = new Movie('Full Metal Jacket ', 1987 , 'Guerra',);

var_dump($film1, $film2, $film3);

?>