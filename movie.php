<?php

    class Movie{

        public $title;
        public $description;
        public $year;

            function __construction( string $title, string $description, int $year ){
                $this -> title = $title;
                $this -> description = $description;
                $this -> year = $year;
            };
    };

    $films = new Movie ("X-Man","Lorem ipsum dolor sit amet consectetur, adipisicing elit.",2018);

    public function getFullmovie(){
        return $this -> title . ' ' . $this -> desription
    }


