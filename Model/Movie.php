<?php

    // dichiarazione della Classe Movie

    class Movie {
        // titolo
        public $title;
        // lingua
        public $language;
        // anno di rilascio
        public $releaseYear;
        // genere
        public $genre = [];
        // votazione
        public $rating;
        // durata 
        public $duration;
        // incassi
        public $boxOffice;
        // regista
        public $director;


        // manifestazione del costruttore 
        // Il costruttore permette di eseguire azioni nel momento in cui viene creata l’istanza della classe.

        function __construct($title,$language,$releaseYear,$genre,$rating,$duration,$boxOffice,$director){

            // uso di  $this per  accedere alle proprietà e ai metodi di quell'istanza specifica.
            $this->title = $title;
            $this->language = $language;
            $this->releaseYear = $releaseYear;
            $this->genre = $genre;
            $this->rating = $rating;
            $this->duration = $duration ;
            $this->boxOffice = $boxOffice;
            $this->director = $director;

        }


        // utilizzo della funzione per stampare nell html utilizzando foreach per iterare nel db rendendo modulabile il codice 
        public function printMovieAllDetails() {
            $listDetails = '<div class="card" style="width: 18rem;">';
            $listDetails .= '<div class="card-body">';
            $listDetails .= '<h5 class="card-title">' . $this->title . '</h5>';
            $listDetails .= '<ul class="list-unstyled">';
            $listDetails .= '<li><strong>Language:</strong> ' . $this->language . '</li>';
            $listDetails .= '<li><strong>Release Year:</strong> ' . $this->releaseYear . '</li>';
            $listDetails .= '<li><strong>Genre:</strong> ' . $this->genre . '</li>';
            $listDetails .= '<li><strong>Rating:</strong> ' . $this->rating . '</li>';
            $listDetails .= '<li><strong>Duration:</strong> ' . $this->duration . ' minutes</li>';
            $listDetails .= '<li><strong>Box Office:</strong> $' . number_format($this->boxOffice, 0, '.', ',') . '</li>';
            $listDetails .= '<li><strong>Director:</strong> ' . $this->director . '</li>';
            $listDetails .= '</ul>';
            $listDetails .= '</div>';
            $listDetails .= '</div>';
            // utilizzato $listDetails per stampare all'unisono raggruppando il tutto 
            echo $listDetails;
        }

    }
    //     // creazione metodo get per ritornare i valori ed utilizzarli 
    //     public function getTitle(){
    //         return $this->title;
    //     }

    //     public function getLanguage(){
    //         return $this->language;
    //     }

    //     public function getReleaseYear(){
    //         return $this->releaseYear;
    //     }

    //     public function getGenre(){
    //         return $this->genre;
    //     }

    //     public function getRating(){
    //         return $this->rating;
    //     }

    //     public function getDuration(){
    //         return $this->duration;
    //     }

    //     public function getBoxOffice(){
    //         return $this->boxOffice;
    //     }

    //     public function getDirector(){
    //         return $this->director; 
    //     }

    // }
?>
