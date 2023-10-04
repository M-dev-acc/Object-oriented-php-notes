<?php

require_once 'Product.php';

class ProductClone extends Product
{
    /**
     *  the __clone magic method is used for object cloning. When you create a copy of an object using the clone keyword, PHP calls the __clone method if it is defined in the original object. This method allows you to customize the cloning process, such as creating deep copies of objects, initializing properties, or performing any other necessary operations.
     */

    // Magic method for cloning the object
    public function __clone() {
        // Additional logic for cloning if needed
        $this->name = $this->name . " (Cloned)";
    }
}

// Example usage
$product = new ProductClone("Shoes", 1200);
$clonedProduct = clone $product; // Clones the product object
echo "Original Product: {$product->name}\n";
echo "Cloned Product: {$clonedProduct->name}\n";
