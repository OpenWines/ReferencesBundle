<?php

namespace OpenWines\ReferencesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Appellation.
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Appellation extends ReferenceEntity
{
    /**
     * TODO: Add Vignoble (relation, Vignoble), Varietals (relations, ArrayCollection).
     */

    /**
     * @var string Appellation type
     *
     * @example 'IGP', 'AOC, 'AOP'
     */
    protected $appellation_type;

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
     * @var string Wine type
     *
     * @example "vin blanc mousseux"
     */
    protected $wine_sweetness;

    /**
     * @var string Wine color
     *
     * @example "blanc"
     */
    protected $wine_color;

    /**
     * @var ArrayCollection varietals (cépages)
     */
    protected $varietals;

    /**
     * @var string Description
     */
    protected $description;

    /**
     * @var string Official Organism, "Organisme de défense et de gestion", ODG name
     */
    protected $odg_name;

    /**
     * @var string Official Organism URL
     */
    protected $odg_url;

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
    protected $image_url;

    /** @var integer */
    protected $creation_year;

    public function __construct() {
        parent::__construct();
        $this->varietals = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getAppellationType()
    {
        return $this->appellation_type;
    }

    /**
     * @param string $appellation_type
     */
    public function setAppellationType($appellation_type)
    {
        $this->appellation_type = $appellation_type;
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
    public function getWineSweetness()
    {
        return $this->wine_sweetness;
    }

    /**
     * @param string $wine_sweetness
     */
    public function setWineSweetness($wine_sweetness)
    {
        $this->wine_sweetness = $wine_sweetness;
    }
    /**
     * @return string
     */
    public function getWineColor()
    {
        return $this->wine_color;
    }

    /**
     * @param string $wine_color
     */
    public function setWineColor($wine_color)
    {
        $this->wine_color = $wine_color;
    }

    /**
     * @return ArrayCollection
     */
    public function getVarietals()
    {
        return $this->varietals;
    }

    /**
     * @param ArrayCollection $varietals
     */
    public function setVarietals($varietals)
    {
        $this->varietals = $varietals;
        foreach($varietals as $varietal)
        {
            $this->addVarietal($varietal);
        }
    }

    public function addVarietal($varietal)
    {
        $this->varietals->add($varietal);
    }

    public function removeVarietal($Varietal)
    {
        return $this->varietals->removeElement($Varietal);
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
    public function getOdgName()
    {
        return $this->odg_name;
    }

    /**
     * @param string $odg_name
     */
    public function setOdgName($odg_name)
    {
        $this->odg_name = $odg_name;
    }

    /**
     * @return string
     */
    public function getOdgUrl()
    {
        return $this->odg_url;
    }

    /**
     * @param string $odg_url
     */
    public function setOdgUrl($odg_url)
    {
        $this->odg_url = $odg_url;
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
     * @return integer
     */
    public function getCreationYear()
    {
        return $this->creation_year;
    }

    /**
     * @param integer $creation_year
     */
    public function setCreationYear($creation_year)
    {
        $this->creation_year = $creation_year;
    }
}
