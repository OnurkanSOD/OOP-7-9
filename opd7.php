<?php
class Product {
    public function __construct(
        private string $name,
        private float $price,
        private string $currency
    ) {
        // De constructor promoteert de argumenten direct naar properties.
    }

    // Voeg eventuele andere methodes toe die je nodig hebt.
}

// Voorbeeld van het aanmaken van een product.
$product1 = new Product(name: "Techo beats", price: 2, currency: "€");
?>
