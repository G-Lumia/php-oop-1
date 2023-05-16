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

        public function getTitle(){
            return $this->title;
        }
        public function getCost(){
            return $this->cost;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getGenre2(){
            return $this->genre2;
        }
    }
?>