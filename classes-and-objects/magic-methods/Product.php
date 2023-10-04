<?php

class Product
{
    public $name;
    public $price;

    /**
     * ----------------------------------------------------------------------
     * | __constructor() MAGIC METHOD
     * ----------------------------------------------------------------------
     * | __construct() is a magic method that serves as the class 
     * | constructor. It is automatically called when an object of a class 
     * | is created. The __construct method is used to initialize the 
     * | object's properties, perform setup tasks, and prepare the object 
     * | for use.
     * ----------------------------------------------------------------------
     */
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
# END [1] Method

# [2] Method - TO ASSIGN PROPERTIES (PROMOTED CONSTRUCTOR PROPERTIES)
    
    /**
     * ----------------------------------------------------------------------
     * | __constructor() PROMOTED CONSTRUCTOR PROPERTIES
     * ----------------------------------------------------------------------
     * | In PHP 8.0 and later versions, you can declare constructor 
     * | parameters directly in the class constructor, allowing you to 
     * | simultaneously declare and initialize class properties. This feature 
     * | is known as "promoted constructor properties" or "constructor 
     * | property promotion." It simplifies the process of defining classes 
     * | by reducing the boilerplate code required to initialize object 
     * | properties.
     * ----------------------------------------------------------------------
     */

    // public function __construct(public $name, public $price) {
    //     $this->name = $name;
    //     $this->price = $price;
    // }
# END [2] Method

    public function getPrice() {
        return $this->price;
    }
}
