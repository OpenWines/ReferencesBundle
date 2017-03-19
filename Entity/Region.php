<?php

namespace OpenWines\ReferencesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Region.
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Region extends ReferenceEntity
{

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $departments;

    /**
     * @var ArrayCollection
     */
    protected $sub_regions;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $climate;

    /**
     * @var ArrayCollection wines
     */
    protected $wines;

    /**
     * @var ArrayCollection varietals (cépages)
     */
    protected $main_grape_varieties;

    /**
     * @var int Area, Hectares of production total surface
     *          ex: 7000 (hectares)
     */
    protected $area;

    /**
     * @var int Hectoliter annual production
     *
     * @example 317500 (hectolites)
     */
    protected $annual_production_quantity;

    /**
     * @var string Appellation soil type
     *
     * @example "argilo-calcaire, granitique"
     */
    protected $soil;

    /**
     * @var string Wikipedia URL
     */
    protected $wikipedia_url;

    /**
     * @var string Wikidata URL
     */
    protected $wikidata_url;

    /**
     * @var string image URL
     */
    private $image_url;

    /**
     * @return string
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * Set departments.
     *
     * @param string $departments
     *
     * @return Region
     */
    public function setDepartments($departments)
    {
        if (is_array($departments)) {
            $departments = implode('|', $departments);
        }

        $this->departments = $departments;

        return $this;
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
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return ArrayCollection
     */
    public function getSubRegions()
    {
        return $this->sub_regions;
    }

    /**
     * @param ArrayCollection $sub_regions
     */
    public function setSubRegions($sub_regions)
    {
        $this->sub_regions = $sub_regions;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getClimate()
    {
        return $this->climate;
    }

    /**
     * @param string $climate
     */
    public function setClimate($climate)
    {
        $this->climate = $climate;
    }

    /**
     * @return ArrayCollection
     */
    public function getWines()
    {
        return $this->wines;
    }

    /**
     * @param ArrayCollection $wines
     */
    public function setWines($wines)
    {
        $this->wines = $wines;
    }

    /**
     * @return ArrayCollection
     */
    public function getMainGrapeVarieties()
    {
        return $this->main_grape_varieties;
    }

    /**
     * @param ArrayCollection $main_grape_varieties
     */
    public function setMainGrapeVarieties($main_grape_varieties)
    {
        $this->main_grape_varieties = $main_grape_varieties;
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
     * @return int
     */
    public function getAnnualProductionQuantity()
    {
        return $this->annual_production_quantity;
    }

    /**
     * @param int $annual_production_quantity
     */
    public function setAnnualProductionQuantity($annual_production_quantity)
    {
        $this->annual_production_quantity = $annual_production_quantity;
    }

    /**
     * @return string
     */
    public function getSoil()
    {
        return $this->soil;
    }

    /**
     * @param string $soil
     */
    public function setSoil($soil)
    {
        $this->soil = $soil;
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
}
