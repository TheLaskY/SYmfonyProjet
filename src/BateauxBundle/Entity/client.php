<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=30, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomClient", type="string", length=30, nullable=false)
     */
    private $prenomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="numTelClient", type="string", length=30, nullable=false)
     */
    private $numtelclient;

    /**
     * @var string
     *
     * @ORM\Column(name="ageClient", type="string", length=30, nullable=false)
     */
    private $ageclient;



    /**
     * Get idclient
     *
     * @return integer
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set nomclient
     *
     * @param string $nomclient
     *
     * @return client
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set prenomclient
     *
     * @param string $prenomclient
     *
     * @return client
     */
    public function setPrenomclient($prenomclient)
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    /**
     * Get prenomclient
     *
     * @return string
     */
    public function getPrenomclient()
    {
        return $this->prenomclient;
    }

    /**
     * Set numtelclient
     *
     * @param string $numtelclient
     *
     * @return client
     */
    public function setNumtelclient($numtelclient)
    {
        $this->numtelclient = $numtelclient;

        return $this;
    }

    /**
     * Get numtelclient
     *
     * @return string
     */
    public function getNumtelclient()
    {
        return $this->numtelclient;
    }

    /**
     * Set ageclient
     *
     * @param string $ageclient
     *
     * @return client
     */
    public function setAgeclient($ageclient)
    {
        $this->ageclient = $ageclient;

        return $this;
    }

    /**
     * Get ageclient
     *
     * @return string
     */
    public function getAgeclient()
    {
        return $this->ageclient;
    }

    public function __toString()
    {
        return (string) $this->nomclient;

    }
}
