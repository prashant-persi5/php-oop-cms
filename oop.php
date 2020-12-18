<?php 

class Product {
  private $price;
  private $weight;

  public function __construct($price, $weight) {
    $this->price = $price;
    $this->weight = $weight;
  }

  public function getWeight() {
    return $this->weight;
  }
}

class Shipping {
  private $totalShipping;
  private $products;
  private $pricePerKG;

  public function __construct($pricePerKG) {
    $this->pricePerKG = $pricePerKG;
  }

  public function addProduct(Product $product) {
    $this->products[] = $product;
  }

  public function calculateShipping() {
    foreach($this->products as $product) {
      $this->totalShipping += $product->getWeight() * $this->pricePerKG;
    }
  }

  public function getTotalShippingPrice() {
    return $this->totalShipping;
  }
}

$product = new Product(5, 1);
$product1 = new Product(10, 3);
$product2 = new Product(15, 5);

$pricePerKG = 4;
$shipping = new Shipping($pricePerKG);
$shipping->addProduct($product);
$shipping->addProduct($product1);
$shipping->calculateShipping();

$totalShippingPrice = $shipping->getTotalShippingPrice();

var_dump($totalShippingPrice);

?>