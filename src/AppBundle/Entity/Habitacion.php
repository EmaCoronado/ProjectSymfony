<?php

namespace AppBundle\Entity;

/**
 * Habitacion
 */
class Habitacion
{
    /**
     * @var integer
     */
    private $idHabitacion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $numero;


    /**
     * Get idHabitacion
     *
     * @return integer
     */
    public function getIdHabitacion()
    {
        return $this->idHabitacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Habitacion
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
     * Set numero
     *
     * @param integer $numero
     *
     * @return Habitacion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }
}

