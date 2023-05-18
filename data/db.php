<?php 
include __DIR__.'/../Models/Category.php';
include __DIR__.'/../Models/Product.php';
include __DIR__.'/../Models/FoodProduct.php';
include __DIR__.'/../Models/ToyProduct.php';
include __DIR__.'/../Models/ClothesProduct.php';


$categories = 
[
    $dog = new Category('<i class="fa-solid fa-dog fs-3 p-2 rounded-circle"></i>', 'dog'),
    $cat = new Category('<i class="fa-solid fa-cat fs-3 p-2 rounded-circle"></i>', 'cat'),
    $miscellaneous = new Category('<i class="fa-solid fa-paw fs-3 p-2 rounded-circle"></i>', 'paw')
];

$products = 
[
    new Product('Cuccia Igloo', $miscellaneous, 40, 'https://arcaplanet.vtexassets.com/arquivos/ids/265863-1800-1800/trixie-cuccia-igloo-tipi-per-gatto-e-cane.jpg?v=1769991550&quality=1&width=1800&height=1800'),
    new ToyProduct('Bacchetta con pesciolini', $cat, 3, 'https://arcaplanet.vtexassets.com/arquivos/ids/273143-1800-1800/croci-gioco-gatto-pesciolini.jpg?v=1770596136&quality=1&width=1800&height=1800' ),
    new ClothesProduct('Felpa per cani Marvel', $dog, 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/272093-1800-1800/s.jpg?v=1763987790&quality=1&width=1800&height=1800'),
    new FoodProduct('Crocchette Monge salmone e riso', $dog, 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797-1800-1800/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1770734797&quality=1&width=1800&height=1800'),
    new Product('Spazzola pelo lungo', $miscellaneous, 8, 'https://arcaplanet.vtexassets.com/arquivos/ids/280567-1800-1800/23.01.2023---Brosserie-Arcaplanet--7-.jpg?v=1770683085&quality=1&width=1800&height=1800'),
    new ToyProduct('Peluche Leone con squittio', $dog, 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/218050-1800-1800/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-leone-in-peluche-tric79.jpg?v=1770720180&quality=1&width=1800&height=1800'),
    new FoodProduct('Monge Natural Superpremium', $cat, 4, 'https://zooplanet.it/wp-content/uploads/2023/02/A_C169275-600x600.jpg'),
    new ToyProduct('Bacchetta con pesciolini', $cat, 3, 'https://arcaplanet.vtexassets.com/arquivos/ids/273143-1800-1800/croci-gioco-gatto-pesciolini.jpg?v=1770596136&quality=1&width=1800&height=1800'),
    new Product('Trasportino bordeaux e grigio', $miscellaneous, 30, 'https://arcaplanet.vtexassets.com/arquivos/ids/278512-1800-1800/united-pets-trasportino-auto-bordeaux-grigio.jpg?v=1770510128&quality=1&width=1800&height=1800')

];

try {
    $products[3]->setWeigth(1000, 'g');
} catch (Exception $e){
    echo 'Eccezione: '.$e->getMessage();
}