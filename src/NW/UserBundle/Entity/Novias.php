<?php

namespace NW\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Novias
 */
class Novias
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
    private $nombre;

    /**
     * @var string
     */
    private $sNombre;

    /**
     * @var string
     */
    private $aPaterno;

    /**
     * @var string
     */
    private $aMaterno;

    /**
     * @var string
     */
    private $eMail;

    /**
     * @var string
     */
    private $lada;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $cp;

    /**
     * @var \NW\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \NW\PrincipalBundle\Entity\Estados
     */
    private $estados;


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
     * @return Novias
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
     * Set nombre
     *
     * @param string $nombre
     * @return Novias
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
     * Set sNombre
     *
     * @param string $sNombre
     * @return Novias
     */
    public function setSNombre($sNombre)
    {
        $this->sNombre = $sNombre;

        return $this;
    }

    /**
     * Get sNombre
     *
     * @return string 
     */
    public function getSNombre()
    {
        return $this->sNombre;
    }

    /**
     * Set aPaterno
     *
     * @param string $aPaterno
     * @return Novias
     */
    public function setAPaterno($aPaterno)
    {
        $this->aPaterno = $aPaterno;

        return $this;
    }

    /**
     * Get aPaterno
     *
     * @return string 
     */
    public function getAPaterno()
    {
        return $this->aPaterno;
    }

    /**
     * Set aMaterno
     *
     * @param string $aMaterno
     * @return Novias
     */
    public function setAMaterno($aMaterno)
    {
        $this->aMaterno = $aMaterno;

        return $this;
    }

    /**
     * Get aMaterno
     *
     * @return string 
     */
    public function getAMaterno()
    {
        return $this->aMaterno;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return Novias
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set lada
     *
     * @param string $lada
     * @return Novias
     */
    public function setLada($lada)
    {
        $this->lada = $lada;

        return $this;
    }

    /**
     * Get lada
     *
     * @return string 
     */
    public function getLada()
    {
        return $this->lada;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Novias
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Novias
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Novias
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Novias
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Novias
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Novias
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set user
     *
     * @param \NW\UserBundle\Entity\User $user
     * @return Novias
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

    /**
     * Set estados
     *
     * @param \NW\PrincipalBundle\Entity\Estados $estados
     * @return Novias
     */
    public function setEstados(\NW\PrincipalBundle\Entity\Estados $estados = null)
    {
        $this->estados = $estados;

        return $this;
    }

    /**
     * Get estados
     *
     * @return \NW\PrincipalBundle\Entity\Estados 
     */
    public function getEstados()
    {
        return $this->estados;
    }
}
