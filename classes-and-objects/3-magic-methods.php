<?php

class Product
{

# [1] Method - TO ASSIGN PROPERTIES
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

    function addTaxes($taxAmount) {
        return $this->price - $taxAmount;
    }

    public function priceAsCurrency($currencySymbol = '$') {
        return "$currencySymbol $this->price";
    }

    // Defined arguments
    public function convertIntoCurrency($diviser = 1, $currencySymbol = '$') {
        $convertedPrice = $this->price / $diviser;
        return "$currencySymbol $convertedPrice";
    }
}

// Passing values to the properties
// # Note: Name arguments can also be used to assign properties values
// # Example: new Product(price: 2499);
$productClassObject = new Product("Shoes", 1200);
$productUpdatedValue = $productClassObject->addTaxes(150); # Passing an argument to the method
$priceString = $productClassObject->priceAsCurrency();
$priceStringWithSymbol = $productClassObject->priceAsCurrency('₹'); # Passing argument over default argument
$priceInCurrency = $productClassObject->convertIntoCurrency(currencySymbol: '₹');

# OUTPUTS
echo <<<HTML
<pre>
HTML;

var_dump("Object's argument method output: ", $productUpdatedValue);
var_dump("Object's defined argument method output (Default argument): ", $priceString);
var_dump("Object's defined argument method output (Defined argument): ", $priceStringWithSymbol);
var_dump("Object's defined argument method output (Named argument): ", $priceInCurrency);

echo <<<HTML
</pre>
HTML;
