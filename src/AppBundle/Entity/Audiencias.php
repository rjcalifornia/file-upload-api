<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audiencias
 *
 * @ORM\Table(name="audiencias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AudienciasRepository")
 */
class Audiencias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=500, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=500, nullable=true)
     */
    private $apellidos;

    /**
     * @var int
     *
     * @ORM\Column(name="institucionid", type="integer", nullable=true)
     */
    private $institucionid;

    /**
     * @var int
     *
     * @ORM\Column(name="responsable", type="integer", nullable=true)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="razonvisita", type="string", length=1400, nullable=true)
     */
    private $razonvisita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaentrada", type="time", nullable=true)
     */
    private $horaentrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horasalida", type="time", nullable=true)
     */
    private $horasalida;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaadic", type="datetime", nullable=true)
     */
    private $fechaadic;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioadic", type="integer", nullable=true)
     */
    private $usuarioadic;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Audiencias
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Audiencias
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set institucionid
     *
     * @param integer $institucionid
     *
     * @return Audiencias
     */
    public function setInstitucionid($institucionid)
    {
        $this->institucionid = $institucionid;

        return $this;
    }

    /**
     * Get institucionid
     *
     * @return int
     */
    public function getInstitucionid()
    {
        return $this->institucionid;
    }

    /**
     * Set responsable
     *
     * @param integer $responsable
     *
     * @return Audiencias
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return int
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set razonvisita
     *
     * @param string $razonvisita
     *
     * @return Audiencias
     */
    public function setRazonvisita($razonvisita)
    {
        $this->razonvisita = $razonvisita;

        return $this;
    }

    /**
     * Get razonvisita
     *
     * @return string
     */
    public function getRazonvisita()
    {
        return $this->razonvisita;
    }

    /**
     * Set horaentrada
     *
     * @param \DateTime $horaentrada
     *
     * @return Audiencias
     */
    public function setHoraentrada($horaentrada)
    {
        $this->horaentrada = $horaentrada;

        return $this;
    }

    /**
     * Get horaentrada
     *
     * @return \DateTime
     */
    public function getHoraentrada()
    {
        return $this->horaentrada;
    }

    /**
     * Set horasalida
     *
     * @param \DateTime $horasalida
     *
     * @return Audiencias
     */
    public function setHorasalida($horasalida)
    {
        $this->horasalida = $horasalida;

        return $this;
    }

    /**
     * Get horasalida
     *
     * @return \DateTime
     */
    public function getHorasalida()
    {
        return $this->horasalida;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Audiencias
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaadic
     *
     * @param \DateTime $fechaadic
     *
     * @return Audiencias
     */
    public function setFechaadic($fechaadic)
    {
        $this->fechaadic = $fechaadic;

        return $this;
    }

    /**
     * Get fechaadic
     *
     * @return \DateTime
     */
    public function getFechaadic()
    {
        return $this->fechaadic;
    }

    /**
     * Set usuarioadic
     *
     * @param integer $usuarioadic
     *
     * @return Audiencias
     */
    public function setUsuarioadic($usuarioadic)
    {
        $this->usuarioadic = $usuarioadic;

        return $this;
    }

    /**
     * Get usuarioadic
     *
     * @return int
     */
    public function getUsuarioadic()
    {
        return $this->usuarioadic;
    }
}

