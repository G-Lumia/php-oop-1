<?php 
    class Book {
        public $title;
        public $cost;
        public $genres = [];

        public function __construct(string $title, int $cost, array $genres) 
        {
            $this->title = $title;
            $this->cost = $cost;
            $this->genres = $genres;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getCost(){
            return $this->cost;
        }
        public function getGenres(){
            return implode("-" , $this->genres);
        }
    }
?>