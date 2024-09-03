<?php
// importiamo movie php da Model
require_once __DIR__ . '/../Model/Movie.php';

$Movies= [
      
    new Movie("Oppenheimer", "English", 2023, "Drammatici", 8.9, 180, 900000000, "Christopher Nolan"),
    new Movie("Barbie", "English", 2023, "Commedia", 7.2, 114, 1500000000, "Greta Gerwig"),
    new Movie("The Grand Budapest Hotel", "English", 2014, "Commedia", 8.1, 99, 172,000,000, "Wes Anderson"),
    new Movie("The Lord of the Rings: The Fellowship of the Ring", "English", 2001, "Fantasy", 8.8, 178, 871,530,324, "Peter Jackson"),
    new Movie("Mad Max: Fury Road", "English", 2015, "Azione", 8.1, 120, 378,000,000, "George Miller"),
    new Movie("Toy Story", "English", 1995, "Cartone Animato", 8.8, 81, 373,554,033, "John Lasseter"),
    new Movie("Spirited Away", "Japanese", 2001, "Anime", 8.6, 125, 395,000,000, "Hayao Miyazaki"),
    new Movie("Superbad", "English", 2007, "Comici", 7.6, 113, 169900000, "Greg Mottola"),
    new Movie("The Hangover", "English", 2009, "Comici", 7.7, 100, 469300000, "Todd Phillips"),
    new Movie("Pride and Prejudice", "English", 2005, "Romantici", 7.8, 129, 121000000, "Joe Wright"),
    new Movie("La La Land", "English", 2016, "Romantici", 8.0, 128, 446100000, "Damien Chazelle"),
    new Movie("The Shawshank Redemption", "English", 1994, "Drammatici", 9.3, 142, 28817291, "Frank Darabont"),
    new Movie("The Godfather", "English", 1972, "Drammatici", 9.2, 175, 246120986, "Francis Ford Coppola"),
    new Movie("Blade Runner 2049", "English", 2017, "Fantascienza", 8.0, 164, 259239658, "Denis Villeneuve"),
    new Movie("Interstellar", "English", 2014, "Fantascienza", 8.6, 169, 701729206, "Christopher Nolan"),
    new Movie("Get Out", "English", 2017, "Horror", 7.7, 104, 255000000, "Jordan Peele"),
    new Movie("The Conjuring", "English", 2013, "Horror", 7.5, 112, 319500141, "James Wan"),
    new Movie("Won't You Be My Neighbor?", "English", 2018, "Documentari", 8.4, 94, 22600000, "Morgan Neville"),
    new Movie("13th", "English", 2016, "Documentari", 8.2, 100, 0, "Ava DuVernay"),



];