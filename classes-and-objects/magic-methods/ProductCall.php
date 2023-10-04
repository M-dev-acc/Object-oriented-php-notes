<?php

require_once 'Product.php';

class ProductCall extends Product
{
    /**
     * __call magic method is used to catch method calls on inaccessible or non-existent methods within an object context. When an object calls a method that is not accessible or does not exist in the object's class, PHP will look for the __call method in that class and execute it with the intended method name and its arguments.
     */

    // Magic method for overloading method invocation
    public function __call($method, $arguments) {
        if ($method == 'formatPrice') {
            if (count($arguments) == 1) {
                return sprintf($arguments[0], $this->getPrice());
            } else {
                throw new InvalidArgumentException('Invalid argument for formatPrice method.');
            }
        }
        return null;
    }
}

// Example usage
$product = new ProductCall("Shoes", 1200);
$formattedPrice = $product->formatPrice("Price: $%d"); // Formats the price using magic method
echo $formattedPrice;
