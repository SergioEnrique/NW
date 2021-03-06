<?php

namespace NW\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Padrinos
 */
class Padrinos
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
    private $padrino;

    /**
     * @var string
     */
    private $categoria;

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
     * @return Padrinos
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
     * Set padrino
     *
     * @param string $padrino
     * @return Padrinos
     */
    public function setPadrino($padrino)
    {
        $this->padrino = $padrino;

        return $this;
    }

    /**
     * Get padrino
     *
     * @return string 
     */
    public function getPadrino()
    {
        return $this->padrino;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Padrinos
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set user
     *
     * @param \NW\UserBundle\Entity\User $user
     * @return Padrinos
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

    // Función que me regresa mis valores en forma de array
    public function getValues(){
        return array(
        'id' => $this->getId(),
        'padrino' => $this->getPadrino(),
        'categoria' => $this->getCategoria()
        );
    }
}
