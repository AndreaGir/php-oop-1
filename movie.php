<?php

    class Movie{

        public $title;
        public $description;
        public $year;

            function __construct( string $title, string $description, int $year ){
                $this -> title = $title;
                $this -> description = $description;
                $this -> year = $year;
            }
           

                public function getFullmovie(){
                    return $this -> title . ' ' . $this -> year . ' ' . $this -> description;
            }
    }

    
$films = new Movie ("X-Man","Lorem ipsum dolor sit amet consectetur, adipisicing elit.",2018);

$filmsDue = new Movie ("Ritorno al passato","Lorem ipsum dolor sit amet consectetur, adipisicing elit.",1997);
    


