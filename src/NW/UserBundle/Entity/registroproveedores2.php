<?php
// src/NW/UserBundle/Entity/registroproveedores.php
namespace NW\UserBundle\Entity;

/**
 * registroproveedores
 */
class registroproveedores
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var integer
     */
    protected $usuarioId;

    /**
     *  
     */
    protected $nombreRazon;

    /**
     *  
     */
    protected $apellidoPaterno;

    /**
     *  
     */
    protected $apellidoMaterno;

    /**
     *  
     */
    protected $rfc;

    /**
     *  
     */
    protected $email;

    /**
     *  
     */
    protected $lada;

    /**
     *  
     */
    protected $telefono;

    /**
     *  
     */
    protected $celular;

    /**
     *  
     */
    protected $direccion;

    /**
     *  
     */
    protected $pais;

    /**
     *  
     */
    protected $estado;

    /**
     *  
     */
    protected $ciudad;

    /**
     *  
     */
    protected $cp;

    /**
     * @var \NW\UserBundle\Entity\User
     */
    protected $user;


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
     * @return registroproveedores
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
     * Set nombreRazon
     *
     * @param string $nombreRazon
     * @return registroproveedores
     */
    public function setNombreRazon($nombreRazon)
    {
        $this->nombreRazon = $nombreRazon;

        return $this;
    }

    /**
     * Get nombreRazon
     *
     * @return string 
     */
    public function getNombreRazon()
    {
        return $this->nombreRazon;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     * @return registroproveedores
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return registroproveedores
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     * @return registroproveedores
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return registroproveedores
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lada
     *
     * @param string $lada
     * @return registroproveedores
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
     * @return registroproveedores
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
     * @return registroproveedores
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
     * @return registroproveedores
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
     * Set pais
     *
     * @param string $pais
     * @return registroproveedores
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return registroproveedores
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return registroproveedores
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
     * @return registroproveedores
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
     * @return registroproveedores
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
}
