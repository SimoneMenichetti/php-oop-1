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
}

// manifestazione del costruttore 
// Il costruttore permette di eseguire azioni nel momento in cui viene creata l’istanza della classe.

function __construct($title,$language,$releaseYear,$genre,$rating,$duration,$boxOffice,$director){

}

