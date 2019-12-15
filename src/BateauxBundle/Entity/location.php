<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="LOCATION_CLIENT_FK", columns={"idClient"})})
 * @ORM\Entity
 */
class location
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLocation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrixJourLocation", type="integer", nullable=false)
     */
    private $prixjourlocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeLocation", type="integer", nullable=false)
     */
    private $dureelocation;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;



    /**
     * Get idlocation
     *
     * @return integer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }

    /**
     * Set prixjourlocation
     *
     * @param integer $prixjourlocation
     *
     * @return location
     */
    public function setPrixjourlocation($prixjourlocation)
    {
        $this->prixjourlocation = $prixjourlocation;

        return $this;
    }

    /**
     * Get prixjourlocation
     *
     * @return integer
     */
    public function getPrixjourlocation()
    {
        return $this->prixjourlocation;
    }

    /**
     * Set dureelocation
     *
     * @param integer $dureelocation
     *
     * @return location
     */
    public function setDureelocation($dureelocation)
    {
        $this->dureelocation = $dureelocation;

        return $this;
    }

    /**
     * Get dureelocation
     *
     * @return integer
     */
    public function getDureelocation()
    {
        return $this->dureelocation;
    }

    /**
     * Set idclient
     *
     * @param \BateauxBundle\Entity\client $idclient
     *
     * @return location
     */
    public function setIdclient(\BateauxBundle\Entity\client $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \BateauxBundle\Entity\client
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    public function __toString()
    {
        return (string) $this->idlocation;

    }
}
