<?php

namespace BateauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bateau
 *
 * @ORM\Table(name="bateau")
 * @ORM\Entity(repositoryClass="BateauxBundle\Repository\bateauRepository")
 */
class bateau
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
     * @ORM\Column(name="idBateau", type="integer")
     */
    private $idBateau;

    /**
     * @var string
     *
     * @ORM\Column(name="marqueBateau", type="string", length=45)
     */
    private $marqueBateau;

    /**
     * @var int
     *
     * @ORM\Column(name="longueurCoqueBateau", type="integer", nullable=true)
     */
    private $longueurCoqueBateau;

    /**
     * @var string
     *
     * @ORM\Column(name="longueurFlottaisonBateau", type="string", length=45)
     */
    private $longueurFlottaisonBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="LargeurMaxiBateau", type="string", length=45)
     */
    private $LargeurMaxiBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="TirantAirBateau", type="string", length=45)
     */
    private $TirantAirBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="TirantEauMinBateau", type="string", length=45)
     */
    private $TirantEauMinBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="TirantEauMaxBateau", type="string", length=45,nullable=true)
     */
    private $TirantEauMaxBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="TypeCoqueBateau", type="string", length=45)
     */
    private $TypeCoqueBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="AnneeBateau", type="string", length=45)
     */
    private $AnneeBateau;
    /**
     * @var string
     *
     * @ORM\Column(name="DeplacementLegeBateau", type="string", length=45)
     */
    private $DeplacementLegeBateau;


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
     * Set idBateau
     *
     * @param integer $idBateau
     *
     * @return bateau
     */
    public function setIdBateau($idBateau)
    {
        $this->idBateau = $idBateau;

        return $this;
    }

    /**
     * Get idBateau
     *
     * @return int
     */
    public function getIdBateau()
    {
        return $this->idBateau;
    }

    /**
     * Set marqueBateau
     *
     * @param string $marqueBateau
     *
     * @return bateau
     */
    public function setMarqueBateau($marqueBateau)
    {
        $this->marqueBateau = $marqueBateau;

        return $this;
    }

    /**
     * Get marqueBateau
     *
     * @return string
     */
    public function getMarqueBateau()
    {
        return $this->marqueBateau;
    }

    /**
     * Set longueurCoqueBateau
     *
     * @param integer $longueurCoqueBateau
     *
     * @return bateau
     */
    public function setLongueurCoqueBateau($longueurCoqueBateau)
    {
        $this->longueurCoqueBateau = $longueurCoqueBateau;

        return $this;
    }

    /**
     * Get longueurCoqueBateau
     *
     * @return int
     */
    public function getLongueurCoqueBateau()
    {
        return $this->longueurCoqueBateau;
    }

    /**
     * Set longueurFlottaisonBateau
     *
     * @param string $longueurFlottaisonBateau
     *
     * @return bateau
     */
    public function setLongueurFlottaisonBateau($longueurFlottaisonBateau)
    {
        $this->longueurFlottaisonBateau = $longueurFlottaisonBateau;

        return $this;
    }

    /**
     * Get longueurFlottaisonBateau
     *
     * @return string
     */
    public function getLongueurFlottaisonBateau()
    {
        return $this->longueurFlottaisonBateau;
    }

    //Ca commence ici

    /**
     * Get  LargeurMaxiBateau
     *
     * @return string
     */
    public function getLargeurMaxiBateau()
    {
        return $this->LargeurMaxiBateau;
    }
    /**
     * Set LargeurMaxiBateau
     *
     * @param string $LargeurMaxiBateau
     *
     * @return bateau
     */
    public function setLargeurMaxiBateau($LargeurMaxiBateau)
    {
        $this->LargeurMaxiBateau = $LargeurMaxiBateau;

        return $this;
    }


    /**
     * Get TirantAirBateau
     *
     * @return string
     */
    public function getTirantAirBateau()
    {
        return $this->TirantAirBateau;
    }

    /**
     * Set TirantAirBateau
     *
     * @param string $TirantAirBateau
     *
     * @return bateau
     */
    public function setTirantAirBateau($TirantAirBateau)
    {
        $this->TirantAirBateau = $TirantAirBateau;

        return $this;
    }

    /**
     * Get TirantEauMinBateau
     *
     * @return string
     */
    public function getTirantEauMinBateau()
    {
        return $this->TirantEauMinBateau;
    }

    /**
     * Set TirantEauMinBateau
     *
     * @param string $TirantEauMinBateau
     *
     * @return bateau
     */
    public function TirantEauMinBateau($TirantEauMinBateau)
    {
        $this->TirantEauMinBateau = $TirantEauMinBateau;

        return $this;
    }

    /**
     * Get TirantEauMaxBateau
     *
     * @return string
     */
    public function getTirantEauMaxBateau()
    {
        return $this->TirantEauMaxBateau;
    }

    /**
     * Set TirantEauMaxBateau
     *
     * @param string $TirantEauMaxBateau
     *
     * @return bateau
     */
    public function setTirantEauMaxBateau($TirantEauMaxBateau)
    {
        $this->TirantEauMaxBateau = $TirantEauMaxBateau;

        return $this;
    }

    /**
     * Get TypeCoqueBateau
     *
     * @return string
     */
    public function getTypeCoqueBateau()
    {
        return $this->TypeCoqueBateau;
    }

    /**
     * Set TypeCoqueBateau
     *
     * @param string $TypeCoqueBateau
     *
     * @return bateau
     */
    public function setTypeCoqueBateau($TypeCoqueBateau)
    {
        $this->TypeCoqueBateau = $TypeCoqueBateau;

        return $this;
    }

    /**
     * Get AnneeBateau
     *
     * @return string
     */
    public function getAnneeBateau()
    {
        return $this->AnneeBateau;
    }

    /**
     * Set AnneeBateau
     *
     * @param string $AnneeBateau
     *
     * @return bateau
     */
    public function setAnneeBateau($AnneeBateau)
    {
        $this->AnneeBateau = $AnneeBateau;

        return $this;
    }

    /**
     * Get DeplacementLegeBateau
     *
     * @return string
     */
    public function getDeplacementLegeBateau()
    {
        return $this->DeplacementLegeBateau;
    }

    /**
     * Set DeplacementLegeBateau
     *
     * @param string $DeplacementLegeBateau
     *
     * @return bateau
     */
    public function setDeplacementLegeBateau($DeplacementLegeBateau)
    {
        $this->DeplacementLegeBateau = $DeplacementLegeBateau;

        return $this;
    }
}