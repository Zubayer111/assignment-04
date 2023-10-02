<?php
class Product{
    private $name;
    private $id;
    private $price;

    public function __construct($name, $id, $price)
    {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
    }

    public function formattedPrice()
    {
        return "$" .number_format($this->price, 2); 
    }

    public function showDetails()
    {
        echo "Product Details: \n";
        echo "- ID:{$this->id} \n";
        echo "- Name:{$this->name} \n";
        echo "- Price:{$this->price}";
    }
}

$product = new Product("T-shirt",1,19.99);
$product->showDetails();