<?php
class Product {
    public string $name;
    public float $price;
    public string $currency;

    public function __construct(string $name, float $price, string $currency) {
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    public function getProduct(): string {
        return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price;
    }
}

// Maak drie producten aan met verschillende prijzen.
$product1 = new Product(name: "Techo beats", price: 2, currency: "€");
$product2 = new Product(name: "Jazz Vibes", price: 3, currency: "€");
$product3 = new Product(name: "Rock Hits", price: 4.5, currency: "€");

// Echo het productinformatie van het eerste product.
echo $product1->getProduct();
?>
