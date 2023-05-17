<?php 
    class Movie{
        public 
        $title,$posterImg,$genres= [],$language;

        public function __construct(string $title, array $genres, string $posterImg, string $language) 
        {
            $this->title = $title;
            $this->genres = $genres;
            $this->posterImg = $posterImg;
            $this->language = $language;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getLanguage(){
            return $this->language;
        }
        public function getPosterImg(){
            return $this->posterImg;
        }
        public function getGenres(){
            return implode("-" , $this->genres);
        }
    }
?>