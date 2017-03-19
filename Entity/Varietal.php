<?php

namespace OpenWines\ReferencesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

class Varietal extends ReferenceEntity
{
    /**
     * @var string
     * @example "Noiriens" (http://fr.wikipedia.org/wiki/Family_des_Noiriens)
     */
    private $family;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $area;

    /**
     * @var string Wikipedia URL
     */
    private $wikipedia_url;

    /**
     * @var string Wikidata URL
     */
    private $wikidata_url;

    /**
     * @var string image URL
     */
    private $image_url;

    /**
     * @var ArrayCollection $appellations
     */
    private $appellations;

    public function __construct() {
        parent::__construct();
        $this->appellations = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Set family
     *
     * @param  string $family
     * @return $this
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param int $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getWikipediaUrl()
    {
        return $this->wikipedia_url;
    }

    /**
     * @param string $wikipedia_url
     */
    public function setWikipediaUrl($wikipedia_url)
    {
        $this->wikipedia_url = $wikipedia_url;
    }

    /**
     * @return string
     */
    public function getWikidataUrl()
    {
        return $this->wikidata_url;
    }

    /**
     * @param string $wikidata_url
     */
    public function setWikidataUrl($wikidata_url)
    {
        $this->wikidata_url = $wikidata_url;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
    }

    /**
     * @return ArrayCollection
     */
    public function getAppellations()
    {
        return $this->appellations;
    }

    /**
     * @param ArrayCollection $appellations
     */
    public function setAppellations($appellations)
    {
        $this->appellations = $appellations;
    }
}
