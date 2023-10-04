<?php

require_once 'Product.php';

class ProductSerialize extends Product
{
    /**
     * the __sleep magic method is used in serialization. Serialization is the process of converting an object into a format that can be easily stored, transmitted, or reconstructed later. When an object is being serialized, the __sleep method allows you to specify which object properties should be serialized.
     */

    // Magic method for serialization
    public function __sleep() {
        return ['name', 'price']; // 'price' should be a member variable
    }

    /**
     * __wakeup() is a magic method that is used in the process of deserialization. When you serialize an object using the serialize() function, the object is converted into a string representation. Later, when you want to use this serialized data to reconstruct the object, you use the unserialize() function. During this unserialization process, the __wakeup() method can be defined in your class to customize the re-initialization of the object after it has been unserialized.
     */
    // Magic method for unserialization
    public function __wakeup() {
        // Additional initialization logic if needed after unserialization
    }
}

// Example usage
$product = new ProductSerialize("Shoes", 1200);
$serializedProduct = serialize($product); // Serializes the product object
$unserializedProduct = unserialize($serializedProduct); // Unserializes the product object
echo "Unserialized Product: {$unserializedProduct->name}, Price: {$unserializedProduct->getPrice()}\n";
