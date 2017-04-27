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
    protected $type;

    /**
     * @var int Appellation creation year
     *
     * @example 1936
     */
    protected $year;

    /**
     * @var ArrayCollection Appellation departments codes list
     *
     * @example [44, 49, 85]
     */
    protected $departments;

    /**
     * @var int Sun exposure yearly hours
     *
     * @example 1804
     */
    protected $sun_exposure_yearly_hours;

    /**
     * @var string
     */
    protected $climate;

    /**
     * @var int Area, Hectares of production total surface
     *          ex: 7000 (hectares)
     */
    protected $area;

    /**
     * @var int Number of winegrowers
     *          ex: 15
     */
    protected $winegrowers_count;

    /**
     * @var int Hectoliter annual production
     *
     * @example 317500 (hectoliters)
     */
    protected $annual_production_quantity;

    /**
     * @var ArrayCollection Appellation soil type
     *
     * @example "argilo-calcaire, granitique"
     */
    protected $soil;

    /**
     * @var int production density area (plants / hectar)
     *
     * @example 4000
     */
    protected $density;

    /**
     * @var int yield per hectare min (hectoliters, default)
     *
     * @example 35
     */
    protected $yield_per_hectare_min;

    /**
     * @var int yield per hectare max (hectoliters)
     *
     * @example 40
     */
    protected $yield_per_hectare_max;

    /**
     * @var ArrayCollection Appellation departments codes list
     * Read-only from end -user POV, this gathers info from wine_sweetness, wine_color, etc.
     * to make it simpler to find wines by types
     *
     * @example ['rouge', 'rosé', 'blanc', 'moelleux', 'liquoreux']
     */
    protected $wine_types;

    /**
     * @var ArrayCollection Wine type
     *
     * @example "moelleux"
     */
    protected $wine_sweetness;

    /**
     * @var ArrayCollection Wine color
     *
     * @example "blanc"
     */
    protected $wine_color;

    /**
     * @var ArrayCollection Wine sparklingness
     *
     * @example "mousseux"
     */
    protected $wine_sparklingness;

    /**
     * @var string appellation's wines eye
     */
    protected $eye;

    /**
     * @var string appellation's wines nose
     */
     protected $nose;

    /**
     * @var string appellation's wines mouth
     */
    protected $mouth;

    /**
     * @var ArrayCollection varietals (cépages)
     */
    protected $varietals;

    /**
     * @var Region region code
     */
    protected $region;

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

    public function __construct() {
        parent::__construct();
        $this->departments = new ArrayCollection();
        $this->soil = new ArrayCollection();
        $this->wine_types = new ArrayCollection();
        $this->wine_sweetness = new ArrayCollection();
        $this->wine_color = new ArrayCollection();
        $this->wine_sparklingness = new ArrayCollection();
        $this->varietals = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getWineColor()
    {
        return join(', ',$this->wine_color);
    }

    /**
     * @param ArrayCollection $colors
     */
    public function setWineColor($colors)
    {
        $this->wine_color = $colors;
        foreach($colors as $color)
        {
            $this->addColor($color);
        }
    }

    public function addColor($color)
    {
        $this->wine_color->add($color);
    }

    public function removeColor($color)
    {
        return $this->wine_color->removeElement($color);
    }

    /**
     * @return string
     */
    public function getWineSparklingness()
    {
        return join(', ',$this->wine_sparklingness);
    }

    /**
     * @param ArrayCollection $sparklingnesss
     */
    public function setWineSparklingness($sparklingnesss)
    {
        $this->wine_sparklingness = $sparklingnesss;
        foreach($sparklingnesss as $sparklingness)
        {
            $this->addSparklingness($sparklingness);
        }
    }

    public function addSparklingness($sparklingness)
    {
        $this->wine_sparklingness->add($sparklingness);
    }

    public function removeSparklingness($sparklingness)
    {
        return $this->wine_sparklingness->removeElement($sparklingness);
    }

    /**
     * @return string
     */
    public function getWineSweetness()
    {
        return join(', ',$this->wine_sweetness);
    }

    /**
     * @param ArrayCollection $sweetnesss
     */
    public function setWineSweetness($sweetnesss)
    {
        $this->wine_sweetness = $sweetnesss;
        foreach($sweetnesss as $sweetness)
        {
            $this->addSweetness($sweetness);
        }
    }

    public function addSweetness($sweetness)
    {
        $this->wine_sweetness->add($sweetness);
    }

    public function removeSweetness($sweetness)
    {
        return $this->wine_sweetness->removeElement($sweetness);
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
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return ArrayCollection
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * @param ArrayCollection $departments
     */
    public function setDepartments($departments)
    {
        $this->departments = $departments;
    }

    /**
     * @return int
     */
    public function getSunExposureYearlyHours()
    {
        return $this->sun_exposure_yearly_hours;
    }

    /**
     * @param int $sun_exposure_yearly_hours
     */
    public function setSunExposureYearlyHours($sun_exposure_yearly_hours)
    {
        $this->sun_exposure_yearly_hours = $sun_exposure_yearly_hours;
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
    public function getWinegrowersCount()
    {
        return $this->winegrowers_count;
    }

    /**
     * @param int $winegrowers_count
     */
    public function setWinegrowersCount($winegrowers_count)
    {
        $this->winegrowers_count = $winegrowers_count;
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
     * @return ArrayCollection
     */
    public function getSoil()
    {
        return join(', ',$this->soil);
    }

    /**
     * @param ArrayCollection $soil
     */
    public function setSoil($soil)
    {
        $soils = explode(',', $soil);
        $soils = array_map(function($item) { return trim($item); }, $soils);
        $this->soil = $soils;
    }

    /**
     * @return int
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * @param int $density
     */
    public function setDensity($density)
    {
        $this->density = $density;
    }

    /**
     * @return int
     */
    public function getYieldPerHectareMin()
    {
        return $this->yield_per_hectare_min;
    }

    /**
     * @param int $yield_per_hectare_min
     */
    public function setYieldPerHectareMin($yield_per_hectare_min)
    {
        $this->yield_per_hectare_min = $yield_per_hectare_min;
    }

    /**
     * @return int
     */
    public function getYieldPerHectareMax()
    {
        return $this->yield_per_hectare_max;
    }

    /**
     * @param int $yield_per_hectare_max
     */
    public function setYieldPerHectareMax($yield_per_hectare_max)
    {
        $this->yield_per_hectare_max = $yield_per_hectare_max;
    }

    /**
     * @return ArrayCollection
     */
    public function getWineTypes()
    {
        return $this->wine_types;
    }

    /**
     * @param ArrayCollection $wine_types
     */
    public function setWineTypes($wine_types)
    {
        $this->wine_types = $wine_types;
    }

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
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
     * @return string
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * @param string $eye
     */
    public function setEye($eye)
    {
        $this->eye = $eye;
    }

    /**
     * @return string
     */
    public function getNose()
    {
        return $this->nose;
    }

    /**
     * @param string $nose
     */
    public function setNose($nose)
    {
        $this->nose = $nose;
    }

    /**
     * @return string
     */
    public function getMouth()
    {
        return $this->mouth;
    }

    /**
     * @param string $mouth
     */
    public function setMouth($mouth)
    {
        $this->mouth = $mouth;
    }
}
