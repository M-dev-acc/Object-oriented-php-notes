<?php

class Product
{

    // Assigning the property
    public $name = "Shoe";
    public $price = 1500;

    function addTaxes($taxAmount) {
        return $this->price - $taxAmount;
    }

    /**
     * ----------------------------------------------------------------------
     * | OPTIONAL PARAMETER
     * ----------------------------------------------------------------------
     * | Optional parameters are parameters that do not need to be passed 
     * | when the function or method is called. If a value for an optional 
     * | parameter is not provided, the parameter will be assigned a default 
     * | value specified in the function or method definition.
     * ----------------------------------------------------------------------
     * 
     * # NOTE: Having default parameters at the end simplifies the parsing of 
     * function calls 
     */
    public function priceAsCurrency($currencySymbol = '$') {
        return "$currencySymbol $this->price";
    }

    // Defined arguments
    public function convertIntoCurrency($diviser = 1, $currencySymbol = '$') {
        $convertedPrice = $this->price / $diviser;
        return "$currencySymbol $convertedPrice";
    }
}

$productClassObject = new Product();
$productUpdatedValue = $productClassObject->addTaxes(150); # Passing an argument to the method
$priceString = $productClassObject->priceAsCurrency();
$priceStringWithSymbol = $productClassObject->priceAsCurrency('₹'); # Passing argument over default argument

/**
 * ----------------------------------------------------------------------
 * | NAMED ARGUMENTS
 * ----------------------------------------------------------------------
 * | allow you to pass values to a function by specifying the parameter 
 * | names along with the values. This feature enhances the readability 
 * | and maintainability of function calls, especially when functions 
 * | have a large number of parameters or when you want to pass arguments 
 * | out of order.
 * ----------------------------------------------------------------------
 * 
 * # NOTE: This feature available in PHP 8 and more than PHP 8 version
 */
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
