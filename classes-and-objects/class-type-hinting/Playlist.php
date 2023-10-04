<?php

class Playlist
{
    public $playlist = [];

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

    // public function addSong($song) { # DOES NOT CHECK ARGUMENT 
    public function addSong(Song $song) { # CHECK ARGUMENT
        $this->playlist[] = $song;
    }
}
