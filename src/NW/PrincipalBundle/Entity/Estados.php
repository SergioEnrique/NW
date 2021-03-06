<?php

namespace NW\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 */
class Estados
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $paisId;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $novios;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $novias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $registroproveedores;

    /**
     * @var \NW\PrincipalBundle\Entity\Paises
     */
    private $pais;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->novios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->novias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->registroproveedores = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set paisId
     *
     * @param integer $paisId
     * @return Estados
     */
    public function setPaisId($paisId)
    {
        $this->paisId = $paisId;

        return $this;
    }

    /**
     * Get paisId
     *
     * @return integer 
     */
    public function getPaisId()
    {
        return $this->paisId;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Estados
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
     * Add novios
     *
     * @param \NW\UserBundle\Entity\Novios $novios
     * @return Estados
     */
    public function addNovio(\NW\UserBundle\Entity\Novios $novios)
    {
        $this->novios[] = $novios;

        return $this;
    }

    /**
     * Remove novios
     *
     * @param \NW\UserBundle\Entity\Novios $novios
     */
    public function removeNovio(\NW\UserBundle\Entity\Novios $novios)
    {
        $this->novios->removeElement($novios);
    }

    /**
     * Get novios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNovios()
    {
        return $this->novios;
    }

    /**
     * Add novias
     *
     * @param \NW\UserBundle\Entity\Novias $novias
     * @return Estados
     */
    public function addNovia(\NW\UserBundle\Entity\Novias $novias)
    {
        $this->novias[] = $novias;

        return $this;
    }

    /**
     * Remove novias
     *
     * @param \NW\UserBundle\Entity\Novias $novias
     */
    public function removeNovia(\NW\UserBundle\Entity\Novias $novias)
    {
        $this->novias->removeElement($novias);
    }

    /**
     * Get novias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNovias()
    {
        return $this->novias;
    }

    /**
     * Add registroproveedores
     *
     * @param \NW\UserBundle\Entity\registroproveedores $registroproveedores
     * @return Estados
     */
    public function addRegistroproveedore(\NW\UserBundle\Entity\registroproveedores $registroproveedores)
    {
        $this->registroproveedores[] = $registroproveedores;

        return $this;
    }

    /**
     * Remove registroproveedores
     *
     * @param \NW\UserBundle\Entity\registroproveedores $registroproveedores
     */
    public function removeRegistroproveedore(\NW\UserBundle\Entity\registroproveedores $registroproveedores)
    {
        $this->registroproveedores->removeElement($registroproveedores);
    }

    /**
     * Get registroproveedores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegistroproveedores()
    {
        return $this->registroproveedores;
    }

    /**
     * Set pais
     *
     * @param \NW\PrincipalBundle\Entity\Paises $pais
     * @return Estados
     */
    public function setPais(\NW\PrincipalBundle\Entity\Paises $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \NW\PrincipalBundle\Entity\Paises 
     */
    public function getPais()
    {
        return $this->pais;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reportero;


    /**
     * Add reportero
     *
     * @param \NW\UserBundle\Entity\Reportero $reportero
     * @return Estados
     */
    public function addReportero(\NW\UserBundle\Entity\Reportero $reportero)
    {
        $this->reportero[] = $reportero;

        return $this;
    }

    /**
     * Remove reportero
     *
     * @param \NW\UserBundle\Entity\Reportero $reportero
     */
    public function removeReportero(\NW\UserBundle\Entity\Reportero $reportero)
    {
        $this->reportero->removeElement($reportero);
    }

    /**
     * Get reportero
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReportero()
    {
        return $this->reportero;
    }
}
