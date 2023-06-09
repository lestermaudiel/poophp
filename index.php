<?php
// DEFINICION DE LA CLASE PRODUCTO
class Producto{
    // DEFINICION DE ATRIBUTOS
    public $precio;
    public $nombre;
    public $disponible;

    // DEFINICION DE METODOS

    public function mostrarNombreProducto() : void{
        echo $this->nombre;
    }

    public function mostrarPrecioProducto() : void{
        echo $this->precio;
    }
    public function mostrarDisponibleProducto() : void{
        if ($this->disponible){
         echo "Disponible";
        }else{
            echo "No Disponible ";
        }
        
    }

}
// CREACIÓN DE UN OBJETO
// CREAR UNA INSTANCIA
$mesa = new Producto(); 

$mesa->nombre = "Mesa";
$mesa->precio = 500;
$mesa->disponible = true;

$silla = new Producto(); 

$silla->nombre = "Silla grande";
$silla->precio = 100;
$silla->disponible = false;

echo "<pre>";
var_dump($mesa);
echo "</pre>";
echo "<pre>";
var_dump($silla);
echo "</pre>";

echo "<pre>";
$mesa->mostrarNombreProducto();
echo "<br>";
$mesa->mostrarPrecioProducto();
echo "<br>";
$mesa->mostrarDisponibleProducto();
echo "</pre>";
echo "<br>";
echo "<pre>";
$silla->mostrarNombreProducto();
echo "<br>";
$silla->mostrarPrecioProducto();
echo "<br>";
$silla->mostrarDisponibleProducto();
echo "</pre>";

?>