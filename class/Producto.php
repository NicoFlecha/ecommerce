<?php

class Producto {
  private $id;
  private $nombre;
  private $marca;
  private $imagenes = [];
  private $precio;

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId(): int
  {
    return $this->id;
  }

  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }
  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function setMarca(string $marca)
  {
    $this->marca = $marca;
  }
  public function getMarca(): string
  {
    return $this->marca;
  }

  public function setImagen(string $imagen)
  {
    $this->imagenes[] = $imagen;
  }
  public function getImagenes(): array
  {
    return $this->imagenes;
  }

  public function setPrecio(float $precio)
  {
    $this->precio = $precio;
  }
  public function getPrecio(): float
  {
    return $this->precio;
  }
}
