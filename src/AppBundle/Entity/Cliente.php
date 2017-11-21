<?php

namespace AppBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $dpi;

    /**
     * @var integer
     */
    private $nit;


    /**
     * Get idCliente
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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

     public function __toString()
    {
        return $this->nombre;
    }
    
    /**
     * Set dpi
     *
     * @param integer $dpi
     *
     * @return Cliente
     */
    public function setDpi($dpi)
    {
        $this->dpi = $dpi;

        return $this;
    }

    /**
     * Get dpi
     *
     * @return integer
     */
    public function getDpi()
    {
        return $this->dpi;
    }

    /**
     * Set nit
     *
     * @param integer $nit
     *
     * @return Cliente
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return integer
     */
    public function getNit()
    {
        return $this->nit;
    }
}

