<?php

declare(strict_types=1);
include 'includes/header.php';

// definir una clase
class Producto
{
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

// crear instancia
$producto = new Producto("Tablet", 200, true);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor", 300, true);

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
