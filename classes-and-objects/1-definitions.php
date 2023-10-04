<?php

/**
 * ----------------------------------------------------------------------
 * | CLASS
 * ----------------------------------------------------------------------
 * | A **class** is like a blueprint for creating objects. It defines the 
 * | properties (attributes) and behaviors (methods) that the objects 
 * | will have.
 * ----------------------------------------------------------------------
 */
class Product
{
    /**
     * ----------------------------------------------------------------------
     * | CLASS PROPERTIES
     * ----------------------------------------------------------------------
     * | Class properties, also known as attributes or fields, are the data 
     * | members or variables that define the characteristics or attributes 
     * | of objects created from the class. These properties represent the 
     * | state of the object and define what data an object can hold.
     * ----------------------------------------------------------------------
     */
    // Assigning the property
    public $name = "Shoe";
    public $price;
    
    /**
     * ----------------------------------------------------------------------
     * | CLASS METHODS
     * ----------------------------------------------------------------------
     * | Class methods are functions defined within a class that operate on 
     * | class attributes and perform specific actions related to the class. 
     * | These methods define the behavior of the objects created from the 
     * | class. Class methods are also sometimes called member functions or 
     * | object methods.
     * ----------------------------------------------------------------------
     */
    function discountedPrice() {
        /**
         * ----------------------------------------------------------------------
         * | $this VARIABLE
         * ----------------------------------------------------------------------
         * | $this is a special variable that is used inside a class to refer to 
         * | the current instance of the class. It is a reference to the object 
         * | on which a method was called. In object-oriented programming, $this 
         * | is commonly used within class methods to access class properties 
         * | and methods.
         * ----------------------------------------------------------------------
         */
        return $this->price - 250;
    }
}

/**
 * ----------------------------------------------------------------------
 * | OBJECT
 * ----------------------------------------------------------------------
 * | An **object** is an instance of a class. It's a specific, 
 * | self-contained entity that contains data and can perform actions.
 * ----------------------------------------------------------------------
 */
$productClassObject = new Product();

$productName = $productClassObject->name; # Accessing the property

$productClassObject->price = 1200; # Assignnig value to the property

$productUpdatedValue = $productClassObject->discountedPrice(); # Acessing the object method

# OUTPUTS
echo <<<HTML
<pre>
HTML;

var_dump("Object output: ", $productClassObject);
var_dump("Object's acessed property output: ", $productName);
var_dump("Object's changed property output: ", $productClassObject->price);
var_dump("Object's method output: ", $productUpdatedValue);

echo <<<HTML
</pre>
HTML;
