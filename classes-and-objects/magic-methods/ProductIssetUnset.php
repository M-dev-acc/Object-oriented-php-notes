<?php

require_once 'Product.php';

class ProductIssetUnset extends Product
{
    /**
     * __isset is one of the magic methods, also known as overloading methods, that allows you to intercept calls to isset() on inaccessible or undefined properties of an object. When you call isset() on a property that is not accessible or not set within an object, the __isset method is automatically triggered, allowing you to define custom logic for handling such situations.
     */

    // Magic method for checking if a property is set
    public function __isset($property) {
        if ($property == 'price') {
            echo "Check property is exists.";
            return isset($this->price);
        }
        return false;
    }

    /**
     * the __unset magic method is used for cleaning up properties when they are unset from outside the object scope. When you unset an inaccessible property (either protected or private) or a property that doesn't exist within an object, the __unset magic method is automatically called.
     */

    // Magic method for unsetting a property
    public function __unset($property) {
        if ($property == 'price') {
            echo "Remove class property.";
            unset($this->price);
        }
    }
}

// Example usage
$product = new ProductIssetUnset("Shoes", 1200);
var_dump(isset($product->price)); // Checks if price property is set
unset($product->price); // Unsets the price property
var_dump(isset($product->price)); // Checks if price property is set after unset
