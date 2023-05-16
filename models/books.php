<?php 
    class Book {
        public $title;
        public $cost;
        public $genre;
        public $genre2;

        public function __construct(string $title, int $cost, string $genre) 
        {
            $this->title = $title;
            $this->cost = $cost;
            $this->genre = $genre;
        }

        public function printBook():string{
            return "<span> $this->title, $this->cost, $this->genre <br> </span>";
        }
    }
?>