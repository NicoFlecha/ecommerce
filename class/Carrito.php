<?php

class Carrito {
  private $id;
  private $productos = [];
  private $cantidad;
  private $total;

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId(): int
  {
    return $this->id;
  }

  public function setProducto(Producto $producto)
  {
    $this->productos[] = $producto;
  }
  public function getProductos(): array
  {
    return $this->productos;
  }

  public function setCantidad(int $cantidad)
  {
    $this->cantidad = $cantidad;
  }
  public function getCantidad(): int
  {
    return $this->cantidad;
  }

  public function calcularTotal(): float
  {
    return $this->productos;
  }
}
