<?php

namespace NW\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 */
class Articulos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $usuarioId;

    /**
     * @var string
     */
    private $idInterno;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var integer
     */
    private $precioPromocion;

    /**
     * @var array
     */
    private $tamanos;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var boolean
     */
    private $estatus;

    /**
     * @var array
     */
    private $fotos;

    /**
     * @var \NW\UserBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return Articulos
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set idInterno
     *
     * @param string $idInterno
     * @return Articulos
     */
    public function setIdInterno($idInterno)
    {
        $this->idInterno = $idInterno;

        return $this;
    }

    /**
     * Get idInterno
     *
     * @return string 
     */
    public function getIdInterno()
    {
        return $this->idInterno;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Articulos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Articulos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Articulos
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Articulos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precioPromocion
     *
     * @param integer $precioPromocion
     * @return Articulos
     */
    public function setPrecioPromocion($precioPromocion)
    {
        $this->precioPromocion = $precioPromocion;

        return $this;
    }

    /**
     * Get precioPromocion
     *
     * @return integer 
     */
    public function getPrecioPromocion()
    {
        return $this->precioPromocion;
    }

    /**
     * Set tamanos
     *
     * @param array $tamanos
     * @return Articulos
     */
    public function setTamanos($tamanos)
    {
        $this->tamanos = $tamanos;

        return $this;
    }

    /**
     * Get tamanos
     *
     * @return array 
     */
    public function getTamanos()
    {
        return $this->tamanos;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Articulos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estatus
     *
     * @param boolean $estatus
     * @return Articulos
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return boolean 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fotos
     *
     * @param array $fotos
     * @return Articulos
     */
    public function setFotos($fotos)
    {
        $this->fotos = $fotos;

        return $this;
    }

    /**
     * Get fotos
     *
     * @return array 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set user
     *
     * @param \NW\UserBundle\Entity\User $user
     * @return Articulos
     */
    public function setUser(\NW\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \NW\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    // Método que regresa mis valores en forma de array
    public function getValues(){
        return array(
        'id' => $this->getId(),
        'idInterno' => $this->getIdInterno(),
        'nombre' => $this->getNombre(),
        'descripcion' => $this->getDescripcion(),
        'stock' => $this->getStock(),
        'precio' => $this->getPrecio(),
        'precioPromocion' => $this->getPrecioPromocion(),
        'tamanos' => $this->getTamanos(),
        'tipo' => $this->getTipo(),
        'estatus' => $this->getEstatus(),
        'fotos' => $this->getFotosarticulos()->toArray(),
        'categoria' => $this->getCategoriaId()
        );
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fotosarticulos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fotosarticulos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fotosarticulos
     *
     * @param \NW\PrincipalBundle\Entity\FotosArticulos $fotosarticulos
     * @return Articulos
     */
    public function addFotosarticulo(\NW\PrincipalBundle\Entity\FotosArticulos $fotosarticulos)
    {
        $this->fotosarticulos[] = $fotosarticulos;

        return $this;
    }

    /**
     * Remove fotosarticulos
     *
     * @param \NW\PrincipalBundle\Entity\FotosArticulos $fotosarticulos
     */
    public function removeFotosarticulo(\NW\PrincipalBundle\Entity\FotosArticulos $fotosarticulos)
    {
        $this->fotosarticulos->removeElement($fotosarticulos);
    }

    /**
     * Get fotosarticulos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotosarticulos()
    {
        return $this->fotosarticulos;
    }
    /**
     * @var integer
     */
    private $categoriaId;

    /**
     * @var \NW\PrincipalBundle\Entity\Categorias
     */
    private $categoria;


    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     * @return Articulos
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return integer 
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set categoria
     *
     * @param \NW\PrincipalBundle\Entity\Categorias $categoria
     * @return Articulos
     */
    public function setCategoria(\NW\PrincipalBundle\Entity\Categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \NW\PrincipalBundle\Entity\Categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
     * @var \NW\PrincipalBundle\Entity\Banners
     */
    private $banner;


    /**
     * Set banner
     *
     * @param \NW\PrincipalBundle\Entity\Banners $banner
     * @return Articulos
     */
    public function setBanner(\NW\PrincipalBundle\Entity\Banners $banner = null)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return \NW\PrincipalBundle\Entity\Banners 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Articulos
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
