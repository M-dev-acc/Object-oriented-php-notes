<?php
require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song("Example song1");
$song2 = "Example song2";

// Adding Song object into Playlist object
$playlist->addSong($song1);
$playlist->addSong($song2); 

/**
 * ----------------------------------------------------------------------
 * | CLASS TYPE HINTING
 * ----------------------------------------------------------------------
 * | Class type hinting is a feature that allows you to specify the 
 * | expected class of an object when defining a function or method 
 * | parameter. This helps in ensuring that the function or method 
 * | receives an object of the specified class as an argument. If an 
 * | argument of a different class or data type is passed, PHP will 
 * | raise a TypeError.
 * ----------------------------------------------------------------------
 */

// Accessing song object
foreach ($playlist->playlist as $song) {
    print $song->title; # Attempt to read property "title" on string
}