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
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$productClassObject = new Product("Shoes", 1200);
// $productClassObject2 = new Product(1234, 'asfsgasg'); # THIS LINE WILL THROW ERROR
$productName = $productClassObject->name; # Accessing the property

# OUTPUTS
echo <<<HTML
<pre>
HTML;

var_dump("Object output: ", $productClassObject);
var_dump("Object's acessed property output: ", $productName);
var_dump("Object's changed property output: ", $productClassObject->price);

echo <<<HTML
</pre>
HTML;