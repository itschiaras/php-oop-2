<?php 

include __DIR__.'/../Models/Product.php';
include __DIR__.'/../Models/CatProduct.php';
include __DIR__.'/../Models/DogProduct.php';

$products = 
[
    new Product('Cuccia Igloo', '40€', 'https://arcaplanet.vtexassets.com/arquivos/ids/265863-1800-1800/trixie-cuccia-igloo-tipi-per-gatto-e-cane.jpg?v=1769991550&quality=1&width=1800&height=1800'),
    new Product('Spazzola pelo lungo', '8€', 'https://arcaplanet.vtexassets.com/arquivos/ids/280567-1800-1800/23.01.2023---Brosserie-Arcaplanet--7-.jpg?v=1770683085&quality=1&width=1800&height=1800'),
    new Product('Collare Batman', '16€', 'https://arcaplanet.vtexassets.com/arquivos/ids/272055-1800-1800/collare-dc-comics-batman-per-cane.jpg?v=1770530121&quality=1&width=1800&height=1800'),
    new DogProduct('Felpa per cani Marvel', '25,50 €', 'Accessori', 'https://arcaplanet.vtexassets.com/arquivos/ids/272093-1800-1800/s.jpg?v=1763987790&quality=1&width=1800&height=1800'),
    new DogProduct('Crocchette Monge salmone e riso', '25,50 €', '', 'https://arcaplanet.vtexassets.com/arquivos/ids/272093-1800-1800/s.jpg?v=1763987790&quality=1&width=1800&height=1800'),
    new DogProduct('Peluche Leone con squittio', '10€', 'Giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/218050-1800-1800/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-leone-in-peluche-tric79.jpg?v=1770720180&quality=1&width=1800&height=1800'),
    new CatProduct('Lettiera Catsan 10L', '8€', 'Igiene', 'https://arcaplanet.vtexassets.com/arquivos/ids/272693-1800-1800/catsan-10-lt--1-.jpg?v=1770729753&quality=1&width=1800&height=1800'),
    new CatProduct('Bacchetta con pesciolini', '3€', 'Giochi', 'https://arcaplanet.vtexassets.com/arquivos/ids/273143-1800-1800/croci-gioco-gatto-pesciolini.jpg?v=1770596136&quality=1&width=1800&height=1800'),
    new CatProduct('Trasportino bordeaux e grigio', '30€', 'Trasporto', 'https://arcaplanet.vtexassets.com/arquivos/ids/278512-1800-1800/united-pets-trasportino-auto-bordeaux-grigio.jpg?v=1770510128&quality=1&width=1800&height=1800')

];