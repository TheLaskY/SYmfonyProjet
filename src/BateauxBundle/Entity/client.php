<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="BateauxBundle\Repository\clientRepository")
 */
class client
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
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=45)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomClient", type="string", length=45)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="numTelClient", type="string", length=45)
     */
    private $numTelClient;

    /**
     * @var string
     *
     * @ORM\Column(name="ageClient", type="string", length=45)
     */
    private $ageClient;


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
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return client
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set numTelClient
     *
     * @param string $numTelClient
     *
     * @return client
     */
    public function setNumTelClient($numTelClient)
    {
        $this->numTelClient = $numTelClient;

        return $this;
    }

    /**
     * Get numTelClient
     *
     * @return string
     */
    public function getNumTelClient()
    {
        return $this->numTelClient;
    }

    /**
     * Set ageClient
     *
     * @param string $ageClient
     *
     * @return client
     */
    public function setAgeClient($ageClient)
    {
        $this->ageClient = $ageClient;

        return $this;
    }

    /**
     * Get ageClient
     *
     * @return string
     */
    public function getAgeClient()
    {
        return $this->ageClient;
    }
}

