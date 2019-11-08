<?php

class Usuario {
  protected $id;
  protected $nombre;
  protected $apellido;
  protected $userName;
  protected $password;
  protected $permiso;
  protected $carrito;

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

  public function setApellido(string $apellido)
  {
    $this->apellido = $apellido;
  }
  public function getApellido(): string
  {
    return $this->apellido;
  }

  public function setUserName(string $userName)
  {
    $this->userName = $userName;
  }
  public function getUserName(): string
  {
    return $this->userName;
  }

  public function setPassword(string $password)
  {
    $this->password = $password;
  }
  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPermiso(int $permiso)
  {
    $this->permiso = $permiso;
  }
  public function getPermiso(): int
  {
    return $this->permiso;
  }

  public function setCarrito(Carrito $carrito)
  {
    $this->carrito = $carrito;
  }
  public function getCarrito(): Carrito
  {
    return $this->carrito;
  }

  public function agregarCarrito(Producto $producto, int $cantidad)
  {
    $this->getCarrito();
  }

  public function guardarse()
  {
    return 'Me guardé'
  }
}
