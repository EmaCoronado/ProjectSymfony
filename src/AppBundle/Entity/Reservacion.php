<?php

namespace AppBundle\Entity;

/**
 * Reservacion
 */
class Reservacion
{
    /**
     * @var integer
     */
    private $idReservacion;

    /**
     * @var \DateTime
     */
    private $fechaReservacion;

    /**
     * @var \DateTime
     */
    private $fechaUso;

    /**
     * @var \AppBundle\Entity\Empleado
     */
    private $idEmpleado;

    /**
     * @var \AppBundle\Entity\Habitacion
     */
    private $idHabitacion;

    /**
     * @var \AppBundle\Entity\Cliente
     */
    private $idCliente;


    /**
     * Get idReservacion
     *
     * @return integer
     */
    public function getIdReservacion()
    {
        return $this->idReservacion;
    }

    /**
     * Set fechaReservacion
     *
     * @param \DateTime $fechaReservacion
     *
     * @return Reservacion
     */
    public function setFechaReservacion($fechaReservacion)
    {
        $this->fechaReservacion = $fechaReservacion;

        return $this;
    }

    /**
     * Get fechaReservacion
     *
     * @return \DateTime
     */
    public function getFechaReservacion()
    {
        return $this->fechaReservacion;
    }

    /**
     * Set fechaUso
     *
     * @param \DateTime $fechaUso
     *
     * @return Reservacion
     */
    public function setFechaUso($fechaUso)
    {
        $this->fechaUso = $fechaUso;

        return $this;
    }

    /**
     * Get fechaUso
     *
     * @return \DateTime
     */
    public function getFechaUso()
    {
        return $this->fechaUso;
    }

    /**
     * Set idEmpleado
     *
     * @param \AppBundle\Entity\Empleado $idEmpleado
     *
     * @return Reservacion
     */
    public function setIdEmpleado(\AppBundle\Entity\Empleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \AppBundle\Entity\Empleado
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idHabitacion
     *
     * @param \AppBundle\Entity\Habitacion $idHabitacion
     *
     * @return Reservacion
     */
    public function setIdHabitacion(\AppBundle\Entity\Habitacion $idHabitacion = null)
    {
        $this->idHabitacion = $idHabitacion;

        return $this;
    }

    /**
     * Get idHabitacion
     *
     * @return \AppBundle\Entity\Habitacion
     */
    public function getIdHabitacion()
    {
        return $this->idHabitacion;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Cliente $idCliente
     *
     * @return Reservacion
     */
    public function setIdCliente(\AppBundle\Entity\Cliente $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}

