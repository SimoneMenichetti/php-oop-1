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

        public function printMovieAllDetails() {
            $listDetails = [
                'Language' => $this->language,
                'Release Year' => $this->releaseYear,
                'Genre' => $this->genre,
                'Rating' => $this->rating,
                'Duration' => $this->duration . ' minutes',
                'Box Office' => '$' . number_format($this->boxOffice, 0, '.', ','),
                'Director' => $this->director
            ];
        
            echo $this->generateCard($this->title, $listDetails);
        }
        
        public function generateCard($title, $listDetails) {
            $card = '<div class="card" style="width: 18rem;">';
            $card .= '<div class="card-body">';
            $card .= '<h5 class="card-title">' . $title . '</h5>';
            $card .= '<ul class="list-unstyled">';
        
            foreach ($listDetails as $label => $value) {
                $card .= '<li><strong>' . $label . ':</strong> ' . $value . '</li>';
            }
        
            $card .= '</ul>';
            $card .= '</div>';
            $card .= '</div>';
        
            return $card;
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
