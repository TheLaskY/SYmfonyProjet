<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="BateauxBundle\Repository\locationRepository")
 */
class location
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
     * @ORM\Column(name="idLocation", type="integer")
     */
    private $idLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixJourLocation", type="decimal", precision=20, scale=0)
     */
    private $prixJourLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="DureeLocation", type="decimal", precision=20, scale=0)
     */
    private $dureeLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="Bateau_idBateau", type="integer")
     */
    private $bateauIdBateau;

    /**
     * @var int
     *
     * @ORM\Column(name="Client_idClient", type="integer")
     */
    private $clientIdClient;


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
     * Set idLocation
     *
     * @param integer $idLocation
     *
     * @return location
     */
    public function setIdLocation($idLocation)
    {
        $this->idLocation = $idLocation;

        return $this;
    }

    /**
     * Get idLocation
     *
     * @return int
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * Set prixJourLocation
     *
     * @param string $prixJourLocation
     *
     * @return location
     */
    public function setPrixJourLocation($prixJourLocation)
    {
        $this->prixJourLocation = $prixJourLocation;

        return $this;
    }

    /**
     * Get prixJourLocation
     *
     * @return string
     */
    public function getPrixJourLocation()
    {
        return $this->prixJourLocation;
    }

    /**
     * Set dureeLocation
     *
     * @param string $dureeLocation
     *
     * @return location
     */
    public function setDureeLocation($dureeLocation)
    {
        $this->dureeLocation = $dureeLocation;

        return $this;
    }

    /**
     * Get dureeLocation
     *
     * @return string
     */
    public function getDureeLocation()
    {
        return $this->dureeLocation;
    }

    /**
     * Set bateauIdBateau
     *
     * @param integer $bateauIdBateau
     *
     * @return location
     */
    public function setBateauIdBateau($bateauIdBateau)
    {
        $this->bateauIdBateau = $bateauIdBateau;

        return $this;
    }

    /**
     * Get bateauIdBateau
     *
     * @return int
     */
    public function getBateauIdBateau()
    {
        return $this->bateauIdBateau;
    }

    /**
     * Set clientIdClient
     *
     * @param integer $clientIdClient
     *
     * @return location
     */
    public function setClientIdClient($clientIdClient)
    {
        $this->clientIdClient = $clientIdClient;

        return $this;
    }

    /**
     * Get clientIdClient
     *
     * @return int
     */
    public function getClientIdClient()
    {
        return $this->clientIdClient;
    }
}

