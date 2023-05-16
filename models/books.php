<?php 
    class Book {
        public $title;
        public $cost;
        public $genre;
        public $genre2;

        public function __construct(string $title, int $cost, string $genre, string $genre2 = null) 
        {
            $this->title = $title;
            $this->cost = $cost;
            $this->genre = $genre;
            $this->genre2 = $genre2;
        }

        public function printBook():string{
            return "<span> Titolo: $this->title Costo: $this->cost euro Genere: $this->genre $this->genre2 <br> </span>";
        }
    }
?>