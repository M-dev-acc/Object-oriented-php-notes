<?php

require_once 'Product.php';

class ProductGetSet extends Product
{
    /**
     * __get is one of the magic methods that allows you to intercept attempts to access properties of an object that are not accessible or do not exist. Magic methods in PHP start with double underscores. When you try to access a property that is not accessible or does not exist within an object context, the __get method is automatically called.
     */

    // Magic method for overloading property access
    public function __get($property) {
        if ($property == 'price') {
            return $this->price;
        }
        return null;
    }

    /**
     * the __set magic method is used to set the value of an inaccessible property in an object. Magic methods in PHP start with a double underscore (__) and provide a way to intercept and handle certain object behaviors. The __set method is triggered when an attempt is made to assign a value to a property that is not accessible (either not defined or declared as private or protected) within the object's context.
     */

    // Magic method for overloading property assignment
    public function __set($property, $value) {
        if ($property == 'price') {
            $this->price = $value;
        }
    }
}

// Example usage
$product = new ProductGetSet("Shoes", 1200);
$product->price = 1500; // Sets the price using magic method
echo "Product Price: {$product->price}\n";
