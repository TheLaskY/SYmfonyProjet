<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bateau
 *
 * @ORM\Table(name="bateau", indexes={@ORM\Index(name="BATEAU_LOCATION_FK", columns={"idLocation"})})
 * @ORM\Entity
 */
class bateau
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBateau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbateau;

    /**
     * @var string
     *
     * @ORM\Column(name="marqueBateau", type="string", length=30, nullable=false)
     */
    private $marquebateau;

    /**
     * @var string
     *
     * @ORM\Column(name="longueurCoqueBateau", type="string", length=30, nullable=false)
     */
    private $longueurcoquebateau;

    /**
     * @var string
     *
     * @ORM\Column(name="longueurFlottaisonBateau", type="string", length=30, nullable=false)
     */
    private $longueurflottaisonbateau;

    /**
     * @var string
     *
     * @ORM\Column(name="largeurMaxiBateau", type="string", length=30, nullable=false)
     */
    private $largeurmaxibateau;

    /**
     * @var string
     *
     * @ORM\Column(name="TirantAirBateau", type="string", length=30, nullable=false)
     */
    private $tirantairbateau;

    /**
     * @var string
     *
     * @ORM\Column(name="TirantEauMinBateau", type="string", length=30, nullable=false)
     */
    private $tiranteauminbateau;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeCoqueBateau", type="string", length=30, nullable=false)
     */
    private $typecoquebateau;

    /**
     * @var string
     *
     * @ORM\Column(name="AnneeBateau", type="string", length=4, nullable=false)
     */
    private $anneebateau;

    /**
     * @var string
     *
     * @ORM\Column(name="DeplacementLegeBateau", type="string", length=30, nullable=false)
     */
    private $deplacementlegebateau;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocation", referencedColumnName="idLocation")
     * })
     */
    private $idlocation;



    /**
     * Get idbateau
     *
     * @return integer
     */
    public function getIdbateau()
    {
        return $this->idbateau;
    }

    /**
     * Set marquebateau
     *
     * @param string $marquebateau
     *
     * @return bateau
     */
    public function setMarquebateau($marquebateau)
    {
        $this->marquebateau = $marquebateau;

        return $this;
    }

    /**
     * Get marquebateau
     *
     * @return string
     */
    public function getMarquebateau()
    {
        return $this->marquebateau;
    }

    /**
     * Set longueurcoquebateau
     *
     * @param string $longueurcoquebateau
     *
     * @return bateau
     */
    public function setLongueurcoquebateau($longueurcoquebateau)
    {
        $this->longueurcoquebateau = $longueurcoquebateau;

        return $this;
    }

    /**
     * Get longueurcoquebateau
     *
     * @return string
     */
    public function getLongueurcoquebateau()
    {
        return $this->longueurcoquebateau;
    }

    /**
     * Set longueurflottaisonbateau
     *
     * @param string $longueurflottaisonbateau
     *
     * @return bateau
     */
    public function setLongueurflottaisonbateau($longueurflottaisonbateau)
    {
        $this->longueurflottaisonbateau = $longueurflottaisonbateau;

        return $this;
    }

    /**
     * Get longueurflottaisonbateau
     *
     * @return string
     */
    public function getLongueurflottaisonbateau()
    {
        return $this->longueurflottaisonbateau;
    }

    /**
     * Set largeurmaxibateau
     *
     * @param string $largeurmaxibateau
     *
     * @return bateau
     */
    public function setLargeurmaxibateau($largeurmaxibateau)
    {
        $this->largeurmaxibateau = $largeurmaxibateau;

        return $this;
    }

    /**
     * Get largeurmaxibateau
     *
     * @return string
     */
    public function getLargeurmaxibateau()
    {
        return $this->largeurmaxibateau;
    }

    /**
     * Set tirantairbateau
     *
     * @param string $tirantairbateau
     *
     * @return bateau
     */
    public function setTirantairbateau($tirantairbateau)
    {
        $this->tirantairbateau = $tirantairbateau;

        return $this;
    }

    /**
     * Get tirantairbateau
     *
     * @return string
     */
    public function getTirantairbateau()
    {
        return $this->tirantairbateau;
    }

    /**
     * Set tiranteauminbateau
     *
     * @param string $tiranteauminbateau
     *
     * @return bateau
     */
    public function setTiranteauminbateau($tiranteauminbateau)
    {
        $this->tiranteauminbateau = $tiranteauminbateau;

        return $this;
    }

    /**
     * Get tiranteauminbateau
     *
     * @return string
     */
    public function getTiranteauminbateau()
    {
        return $this->tiranteauminbateau;
    }

    /**
     * Set typecoquebateau
     *
     * @param string $typecoquebateau
     *
     * @return bateau
     */
    public function setTypecoquebateau($typecoquebateau)
    {
        $this->typecoquebateau = $typecoquebateau;

        return $this;
    }

    /**
     * Get typecoquebateau
     *
     * @return string
     */
    public function getTypecoquebateau()
    {
        return $this->typecoquebateau;
    }

    /**
     * Set anneebateau
     *
     * @param string $anneebateau
     *
     * @return bateau
     */
    public function setAnneebateau($anneebateau)
    {
        $this->anneebateau = $anneebateau;

        return $this;
    }

    /**
     * Get anneebateau
     *
     * @return string
     */
    public function getAnneebateau()
    {
        return $this->anneebateau;
    }

    /**
     * Set deplacementlegebateau
     *
     * @param string $deplacementlegebateau
     *
     * @return bateau
     */
    public function setDeplacementlegebateau($deplacementlegebateau)
    {
        $this->deplacementlegebateau = $deplacementlegebateau;

        return $this;
    }

    /**
     * Get deplacementlegebateau
     *
     * @return string
     */
    public function getDeplacementlegebateau()
    {
        return $this->deplacementlegebateau;
    }

    /**
     * Set idlocation
     *
     * @param \BateauxBundle\Entity\location $idlocation
     *
     * @return bateau
     */
    public function setIdlocation(\BateauxBundle\Entity\location $idlocation = null)
    {
        $this->idlocation = $idlocation;

        return $this;
    }

    /**
     * Get idlocation
     *
     * @return \Location
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }
}
