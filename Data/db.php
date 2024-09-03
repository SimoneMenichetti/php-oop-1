<?php
// importiamo movie php da Model
require_once __DIR__ . '/../Model/Movie.php';

$Movies= [
    new Movie("The Grand Budapest Hotel", "English", 2014, "Commedia", 8.1, 99, 172,000,000, "Wes Anderson"),
    new Movie("The Lord of the Rings: The Fellowship of the Ring", "English", 2001, "Fantasy", 8.8, 178, 871,530,324, "Peter Jackson"),
    new Movie("Mad Max: Fury Road", "English", 2015, "Azione", 8.1, 120, 378,000,000, "George Miller"),
    new Movie("Toy Story", "English", 1995, "Cartone Animato", 8.8, 81, 373,554,033, "John Lasseter"),
    new Movie("Spirited Away", "Japanese", 2001, "Anime", 8.6, 125, 395,000,000, "Hayao Miyazaki"),
];